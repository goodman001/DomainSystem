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
		$lists = cookie('shopcart');
		$target = "";
		if(empty($lists)||$lists == '')
		{
			$this->error('Sorry!Shopping cart is empty!',U('Index/index'),3);
			return 0;
		}else
		{
			$bigitem = explode('#',$lists); 
			$res = array();
			//print_r($bigitem);
			for($index=0;$index<count($bigitem)-1;$index++) 
			{ 
				$res[$index] = explode('||',$bigitem[$index]); 
			}
			$useable = 0;//use
			$Model = M('domainmgr');
			//print_r($res);
			for($index=0;$index<count($res);$index++)
			{
				//print_r($res[$index]);
				$condition['domainname'] = $res[$index][0];
				$content = $Model->field('domainname,nextduedate,status')->where($condition)->find();
				if(!empty($content))
				{
					//print_r($content);
					$duedate = strtotime($content['nextduedate']);
					$now = time();
					
					if($content['status'] != 'suspend')
					{
						if($content['status'] != 'pending')
						{
							if($now <= $duedate)//domain : pending(renew) active suspend
							{
								$useable = 1;
								$target = $res[$index][0];
								break;
							}
						}else
						{
							$useable = 1;
							$target = $res[$index][0];
							break;
						}

					}else
					{
						$useable = 2;
						$target = $res[$index][0];
						break;
					}

				}
			
			}
			if($useable == 1)
			{

				$this->error($target.' have been registered!Please re-order!',U('Index/showshoppingcart'),3);
				return 0;
			}else if($useable == 2)
			{
				$this->error($target.' have been suspend by administrator!Please contact administrator!',U('Index/showshoppingcart'),3);
				return 0;
			}
        
			
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
		//$total = cookie('shoptotal');
        
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
			$cuser['username'] = cookie('u_username');//get username
			$User = M('users');
			$content = $User->where($cuser)->find();
			$this->assign('profiles',$content);
			$total = cookie('shoptotal');
			$lists = cookie('shopcart');
			$showcart = 1;
			$bigitem = explode('#',$lists); 
			$res = array();
			#print_r($bigitem);
			for($index=0;$index<count($bigitem)-1;$index++) 
			{ 
				$res[$index] = explode('||',$bigitem[$index]); 
			}
			$this->assign('res',$res);
			$this->assign('total',$total);
			$this->assign('amount',count($bigitem)-1);
			/*get payment method*/
			$Model = M('paymethod');
			$condition['useable'] = 'Y';
			$ct = $Model->field('method')->where($condition)->select();
			$this->assign('payments',$ct);
			//print_r($ct);
			$this->display(T('order/order'));
			//print(count($bigitem)-1);
			
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
		if(I('post.accounttype','','htmlspecialchars') == "PayPal" || 	I('post.accounttype','','htmlspecialchars') == "Credit Card" ){
			if(I('post.clientname','','htmlspecialchars') == "" || I('post.accountnumber','','htmlspecialchars') == "" ){
				$this->error('When the paymethod is paypal or Credit Card, you must input account infomation! ',U('Index/showshoppingcart'),3);
			}
		}
		$username = cookie('u_username');
		$transactionID = time()+101;
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
		$data = array();
        #print_r($bigitem);
		$Model = M('item');
		$DoM = M('domainmgr');
        for($index=0;$index<count($bigitem)-1;$index++) 
        { 
			
			$nowtime = date('Y-m-d H:i:s',time());
            $res[$index] = explode('||',$bigitem[$index]); 
			/*get item infomation*/
			$item[$index]["domainname"] = $res[$index][0];
			$item[$index]["orderID"] = $orderID;
			$item[$index]["registrar"] = $registrar;
			$item[$index]["price"] = $res[$index][1];
			$item[$index]["years"] = $res[$index][2];
			$Model->data($item[$index])->add();
			//print_r($item[$index]);
			
			/*paypal*/
			$pay['accounttype'] = I('post.accounttype','','htmlspecialchars');//get firstname
			if($pay['accounttype'] == 'PayPal'){
				$paystatus = 'active';
				$expiry_db = date('Y-m-d', strtotime('+'.$res[$index][2].' year', strtotime($nowtime)));
				$nextdue_db = date('Y-m-d', strtotime('+'.$res[$index][2].' year', strtotime($nowtime)));
				$registrationdate = $nowtime;
				$dudate_order = $nowtime;
			}else
			{
				$paystatus = 'pending';
				$expiry_db = '';
				$nextdue_db = '';
				$registrationdate = '';
				$dudate_order = '';
			}
			/*get domain infomation*/
			$data['domainname'] = $res[$index][0];
			$data['username'] = $username;
			$data['registrar'] = $registrar;
			$data['registrationdate'] = $registrationdate;
			$data['expirydate'] = $expiry_db;
			$data['nextduedate'] = $nextdue_db;
			$data['status'] = $paystatus;
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
			$DoM->data($data)->add();
			//print_r($data);
			//print_r($item[$index]);
			
        }
		
		//print_r($data);
		/*get payment information*/
		
		/*get order infomation*/
		$orderM = M('order');
		$order['orderID'] = $orderID;//get order id
		$order['transactionID'] = $transactionID;//get id
		$order['username'] = $username;
		$order['issuedate'] = date('Y-m-d H:i:s',time());
		$order['status'] = $paystatus;
		$order['refundamount'] = 0.0;
		$order['invoicedate'] = date('Y-m-d H:i:s',time());
		$order['duedate'] = $dudate_order;
		$order['description'] = '';
		$orderM->data($order)->add();
		//print_r($order);
		//$order['paymethod'] = $pay['accounttype'];
		/*
		transaction
		*/
		$transM = M('transaction');
		$trans['transactionID'] = $transactionID;
		$trans['clientname'] = I('post.clientname','','htmlspecialchars');
		$trans['orderID'] = $orderID;
		$trans['invoiceID'] = time();
		$trans['description'] = 'I use the '.$pay['accounttype'].' to pay for the order';
		$trans['paydate'] = date('Y-m-d H:i:s',time());
		$trans['paymethod'] = $pay['accounttype'];
		$trans['accountnumber'] = I('post.accountnumber','','htmlspecialchars');
		$trans['settleamount'] = $total;
		$transM->data($trans)->add();
		/*clear shop cart*/
		cookie('shopcart',null);
		cookie('shoptotal',null);
		//print_r($trans);
		$this->assign('items',$item);
		//$this->assign('data',$data);
		$this->assign('order',$order);
		$this->assign('trans',$trans);
		//print_r($ct);
		$this->display(T('order/orderreport'));
		
		
	
	}
	
    
	
}
?>