<?php
namespace Admin\Controller;
use Think\Controller;
use Think\Page;
use Org\Util\Auth;
class CommonController extends Controller
{
	public function _initialize()
	{
		
		if(empty(cookie('admin_uid')))
		{
			$this->error(C('LOGIN_TIPS'),U('Login/index'),3);
			return 0;
		}else if(!in_array(cookie('admin_uid'),explode(',',C('AUTH_SUPERADMIN'))))//whether is superadmin or not		
		{
			//import('ORG.Util.Auth');//
			//print(cookie('admin_uid'));
			//print(C('AUTH_SUPERADMIN'));
			$auth =new Auth();
			if(!$auth->check(strtolower(MODULE_NAME.'-'.CONTROLLER_NAME.'-'.ACTION_NAME),cookie('admin_uid')))
			{
				$this->error(C('PERMISSION_DENIED_WARNING'));
			}
		}
	}
}
