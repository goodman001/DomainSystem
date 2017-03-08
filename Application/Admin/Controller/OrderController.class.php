<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
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
	
	
	
	
}