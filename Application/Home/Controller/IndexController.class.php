<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	 	//test();
		//getWhois();
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		$this->assign('showindex',0);
        $this->display(T('homepage/index'));
    }
    public function search(){
        $available = 0;//no avilable
		$msg = array();
        $dm_name = I('post.dmname');
        $dm_name = str_replace('www.','',$dm_name);
        if(empty($dm_name)){
            $this->error('Domain name must be not null！');
            return 0;
        }
        //get price configure
        $Model = M('configure');
        $re = $Model->field('domainprice')->where('id=1')->find();
        $price = $re['domainprice'];
        
        $showflag = 0;//
        $msg = getWhois($dm_name);
        $flag =  $msg[1];
        $whoisinfo =  $msg[0];//whoisinfo
        //print($flag);
        if($flag == "Y"){////we can use it!
            $data["domainname"] = $dm_name;
            $Model = M('domainmgr');
		    $content = $Model->field('domainname,nextduedate,status')->where($data)->find();
            if(!empty($content))
            {
                $duedate = strtotime($content['nextduedate']);
                $now = time();
                if($content['status'] != 'suspend')
                {
                    if($now > $duedate)// domain : pending(renew) active suspend
                    {
                        $showflag = 1;
                    }
                }
                
            }else
            {
                $showflag = 1;
                $Model = M('premiumdomain');
                $content2 = $Model->where($data)->find();
                if(!empty($content2))
                {
                    $price = $price*1.2;//increase 20%
                }
            }
            
        }
        $this->assign('showflag',$showflag);
        $this->assign('dm_name',$dm_name);
        $this->assign('price',$price);
        $this->assign('whoisinfo',$whoisinfo);
        $this->assign('showindex',1);
        $this->display(T('homepage/index'));
            //$this->assign('showflag',1);
            //$this->assign('available',1);
            //
    }
    //shoppingcart list
    public function addshoppingcart()
    {
        //cookie formate #dm||price#
        $dm_name = I('get.dm');
        $price = I('get.price');
        $years = I('post.years');
        //print($price);
        //return 0;
        $cell = $dm_name."||".$price."||".$years."#";
        $listcart = cookie('shopcart');
        if(empty($listcart)||$listcart=='')
        {
            cookie('shoptotal',$price*$years,360000);
            cookie('shopcart',$cell,360000);
        }else
        {
            if(strstr($listcart,$dm_name))//include the dm
            {
                cookie('shoptotal',cookie('shoptotal'),360000);
                cookie('shopcart',$listcart,360000);
            }else
            {
                cookie('shoptotal',cookie('shoptotal')+$price*$years,360000);
                cookie('shopcart',$listcart.$cell,360000);
            }
            
        }
        
        //print(cookie('shopcart')."----".cookie('shoptotal'));
        $this->success('Add shopping cart successfully!',U('Index/showshoppingcart'),1);
        
    }
    public function showshoppingcart()
    {
        $total = cookie('shoptotal');
        $lists = cookie('shopcart');
        $showcart = 1;
        if(empty($lists)||$lists == '')
        {
            $showcart = 0;
        }
        $bigitem = explode('#',$lists); 
        $res = array();
        #print_r($bigitem);
        for($index=0;$index<count($bigitem)-1;$index++) 
        { 
            $res[$index] = explode('||',$bigitem[$index]); 
        }
        $this->assign('res',$res);
        $this->assign('total',$total);
        $this->assign('showcart',$showcart);
        $this->display(T('homepage/shoppingcart'));
    }
    public function delshoppingcart()
    {
        $dm_name = I('dm');
        $price = I('price');
        $years = I('years');
        $cell = $dm_name."||".$price."||".$years."#";
        $total = cookie('shoptotal');
        $lists = cookie('shopcart');
        $lists = str_replace($cell,'',$lists);
        $total = $total - $price*$years;
        if(empty($lists)||$lists =='')
        {
            cookie('shoptotal',0,360000);
            cookie('shopcart',null,360000);
            
        }else
        {
            cookie('shoptotal',$total,360000);
            cookie('shopcart',$lists,360000);
        }
        
        //print(cookie('shopcart'));
        R('Index/showshoppingcart');
    }
    
}
