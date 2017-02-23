<?php
namespace Home\Controller;
use Think\Controller;
class ClientController extends Controller {
	/**
    *   show client index page
    **/
    public function index()
    {
    	$this->display(T('client/index'));
    }
	/**
    ** enter register page
    **/
	public function inbox(){
		$this->display(T('client/inbox'));
	}
    
	
}
?>