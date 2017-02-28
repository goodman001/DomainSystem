<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {
	function _initialize()
	{
		if(empty(cookie('u_username'))){
			$this->error('please log in firstly',U('Login/login'),3);
		}else if(empty(cookie('shopcart'))||cookie('shopcart') == '')
		{
			$this->error('Sorry!Shopping cart is empty!',U('Index/index'),3);
		}
	}
	/**
    *   show client index page
    **/
    public function index()
    {
		/*$username = cookie('u_username');
		$nowtime = date('Y-m-d H:i:s',time());
		$this->assign('username',$username);
		$this->assign('nowtime',$nowtime);
    	$this->display(T('client/index'));*/
		$total = cookie('shoptotal');
        $lists = cookie('shopcart');
        $bigitem = explode('#',$lists); 
        $res = array();
        #print_r($bigitem);
        for($index=0;$index<count($bigitem)-1;$index++) 
        { 
            $res[$index] = explode('||',$bigitem[$index]); 
        }
		//print_r($res);
		//check domain is whether useable
		$useable = true;
		$Model = M('domainmgr');
		for($index=0;$index<count($res);$index++)
		{
			print_r($res[$index]);
			$content = $Model->field('domainname,nextduedate,status')->where($res[$index][0])->find();
			$now = time();
			if(!empty($content) && $now > $duedate && $content['status'] != 'pending')//pending ,renew :continue use
			{
				$useable = false;
				break;
			}
		}
		$Model = M('d');
		if($useable == true)// add shopping cart
		{
			for($index=0;$index<count($res);$index++)
			{
				
			}
		}
		/*$data["domainname"] = $dm_name;
		$Model = M('domainmgr');
		$content = $Model->field('domainname,nextduedate,status')->where($data)->find();
		if(!empty($content))
		{
			$duedate = strtotime($content['nextduedate']);
			$now = time();
			if($now > $duedate && $content['status'] != 'pending')//pending ,renew :continue use
			{
				$showflag = 1;
			}
		}else
		{
			$showflag = 1;
			$Model = M('premiumdomain');
			$content2 = $Model->where($data)->find();
			if(!empty($content2))
			{
				$price = $price*1.2;//increase 20%
			}
		}*/
    }
	
    
	
}
?>