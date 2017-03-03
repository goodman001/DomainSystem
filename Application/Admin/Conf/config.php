<?php
return array(
	'TMPL_PARSE_STRING' =>array(
	'PAGE_LISTROWS' => 15, //每页显示的记录数，初始显示
	'VAR_PAGE' => 'pageNum',
	'DB_LIKE_FIELDS'=>'USERNAME|EMAIL|title|domainname', //支持模糊查询的字段
	'NOT_M_MODULE' => 'Index,Exit', //无需执行实例化的模块
	),
	'AUTH_SUPERADMIN' => '1',//super administrator
	'LOGIN_TIPS' => 'Please log in first!',
	'LOGIN_SUCCESS' => 'Login successfully! welcome !',
	'LOGIN_ERROR' => 'username or password is wrong!',
	'PERMISSION_DENIED_WARNING' => 'Sorry,Permission denied!',
	
);