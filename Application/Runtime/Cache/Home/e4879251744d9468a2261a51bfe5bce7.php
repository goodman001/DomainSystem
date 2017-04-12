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
		
	<div class="container" style="background-color:white">
		<h3><i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart</h3>
		<?php if($showcart == 1): ?><table id="cart" class="table table-hover table-condensed">
			<thead>
				<tr>
					<th style="width:30%" class="text-left"><i class="fa fa-tag" aria-hidden="true"></i> Domain</th>
					<th style="width:20%" class="text-center">Price</th>
					<th style="width:20%" class="text-center">Years</th>
					<th ></th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($res)): foreach($res as $key=>$vo): ?><tr>
					<td data-th="Product">
						<div class="row">
							<div class="col-sm-1 hidden-xs"><h4 class="nomargin text-right"><i class="fa fa-tag" aria-hidden="true"></i></h4></div>
							<div class="col-sm-11">
								<h4 class="nomargin text-left text-danger"><?php echo ($vo[0]); ?></h4>
							</div>
						</div>
					</td>
					<td data-th="Price" ><h4 class="nomargin text-center text-danger"><?php echo ($vo[1]); ?></h4></td>
					<td data-th="Price" ><h4 class="nomargin text-center text-danger"><?php echo ($vo[2]); ?></h4></td>
					<td class="actions" data-th="">
						<h4>
							<a class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></a>
							<a class="btn btn-danger btn-sm" href="<?php echo U('Index/delshoppingcart?dm='.$vo[0].'&price='.$vo[1].'&years='.$vo[2].'');;?>"><i class="fa fa-trash-o"></i></a>	
						</h4>
					</td>
				</tr><?php endforeach; endif; ?>
				
			</tbody>
			<tfoot>
				<tr>
					<td><a href="<?php echo U('Index/index');?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
					<td><h4 class="text-danger"><strong>Total <?php echo ($total); ?>HK$</strong></h4></td>
					<td><a href="<?php echo U('Order/index');?>" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
					<td></td>
				</tr>
			</tfoot>
		</table>
		<?php else: ?> 
			<h3 class="nomargin text-center text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>The shopping cart is empty!</h3>
			<h3 class="nomargin text-center"><a href="<?php echo U('Index/index');?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></h3><?php endif; ?>
	</div>

		</div>
	</body>
</html>