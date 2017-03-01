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
			return 0;
		}
		$useable = 0;//use
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
					if($content['status'] != 'pending')
					{
						if($now <= $duedate)//domain : pending(renew) active suspend
						{
							$useable == 1;
							$target = $res[$index][0];
							break;
						}
					}else
					{
						$useable == 1;
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
		/*$useable = 0;//use
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
					if($content['status'] != 'pending')
					{
						if($now <= $duedate)//domain : pending(renew) active suspend
						{
							$useable == 1;
							$target = $res[$index][0];
							break;
						}
					}else
					{
						$useable == 1;
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
		}else*/
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
				$this->assign('amount',count($bigitem));
				/*get payment method*/
				$Model = M('paymethod');
				$condition['useable'] = 'Y';
				$ct = $Model->field('method')->where($condition)->select();
				$this->assign('payments',$ct);
				//print_r($ct);
				$this->display(T('order/order'));
				//print(count($bigitem)-1);
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
	/*upload order infomation*/
	public function upload()
	{
		$username = cookie('u_username');
		$transactionID = time();
		$orderID = time();
		/*get registar*/
		$Model = M('registrar');
		$condition['status'] = 'Y';
		$ct = $Model->field('registrar')->where($condition)->select();
		shuffle($ct);
		//print_r($ct);
		$registrar = $ct[0]['registrar'];
		//print($registrar);
		
		$total = cookie('shoptotal');
        $lists = cookie('shopcart');
        $bigitem = explode('#',$lists); 
        $res = array();
		$item = array();
        #print_r($bigitem);
		$Model = M('item');
        for($index=0;$index<count($bigitem)-1;$index++) 
        { 
            $res[$index] = explode('||',$bigitem[$index]); 
			/*get item infomation*/
			$item[$index]["domainname"] = $res[$index][0];
			$item[$index]["orderID"] = $orderID;
			$item[$index]["registrar"] = $registrar;
			$item[$index]["price"] = $res[$index][1];
			$item[$index]["years"] = $res[$index][2];
			/*get domain infomation*/
			$data['domainname'] = $res[$index][0];
			$data['username'] = $username;
			$data['registrar'] = $registrar;
			$data['expirydate'] = '';
			$data['nextduedate'] = '';
			$data['status'] = 'pending';
			$data['mainforward'] = '';
			$data['DNSmgr'] = '';
			$data['orderID'] = $orderID;
			
			
			
			/*get domain registation profile*/
			$data['email'] = I('post.email','','htmlspecialchars');//get email
			$data['firstname'] = I('post.firstname','','htmlspecialchars');//get firstname
			$data['lastname'] = I('post.lastname','','htmlspecialchars');//get firstname
			$data['company'] = I('post.company','','htmlspecialchars');//get firstname
			$data['jobtitle'] = I('post.jobtitle','','htmlspecialchars');//get firstname
			$data['address1'] = I('post.address1','','htmlspecialchars');//get firstname
			$data['address2'] = I('post.address2','','htmlspecialchars');//get firstname
			$data['city'] = I('post.city','','htmlspecialchars');//get firstname
			$data['state'] = I('post.state','','htmlspecialchars');//get firstname
			$data['postcode'] = I('post.postcode','','htmlspecialchars');//get firstname
			$data['country'] = I('post.country','','htmlspecialchars');//get firstname
			$data['phone'] = I('post.phone','','htmlspecialchars');//get firstname
			$data['fax'] = I('post.fax','','htmlspecialchars');//get firstname
			$data['ns1'] = I('post.ns1','','htmlspecialchars');//get firstname
			$data['ns2'] = I('post.ns2','','htmlspecialchars');//get firstname
			$data['ns3'] = I('post.ns3','','htmlspecialchars');//get firstname
			$data['ns4'] = I('post.ns4','','htmlspecialchars');//get firstname
			print_r($item[$index]);
			
        }
		
		//print_r($data);
		/*get payment information*/
		$pay['accounttype'] = I('post.accounttype','','htmlspecialchars');//get firstname
		$pay['accountnumber'] = I('post.accountnumber','','htmlspecialchars');//
		/*get order infomation*/
		$order['orderID'] = $orderID;//get order id
		$order['transactionID'] = $transactionID;//get order id
		$order['username'] = $username;
		$order['issuedate'] = date('Y-m-d H:i:s',time());
		$order['status'] = 'pending';
		$order['refundaccount'] = '';
		$order['invoicedate'] = '';
		$order['duedate'] = '';
		$order['description'] = '';
		$order['paymethod'] = $pay['accounttype'];
		/*
		transaction
		*/
		$trans['transactionID']
		
		
		
		
	}
	
    
	
}
?>