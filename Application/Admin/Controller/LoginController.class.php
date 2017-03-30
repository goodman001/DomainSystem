<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
        $this->display(T('login/login'));
    }
	public function checkLog()
	{
		cookie('admin_uid',null);
		$data['username']= I('post.username','','htmlspecialchars');//get name
		$data['password'] = I('post.password','','htmlspecialchars');//get name
		$Model = M('admins');
		$content = $Model->field('uid,username,regtime')->where($data)->find();
		if(!empty($content) )//exist
		{
			cookie('admin_uid',$content['uid'],36000);
            cookie('admin_username',$content['username'],36000);
            $this->success(C('LOGIN_SUCCESS'), U("Profile/index"),3);
				
		}else
		{
			cookie('admin_uid',null);
			$this->error(C('LOGIN_ERROR'), U('Login/index'),3);
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
