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
			$data['question'] = I('post.question','','htmlspecialchars');//get firstname
			$data['answer'] = I('post.answer','','htmlspecialchars');//get firstname
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
			$data['status'] = 1;//get firstname
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
	//enter inbox page
	public function inbox(){
		$this->display(T('client/inbox'));
	}
    
	
}
?>