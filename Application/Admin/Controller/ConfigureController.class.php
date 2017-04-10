<?php
namespace Admin\Controller;
use Think\Controller;
class ConfigureController extends CommonController {
	public function general_web()
	{
		$this->display(T('mgr/configure_general_web'));
	}
	public function general_language()
	{
		$this->display(T('mgr/configure_general_language'));
	}
	public function languagesetting()
	{
		$this->display(T('mgr/configure_general_language'));
	}
	public function general_domain()
	{
		$this->display(T('mgr/configure_general_domain'));
	} 
	public function general_mail()
	{
		$this->display(T('mgr/configure_general_mail'));
	}
	public function general_credit()
	{
		$this->display(T('mgr/configure_general_credit'));
	}
	/*security*/
	public function security()
	{
		$data['securitytimes'] = I('post.securitytimes');
		if(empty($data['securitytimes']))
		{
			$Model = M('configure');
			$items = $Model->where('id = 1')->find();
			$this->assign('times',$items['securitytimes']);//
		}else
		{
			$Model = M('configure');
			$Model-> where('id = 1')->setField('securitytimes',$data['securitytimes']);
			$this->assign('times',$data['securitytimes']);
		}
		$this->display(T('mgr/configure_security'));
	}
	/*admin*/
	public function adminlist()
	{
        $Model = M('admins');

		$list = $Model->join('db_auth_group ON db_auth_group.id = db_admins.roleid')->order('regtime asc')->page(I('get.p').',42')->select();
		//print_r($list);
		$count = $Model->join('db_auth_group ON db_auth_group.id = db_admins.roleid')->count();// get count of records
		$Page = new \Think\Page($count,42);// page object
		$Page->setConfig('prev','prev');
		$Page->setConfig('next','next');
		$Page->setConfig('first','first page');
		$Page->setConfig('last','last page');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
		$show = $Page->show();// page output
		$this->assign('page',$show);// 
		$this->assign('list',$list);
		/*role id list*/
		$Mrole = M('auth_group');
		$rolelist = $Mrole->where('id>=2')->select();
		$this->assign('rolelist',$rolelist);//
		
        $this->display(T('mgr/configure_admins_list'));
	}
	public function admindetail()
	{
		$data['uid'] = I('get.adminid');
        $Model = M('admins');
		$content = $Model->where($data)->find();
		if(!empty($content))//exist email
		{
			$Mrole = M('auth_group');
			$map['id'] = $content['roleid'];
			$roleinfo = $Mrole->where($map)->find();
			/*get role list*/
			$rolelist = $Mrole->where('id>=2')->select();
			
			/*group infomation*/
			$Maccess = M('auth_group_access');
			$ct['uid'] = $data['uid'];
			$groupinfo = $Maccess->where($ct)->find();
			
			
			$this->assign('profiles',$content);
			$this->assign('roleinfo',$roleinfo);//
			$this->assign('rolelist',$rolelist);//
			$this->assign('rolelist',$rolelist);//
			$this->assign('groupid',$groupinfo['group_id']);//
			$this->display(T('mgr/configure_admins_detail'));
            
			
		}else
        {
            R('Configure/adminlist');
        }
	}
	public function admindelete()
	{
		$adminid = I('get.adminid');
		/* auth_group_access*/
		$Maccess = M('auth_group_access');
		$ct['uid'] = $adminid;
		$info = $Maccess->where($ct)->find();
		if(!empty($info) && $info['group_id'] == 1) //super administrator do not delete
		{
			$this->error('Do not delete the super administrators!',U('Configure/adminlist'),1);
		}else{
			$Maccess->where($ct)->delete();//del user 
			/* admins */
			$Model = M('admins');
			$map['uid'] = $adminid;
			$Model->where($map)->delete();//del user 
			$this->success('Delete the administrator successfully!',U('Configure/adminlist'),1);
		}
	}
	public function adminupdate()
	{
		$adminid = I('get.adminid');
		/*roles assignment*/
		$Maccess = M('auth_group_access');
		$mac['uid'] = $adminid;
		$mupdate['group_id'] = I('post.role');
		$accessinfo = $Maccess->where($mac)->save($mupdate);
		
		
		$data['username'] = I('post.username');
		$data['firstname'] = I('post.firstname');
		$data['lastname'] = I('post.lastname');
		$data['email'] = I('post.email');
		$data['password'] = I('post.password');
		$data['language'] = I('post.language');
		$data['roleid'] = $mupdate['group_id'];
		$M3 = M('admins');
		$map['uid'] = $adminid;
		$M3->where($map)->save($data);
		
		$this->assign('adminid',$adminid);//
		$this->success('Update administrator infomation successfully!',U('Configure/admindetail?adminid='.$adminid.''),1);
	}
	public function adminadd()
	{
		$roleid = I('post.role');
		/* assignment*/
		$Model = M('admins');
		$data['username'] = I('post.username');
		$data['firstname'] = I('post.firstname');
		$data['lastname'] = I('post.lastname');
		$data['email'] = I('post.email');
		$data['password'] = I('post.password');
		$data['language'] = I('post.language');
		$data['roleid'] = $roleid;
		$data['regtime'] = date('Y-m-d H:i:s',time());
		
		$ct['username'] = $data['username'];
		$usermsg = $Model->where($ct)->find();
		if(!empty($usermsg))
		{
			$this->error('The username already exists,add new administrator failed!',U('Configure/adminlist'),1);
		}else
		{
			$Model->data($data)->add();
			$map['username'] = $data['username'];
			$userinfo = $Model->where($map)->find();
			if(!empty($userinfo))
			{
				$adminid = $userinfo['uid'];
				/*roles assignment*/
				$Maccess = M('auth_group_access');
				$mac['uid'] = $adminid;
				$userinfo1 = $Maccess->where($mac)->find();
				if(!empty($userinfo1))
				{
					$mupdate['group_id'] = $roleid;
					$Maccess->where($mac)->save($mupdate);
				}else
				{
					$mac['group_id'] = $roleid;
					$Maccess->data($mac)->add();
				}
				$this->success('Add new administrator successfully!',U('Configure/adminlist'),1);		

			}else
			{
				R('Configure/adminlist');
			}
		}
		
		
	}
	/*adminrole*/
	public function adminrolelist()
	{
		$Mrole = M('auth_group');
		$rolelist = $Mrole->where('id>=1')->select();
		$Mrule = M('auth_rule');
		$rulelist = $Mrule->select();
		
		$this->assign('list',$rolelist);//
		$this->assign('ruleslist',$rulelist);//
		$this->display(T('mgr/configure_admins_rolelist'));
		
	} 
	public function adminroleadd()
	{
		/*Get rules list*/
		$Mrule = M('auth_rule');
		$rulelist = $Mrule->select();
		$rulecontent = "";
		foreach($rulelist as &$val)
		{
			if(!empty(I('post.rule'.$val['id'])))
			{
				$rulecontent = $rulecontent.I('post.rule'.$val['id']).',';
				
			}
		}
		//print($rulecontent);
		/* Add group */
		$Mgroup = M('auth_group');
		$data['title'] = I('post.rolename');
		$data['description'] = I('post.description');
		$data['rules'] = $rulecontent;
		$Mgroup->data($data)->add();
		$this->success('Add new role successfully!',U('Configure/adminrolelist'),2);
		//print($data['title']);
	}
	
