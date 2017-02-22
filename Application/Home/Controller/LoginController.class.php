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
    	session('u_username',null);
    	$this->display(T('reglogin/reg'));
    }
	/**
	** check register
	**/
	public function checkReg(){
		$data['email'] = I('post.email','','htmlspecialchars');//get email
		$Model = M('users');
		$content = $Model->field('email,regtime,status')->where($data)->find();
		if(!empty($content))//exist email
		{
			if($content['status'] == 0 )//Pending = 0
			{
				
				$this->error('Please go to the mail for reset password verification', U('Index/index'),3);
    						
			}else if($content['status'] == 1 )//active = 1
			{
				//echo "exsit!";
				$this->success('The email address has been successfully registered, please log in',U('Login/login'),3);
			}else//active = 1
			{
				$this->error('Account Status is Suspend, please contact the administrator',U('Index/index'),3);
			}
		}else
		{
			$data['username'] = I('post.username','','htmlspecialchars');//get username
			$data['firstname'] = I('post.firstname','','htmlspecialchars');//get firstname
			$data['lastname'] = I('post.lastname','','htmlspecialchars');//get firstname
			$data['company'] = I('post.company','','htmlspecialchars');//get firstname
			$data['jobtitle'] = I('post.jobtitle','','htmlspecialchars');//get firstname
			$data['password'] = I('post.password','','htmlspecialchars');//get firstname
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
			$data['taxexemption'] = 0;//get firstname
			$data['currency'] = I('post.currency','','htmlspecialchars');//get firstname
			$data['status'] = 1;//get firstname
			$data['regtime'] = time();//get firstname
			$Model->data($data)->add();
			$this->success('Congratulations ! please log in',U('Login/login'),10);
			//print_r($data);
		}
	}
	/**
	** reset password
	*/
	public function findpwdstep0()
    {
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
			if($content['status'] == 0 || $content['status'] == 1 )
			{
				$Model-> where($data)->setField('status',0);
				$emailbody="Dear".$content['username']."：<br/>The email is for finding your password verification <br/>your verification code is 9823<br/> "; 
				if(sendMail($data['email'],"Find password verification",$emailbody) == 1)
				{
					session('findpwd_email',$data['email']);
					session('findpwd_code',9823);
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
		if(!empty(session('findpwd_email')) && !empty(session('findpwd_code')))
		{
			$datas["email"] = session('findpwd_email');
			$data['password'] = I('post.password','','htmlspecialchars');//get pwd
			$data['code'] = I('post.code','','htmlspecialchars');//get code
			if($data['code'] == session('findpwd_code')){
				$Model = M('users');
				$Model-> where($datas)->setField('password',$data['password']);
				$Model-> where($datas)->setField('status',1);
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
		$this->show('login');
    	//$this->display(T('index/index'));
    }
	
	
}
?>