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
		<div class="header navbar navbar-inverse ">
		<!-- BEGIN TOP NAVIGATION BAR -->
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="cus0">
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
							<?php if(cookie('u_username')): ?><ul class="nav navbar-nav navbar-right">
									<li>
										<a href="<?php echo U('Index/showshoppingcart');;?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Shopping Cart</a>
									</li>
									<li>
										<a href="<?php echo U('Client/index');;?>">My Account</a>
									</li>
									<li>
										<a href="<?php echo U('Login/logout');;?>">Logout</a>
									</li>
								</ul>
							<?php else: ?> 
								<ul class="nav navbar-nav navbar-right">
									<li>
										<a href="<?php echo U('Index/showshoppingcart');;?>"><i class="fa fa-shopping-cart" aria-hidden="true"></i>Shopping Cart</a>
									</li>
									<li>
										<a href="<?php echo U('Login/login');;?>">Login</a>
									</li>
									<li>
										<a href="<?php echo U('Login/register');;?>">Register </a>
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
		
	<div class="container" style="margin-top:20px">
	   <div class="row">
			<div class="col-md-6">
				<form action="<?php echo U("Index/search");?>" method="post" >
				<div class="input-group">
					<input name="dmname" type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">Search</button>
					</span>
				</div><!-- /input-group -->
				</form>
			</div>
			<div class="col-md-6"> 
			</div>
		</div>
		<?php if($showindex == 1): ?><h3>Search results</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Domain state
					</div>
					<?php if($showflag == 1): ?><div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Domain</th>
									<th>State</th>
									<th>Price</th>
									<th>Step</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?php echo ($dm_name); ?></td>
									<td>Avaliable</td>
									<td><?php echo ($price); ?> HK$ per year</td>
									<form role="form" action="<?php echo U('Index/addshoppingcart?dm='.$dm_name.'&price='.$price.'');;?>" method="post">
									<td>
										<select class="form-control" name="step" required>
											<option value="1">one years </option>
											<option value="2" >two years </option> 
											<option value="3">three years</option>
											<option value="5">five years </option>
										</select>
									</td>
									<td><button type="submit" class="btn btn-primary  btn-large">Add to shopping cart</button> </td>
									</form>
								</tr>
							</tbody>
						</table>
					</div>
					<?php else: ?>
						<div class="panel-body">
							<?php echo ($dm_name); ?> has been registered!No avaliable!
						</div><?php endif; ?>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						Whois infomation
					</div>
					<div class="panel-body">
						<?php echo ($whoisinfo); ?>
					</div>
				</div>
			</div>
			
		</div><?php endif; ?>
	</div>

		</div>
	</body>
</html>