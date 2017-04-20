<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	/**
    *   show index page
    **/
    public function index()
    {
    	$this->display(T('index/index'));
    }
	/**
    ** enter register page
    **/
    public function register()
    {
    	cookie('u_username',null);
    	$this->display(T('reglogin/reg'));
    }
	/**
	** check register
	**/
	public function checkReg(){
		$data['username'] = I('post.username','','htmlspecialchars');//get username
		$data['email'] = I('post.email','','htmlspecialchars');//get email
		$map['username'] = $data['username'];
		$map['email'] = $data['email'];
		$map['_logic'] = 'OR';
		$Model = M('users');
		$content = $Model->field('username,regtime,status')->where($map)->find();
		if(!empty($content))//exist username
		{
			if($content['status'] == 'pending' )//Pending = 0
			{
				
				$this->error('Please go to the mail for reset password verification', U('Index/index'),3);
    						
			}else if($content['status'] == 'active' )//active = 1
			{
				//echo "exsit!";
				$this->success('The email address has been registered, please log in',U('Login/login'),3);
			}else//active = 1
			{
				$this->error('Account Status is Suspend, please contact the administrator',U('Index/index'),3);
			}
		}else
		{
			
			
			$data['firstname'] = I('post.firstname','','htmlspecialchars');//get firstname
			$data['lastname'] = I('post.lastname','','htmlspecialchars');//get firstname
			$data['company'] = I('post.company','','htmlspecialchars');//get firstname
			$data['jobtitle'] = I('post.jobtitle','','htmlspecialchars');//get firstname
			$data['password'] = I('post.password','','htmlspecialchars');//get firstname
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
			$data['regtime'] =date('Y-m-d H:i:s',time());//get firstname
			$Model->data($data)->add();
			$this->success('Congratulations ! please log in',U('Login/login'),3);
			//print_r($data);
		}
	}
	/**
	** reset password
	*/
	public function findpwdstep0()
    {
		cookie('u_usename',null);
		$this->display(T('reglogin/getemail'));
    }
	public function findpwdstep1()//send email
    {
		$data['email'] = I('post.email','','htmlspecialchars');//get email
		//$this->show($data['email']);
		
		$Model = M('users');
		$content = $Model->field('email,username,regtime,status')->where($data)->find();
		if(!empty($content))//exist email
		{
			if($content['status'] == 'pending' || $content['status'] == 'active')
			{
				$Model-> where($data)->setField('status','pending');
				$emailbody="Dear".$content['username']."：<br/>The email is for finding your password verification <br/>your verification code is 9823<br/> "; 
				if(sendMail($data['email'],"Find password verification",$emailbody) == 1)
				{
					cookie('findpwd_email',$data['email'],36000);
					cookie('findpwd_code',9823,36000);
					$this->display(T('reglogin/findpwd'));
				}else
				{
					$this->error('Email send failure!', U('Login/login'),3);
				}
				
    						
			}else
			{
				$this->error('Account Status is Suspend, please contact the administrator',U('Index/index'),3);
			}
		}
    }
	
	public function findpwdstep2()
    {
    	$this->display(T('reglogin/findpwd'));
    }
	public function findpwdcheck()
	{
		if(!empty(cookie('findpwd_email')) && !empty(cookie('findpwd_code')))
		{
			$datas["email"] = cookie('findpwd_email');
			$data['password'] = I('post.password','','htmlspecialchars');//get pwd
			$data['code'] = I('post.code','','htmlspecialchars');//get code
			if($data['code'] == cookie('findpwd_code')){
				$Model = M('users');
				$Model-> where($datas)->setField('password',$data['password']);
				$Model-> where($datas)->setField('status','active');
				cookie('findpwd_email',null);
				cookie('findpwd_code',null);
				$this->success('The password has been successfully found, please log in',U('Login/login'),3);
				
			}else
			{
				$this->error('The verification code is wrong !Please resend email!',U('Login/login'),3);
			}
		}else{
			$this->error('The verification code is wrong !Please resend email!',U('Login/login'),3);
		}
		//$this->display(T('reglogin/findpwd'));
	}
	/**
    *   login
    **/
    public function login()
    {
		//$this->show('login');
    	$this->display(T('reglogin/log'));
    }
	public function checkLog()
	{
		$data['username']= I('post.username','','htmlspecialchars');//get name
		$data['password'] = I('post.password','','htmlspecialchars');//get name
		$Model = M('users');
		$content = $Model->field('username,regtime,status')->where($data)->find();
		if(!empty($content) )//exist email
		{
			if($content['status'] == 'active' ){
				//$Model-> where($data)->setField('status','active');
				cookie('u_username',$data['username'],36000);
				$this->success('Login successfully! welcome ',U('Index/index'));
			}else if($content['status'] == 'pending' )
			{
				$this->error('Account Status is pending, please check your email',U('Index/index'),3);
			}
			else
			{
				$this->error('Account Status is Suspend, please contact the administrator',U('Index/index'),3);
			}
		}
		else
		{
			cookie('u_username',null);
			$this->error('Email or password is wrong!', U('Login/login'),3);
		}
	}
	public function logout()
    {
		cookie('u_username',null);
		//$this->show('login');
		$this->success('Login out successfully! welcome ',U('Index/index'));
    }
	
}
?>