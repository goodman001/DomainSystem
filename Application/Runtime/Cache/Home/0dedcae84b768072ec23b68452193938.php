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
		<div class="row">
			<div class="col-xs-12">
				<h4 class="text-success"><i class="fa fa-bell-o" aria-hidden="true"></i> Your order has been completed and thank you for shopping! The administrator will verify your payment as soon as possible</h4>
			</div>
			<div class="col-xs-12">
				<div class="col-md-4"></div>
				<div class="col-md-4"><a href="<?php echo U('Index/index');?>" class="btn btn-success btn-lg btn-block"> <i class="fa fa-angle-left"></i> Return</a></div>
				<div class="col-md-4"></div>
			</div>
			<div class="col-xs-12">
				<div class="invoice-title">
					<h2><i class="fa fa-shopping-bag" aria-hidden="true"></i> Order # <?php echo ($order["orderID"]); ?></h2>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-6">
						<address>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Order ID</strong>:</div><div class="col-xs-7"><?php echo ($order["orderID"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Order Issue date</strong>: </div><div class="col-xs-7"><?php echo ($order["issuedate"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Username</strong>: </div><div class="col-xs-7"><?php echo ($order["username"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Status</strong>: </div><div class="col-xs-7"><?php echo ($order["status"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Refund</strong>: </div><div class="col-xs-7">No</div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Invoice date</strong>: </div><div class="col-xs-7"><?php echo ($order["invoicedate"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Due date</strong>: </div><div class="col-xs-7"><?php echo ($order["duedate"]); ?></div></div>
						</address>
					</div>
					<div class="col-xs-6">
						<address>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Transaction ID</strong>:</div><div class="col-xs-7"><?php echo ($trans["transactionID"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Client Name</strong>: </div><div class="col-xs-7"><?php echo ($trans["clientname"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Card Number/Account number</strong>: </div><div class="col-xs-7"><?php echo ($trans["accountnumber"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Invoice ID</strong>: </div><div class="col-xs-7"><?php echo ($trans["invoiceID"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Payment Date</strong>: </div><div class="col-xs-7"><?php echo ($trans["paydate"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Payment Method</strong>: </div><div class="col-xs-7"><?php echo ($trans["paymethod"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Settle Amount</strong>: </div><div class="col-xs-7"><?php echo ($trans["settleamount"]); ?> HK$</div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Description</strong>: </div><div class="col-xs-7"><?php echo ($trans["description"]); ?></div></div>
						</address>
					</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title"><strong>Order summary</strong></h3>
					</div>
					<div class="panel-body">
						<div class="table-responsive">
							<table class="table table-condensed">
								<thead>
									<tr>
										<td class="text-center"><strong>Item</strong></td>
										<td class="text-center"><strong>Price</strong></td>
										<td class="text-center"><strong>Years</strong></td>
										<td class="text-center"><strong>Totals</strong></td>
									</tr>
								</thead>
								<tbody>
									<!-- foreach ($order->lineItems as $line) or some such thing here -->
									<?php if(is_array($items)): foreach($items as $key=>$vo): ?><tr>
										<td class="text-center"><?php echo ($vo["domainname"]); ?></td>
										<td class="text-center"><?php echo ($vo["price"]); ?> HK$</td>
										<td class="text-center"><?php echo ($vo["years"]); ?></td>
										<td class="text-center"><?php echo $vo['years']*$vo['price']; ?> </td>
									</tr><?php endforeach; endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

		</div>
	</body>
</html>