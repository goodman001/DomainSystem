<?php
namespace Admin\Controller;
use Think\Controller;
class TransactionController extends CommonController {
	/*trans list*/
	public function translist()
	{
		$search =I('post.search');
        $Model = M('transaction');
        if(!empty($search))
        {
            $condition['transactionID'] = array('like','%'.$search.'%');
            $condition['clientname'] = array('like','%'.$search.'%');
            $condition['orderID'] = array('like','%'.$search.'%');
            $condition['paymethod'] = array('like','%'.$search.'%');
			$condition['accountnumber'] = array('like','%'.$search.'%');
            $condition['_logic'] = 'OR';
            $list = $Model->where($condition)->order('paydate desc')->page(I('get.p').',42')->select();
		    $count = $Model->where($condition)->count();// get count of records
        }else
        {
            $list = $Model->where("id>=0")->order('paydate desc')->page(I('get.p').',42')->select();
		    $count = $Model->where("id>=0")->count();// get count of records
        }
        
		
		//print_r($list);
		/**
		* pages
		**/
		
		$Page = new \Think\Page($count,42);// page object
		$Page->setConfig('prev','prev');
		$Page->setConfig('next','next');
		$Page->setConfig('first','first page');
		$Page->setConfig('last','last page');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
		$show = $Page->show();// page output
		$this->assign('page',$show);// 
		$this->assign('list',$list);
        $this->display(T('mgr/transactions_list'));
		
	}
	public function transdetail()
	{
		$transid = I('get.transid');
		$data['transactionID'] = $transid;
		/*transaction*/
		$Model = M('transaction');
		$trans = $Model->where($transid)->find();
		$this->assign('trans',$trans);// 
		$this->assign('transid',$transid);// 
		/*get payment method*/
		$Model = M('paymethod');
		$condition['useable'] = 'Y';
		$ct = $Model->field('method')->where($condition)->select();
		$this->assign('payments',$ct);
		
		
		$this->display(T('mgr/trans_detail'));
		//print_r($trans);
	}
	public function transupdate()
	{
		$transid = I('post.transactionID');
		$where['transactionID'] = $transid;
		$data['clientname'] = I('post.clientname');
		$data['accountnumber'] = I('post.accountnumber');
		$data['invoiceID'] = I('post.invoiceID');
		$data['paymethod'] = I('post.paymethod');
		$data['settleamount'] = I('post.settleamount');
		$data['description'] = I('post.description');
		$M3 = M('transaction');
		$M3->where($where)->save($data);
		$this->success('Update the transaction successfully!',U('Order/orderdetail?orderid='.$orderid.''),1);
		
		
	}
	public function transdel()
	{
		$transid = I('get.transid');
		$data['transactionID'] = $transid;
		/*transaction*/
		$Model = M('transaction');
		$trans = $Model->where($transid)->find();
		/*del order*/
		
		
		
		$this->assign('trans',$trans);// 
		$this->assign('transid',$transid);// 
		$this->display(T('mgr/trans_detail'));
		//print_r($trans);
	}
	/*customer*/
	public function customerorderdetail()
	{
		/*
		* orderflag = 1:jump from Customer
		*/
		$cusid = I('get.cusid');
		
		$data['id'] = I('get.id');
        $Model = M('order');
		$order = $Model->where($data)->find();
		$this->assign('order',$order);//
		/*transaction*/
		$Model = M('transaction');
		$ct0['orderID'] = $order['orderID'];
		$trans = $Model->where($ct0)->find();
		//print_r($trans);
		$this->assign('trans',$trans);//
		/*items*/
		$Model = M('item');
		$ct1['orderID'] = $order['orderID'];
		$items = $Model->where($ct1)->select();
		$this->assign('items',$items);//
		
		
		
		$this->assign('cusid',$cusid);//
		$this->display(T('mgr/customer_orders_detail'));
		//print_r($content);
	}
	public function customerdelitem()
	{
		$cusid = I('get.cusid');
		$itemid = I('get.itemid');
		$orderid = I('get.orderid');
		$oid = I('get.oid');
		$ct0['orderID'] = $orderid;
		$Model =  M('item');
		$itemCount = $Model->where($ct0)->count();
		
		
		$ct00['id'] = $itemid;
		$ct00['orderID'] = $orderid;
		$items = $Model->where($ct00)->find();
		$Model->where($ct00)->delete();//del item
		$Mdomain = M('domainmgr');
		$ctd['domainname'] = $items['domainname'];
		$Mdomain->where($ctd)->delete();//del domain
		if($itemCount == 1)
		{
			
			$ct1['orderID'] = $orderid;
			$M2 = M('order');
			$M2->where($ct1)->delete();
			$M3 = M('transaction');
			$M3->where($ct1)->delete();
			$this->success('Delete the only item successfully!Order is empty',U('Customer/customerdetail?id='.$cusid.''),1);
		}else
		{
			$this->success('Delete item successfully!',U('Order/customerorderdetail?id='.$oid.'&cusid='.$cusid.''),1);
		}
		
	}
	public function customerdelorder()
	{
		$cusid = I('get.cusid');
		$orderid = I('get.orderid');
		
		/*del item*/
		$Model =  M('item');
		$ct00['orderID'] = $orderid;
		$items = $Model->where($ct00)->select();
		$Model->where($ct00)->delete();//del item
		
		/*del domain*/
		foreach($items as &$val)
		{
			$ctd['domainname'] = $val['domainname'];
			$Mdomain = M('domainmgr');
			$Mdomain->where($ctd)->delete();//del domain
		}
		/*del transaction order*/
		$ct1['orderID'] = $orderid;
		$M2 = M('order');
		$M2->where($ct1)->delete();
		$M3 = M('transaction');
		$M3->where($ct1)->delete();
		$this->success('Delete the order successfully!',U('Customer/customerdetail?id='.$cusid.''),1);
	}
	public function orderlist()
	{
		$search =I('post.search');
        $Model = M('order');
        if(!empty($search))
        {
            $condition['orderID'] = array('like','%'.$search.'%');
            $condition['username'] = array('like','%'.$search.'%');
            $condition['transactionID'] = array('like','%'.$search.'%');
            $condition['status'] = array('like','%'.$search.'%');
            $condition['_logic'] = 'OR';
            $list = $Model->where($condition)->order('issuedate desc')->page(I('get.p').',42')->select();
		    $count = $Model->where($condition)->count();// get count of records
        }else
        {
            $list = $Model->where("id>=0")->order('issuedate desc')->page(I('get.p').',42')->select();
		    $count = $Model->where("id>=0")->count();// get count of records
        }
        
		
		//print_r($list);
		/**
		* pages
		**/
		
		$Page = new \Think\Page($count,42);// page object
		$Page->setConfig('prev','prev');
		$Page->setConfig('next','next');
		$Page->setConfig('first','first page');
		$Page->setConfig('last','last page');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
		$show = $Page->show();// page output
		$this->assign('page',$show);// 
		$this->assign('list',$list);
        $this->display(T('mgr/orders_list'));
	}
	public function orderdetail()
	{
		$data['orderID'] = I('get.orderid');
        $Model = M('order');
		$content = $Model->where($data)->find();
		if(!empty($content))//exist email
		{
			$this->assign('order',$content);//
			/*transaction*/
			$Model = M('transaction');
			$ct0['orderID'] = $data['orderID'];
			$trans = $Model->where($ct0)->find();
			//print_r($trans);
			$this->assign('trans',$trans);//
			/*items*/
			$Model = M('item');
			$ct1['orderID'] = $data['orderID'];
			$items = $Model->where($ct1)->select();
			$this->assign('items',$items);//
			$this->display(T('mgr/orders_detail'));
            
			
		}else
        {
            R('Order/orderlist');
        }
		
	}
	public function orderdel()
	{
		$orderid = I('get.orderid');
		
		/*del item*/
		$Model =  M('item');
		$ct00['orderID'] = $orderid;
		$items = $Model->where($ct00)->select();
		$Model->where($ct00)->delete();//del item
		
		/*del domain*/
		foreach($items as &$val)
		{
			$ctd['domainname'] = $val['domainname'];
			$Mdomain = M('domainmgr');
			$Mdomain->where($ctd)->delete();//del domain
		}
		/*del transaction order*/
		$ct1['orderID'] = $orderid;
		$M2 = M('order');
		$M2->where($ct1)->delete();
		$M3 = M('transaction');
		$M3->where($ct1)->delete();
		$this->success('Delete the order successfully!',U('Order/orderlist'),1);
	}
	public function delitem()
	{
		$itemid = I('get.itemid');
		$orderid = I('get.orderid');
		$ct0['orderID'] = $orderid;
		$Model =  M('item');
		$itemCount = $Model->where($ct0)->count();
		
		
		$ct00['id'] = $itemid;
		$ct00['orderID'] = $orderid;
		$items = $Model->where($ct00)->find();
		$Model->where($ct00)->delete();//del item
		$Mdomain = M('domainmgr');
		$ctd['domainname'] = $items['domainname'];
		$Mdomain->where($ctd)->delete();//del domain
		if($itemCount == 1)
		{		
			$ct1['orderID'] = $orderid;
			$M2 = M('order');
			$M2->where($ct1)->delete();
			$M3 = M('transaction');
			$M3->where($ct1)->delete();
			$this->success('Delete the only item successfully!Order is empty',U('Order/orderlist'),1);
		}else
		{
			$this->success('Delete item successfully!',U('Order/orderdetail?orderid='.$orderid.''),1);
		}
	}
	public function orderaccept()
	{
		$orderid = I('get.orderid');
		$data['orderID'] = $orderid;
		$Model =  M('order');
		$content = $Model->where($data)->find();
		$nowtime = date('Y-m-d H:i:s',time());
		if(!empty($content))
		{
			/*update order due time*/
			$Model-> where($data)->setField('status','active');
			$Model-> where($data)->setField('duedate',$nowtime);
			/*update domain*/	
			$Model =  M('item');
			$items = $Model->where($data)->select();
			foreach($items as &$val)
			{
				$ctd['domainname'] = $val['domainname'];
				$Mdomain = M('domainmgr');
				$Mdomain->where($ctd)->setField('status','active');//active domain
				$Mdomain->where($ctd)->setField('registrationdate',$nowtime);//registartiton date
				$Mdomain->where($ctd)->setField('expirydate',date('Y-m-d H:i:s', strtotime('+'.$val['years'].' year', strtotime($nowtime))));//expirydate
				$Mdomain->where($ctd)->setField('nextduedate',date('Y-m-d H:i:s', strtotime('+'.$val['years'].' year', strtotime($content['issuedate']))));//issuedate
			}
			$this->success('Accept the order successfully!',U('Order/orderdetail?orderid='.$orderid.''),1);
		}
		
	}
	public function orderrefund()
	{
		$orderid = I('get.orderid');
		$data['orderID'] = $orderid;
		$Mtrans =  M('transaction');
		$trans = $Mtrans->where($data)->find();
		
		$Model =  M('order');
		$content = $Model->where($data)->find();
		if(!empty($content))
		{
			/*update order due time*/
			$Model-> where($data)->setField('status','cancle');
			$Model-> where($data)->setField('refund','Y');
			$Model-> where($data)->setField('refundamount',$trans['settleamount']);
			/*del item*/
			$Model =  M('item');
			$items = $Model->where($data)->select();
			/*del domain*/
			foreach($items as &$val)
			{
				$ctd['domainname'] = $val['domainname'];
				$Mdomain = M('domainmgr');
				$Mdomain->where($ctd)->delete();//del domain
			}
			$this->success('Refund the order successfully!',U('Order/orderdetail?orderid='.$orderid.''),1);
		}
		
	}
	public function ordercancle()
	{
		$orderid = I('get.orderid');
		$data['orderID'] = $orderid;
		$Model =  M('order');
		$content = $Model->where($data)->find();
		if(!empty($content))
		{
			/*update order due time*/
			$Model-> where($data)->setField('status','cancle');
			/*del item*/
			$Model =  M('item');
			$items = $Model->where($data)->select();
			/*del domain*/
			foreach($items as &$val)
			{
				$ctd['domainname'] = $val['domainname'];
				$Mdomain = M('domainmgr');
				$Mdomain->where($ctd)->delete();//del domain
			}
			$this->success('Cancle the order successfully!',U('Order/orderdetail?orderid='.$orderid.''),1);
		}
		
	}
	public function itemedit()
	{
		$orderid = I('get.orderid');
		$itemid = I('get.itemid');
		$data['price'] = I('post.price');
		$data['years'] = I('post.years');
		$map['id'] = $itemid;
		$ct['orderID'] = $orderid;
		$Model =  M('item');
		$Model->where($map)->save($data);
		$items = $Model->where($ct)->select();
		$sum = 0.0;
		foreach($items as &$val)
		{
			$price = $val['price'];
			$years = $val['years'];
			$sum = $sum + $price * $years;
			
		}
		$cc['settleamount'] = $sum;
		$M3 = M('transaction');
		$M3->where($ct)->save($cc);
		$this->success('Update the order successfully!',U('Order/orderdetail?orderid='.$orderid.''),1);
	}
	public function orderadd()
	{
		
	}
	
	
	
}