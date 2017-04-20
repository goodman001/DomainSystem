<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 2.3.1
Version: 1.3
Author: KeenThemes
Website: http://www.keenthemes.com/preview/?theme=metronic
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js">
<![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js">
<![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="utf-8"/>
    <title>JHCL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!--begin global -->
    <link href="/DomainSystem/Public/metronic/media/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="/DomainSystem/Public/metronic/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/DomainSystem/Public/metronic/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/chosen.css" rel="stylesheet" type="text/css" />
<!-- END CORE PLUGINS -->
    
    <!-- END begin global -->
    <!--favicon
    <link rel="shortcut icon" href="/DomainSystem/Public/metronic/media/image/favicon.ico"/>
    -->
</head>
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
<!-- BEGIN TOP NAVIGATION BAR -->
<div class="navbar-inner">
<div class="container-fluid">
<!-- BEGIN LOGO -->
    <a class="brand" href="<?php echo U('Profile/index');;?>">
        <center><img style="max-width:100px; margin-top: -7px;" src="/DomainSystem/Public/img/logo.png" /></center>
    </a>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
        <img src="/DomainSystem/Public/metronic/media/image/menu-toggler.png" alt=""/>
    </a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
    <ul class="nav pull-right">
    <!-- BEGIN INBOX DROPDOWN -->
    <!-- END INBOX DROPDOWN -->
    <!-- BEGIN USER LOGIN DROPDOWN -->
    <li class="dropdown user">
        <a href="<?php echo U('Index/shop');;?>" class="dropdown-toggle">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span class="username">Return shopping</span>
        </a>
    </li>
    <li class="dropdown user">
        <a href="<?php echo U('Login/logout');;?>" class="dropdown-toggle">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
            <span class="username">Logout</span>
        </a>
    </li>
    <!-- END USER LOGIN DROPDOWN -->
    </ul>
    <!-- END TOP NAVIGATION MENU -->
</div>
</div>
<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->

    <!-- BEGIN CONTAINER -->
    <div class="page-container">
    <!-- BEGIN SIDEBAR -->
    
    <!-- BEGIN SIDEBAR MENU -->
        
<div class="page-sidebar nav-collapse collapse">
    <ul class="page-sidebar-menu">
    <li>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
        <div class="sidebar-toggler hidden-phone"></div>
        <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
    </li>
    <li>
        <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
        <form class="sidebar-search">
            <div class="input-box">
                <a href="javascript:;" class="remove"></a>
                <input type="text" placeholder="Search..."/>
                <input type="button" class="submit" value=" "/>
            </div>
        </form>
        <!-- END RESPONSIVE QUICK SEARCH FORM -->
    </li>
    <li class="start">
        <a href="<?php echo U('Profile/index');;?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="title">My Profile</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="active">
        <a href="javascript:;">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="title">Customers manager</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li class="active">
                <a href="<?php echo U('Customer/customerlist');;?>">
                    Customers List
                </a>
            </li>
            <li >
                <a href="<?php echo U('Customer/customeradd');;?>">
                    Add Customers</a>
            </li>
        </ul>
    </li>
     <li class="">
        <a href="<?php echo U('Order/orderlist');;?>">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            <span class="title">Order manager</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li class="">
        <a href="<?php echo U('Transaction/translist');;?>">
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <span class="title">Transaction manager</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li >
        <a href="<?php echo U('Domain/domainlist');;?>">
            <i class="fa fa-database" aria-hidden="true"></i>
            <span class="title">Domains manager</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li >
        <a href="javascript:;">
            <i class="fa fa-handshake-o" aria-hidden="true"></i>
            <span class="title">Support</span>
            <span class="arrow "></span>
        </a>
        <!--
        <ul class="sub-menu">
            <li>
                <a href="<?php echo U('Domain/domainlist');;?>">
                    Domain List
                </a>
            </li>
			<li>
                <a href="<?php echo U('Domain/premiumlist');;?>">
                    Premium List
                </a>
            </li>
        </ul>
        -->
    </li>
    <li >
        <a href="javascript:;">
            <i class="fa fa-clipboard" aria-hidden="true"></i>
            <span class="title">Report Module</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a> Monthly Active TLDs</a>
            </li>
			<li>
                 <a> Active Accounts Per TLDs</a>
            </li>
            <li>
                 <a> New Customer</a>
            </li>
            <li>
                 <a> Monthly Transactions</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="active" href="javascript:;">
            <i class="fa fa-cog" aria-hidden="true"></i>
            <span class="title">Configuration</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="javascript:;">
                    General
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/general_web');;?>">Web Setting</a></li>
                    <li><a href="<?php echo U('Configure/general_language');;?>">Language</a></li>
                    <li><a href="<?php echo U('Configure/general_domain');;?>">Domains</a></li>
                    <li><a href="<?php echo U('Configure/general_mail');;?>">Mail</a></li>
                    <li><a href="<?php echo U('Configure/general_credit');;?>">Credit</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo U('Configure/security');;?>">
                     Security
                </a>
            </li>
            <li>
                <a href="#">
                    Email Template
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    Administrators
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/adminlist');;?>">Users manager</a></li>
                    <li><a href="<?php echo U('Configure/adminrolelist');;?>">Roles Manager</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    Domain Price
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/pricesetting');;?>">Price setting</a></li>
                    <li><a href="<?php echo U('Configure/pricetools');;?>">Tools Manager</a></li>
                    <li><a href="<?php echo U('Configure/premiumlist');;?>">Premium Manager</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    Payment
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/paymentlist');;?>">Payment method</a></li>
                    <li><a href="<?php echo U('Configure/currencies');;?>">Currencies</a></li>
                    <li><a href="<?php echo U('Configure/taxrules');;?>">Tax Rules</a></li>
                    <li><a href="<?php echo U('Configure/promotion');;?>">Promotion</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo U('Configure/domainregistrar');;?>">
                    <span class="title">Domain Registrar</span>
                </a>
            </li>
        </ul>
    </li>
    </ul>
</div>

    
    <!-- END SIDEBAR MENU -->
    
    <!-- END SIDEBAR -->
    <!-- BEGIN PAGE -->
        
<!-- BEGIN PAGE -->
<div class="page-content">
<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<div id="portlet-config" class="modal hide">
    <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>portlet Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here will be a configuration form</p>
    </div>
</div>
<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
<!-- BEGIN PAGE CONTAINER-->
<div class="container-fluid">
<!-- BEGIN PAGE HEADER-->
<div class="row-fluid">
    <div class="span12">
        <h3 class="page-title">
            Customer Manager
            <small> Customer Manager</small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="<?php echo U('Profile/index');;?>">Home</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="#">Customer Manager</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li><a href="<?php echo U('Customer/customerlist');;?>">Customers List</a><i class="icon-angle-right"></i></li>
			<li><a href="#">Customers Detail</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid profile">
<div class="span12">
<!--BEGIN TABS-->
<div class="tabbable tabbable-custom tabbable-full-width">
<ul class="nav nav-tabs">
    
    <li class="active"><a href="#tab_1_1" data-toggle="tab">Profile</a></li>
	<li><a href="#tab_1_2" data-toggle="tab">Edit Profile</a></li>
    <li><a href="#tab_1_3" data-toggle="tab">Domain and Profile</a></li>
    <li><a href="#tab_1_4" data-toggle="tab">Orders</a></li>
</ul>
<div class="tab-content">

<!--end tab-pane-->
<div class="tab-pane row-fluid active" id="tab_1_1">
    <div class="span12">
		<ul class="unstyled span10">
			<li><span>UserName:</span> <strong> <?php echo ($profiles["username"]); ?></strong></li>
			<li><span>First Name:</span><strong> <?php echo ($profiles["firstname"]); ?></strong></li>
			<li><span>Last Name:</span><strong> <?php echo ($profiles["lastname"]); ?></strong></li>
			<li><span>Company:</span><strong> <?php echo ($profiles["company"]); ?></strong></li>
			<li><span>Job Title:</span><strong> <?php echo ($profiles["jobtitle"]); ?></strong></li>
			<li><span>Email:</span><strong> <a href="<?php echo ($profiles["email"]); ?>"><?php echo ($profiles["email"]); ?></a></strong></li>
			<li><span>Password:</span><strong> <?php echo ($profiles["password"]); ?></strong></li>
			<li><span>Address1:</span><strong> <?php echo ($profiles["address1"]); ?></strong></li>
			<li><span>Address2:</span><strong> <?php echo ($profiles["address2"]); ?></strong></li>
			<li><span>City:</span><strong> <?php echo ($profiles["city"]); ?></strong></li>
			<li><span>State:</span><strong> <?php echo ($profiles["state"]); ?></strong></li>
			<li><span>PostCode:</span><strong> <?php echo ($profiles["postcode"]); ?></strong></li>
			<li><span>Country:</span><strong> <?php echo ($profiles["country"]); ?></strong></li>
			<li><span>Phone No.:</span><strong> <?php echo ($profiles["phone"]); ?></strong></li>
			<li><span>Fax:</span><strong> <?php echo ($profiles["fax"]); ?></strong></li>
			<li><span>Enable/Disable Overdue Notice:</span><strong> <?php echo ($profiles["overdue"]); ?></strong></li>
			<li><span>Tax Exemption:</span><strong> <?php echo ($profiles["taxexemption"]); ?></strong></li>
			<li><span>Currency:</span><strong> <?php echo ($profiles["currency"]); ?></strong></li>
			<li><span>Balance:</span><strong> <?php echo ($profiles["balance"]); ?> HK$</strong></li>
			<li><span>Register Time:</span><strong> <?php echo ($profiles["regtime"]); ?></strong></li>
			<li><span>Account Status:</span><strong> <?php echo ($profiles["status"]); ?></strong></li>
		</ul>
	</div>
    
</div>
<!--tab_1_2-->
<div class="tab-pane" id="tab_1_2">
	<div style="height: auto;" id="accordion1-1" class="accordion collapse">
        <form role="form" action="<?php echo U('Customer/updateprofile?id='.$cusid.'');;?>" method="post">  
			<label class="control-label">Username</label>
            <input name="username" type="text" id="username" placeholder="user name" value="<?php echo ($profiles["username"]); ?>" class="m-wrap span8" readonly/>
            <label class="control-label">First Name</label>
            <input name="firstname" type="text" id="firstname" placeholder="first name" value="<?php echo ($profiles["firstname"]); ?>" class="m-wrap span8" required/>
            <label class="control-label">Last Name</label>
            <input name="lastname" type="text" id="lastname" placeholder="last name" value="<?php echo ($profiles["lastname"]); ?>"   class="m-wrap span8" required />
            <label class="control-label">Company</label>
            <input name="company" type="text" id="company" placeholder="Company" value="<?php echo ($profiles["company"]); ?>" class="m-wrap span8" />
				
			<label class="control-label">Job title</label>
            <input type="text" name="jobtitle" type="text" id="jobtitle" placeholder="Job title" value="<?php echo ($profiles["jobtitle"]); ?>"  class="m-wrap span8" />
			<label class="control-label">Email</label>
            <input name="email" type="email" id="email" placeholder="Email" value="<?php echo ($profiles["email"]); ?>"  class="m-wrap span8" required/>
			<label class="control-label">Password</label>
			<input type="text" name="password" class="form-control"  placeholder="Password" value="<?php echo ($profiles["password"]); ?>" required>  
			
			<label class="control-label">Address1</label>
            <input name="address1" type="text" id="address1" placeholder="Address 1" value="<?php echo ($profiles["address1"]); ?>"  class="m-wrap span8" required/>	
			<label class="control-label">Address2</label>
            <input name="address2" type="text" id="address2" placeholder="Address 2" value="<?php echo ($profiles["address2"]); ?>"  class="m-wrap span8" />
			
			<label class="control-label">City</label>
            <input name="city" type="text" id="city" placeholder="City" value="<?php echo ($profiles["city"]); ?>"  class="m-wrap span8" required/>
			<label class="control-label">State</label>
            <input name="state" type="text" id="state" placeholder="state" value="<?php echo ($profiles["state"]); ?>"  class="m-wrap span8" required/>
			<label class="control-label">Postcode</label>
            <input type="number" value="<?php echo ($profiles["postcode"]); ?>" name="postcode" id="postcode" placeholder="Postcode"  class="m-wrap span8" required> 
			<label class="control-label">Country</label>
			<input name="country" type="text" id="country" placeholder="Country" value="<?php echo ($profiles["country"]); ?>"  class="m-wrap span8" required/> 
			<label class="control-label">Phone</label>
			<input type="tel" value="<?php echo ($profiles["phone"]); ?>" name="phone" id="phone" placeholder="Phone"  class="m-wrap span8" required> 
			<label class="control-label">Fax</label>
			<input type="tel" value="<?php echo ($profiles["fax"]); ?>" name="fax" id="fax" placeholder="Fax"  class="m-wrap span8" > 
			<label class="control-label">Overdue Notice</label>
			<div class="controls">
			<label class="radio">
				<input type="radio" name="overdue" id="optionsRadios1" value="Enable" checked/>
				Enable
			</label>
			<label class="radio">
				<input type="radio" name="overdue" id="optionsRadios2" value="Disable" />
				Disable
			</label>    
			</div>
			<label class="control-label">Currency</label>
			<select class="form-control" name="currency" required>
				<option value="HKD">HKD</option>
				<option value="USD" >USD</option> 
				<option value="GBP">GBP</option>
				<option value="CNY">CNY</option>
			</select> 
			<label class="control-label">Balance</label>
            <input type="text" value="<?php echo ($profiles["balance"]); ?>" name="amount" id="amount" pattern="^[0-9]+([\.,]{0,1}[0-9]*)$" maxlength="15" minlength="1"   class="m-wrap span8" required>
			<label class="control-label">Account Status</label>
            <select class="form-control" name="status" required>
				<option value="active">active</option>
				<option value="pending" >pending</option> 
				<option value="suspend">suspend</option>
			</select>
            <div class="submit-btn">
                <button type="submit" class="btn green">Save Changes</button>
                <a href="<?php echo U('Customer/customerdetail?id='.$cusid.'');;?>" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</div>
<!-- tab_1_3 -->
<div class="tab-pane" id="tab_1_3">
	<div class="row-fluid">	
        <div class="span12">
            <table class="table table-striped table-hover">
               <thead>
                <tr>
                    <th>Domain</th>
                    <th>Registrar</th>
                    <th>Email</th>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Phone</th>
                    <th>Postcode</th>
                    <th></th>
                </tr>
               </thead>
               <tbody>
                <?php if(is_array($domains)): foreach($domains as $key=>$vo): ?><tr>
                    <td><?php echo ($vo["domainname"]); ?></td>
                    <td><?php echo ($vo["registrar"]); ?></td>
                    <td><?php echo ($vo["email"]); ?></td>
                    <td><?php echo ($vo["firstname"]); ?></td>
                    <td><?php echo ($vo["lastname"]); ?></td>
                    <td><?php echo ($vo["city"]); ?></td>
                    <td><?php echo ($vo["state"]); ?></td>
                    <td><?php echo ($vo["country"]); ?></td>
                    <td><?php echo ($vo["phone"]); ?></td>
                    <td><?php echo ($vo["postcode"]); ?></td>
                    <td>
                        <a class="btn yellow easy-pie-chart-reload" href="<?php echo U('Domain/domaindetail?domainid='.$vo['id'].'');;?>">
                            view detail
                        </a>
                    </td>
                  </tr><?php endforeach; endif; ?>
               </tbody>
            </table>
            <span><div class="page"><?php echo ($page); ?></div></span>
        </div>
        
        
        
	</div>
</div>
<!-- tab_1_4 -->
<div class="tab-pane" id="tab_1_4">
	<div class="row-fluid">	
        <div class="span12">
            <table class="table table-striped table-hover">
               <thead>
                <tr>
                    <th>orderID</th>
                    <th>Username</th>
                    <th>transactionID</th>
                    <th>IssueDate</th>
                    <th>refund</th>
                    <th>Invoicedate</th>
                    <th>status</th>
                    <th></th>
                </tr>
               </thead>
               <tbody>
                <?php if(is_array($orders)): foreach($orders as $key=>$vo): ?><tr>
                    <td><?php echo ($vo["orderID"]); ?></td>
                    <td><?php echo ($vo["username"]); ?></td>
                    <td><?php echo ($vo["transactionID"]); ?></td>
                    <td><?php echo ($vo["issuedate"]); ?></td>
                    <td><?php echo ($vo["refund"]); ?></td>
                    <td><?php echo ($vo["invoicedate"]); ?></td>
                    <td><?php echo ($vo["status"]); ?></td>
                    <td>
                        <a class="btn yellow easy-pie-chart-reload" href="<?php echo U('Order/orderdetail?orderid='.$vo['orderID'].'');;?>">
                            view detail		
                        </a>
                    </td>
                  </tr><?php endforeach; endif; ?>
               </tbody>
            </table>
            <span><div class="page"><?php echo ($page); ?></div></span>
        </div>
        
        
        
	</div>
</div>
<!-- tab_1_3 -->
<!--end tab-pane-->
<div class="tab-pane" id="tab_1_4">
    <div class="row-fluid add-portfolio">
        <div class="pull-left">
            <span>502 Items sold this week</span>
        </div>
        <div class="pull-left">
            <a href="#" class="btn icn-only green">Add a new Project <i class="m-icon-swapright m-icon-white"></i></a>
        </div>
    </div>
    <!--end add-portfolio-->
    <div class="row-fluid portfolio-block">
        <div class="span5 portfolio-text">
            <img src="media/image/logo_metronic.jpg" alt=""/>
            <div class="portfolio-text-info">
                <h4>Metronic - Responsive Template</h4>
                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
            </div>
        </div>
        <div class="span5" style="overflow:hidden;">
            <div class="portfolio-info">
                Today Sold
                <span>187</span>
            </div>
            <div class="portfolio-info">
                Total Sold
                <span>1789</span>
            </div>
            <div class="portfolio-info">
                Earns
                <span>$37.240</span>
            </div>
        </div>
        <div class="span2 portfolio-btn">
            <a href="#" class="btn bigicn-only"><span>Manage</span></a>
        </div>
    </div>
    <!--end row-fluid-->
    <div class="row-fluid portfolio-block">
        <div class="span5 portfolio-text">
            <img src="media/image/logo_azteca.jpg" alt=""/>
            <div class="portfolio-text-info">
                <h4>Metronic - Responsive Template</h4>
                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
            </div>
        </div>
        <div class="span5">
            <div class="portfolio-info">
                Today Sold
                <span>24</span>
            </div>
            <div class="portfolio-info">
                Total Sold
                <span>660</span>
            </div>
            <div class="portfolio-info">
                Earns
                <span>$7.060</span>
            </div>
        </div>
        <div class="span2 portfolio-btn">
            <a href="#" class="btn bigicn-only"><span>Manage</span></a>
        </div>
    </div>
    <!--end row-fluid-->
    <div class="row-fluid portfolio-block">
        <div class="span5 portfolio-text">
            <img src="media/image/logo_conquer.jpg" alt=""/>
            <div class="portfolio-text-info">
                <h4>Metronic - Responsive Template</h4>
                <p>Lorem ipsum dolor sit consectetuer adipiscing elit.</p>
            </div>
        </div>
        <div class="span5" style="overflow:hidden;">
            <div class="portfolio-info">
                Today Sold
                <span>24</span>
            </div>
            <div class="portfolio-info">
                Total Sold
                <span>975</span>
            </div>
            <div class="portfolio-info">
                Earns
                <span>$21.700</span>
            </div>
        </div>
        <div class="span2 portfolio-btn">
            <a href="#" class="btn bigicn-only"><span>Manage</span></a>
        </div>
    </div>
    <!--end row-fluid-->
</div>
<!--end tab-pane-->
<div class="tab-pane row-fluid" id="tab_1_6">
<div class="row-fluid">
<div class="span12">
<div class="span3">
    <ul class="ver-inline-menu tabbable margin-bottom-10">
        <li class="active">
            <a data-toggle="tab" href="#tab_1">
                <i class="icon-briefcase"></i>
                General Questions
            </a>
            <span class="after"></span>
        </li>
        <li><a data-toggle="tab" href="#tab_2"><i class="icon-group"></i> Membership</a></li>
        <li><a data-toggle="tab" href="#tab_3"><i class="icon-leaf"></i> Terms Of Service</a></li>
        <li><a data-toggle="tab" href="#tab_1"><i class="icon-info-sign"></i> License Terms</a></li>
        <li><a data-toggle="tab" href="#tab_2"><i class="icon-tint"></i> Payment Rules</a></li>
        <li><a data-toggle="tab" href="#tab_3"><i class="icon-plus"></i> Other Questions</a></li>
    </ul>
</div>
<div class="span9">
<div class="tab-content">
<div id="tab_1" class="tab-pane active">
    <div style="height: auto;" id="accordion1" class="accordion collapse">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_1" data-parent="#accordion1" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
                </a>
            </div>
            <div class="accordion-body collapse in" id="collapse_1">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_2" data-parent="#accordion1" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Pariatur cliche reprehenderit enim eiusmod highr brunch ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_2">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_3" data-parent="#accordion1" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Food truck quinoa nesciunt laborum eiusmod nim eiusmod high life accusamus ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_3">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_4" data-parent="#accordion1" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    High life accusamus terry richardson ad ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_4">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_5" data-parent="#accordion1" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_5">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_6" data-parent="#accordion1" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Wolf moon officia aute non cupidatat skateboard dolor brunch ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_6">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tab_2" class="tab-pane">
    <div style="height: auto;" id="accordion2" class="accordion collapse">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_2_1" data-parent="#accordion2" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Cliche reprehenderit, enim eiusmod high life accusamus enim eiusmod ?
                </a>
            </div>
            <div class="accordion-body collapse in" id="collapse_2_1">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_2_2" data-parent="#accordion2" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Pariatur cliche reprehenderit enim eiusmod high life non cupidatat skateboard dolor brunch ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_2_2">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_2_3" data-parent="#accordion2" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Food truck quinoa nesciunt laborum eiusmod ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_2_3">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_2_4" data-parent="#accordion2" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    High life accusamus terry richardson ad squid enim eiusmod high ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_2_4">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_2_5" data-parent="#accordion2" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_2_5">
                <div class="accordion-inner">
                    <p>
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor.
                    </p>
                    <p>
                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                        eiusmodBrunch 3 wolf moon tempor
                    </p>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_2_6" data-parent="#accordion2" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Wolf moon officia aute non cupidatat skateboard dolor brunch ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_2_6">
                <div class="accordion-inner">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
                    wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                    eiusmod. Brunch 3 wolf moon tempor.
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a href="#collapse_2_7" data-parent="#accordion2" data-toggle="collapse"
                   class="accordion-toggle collapsed">
                    Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
                </a>
            </div>
            <div class="accordion-body collapse" id="collapse_2_7">
                <div class="accordion-inner">
                    <p>
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor.
                    </p>
                    <p>
                        moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                        eiusmodBrunch 3 wolf moon tempor
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tab_3" class="tab-pane">
<div style="height: auto;" id="accordion3" class="accordion collapse">
<div class="accordion-group">
    <div class="accordion-heading">
        <a href="#collapse_3_1" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
            Cliche reprehenderit, enim eiusmod ?
        </a>
    </div>
    <div class="accordion-body collapse in" id="collapse_3_1">
        <div class="accordion-inner">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
        </div>
    </div>
</div>
<div class="accordion-group">
    <div class="accordion-heading">
        <a href="#collapse_3_2" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
            Pariatur skateboard dolor brunch ?
        </a>
    </div>
    <div class="accordion-body collapse" id="collapse_3_2">
        <div class="accordion-inner">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor.
        </div>
    </div>
</div>
<div class="accordion-group">
    <div class="accordion-heading">
        <a href="#collapse_3_3" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
            Food truck quinoa nesciunt laborum eiusmod ?
        </a>
    </div>
    <div class="accordion-body collapse" id="collapse_3_3">
        <div class="accordion-inner">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor.
        </div>
    </div>
</div>
<div class="accordion-group">
    <div class="accordion-heading">
        <a href="#collapse_3_4" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
            High life accusamus terry richardson ad squid enim eiusmod high ?
        </a>
    </div>
    <div class="accordion-body collapse" id="collapse_3_4">
        <div class="accordion-inner">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor.
        </div>
    </div>
</div>
<div class="accordion-group">
    <div class="accordion-heading">
        <a href="#collapse_3_5" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
            Reprehenderit enim eiusmod high eiusmod ?
        </a>
    </div>
    <div class="accordion-body collapse" id="collapse_3_5">
        <div class="accordion-inner">
            <p>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor.
            </p>
            <p>
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                eiusmodBrunch 3 wolf moon tempor
            </p>
        </div>
    </div>
</div>
<div class="accordion-group">
    <div class="accordion-heading">
        <a href="#collapse_3_6" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry ?
        </a>
    </div>
    <div class="accordion-body collapse" id="collapse_3_6">
        <div class="accordion-inner">
            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon
            officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3
            wolf moon tempor.
        </div>
    </div>
</div>
<div class="accordion-group">
    <div class="accordion-heading">
        <a href="#collapse_3_7" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
            Reprehenderit enim eiusmod high life accusamus aborum eiusmod ?
        </a>
    </div>
    <div class="accordion-body collapse" id="collapse_3_7">
        <div class="accordion-inner">
            <p>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor.
            </p>
            <p>
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                eiusmodBrunch 3 wolf moon tempor
            </p>
        </div>
    </div>
</div>
<div class="accordion-group">
    <div class="accordion-heading">
        <a href="#collapse_3_8" data-parent="#accordion3" data-toggle="collapse" class="accordion-toggle collapsed">
            Reprehenderit enim eiusmod high life accusamus terry quinoa nesciunt laborum eiusmod ?
        </a>
    </div>
    <div class="accordion-body collapse" id="collapse_3_8">
        <div class="accordion-inner">
            <p>
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                Brunch 3 wolf moon tempor.
            </p>
            <p>
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                eiusmodBrunch 3 wolf moon tempor
            </p>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
<!--end span9-->
</div>
</div>
</div>
<!--end tab-pane-->
</div>
</div>
<!--END TABS-->
</div>
</div>
<!-- END PAGE CONTENT-->
</div>
<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->

        
        
        
    <!-- END PAGE -->
    </div>
    <!-- END CONTAINER -->
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
    <div class="footer-inner">
        2017 &copy; JHCL
    </div>
    <div class="footer-tools">
			<span class="go-top">
			<i class="icon-angle-up"></i>
			</span>
    </div>
</div>
<!-- END FOOTER -->
<!-- 引入 javascript  -->
<!-- BEGIN CORE PLUGINS -->
<!--jquery-->
<script src="/DomainSystem/Public/metronic/media/js/jquery-1.10.1.min.js" type="text/javascript"></script>

<script src="/DomainSystem/Public/metronic/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="/DomainSystem/Public/metronic/media/js/excanvas.min.js"></script>
<script src="/DomainSystem/Public/metronic/media/js/respond.min.js"></script>
<![endif]-->

<script src="/DomainSystem/Public/metronic/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>

    <!-- END PAGE LEVEL SCRIPTS -->
    <script type="text/javascript" src="/DomainSystem/Public/metronic/media/js/bootstrap-fileupload.js"></script>
    <script type="text/javascript" src="/DomainSystem/Public/metronic/media/js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="/DomainSystem/Public/metronic/media/js/validator.min.js"></script>
    <script>
        jQuery(document).ready(function () {

        // initiate layout and plugins

        App.init();

    });
        
    </script>

<script src="/DomainSystem/Public/metronic/media/js/app.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">  
	//MyValidator.init();  
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>