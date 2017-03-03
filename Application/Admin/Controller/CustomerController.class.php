<?php
namespace Admin\Controller;
use Think\Controller;
class CustomerController extends CommonController {
    public function customerlist()
    {
		$list = $User->field('FID,FNAME,TYPE,SCORE,UPTIME,SCAN_NUM')->where($map)->order('UPTIME desc')->page($_GET['p'].',42')->select();
		$count = $User->where($map)->count();// 查询满足要求的总记录数
		/**
		*根据编码转换对应的中文内容
		**/
		$list = getCharType($list);
		//print($list[0]["TYPE"]);
		$this->assign('list',$list);
		$Page = new \Think\Page($count,42);// 实例化分页类 传入总记录数和每页显示的记录数
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('first','第一页');
		$Page->setConfig('last','尾页');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
		$show = $Page->show();// 分页显示输出
		$this->assign('page',$show);// 赋值分页输出
		print("list");
		
		
    }
}