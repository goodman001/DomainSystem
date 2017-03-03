<?php
namespace Admin\Controller;
use Think\Controller;
class RootController extends CommonController {
    public function index()
    {
		$uid = cookie('admin_uid');
		$username = cookie('admin_username');
		
		$data['id'] = $uid;
		$Model = M('admins');
		$content = $Model->where($data)->find();
		if(!empty($content) )//exist
		{
			$nowtime = date('Y-m-d H:i:s',time());
			$this->assign('username',$username);
			$this->assign('role',$content['role']);
			$this->assign('description',$content['description']);
			$this->assign('nowtime',$nowtime);
			$this->display(T('mgr/index'));	
		}else
		{
			$this->error(C('LOGIN_ERROR'), U('Login/index'),3);
		}
		
		
    }
}