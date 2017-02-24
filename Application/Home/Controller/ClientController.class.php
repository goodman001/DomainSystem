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
		$content = $Model->where($datas)->find();
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
			$this->error('please log in firstly',U('Login/login'),3);
		}
		
	}
	//enter inbox page
	public function inbox(){
		$this->display(T('client/inbox'));
	}
    
	
}
?>