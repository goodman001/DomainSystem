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
		$content = $Model->field('id,username,regtime,authorityindex')->where($data)->find();
		if(!empty($content) )//exist
		{
			cookie('admin_uid',$content['id'],36000);
            cookie('admin_username',$content['username'],36000);
			print($content['authorityindex']);
            $url = $content['authorityindex'].'/index';
            $this->success(C('LOGIN_SUCCESS'), U($url),3);
				
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