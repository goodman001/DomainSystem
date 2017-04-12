<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb" lang="zh-CN">
	<head>
		<title>JHCL</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="domain shopping">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="/DomainSystem/Public/style.css" rel="stylesheet" type="text/css">
		<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js"></script>
	</head>
	<body <?php if($bodyshow == 1): ?>class="indexbody"<?php else: ?>class="commonbody"<?php endif; ?> >
		<div class="header navbar navbar-inverse ">
		<!-- BEGIN TOP NAVIGATION BAR -->
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="cus0">
						<div class="navbar-header">
							<a class="navbar-brand" href="<?php echo U('Index/index');;?>"><img style="max-width:100px; margin-top: -7px;" src="/DomainSystem/Public/img/logo.png" /></a>
						</div>
						<div>
							<ul class="nav navbar-nav">
								<li><a href="#">About Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
							<!--right-->
							<?php if(cookie('u_username')): ?><ul class="nav navbar-nav navbar-right">
									<li>
										<a href="<?php echo U('Index/showshoppingcart');;?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a>
									</li>
									<li>
										
										<a href="<?php echo U('Client/index');;?>"><i class="fa fa-user-o" aria-hidden="true"></i> My Account</a>
									</li>
									<li>
										
										<a href="<?php echo U('Login/logout');;?>"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
									</li>
								</ul>
							<?php else: ?> 
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="<?php echo U('Index/showshoppingcart');;?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</a>
									</li>
									<li>
										<a href="<?php echo U('Login/login');;?>"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a>
									</li>
									<li>
										<a href="<?php echo U('Login/register');;?>"><i class="fa fa-registered" aria-hidden="true"></i> Register </a>
									</li>
									<li>

									</li>
								</ul><?php endif; ?>

						</div>
					</div>
					
					
					
				<!-- HEADER ELEMENTS GO HERE -->
				</div>
			</div>
		<!-- END TOP NAVIGATION BAR -->
		</div>
		<div class="cus0">
		
	<div class="container" style="margin-top:10px;margin-left:1%;margin-right:2%;">
		<div class="row">
			<div class="row" style="margin-left:5px;margin-right:5px;padding:10px; width:50%;background-color:white">	
				<h3><i class="fa fa-user" aria-hidden="true"> User Login</i></h3>
				<form role="form" class="form-horizontal" action="<?php echo U('Login/checkLog');;?>" method="post">  
				<div class="form-group">  
					<label class="col-md-3 control-label" for="name">Username</label>  
					<div class="col-md-9">  
						<input class="form-control" name="username" type="name" id="username" placeholder="Username" value="" required/>  
					</div>  
				</div>
				<div class="form-group">  
					<label class="col-md-3 control-label" for="exampleInputPassword1">Password</label>  
					<div class="col-md-9">  
						<input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>  
					</div>  	
				</div>  		  		  
				<div class="form-group">  
					<div class="col-md-offset-2 col-md-12">  
						<button type="submit" class="btn btn-primary  btn-large">  
							Submit
						</button>  
						<a href="<?php echo U('Login/findpwdstep0');;?>"> Forget password?</a>
					</div>  
				</div>  
				</form> 
			</div> 
		</div>
	</div>

		</div>
	</body>
</html>