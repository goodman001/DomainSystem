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
		
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="invoice-title">
					<h2>Order # <?php echo ($order["orderID"]); ?></h2>
				</div>
				<hr>
				<div class="row">
					<div class="col-xs-5">
						<address>
						<div class="col-xs-12"><div class="col-xs-4 text-right"><strong>Order ID</strong>:</div><div class="col-xs-8">963852741963852741<?php echo ($order["orderID"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-4 text-right"><strong>Order Issue date</strong>: </div><div class="col-xs-8"><?php echo ($order["issuedate"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-4 text-right"><strong>Username</strong>: </div><div class="col-xs-8"><?php echo ($order["username"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-4 text-right"><strong>Status</strong>: </div><div class="col-xs-8"><?php echo ($order["status"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-4 text-right"><strong>Refund</strong>: </div><div class="col-xs-8"><?php echo ($order["refund"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-4 text-right"><strong>Invoice date</strong>: </div><div class="col-xs-8"><?php echo ($order["invoicedate"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-4 text-right"><strong>Due date</strong>: </div><div class="col-xs-8">Waiting</div></div>
						</address>
					</div>
					<div class="col-xs-7">
						<address>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Transaction ID</strong>:</div><div class="col-xs-7">963752741963752741<?php echo ($trans["transactionID"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Client Name</strong>: </div><div class="col-xs-7"><?php echo ($trans["clientname"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Card Number/Account number</strong>: </div><div class="col-xs-7"><?php echo ($trans["accountnumber"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Invoice ID</strong>: </div><div class="col-xs-7"><?php echo ($trans["invoiceID"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Payment Date</strong>: </div><div class="col-xs-7"><?php echo ($trans["paydate"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Payment Method</strong>: </div><div class="col-xs-7"><?php echo ($trans["paymethod"]); ?></div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Settle Amount</strong>: </div><div class="col-xs-7"><?php echo ($trans["settleamount"]); ?> HK$</div></div>
						<div class="col-xs-12"><div class="col-xs-5 text-right"><strong>Description</strong>: </div><div class="col-xs-7"><?php echo ($trans["description"]); ?></div></div>
						</address>
					</div>
					<div class="col-xs-4 text-right">
						<address>
						<strong>Shipped To:</strong><br>
							Jane Smith<br>
							1234 Main<br>
							Apt. 4B<br>
							Springfield, ST 54321
						</address>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-4">
						<address>
							<strong>Payment Method:</strong><br>
							Visa ending **** 4242<br>
							jsmith@email.com
						</address>
					</div>
					<div class="col-xs-4 text-right">
						<address>
							<strong>Order Date:</strong><br>
							March 7, 2014<br><br>
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
										<td><strong>Item</strong></td>
										<td class="text-center"><strong>Price</strong></td>
										<td class="text-center"><strong>Quantity</strong></td>
										<td class="text-right"><strong>Totals</strong></td>
									</tr>
								</thead>
								<tbody>
									<!-- foreach ($order->lineItems as $line) or some such thing here -->
									<tr>
										<td>BS-200</td>
										<td class="text-center">$10.99</td>
										<td class="text-center">1</td>
										<td class="text-right">$10.99</td>
									</tr>
									<tr>
										<td>BS-400</td>
										<td class="text-center">$20.00</td>
										<td class="text-center">3</td>
										<td class="text-right">$60.00</td>
									</tr>
									<tr>
										<td>BS-1000</td>
										<td class="text-center">$600.00</td>
										<td class="text-center">1</td>
										<td class="text-right">$600.00</td>
									</tr>
									<tr>
										<td class="thick-line"></td>
										<td class="thick-line"></td>
										<td class="thick-line text-center"><strong>Subtotal</strong></td>
										<td class="thick-line text-right">$670.99</td>
									</tr>
									<tr>
										<td class="no-line"></td>
										<td class="no-line"></td>
										<td class="no-line text-center"><strong>Shipping</strong></td>
										<td class="no-line text-right">$15</td>
									</tr>
									<tr>
										<td class="no-line"></td>
										<td class="no-line"></td>
										<td class="no-line text-center"><strong>Total</strong></td>
										<td class="no-line text-right">$685.99</td>
									</tr>
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