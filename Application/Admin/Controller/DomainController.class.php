<?php
namespace Admin\Controller;
use Think\Controller;
class DomainController extends CommonController {
	public function domainlist()
	{
		$search =I('post.search');
        $Model = M('domainmgr');
        if(!empty($search))
        {
            $condition['domainname'] = array('like','%'.$search.'%');
            $condition['username'] = array('like','%'.$search.'%');
            $condition['registrar'] = array('like','%'.$search.'%');
            $condition['status'] = array('like','%'.$search.'%');
			$condition['orderID'] = array('like','%'.$search.'%');
            $condition['_logic'] = 'OR';
            $list = $Model->where($condition)->order('id desc')->page(I('get.p').',42')->select();
		    $count = $Model->where($condition)->count();// get count of records
        }else
        {
            $list = $Model->where("id>=0")->order('id desc')->page(I('get.p').',42')->select();
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
        $this->display(T('mgr/domains_list'));
		
	}
	
	
	
	public function domaindetail()
	{
		$domainid = I('get.domainid');
		$data['id'] = $domainid;
		$Model = M('domainmgr');
		$domain = $Model->where($data)->find();
		$this->assign('domain',$domain);// 
		$this->assign('domainid',$domainid);// 
		/* Get orderId */
		$ct['domainname'] = $domain['domainname'];
		$Mitem = M('item');
		$orders = $Mitem->where($ct)->find();
		$orderID = $orders['orderID'];
		$this->assign('orderid',$orderID);//
		/*get domain whois*/
		$msg = getWhois($domain['domainname']);
        $flag =  $msg[1];
        $whoisinfo =  $msg[0];//whoisinfo
		$this->assign('whois',$whoisinfo);// 
		$this->display(T('mgr/domains_detail'));
	}
	public function domainupdate()
	{
		$where['id'] = I('get.domainid');
		$data['domainname'] = I('post.domainname');
		$data['expirydate'] = I('post.expirydate');
		$data['nextduedate'] = I('post.nextduedate');
		$data['status'] = I('post.status');
		$Model = M('domainmgr');
		$Model->where($where)->save($data);
		$this->success('Update the domain successfully!',U('Domain/domaindetail?domainid='.$where['id'].''),1);
		
	}
	public function domainprofileupdate()
	{
		$where['id'] = I('get.domainid');
		$data['email'] = I('post.email','','htmlspecialchars');//get email
		$data['firstname'] = I('post.firstname','','htmlspecialchars');//get firstname
		$data['lastname'] = I('post.lastname','','htmlspecialchars');//get firstname
		$data['company'] = I('post.company','','htmlspecialchars');//get firstname
		$data['jobtitle'] = I('post.jobtitle','','htmlspecialchars');//get firstname
		$data['address1'] = I('post.address1','','htmlspecialchars');//get firstname
		$data['address2'] = I('post.address2','','htmlspecialchars');//get firstname
		$data['city'] = I('post.city','','htmlspecialchars');//get firstname
		$data['state'] = I('post.state','','htmlspecialchars');//get firstname
		$data['postcode'] = I('post.postcode','','htmlspecialchars');//get firstname
		$data['country'] = I('post.country','','htmlspecialchars');//get firstname
		$data['phone'] = I('post.phone','','htmlspecialchars');//get firstname
		$data['fax'] = I('post.fax','','htmlspecialchars');//get firstname
		$data['ns1'] = I('post.ns1','','htmlspecialchars');//get firstname
		$data['ns2'] = I('post.ns2','','htmlspecialchars');//get firstname
		$data['ns3'] = I('post.ns3','','htmlspecialchars');//get firstname
		$data['ns4'] = I('post.ns4','','htmlspecialchars');//get firstname
		$Model = M('domainmgr');
		$Model->where($where)->save($data);
		$this->success('Update the Domain Registration Profile successfully!',U('Domain/domaindetail?domainid='.$where['id'].''),1);
	}
	public function domaintools()
	{
		$where['id'] = I('get.domainid');
		$data['mainforward'] = I('post.mainforward');
		$data['IDprotect'] = I('post.IDprotect');
		$data['DNSmgr'] = I('post.DNSmgr');
		$Model = M('domainmgr');
		$Model->where($where)->save($data);
		$this->success('Update the domain tools successfully!',U('Domain/domaindetail?domainid='.$where['id'].''),1);
	}
	public function domainsendemail()
	{
		$domainid = I('get.domainid');
		$this->success('Send Email successfully!',U('Domain/domaindetail?domainid='.$domainid.''),1);
	}
	public function domainremove()
	{
		$where['id'] = I('get.domainid');
		$Model = M('domainmgr');
		$domain = $Model->where($where)->find();
		$Model->where($where)->delete();
		/*del item*/
		$Mitem =  M('item');
		$ct0['domainname'] = $domain['domainname'];
		$iteminfo = $Mitem->where($ct0)->find();//del item
		$Mitem->where($ct0)->delete();//del item
		$itemCount = $Mitem->where($ct0)->count();
		/*del domain*/
		if($itemCount == 0)
		{
			$ctd['orderID'] = $iteminfo['orderID'];
			$Mdomain = M('order');
			$Mdomain->where($ctd)->delete();//del domain
		}
			
		
		$this->success('Remove the domain successfully!',U('Domain/domainlist'),1);
		
	}
	
	
	
	
}