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
		<h3><i class="fa fa-shopping-basket" aria-hidden="true"></i> My Order</h3>
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Order list</h4>
			</div>
			<div class="panel-body">
				<table id="cart" class="table table-hover table-condensed">
					<thead>
						<tr>
							<th style="width:30%" class="text-left">Domain</th>
							<th style="width:20%" class="text-center">Price</th>
							<th style="width:20%" class="text-center">Years</th>
						</tr>
					</thead>
					<tbody>
						<?php if(is_array($res)): foreach($res as $key=>$vo): ?><tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><h5 class="nomargin text-right"><i class="fa fa-tag" aria-hidden="true"></i></h5></div>
									<div class="col-sm-10">
										<h5 class="nomargin text-left text-danger"><?php echo ($vo[0]); ?></h5>
									</div>
								</div>
							</td>
							<td data-th="Price" ><h5 class="nomargin text-center text-danger"><?php echo ($vo[1]); ?></h5></td>
							<td data-th="Price" ><h5 class="nomargin text-center text-danger"><?php echo ($vo[2]); ?></h5></td>
							
						</tr><?php endforeach; endif; ?>

					</tbody>
					<tfoot>
						<tr>
							<td></td>
							<td></td>
							<td><h4 class="text-danger"><strong>Total <?php echo ($total); ?>HK$</strong></h4></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<form role="form" action="<?php echo U('Order/upload');?>" method="post">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4> Domain Registration Profile</h4>
			</div>
			<div class="panel-body">
				<div class="col-md-12">
					<div class="form-group col-lg-3">
						<label>First Name</label>
						<input class="form-control" name="firstname" type="text" id="firstname" placeholder="first name" value="" required/>  
					</div>
					<div class="form-group col-lg-3">
						<label>Last Name</label>
						<input class="form-control" name="lastname" type="text" id="lastname" placeholder="last name" value="" required/> 
					</div>
					<div class="form-group col-lg-3">
						<label>Company Name</label>
						<input class="form-control" name="company" type="text" id="company" placeholder="Company" value="" /> 
					</div>
					<div class="form-group col-lg-3">
						<label>Job Title</label>
						<input class="form-control" name="jobtitle" type="text" id="jobtitle" placeholder="Job title" value="" /> 
					</div>
					<div class="form-group col-lg-3">
						<label>Email</label>
						<input class="form-control" name="email" type="email" id="email" placeholder="Email" value="" required/> 
					</div>
					<div class="form-group col-lg-3">
						<label>City</label>
						<input class="form-control" name="city" type="text" id="city" placeholder="City" value="" required/> 
					</div>
					<div class="form-group col-lg-3">
						<label>State</label>
						<input class="form-control" name="state" type="text" id="state" placeholder="State" value="" required/> 
					</div>
					<div class="form-group col-lg-3">
						<label>Postcode</label>
						<input class="form-control" type="number" value="" name="postcode" id="postcode" placeholder="Postcode" required> 
					</div>
					<div class="form-group col-lg-3">
						<label>Country</label>
						<input class="form-control" name="country" type="text" id="country" placeholder="Country" value="" required/>
					</div>
					<div class="form-group col-lg-3">
						<label>Phone</label>
						<input class="form-control" type="tel" value="" name="phone" id="phone" placeholder="Phone" required> 
					</div>
					<div class="form-group col-lg-3">
						<label>FAX</label>
						<input class="form-control" type="tel" value="" name="fax" id="fax" placeholder="Fax" required> 
					</div>
					
					<div class="form-group col-lg-6">
						<label>Address1</label>
						<input class="form-control" name="address1" type="text" id="address1" placeholder="Address 1" value="" required/> 
					</div>
					<div class="form-group col-lg-6">
						<label>Address2</label>
						<input class="form-control" name="address2" type="text" id="address2" placeholder="Address 2" value="" required/>
					</div>
					<div class="form-group col-lg-4">
						<label>NameServer1(require)</label>
						<input class="form-control" name="ns1" type="text" id="ns1" placeholder="NameServer" value="" required/>
					</div>
					<div class="form-group col-lg-4">
						<label>NameServer2(optional)</label>
						<input class="form-control" name="ns2" type="text" id="ns2" placeholder="NameServer" value="" required/>
					</div>
					<div class="form-group col-lg-4">
						<label>NameServer3(optional)</label>
						<input class="form-control" name="ns3" type="text" id="ns3" placeholder="NameServer" value="" required/>
					</div>
					<div class="form-group col-lg-4">
						<label>NameServer4(optional)</label>
						<input class="form-control" name="ns4" type="text" id="ns4" placeholder="NameServer" value="" required/>
					</div>	
				</div>
			</div>
		</div>
		<div class="panel panel-default credit-card-box">
			<div class="panel-heading display-table" >
				<h4>Payment Details<img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png"></h4>                  
			</div>
			<div class="panel-body">
				<div class="col-md-6">
					<div class="form-group col-lg-12">
					<label>Select payment method</label>
					<select class="form-control" name="accounttype" required>
						<?php if(is_array($payments)): foreach($payments as $key=>$vo): ?><option value= "<?php echo ($vo["method"]); ?>"><?php echo ($vo["method"]); ?></option><?php endforeach; endif; ?>
					</select>
					</div>
					<div class="form-group col-lg-12">
						<label >Card Number/Account number</label>
						<input type="text" value="" name="accountnumber" id="accountnumber"  placeholder="Amount Number" class="form-control" required>
					</div>
					<div class="form-group col-lg-12">
						<label >Client name</label>
						<input type="text" value="" name="clientname" id="accountnumber"  placeholder="Client's real name" class="form-control" required>
					</div>
					<div class="form-group col-lg-12">
					<label>One-Time Password</label>
					<input type="password" value="" name="onepassword" id="onepassword"  placeholder="onepassword" class="form-control" required> 
					</div>
				</div>
			</div>
		</div>  
		<div class="col-md-12">
			<div class="col-lg-4">
				<h4 class="text-danger"><strong>Total number of goods : <?php echo ($amount); ?> </strong></h4>
			</div>
			<div class="col-lg-3">
				<h4 class="text-danger"><strong>Total : <?php echo ($total); ?>HK$</strong></h4>
			</div>
			<div class="col-lg-3 text-right">
				<button type="submit" class="btn btn-danger btn-lg btn-block"><i class="fa fa-plus" aria-hidden="true"></i> Order</button>
			</div>
			<div class="col-lg-2 text-right">
				<a href="<?php echo U('Index/index');?>" class="btn btn-success btn-lg btn-block"> Cancle</a>
			</div>
		</div>
		</form>
		
	</div>

		</div>
	</body>
</html>