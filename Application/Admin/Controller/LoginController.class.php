<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display(T('login/login'));
    }
	public function checkLog()
	{
		$data['username']= I('post.username','','htmlspecialchars');//get name
		$data['password'] = I('post.password','','htmlspecialchars');//get name
		$Model = M('admins');
		$content = $Model->field('username,regtime,authorityindex')->where($data)->find();
		if(!empty($content) )//exist
		{
			cookie('admin_uid',$data['username'],36000);
			print($content['authorityindex']);
				
		}else
		{
			cookie('admin_uid',null);
			$this->error('username or password is wrong!', U('Login/index'),3);
		}
	}
	public function logout()
    {
		cookie('admin_uid',null);
		//$this->show('login');
    	//$this->display(T('homepage/index'));
		R('Login/index');
    }
}