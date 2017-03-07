<?php
namespace Admin\Controller;
use Think\Controller;
class CustomerController extends CommonController {
    public function customerlist()
    {
        $Model = M('users');
		$list = $Model->where("id>=0")->order('regtime desc')->page(I('get.p').',42')->select();
		$count = $Model->where("id>=0")->count();// get count of records
		print_r($list);
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
        $this->display(T('mgr/customers_list'));	
		//print("list");
		
		
    }
    public function customerdetail()
    {
        
    }
}