	/*domain price*/
	public function pricesetting()
	{
		$M = M('configure');
		$info = $M->where('id = 1')->find();
		$this->assign('domainprice',$info['domainprice']);//
		$this->display(T('mgr/configure_domainprice_setting'));
	}
	public function priceupdate()
	{
		$data['domainprice'] = I('post.domainprice');
		$M = M('configure');
		$M->where('id = 1')->save($data);
		$this->success('Modify the price successfully!',U('Configure/pricesetting'),2);
	}
	public function pricetools()
	{
		$this->display(T('mgr/configure_domainprice_tools'));
	}
	
	
	public function premiumlist()
	{
		$search =I('post.search');
        $Model = M('premium');
        if(!empty($search))
        {
            $condition['domainname'] = array('like','%'.$search.'%');
            $list = $Model->where($condition)->order('id asc')->page(I('get.p').',42')->select();
		    $count = $Model->where($condition)->count();// get count of records
        }else
        {
            $list = $Model->where("id>=0")->order('id asc')->page(I('get.p').',42')->select();
		    $count = $Model->where("id>=0")->count();// get count of records
        }
        
		
		//print_r($list);
		/**
		* pages
		**/
		
		$Page = new \Think\Page($count,42);// page object
		$Page->setConfig('prev','prev');
		$Page->setConfig('next','next');
		$Page->setConfig('first','first page');
		$Page->setConfig('last','last page');
		$Page->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER% ');
		$show = $Page->show();// page output
		$this->assign('page',$show);// 
		$this->assign('list',$list);
        $this->display(T('mgr/configure_domainprice_premium'));
		
	}
	public function premiumadd()
	{
		$where['domainname'] =I('post.domainname');
		$Model = M('premium');
		$count = $Model->where($where)->count();
		if($count > 0 )
		{
			$this->error('The domain has already existed!',U('Configure/premiumlist'),2);
		}else
		{
			$where['price'] = I('post.price');
			$where['rate'] = I('post.rate');
			$Model->data($where)->add();
			$this->success('The domain has already add successfully!',U('Configure/premiumlist'),2);
		}
	}
	public function premiumdel()
	{
		$where['id'] =I('get.domainid');
		$Model = M('premium');
		$Model->where($where)->delete();
		$this->success('The domain has already delete successfully!',U('Configure/premiumlist'),2);
	}
	public function premiumdetail()
	{
		$where['id'] =I('get.id');
		$Model = M('premium');
		$item = $Model->where($where)->find();
		print_r($item);
		$this->assign('item',$item);// 
		$this->display(T('mgr/configure_domainprice_premiumedit'));
	}
	public function premiumedit()
	{
		$data['id'] =I('post.domainid');
		$where['domainname'] =I('post.domainname');
		$Model = M('premium');
		$count = $Model->where($where)->count();
		if($count <= 0 )
		{
			$this->error('The domain has no existed!',U('Configure/premiumlist'),2);
		}else
		{
			$where['price'] = I('post.price');
			$where['rate'] = I('post.rate');
			$Model->where($data)->save($where);
			$this->success('The domain has already edit successfully!',U('Configure/premiumlist'),2);
		}
	}
	/*payment setting*/
	public function paymentlist(){
		/*get payment method*/
		$Model = M('paymethod');
		//$condition['useable'] = 'Y';
		$ct = $Model->select();
		$this->assign('list',$ct);// 
		$this->display(T('mgr/configure_payment'));
	}
	/*currency setting*/
	public function currencies(){
		$this->display(T('mgr/configure_currencies'));
	}
	public function taxrules(){
		$this->display(T('mgr/configure_taxrules'));
	}
	public function promotion(){
		$this->display(T('mgr/configure_promotion'));
	}
	public function domainregistrar(){
		/*get payment method*/
		$Model = M('registrar');
		//$condition['useable'] = 'Y';
		$ct = $Model->select();
		$this->assign('list',$ct);// 
		$this->display(T('mgr/configure_domainregistrar'));
	}
	public function delregistrar(){
		/*get payment method*/
		$ct['id'] = I('get.id');
		$Model = M('registrar');
		$Model->where($ct)->delete();
		$this->success('The registrar deletes successfully!',U('Configure/domainregistrar'),2);
	}
	public function addregistrar(){
		/*get payment method*/
		$Mt = M('registrar');
        $dr["registrar"] = I('post.registrar');
        $rr = $Mt->where($dr)->find();
		if(!empty($rr)){
			$this->error('The registrar has already existed!',U('Configure/domainregistrar'),2);
		}else
		{
			$dr["status"] = I('post.status');
			$Mt->data($dr)->add();
			$this->success('The registrar has already added successfully!',U('Configure/domainregistrar'),2);
		}
	}
	public function editregistrarpage(){
		$ct['id'] = I('get.id');
		$Model = M('registrar');
		$content = $Model->where($ct)->find();
		$this->assign('list',$content);// 
		$this->display(T('mgr/configure_domainregistrar_edit'));
	}
	public function editregistrar(){
		$Mt = M('registrar');
        $dr["registrar"] = I('post.registrar');
		$dc['status'] = I('post.status');
        $Mt->where($dr)->save($dc);
		$this->success('The registrar has already changed successfully!',U('Configure/domainregistrar'),2);
	}
	/*############################*/
	
	
	
}