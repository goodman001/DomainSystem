<?php
namespace Admin\Controller;
use Think\Controller;
class ProfileController extends CommonController {
    public function index()
    {
		$uid = cookie('admin_uid');
		$username = cookie('admin_username');
		
		$data['uid'] = $uid;
		$Model = M('admins');
		$content = $Model->where($data)->find();
		if(!empty($content) )//exist
		{
			$nowtime = date('Y-m-d H:i:s',time());
			$Mrole = M('auth_group');
			$map['id'] = $content['roleid'];
			$roleinfo = $Mrole->where($map)->find();
			$this->assign('username',$username);
			$this->assign('role',$roleinfo['title']);
			$this->assign('description',$roleinfo['description']);
			$this->assign('nowtime',$nowtime);
			$this->display(T('mgr/index'));	
		}else
		{
			$this->error(C('LOGIN_ERROR'), U('Login/index'),3);
		}
		
		
    }
}