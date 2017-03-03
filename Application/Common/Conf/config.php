<?php
return array(
	'DB_TYPE'   => 'mysql', // 数据库类型
	'DB_HOST'   => 'localhost', // 服务器地址
	'DB_NAME'   => 'db_domain', // 数据库名
	'DB_USER'   => 'root', // 用户名
	'DB_PWD'    => 'mysql', // 密码
	'DB_PORT'   => 3306, // 端口
	'DB_PREFIX' => 'db_', // 数据库表前缀 
	'DB_CHARSET'=> 'utf8', // 字符集
	//email setting
	'MAIL_HOST' =>'smtp.126.com',
	'MAIL_SMTPAUTH' =>TRUE, //启用smtp认证
	'MAIL_USERNAME' =>'cynbuaa@126.com',
	'MAIL_FROM' =>'cynbuaa@126.com',
	'MAIL_FROMNAME' =>'Domain System',
	'MAIL_PASSWORD' =>'123456',
	'MAIL_CHARSET' =>'utf-8',
	'MAIL_ISHTML' =>TRUE, 
	
	'URL_CASE_INSENSITIVE' => true, //URL不区分大小写
	'URL_HTML_SUFFIX' => '', //设置伪静态后缀名
	
);