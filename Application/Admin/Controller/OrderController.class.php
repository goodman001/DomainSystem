<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
	
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
				$ctd1['domainname'] = $val['domainname'];
				$ctd1['renew'] = 1;
				$infod = $Mdomain->where($ctd1)->find();
				if(!empty($infod)){
					$Mdomain->where($ctd)->setField('renew',0);//
					$Mdomain->where($ctd)->setField('status','active');//active domain
					$years = 1;
					$Mdomain->where($ctd)->setField('expirydate',date('Y-m-d', strtotime('+'.$years.' year', strtotime($infod["expirydate"]))));//expirydate
					$Mdomain->where($ctd)->setField('nextduedate',date('Y-m-d', strtotime('+'.$years.' year', strtotime($infod['nextduedate']))));//issuedate
				}else
				{
					$Mdomain->where($ctd)->setField('status','active');//active domain
					$Mdomain->where($ctd)->setField('registrationdate',$nowtime);//registartiton date
					$Mdomain->where($ctd)->setField('expirydate',date('Y-m-d', strtotime('+'.$val['years'].' year', strtotime($nowtime))));//expirydate
					$Mdomain->where($ctd)->setField('nextduedate',date('Y-m-d', strtotime('+'.$val['years'].' year', strtotime($content['issuedate']))));//issuedate
				}

				
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
			$Model-> where($data)->setField('status','cancel');
			$Model-> where($data)->setField('refund','Y');
			$Model-> where($data)->setField('refundamount',$trans['settleamount']);
			/*item*/
			$Model =  M('item');
			$items = $Model->where($data)->select();
			/*set domain*/
			foreach($items as &$val)
			{
				$ctd['domainname'] = $val['domainname'];
				$Mdomain = M('domainmgr');
				$Mdomain->where($ctd)->setField('status','suspend');//
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
			$Model-> where($data)->setField('status','cancel');
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
			$this->success('Cancel the order successfully!',U('Order/orderdetail?orderid='.$orderid.''),1);
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
	public function itemadd()
	{
		$orderid = I('get.orderid');
		$data['domainname'] = str_replace('www.','',I('post.domainname'));
		$data['orderID'] = $orderid;
		/*get registar*/
		$Mr = M('registrar');
		$condition['status'] = 'Y';
		$crs = $Mr->field('registrar')->where($condition)->select();
		shuffle($crs);
		
		/*get price*/
		/*$price = 0;
		$Mt = M('fakedomains');
        $dprice["domainname"] = $data['domainname'];
        $presult = $Mt->where($dprice)->find();
        if(!empty($presult))
        {
            $pieces = explode(".", $data['domainname']);
            $Model = M('premium');
            $dcp["domainname"] = array('like','%.'.$pieces[count($pieces)-1]);
            $content2 = $Model->where($dcp)->find();
            if(!empty($content2))
            {
                $price = $content2['price']*($content2['rate']+1);//increase 20%
            }else
            {
                $Model = M('configure');
                $re = $Model->field('domainprice')->where('id=1')->find();
                $price = $re['domainprice'];
            }
        }else
        {
            $Model = M('configure');
            $re = $Model->field('domainprice')->where('id=1')->find();
            $price = $re['domainprice'];
        }*/
		$price = 0;
		$pieces = explode(".", $data['domainname']);
        $Model = M('premium');
        $dcp["domainname"] = array('like','%.'.$pieces[count($pieces)-1]);
        $content2 = $Model->where($dcp)->find();
        if(!empty($content2))
        {
            $Mt = M('fakedomains');
            $dprice["domainname"] = $data['domainname'];
            $presult = $Mt->where($dprice)->find();
            if(!empty($presult))
            {
                $price = $content2['price']*($content2['rate']+1);//increase rateing
            }else
            {
                $price = $content2['price'];//increase 20%
            }   
        }else
        {
            $Model = M('configure');
            $re = $Model->field('domainprice')->where('id=1')->find();
            $price = $re['domainprice'];
        }
		//print_r($ct);
		$registrar = $crs[0]['registrar'];
		$data['registrar'] = $registrar;	
		$data['price'] = $price;
		$data['years'] = I('post.years');
		
		/*check domain available*/
		//check item
		$Model =  M('item');
		$ct['domainname'] = $data['domainname'];
		$ct['orderID'] = $data['orderID'];
		$itemnum = $Model->where($ct)->count();
		
	    $msg = getWhois($data['domainname']);
        $flag =  $msg[1];
		#print($flag);
		$showflag = 0;
		if($flag == "Y"){
			$map["domainname"] = $data['domainname'];
			$Md = M('domainmgr');
			$content = $Md->field('domainname,nextduedate,status')->where($map)->find();
			if(!empty($content))
			{
				$duedate = strtotime($content['nextduedate']);
				$now = time();
				if($content['status'] != 'suspend')
				{
					if($content['status'] != 'pending')
					{
						if($now > $duedate)// domain : pending(renew/wait to check) active suspend
						{
							$showflag = 1;
						}
					}

				}

			}else
			{
				$showflag = 1;
			}
		}
		#print($showflag);
		#print($itemnum);
		if($showflag ==1 && $itemnum == 0)
		{
			
			$Model->data($data)->add();
			$ct1['orderID'] = $orderid;
			$items = $Model->where($ct1)->select();
			$sum = 0.0;
			foreach($items as &$val)
			{
				$price = $val['price'];
				$years = $val['years'];
				$sum = $sum + $price * $years;

			}
			$cc['settleamount'] = $sum;
			$M3 = M('transaction');
			$M3->where($ct1)->save($cc);
			/*add domain*/
			$ct2['orderID'] = $orderid;
			$M4 =  M('order');
			$content = $M4->where($ct2)->find();
			$paystatus = $content['status'];
			$cuser['username'] = $content['username'];//get username
			$User = M('users');
			$userinfo = $User->where($cuser)->find();
			$nowtime = date('Y-m-d H:i:s',time());
			$expiry_db = '';
			$nextdue_db = '';
			$registrationdate = '';
			
			$datadb['domainname'] = $data['domainname'];
			$datadb['username'] = $userinfo['username'];
			$datadb['registrar'] = $registrar;
			$datadb['registrationdate'] = $registrationdate;
			$datadb['expirydate'] = $expiry_db;
			$datadb['nextduedate'] = $nextdue_db;
			$datadb['status'] = $paystatus;
			$datadb['mainforward'] = '';
			$datadb['DNSmgr'] = '';
			$datadb['orderID'] = $orderid;
			
			/*get domain registation profile*/
			$datadb['email'] = $userinfo['email'];//get email
			$datadb['firstname'] = $userinfo['firstname'];//get firstname
			$datadb['lastname'] = $userinfo['lastname'];//get firstname
			$datadb['company'] = $userinfo['company'];//get firstname
			$datadb['jobtitle'] = $userinfo['jobtitle'];//get firstname
			$datadb['address1'] = $userinfo['address1'];//get firstname
			$datadb['address2'] = $userinfo['address2'];//get firstname
			$datadb['city'] = $userinfo['city'];//get firstname
			$datadb['state'] = $userinfo['state'];//get firstname
			$datadb['postcode'] = $userinfo['postcode'];//get firstname
			$datadb['country'] = $userinfo['country'];//get firstname
			$datadb['phone'] = $userinfo['phone'];//get firstname
			$datadb['fax'] = $userinfo['fax'];//get firstname
			$datadb['ns1'] = "ns1.namserver.com";//get firstname
			$datadb['ns2'] = "ns2.namserver.com";//get firstname
			$datadb['ns3'] = "ns3.namserver.com";//get firstname
			$datadb['ns4'] = "ns4.namserver.com";//get firstname
			$DoM = M('domainmgr');
			$DoM->data($datadb)->add();
			
			$this->success('Add new item into the order successfully!',U('Order/orderdetail?orderid='.$orderid.''),1);
		}else
		{
			$this->error('Add new item into the order failure!',U('Order/orderdetail?orderid='.$orderid.''),1);
		}
		
	}
	
	
	
}