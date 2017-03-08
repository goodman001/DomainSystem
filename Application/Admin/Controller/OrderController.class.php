<?php
namespace Admin\Controller;
use Think\Controller;
class OrderController extends CommonController {
	public function orderdetail()
	{
		/*
		* orderflag = 1:jump from Customer
		*/
		$flag = I('get.flag');
		$data['id'] = I('get.id');
        $Model = M('order');
		$content = $Model->where($data)->find();
		print_r($content);
	}
	
	
	
	
}