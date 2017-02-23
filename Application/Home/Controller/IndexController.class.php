<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
	 	//test();
		//getWhois();
        //$this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>[ 您现在访问的是Home模块的Index控制器 ]</div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
		$this->assign('showflag',0);
        $this->display(T('homepage/index'));
    }
    public function search(){
        $available = 0;//no avilable
		$msg = array();
        $dm_name = I('post.dmname');
        if(!empty($dm_name)){
            $msg = getWhois($dm_name);
            echo $msg[0];
			echo $msg[1];
            $available = 1;
        }else
        {
            $this->error('Domain name must be not null！');
            return 0;
        }
        //$this->assign('showflag',1);
        //$this->assign('available',1);
        //$this->display(T('homepage/index'));
    }
    
}
