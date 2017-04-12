<?php
namespace Home\Controller;
use Think\Controller;
class ClientController extends Controller {
	function _initialize()
	{
		if(empty(cookie('u_username'))){
			$this->error('please log in firstly',U('Login/login'),3);
		}
	}
	/**
    *   show client index page
    **/
    public function index()
    {
		$username = cookie('u_username');
		$nowtime = date('Y-m-d H:i:s',time());
		$this->assign('username',$username);
		$this->assign('nowtime',$nowtime);
    	$this->display(T('client/index'));
    }
	/**
	** MY INFOMATION	
	**/
	public function myprofile()
	{
		$data['username'] = cookie('u_username');//get username
		$Model = M('users');
		$content = $Model->where($data)->find();
		if(!empty($content))//exist email
		{
			$this->assign('profiles',$content);
			$this->display(T('client/my_profile'));
			
		}else
		{
			$this->error('please log in firstly',U('Login/login'),3);
		}
		
	}
	public function updateprofile()
	{
		$data_['username'] = cookie('u_username');//get username
		$Model = M('users');
		$content = $Model->where($data_)->find();
		if(!empty($content))
		{
			$data['email'] = I('post.email','','htmlspecialchars');//get email
			$data['firstname'] = I('post.firstname','','htmlspecialchars');//get firstname
			$data['lastname'] = I('post.lastname','','htmlspecialchars');//get firstname
			$data['company'] = I('post.company','','htmlspecialchars');//get firstname
			$data['jobtitle'] = I('post.jobtitle','','htmlspecialchars');//get firstname
			//$data['question'] = I('post.question','','htmlspecialchars');//get firstname
			//$data['answer'] = I('post.answer','','htmlspecialchars');//get firstname
			$data['address1'] = I('post.address1','','htmlspecialchars');//get firstname
			$data['address2'] = I('post.address2','','htmlspecialchars');//get firstname
			$data['city'] = I('post.city','','htmlspecialchars');//get firstname
			$data['state'] = I('post.state','','htmlspecialchars');//get firstname
			$data['postcode'] = I('post.postcode','','htmlspecialchars');//get firstname
			$data['country'] = I('post.country','','htmlspecialchars');//get firstname
			$data['phone'] = I('post.phone','','htmlspecialchars');//get firstname
			$data['fax'] = I('post.fax','','htmlspecialchars');//get firstname
			$data['overdue'] = I('post.overdue','','htmlspecialchars');//get firstname
			$data['taxexemption'] = 'NO';//get firstname
			$data['currency'] = I('post.currency','','htmlspecialchars');//get firstname
			$data['status'] = 'active';//get firstname
			$Model->where($data_)->save($data);
			$this->success('Update profile successfully!',U('Client/myprofile'),1);
		}else
		{
			cookie('u_username',null);
			$this->error('please log in firstly',U('Login/login'),3);
		}
		
	}
	public function updatepwd()
	{
		$data_['username'] = cookie('u_username');//get username
		$Model = M('users');
		$content = $Model->where($data_)->find();
		if(!empty($content))
		{
			
			$oldpwd = I('post.pwd1','','htmlspecialchars');//get currency pwd
			$data['password'] = I('post.pwd2','','htmlspecialchars');//get currency pwd
			if($oldpwd != $content['password'])
			{
				$this->error('Please input right currency password!Update password failed',U('Client/myprofile'),3);
			}else{
				//print_r($data);
				$Model->where($data_)->save($data);
				$this->success('Update password successfully!',U('Client/myprofile'),1);
			}
		}else
		{
			cookie('u_username',null);
			$this->error('please log in firstly',U('Login/login'),3);
		}
	}
	public function mywallet()
	{
		$balance = 0;
		$type = "";
		$data_['username'] = cookie('u_username');//get username
		$Model = M('users');
		$content = $Model->where($data_)->find();
		$balance = $content['balance'];
		$type = $content['currency'];
		
		$Model = M('balance');
		$monthago= date("Y-m-d H:i:s", strtotime("-1 month")); 
		$nowtime =date('Y-m-d H:i:s',time());//get nowtime
		$c1['username'] = $data_['username'];
		$c1['target'] = 1;
		$lists = $Model->where($c1)->select();
		
		$this->assign('balance',$balance);
		$this->assign('type',$type);
		$this->assign('lists',$lists);
		//print_r($monthago);
		$this->display(T('client/my_wallet'));
	}
	public function addcredit()
	{
		$data['username'] = cookie('u_username');//get username
		$data['amount'] = I('post.amount','','htmlspecialchars');//amount of money
		//must add range on amount
		
		//
		$data['currency'] = I('post.currency','','htmlspecialchars');//amount of money
		$data['accounttype'] = I('post.accounttype','','htmlspecialchars');//amount of money
		$data['accountnumber'] = I('post.accountnumber','','htmlspecialchars');//
		$data['target'] = 1;//in
		$data['optime'] = date('Y-m-d H:i:s',time());//get time
		$Model = M('balance');
		$Model->data($data)->add();
		$c1['username'] = $data['username'];
		$c1['target'] = 1;
		$b1 = $Model->where($c1)->sum('amount');
		$c1['target'] = 0;
		$b2 = $Model->where($c1)->sum('amount');
		$balance = $b1-$b2;
		print($balance);
		$Model = M('users');
		$c2['username'] = $data['username'];
		$Model-> where($c2)->setField('balance',$balance);
		//$this->display(U('Client/mywallet'));
		R('Client/mywallet');
		
	}
	// 
	/* orderlist */
	public function orderlist()
	{
		//$search =I('post.search');
		$username =cookie('u_username');
        $Model = M('order');
		$condition['username'] = $username;
        $list = $Model->where($condition)->order('issuedate desc')->page(I('get.p').',42')->select();
		$count = $Model->where($condition)->count();// get count of records
		
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
        $this->display(T('client/my_orderlist'));
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
			$this->display(T('client/my_orderdetail'));
            
			
		}else
        {
            R('Client/orderlist');
        }
		
	}
	/*domain */
	public function domainlist()
	{
		$username =cookie('u_username');
        $Model = M('domainmgr');
		$condition['username'] = $username;
		$condition['status'] = 'active';
		
        $list = $Model->where($condition)->order('id desc')->page(I('get.p').',42')->select();
		$count = $Model->where($condition)->count();// get count of records
        
		
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
        $this->display(T('client/my_domainlist'));
		
	}
	public function domaindetail()
	{
		$domainid = I('get.domainid');
		$data['id'] = $domainid;
		$Model = M('domainmgr');
		$domain = $Model->where($data)->find();
		$this->assign('domain',$domain);// 
		$this->assign('domainid',$domainid);// 
		/* Get orderId */
		$ct['domainname'] = $domain['domainname'];
		$Mitem = M('item');
		$orders = $Mitem->where($ct)->find();
		$orderID = $orders['orderID'];
		$this->assign('orderid',$orderID);//
		/*get domain whois*/
		$msg = getWhois($domain['domainname']);
        $flag =  $msg[1];
        $whoisinfo =  $msg[0];//whoisinfo
		$this->assign('whois',$whoisinfo);// 
		/*get payment method*/
		$Model = M('paymethod');
		$condition1['useable'] = 'Y';
		$ct1 = $Model->field('method')->where($condition1)->select();
		$this->assign('payments',$ct1);
		$this->display(T('client/my_domaindetail'));
	}
	public function domainprofileupdate()
	{
		$where['id'] = I('get.domainid');
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
		$Model = M('domainmgr');
		$Model->where($where)->save($data);
		$this->success('Update the Domain Registration Profile successfully!',U('Client/domaindetail?domainid='.$where['id'].''),1);
	}
	public function domaintools()
	{
		$where['id'] = I('get.domainid');
		$data['mainforward'] = I('post.mainforward');
		$data['IDprotect'] = I('post.IDprotect');
		$data['DNSmgr'] = I('post.DNSmgr');
		$Model = M('domainmgr');
		$Model->where($where)->save($data);
		$this->success('Update the domain tools successfully!',U('Client/domaindetail?domainid='.$where['id'].''),1);
	}
	public function domainautorenew()
	{
		$where['id'] = I('get.domainid');
		$data['autorenew'] = I('post.autorenew');
		$Model = M('domainmgr');
		$Model->where($where)->save($data);
		$this->success('Update the domain auto renew setting  successfully!',U('Client/domaindetail?domainid='.$where['id'].''),1);
	}
	public function domainrenew()
	{
		$where['id'] = I('get.domainid');
		if(I('post.accounttype','','htmlspecialchars') == "PayPal" || 	I('post.accounttype','','htmlspecialchars') == "Credit Card" ){
			if(I('post.clientname','','htmlspecialchars') == "" || I('post.accountnumber','','htmlspecialchars') == "" ){
				$this->error('When the paymethod is paypal or Credit Card, you must input account infomation!',U('Client/domaindetail?domainid='.$where['id'].''),3);
			}
		}
		$years = I('post.years');
		$nowtime = date('Y-m-d H:i:s',time());
		
		
		
		
		$DoM = M('domainmgr');
		$domaininfo = $DoM->where($where)->find();
		$username = cookie('u_username');
		$transactionID = time()+101;
		$orderID = time();
		$pay['accounttype'] = I('post.accounttype','','htmlspecialchars');//get firstname
		if($pay['accounttype'] == 'PayPal'){
			$paystatus = 'active';
			$expiry_db = date('Y-m-d H:i:s', strtotime('+'.$years.' year', strtotime($domaininfo["expirydate"])));
			$nextdue_db = date('Y-m-d H:i:s', strtotime('+'.$years.' year', strtotime($domaininfo["nextduedate"])));
		}else
		{
			$paystatus = 'pending';
			$yeartmp = 0;
			$expiry_db = date('Y-m-d H:i:s', strtotime('+'.$yeartmp.' year', strtotime($domaininfo["expirydate"])));
			$nextdue_db = date('Y-m-d H:i:s', strtotime('+'.$yeartmp.' year', strtotime($domaininfo["nextduedate"])));
		}
		
		//print($registrar);
		//get domain infomation
		
		///get price
		/*$price = 0;
		$Mt = M('fakedomains');
        $dprice["domainname"] = $domaininfo['domainname'];
        $presult = $Mt->where($dprice)->find();
        if(!empty($presult))
        {
            $pieces = explode(".", $domaininfo['domainname']);
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
		$dm_name = $domaininfo['domainname'];
		$pieces = explode(".", $dm_name);
        $Model = M('premium');
        $dcp["domainname"] = array('like','%.'.$pieces[count($pieces)-1]);
        $content2 = $Model->where($dcp)->find();
        if(!empty($content2))
        {
            $Mt = M('fakedomains');
            $dprice["domainname"] = $dm_name;
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
		
		
		
		
		$Model = M('item');
		$item["domainname"] = $domaininfo['domainname'];
		$item["orderID"] = $orderID;
		$item["registrar"] = $domaininfo['registrar'];
		$item["price"] = $price;
		$item["years"] = $years;
		$Model->data($item)->add();
		$iteminfo =$Model->where('orderID='.$orderID)->select();
		
		
		
		//order
		$orderM = M('order');
		$order['orderID'] = $orderID;//get order id
		$order['transactionID'] = $transactionID;//get id
		$order['username'] = $username;
		$order['issuedate'] = date('Y-m-d H:i:s',time());
		$order['status'] = $paystatus;
		$order['refundamount'] = 0.0;
		$order['invoicedate'] = date('Y-m-d H:i:s',time());
		$order['duedate'] = date('Y-m-d H:i:s',time());
		$order['description'] = 'Renew domain '.$domaininfo['domainname'];
		$orderM->data($order)->add();
		$orderinfo = $orderM->where('orderID = '.$orderID)->find();
		//print_r($orderinfo);
		//update domain
		$data['expirydate'] = $expiry_db;
		$data['nextduedate'] = $nextdue_db;
		$data['status'] = 'active';
		$data['renew'] = 1;
		$data['orderID'] = $orderID;
		$DoM->where($where)->save($data);
		$domainnew = $DoM->where($where)->find();
		//$domainnew = $DoM->where($where)->find();
		// pay
		$transM = M('transaction');
		
		
		$paymethod = $pay['accounttype'];
		
		
		//	transaction
		
		$trans['transactionID'] = $transactionID;
		$trans['clientname'] = I('post.clientname','','htmlspecialchars');
		$trans['orderID'] = $orderID;
		$trans['invoiceID'] = time();
		$trans['description'] = 'Renew the domain '.$domaininfo['domainname'];
		$trans['paydate'] = date('Y-m-d H:i:s',time());
		$trans['paymethod'] = $paymethod;
		$trans['accountnumber'] = I('post.accountnumber','','htmlspecialchars');
		$trans['settleamount'] = $price * $years;
		$transM->data($trans)->add();
		$transinfo = $transM->where('transactionID ='.$transactionID)->find();
		//print_r($transinfo);		
		//print_r($trans);
		
		
		$this->assign('items',$iteminfo);
		$this->assign('order',$orderinfo);
		$this->assign('trans',$transinfo);
		
		//print_r($ct);
		$this->success('Renew the domain successfully!',U('Client/domaindetail?domainid='.$where['id'].''),1);
	}
	//enter inbox page
	public function inbox(){
		$this->display(T('client/inbox'));
	}
    
	
}
?>