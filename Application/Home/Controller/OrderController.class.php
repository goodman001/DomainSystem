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
		//check domain is whether is generating order or not
		$useable = 0;
		$Model = M('domainmgr');
		$target = "";
		for($index=0;$index<count($res);$index++)
		{
			//print_r($res[$index]);
			$content = $Model->field('domainname,nextduedate,status')->where($res[$index][0])->find();
			$now = time();
			if(!empty($content))
            {
                $duedate = strtotime($content['nextduedate']);
                $now = time();
                if($content['status'] != 'suspend')
                {
                    if($now <= $duedate)//domain : pending(renew) active suspend
                    {
                        $useable == 1;
						$target = $res[$index][0];
						break;
                    }
                }else
				{
					$useable == 2;
					$target = $res[$index][0];
					break;
				}
                
            }
			
		}
		if($useable == 1)
		{
			$this->error($target.' have been registered!Please choose a new one!',U('Index/showshoppingcart'),3);
		}else if($useable == 2)
		{
			$this->error($target.' have been suspend by administrator!Please contact administrator!',U('Index/showshoppingcart'),3);
		}else
		{
			$total = cookie('shoptotal');
			$lists = cookie('shopcart');
			$showcart = 1;
			if(empty($lists)||$lists == '')
			{
				$this->error('Sorry!Shopping cart is empty!',U('Index/index'),3);
			}else
			{
				$bigitem = explode('#',$lists); 
				$res = array();
				#print_r($bigitem);
				for($index=0;$index<count($bigitem)-1;$index++) 
				{ 
					$res[$index] = explode('||',$bigitem[$index]); 
				}
				$this->assign('res',$res);
				$this->assign('total',$total);
				//$this->display(T('reglogin/reg'));
				print("dot it");
			}
			
		}
		/*if($useable == 0)// add shopping cart to 
		{
			$Model = M('items');
			for($index=0;$index<count($res);$index++)
			{
				$data['domainname'] = $res[$index][0];//get domain name
				$data['price'] = $res[$index][1];//get domain name
				$data['lastname'] = I('post.lastname','','htmlspecialchars');//get firstname
				$data['company'] = I('post.company','','htmlspecialchars');//get firstname
			}
		}*/
		
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