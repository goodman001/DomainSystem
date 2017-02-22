<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb" lang="zh-CN">
	<head>
		<title>domain shopping</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="domain shopping">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="/DomainSystem/Public/style.css" rel="stylesheet" type="text/css">
		<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
			<!-- nav -->
			<nav class="navbar navbar-default" role="navigation">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">菜鸟教程</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">iOS</a></li>
						<li><a href="#">SVN</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								Java
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">jmeter</a></li>
								<li><a href="#">EJB</a></li>
								<li><a href="#">Jasper Report</a></li>
								<li class="divider"></li>
								<li><a href="#">分离的链接</a></li>
								<li class="divider"></li>
								<li><a href="#">另一个分离的链接</a></li>
							</ul>
						</li>
					</ul>
					<!--right-->
					<ul class="nav navbar-nav navbar-right">
						<li>
							<a href="#">Login</a>
						</li>
						<li>
							<a href="<?php echo U('Login/register');;?>">Register </a>
						</li>
						<li>
							
						</li>
					</ul>
				</div>
			</nav>
			<!-- nav end-->

		
	<div class="container" style="margin-top:10px;margin-left:1%;margin-right:2%;">
		<div class="row">
			<h3><i class="fa fa-user" aria-hidden="true">Set your new password</i></h3>
			<div class="row" style="margin-left:5px;margin-right:5px;padding:10px; width:50%;">			          
				<form role="form" class="form-horizontal" action="<?php echo U('Login/findpwdcheck');;?>" method="post">  
				<div class="form-group">  
					<label class="col-md-3 control-label" for="exampleInputPassword1">Password</label>  
					<div class="col-md-9">  
						<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>  
					</div>  	
				</div>  
				<div class="form-group">  
					<label class="col-md-3 control-label" for="name">Verification code</label>  
					<div class="col-md-9">  
						<input class="form-control" type="number" value="" name="code" id="code" placeholder="code" required> 
					</div>  
					<label class="col-md-12 control-label" for="name">The code has been sent to your email,please check your email!</label>  
				</div>		  		  
				<div class="form-group">  
					<div class="col-md-offset-2 col-md-12">  
						<button type="submit" class="btn btn-primary  btn-large">  
							Submit
						</button>  
					</div>  
				</div>  
				</form> 
			</div> 
		</div>
	</div>

	</body>
</html>