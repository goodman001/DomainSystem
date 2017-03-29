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
    <title>Metronic | Admin Dashboard Template</title>
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
    <a class="brand" href="index.html">
        <img src="/DomainSystem/Public/metronic/media/image/logo.png" alt="logo"/>
    </a>
    <!-- END LOGO -->
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
        <img src="/DomainSystem/Public/metronic/media/image/menu-toggler.png" alt=""/>
    </a>
<!-- END RESPONSIVE MENU TOGGLER -->
<!-- BEGIN TOP NAVIGATION MENU -->
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
    <ul class="nav pull-right">
    <!-- BEGIN INBOX DROPDOWN -->
    <li class="dropdown" id="header_notification_bar">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="icon-envelope"></i>
            <span class="badge">5</span>
        </a>
        <ul class="dropdown-menu extended inbox">
            <li>
                <p>你有12条消??/p>
            </li>
            <li>
                <a href="<?php echo U('Client/inbox');;?>">
                    <span class="photo"><img src="/DomainSystem/Public/metronic/media/image/avatar2.jpg" alt=""/></span>
                                    <span class="subject">
                                    <span class="from">Lisa Wong</span>
                                    <span class="time">Just Now</span>
                                    </span>
                                    <span class="message">
                                    Vivamus sed auctor nibh congue nibh. auctor nibh
                                    auctor nibh...
                                    </span>
                </a>
            </li>
            <li>
                <a href="inbox.html?a=view">
                    <span class="photo"><img src=".//DomainSystem/Public/metronic/media/image/avatar3.jpg" alt=""/></span>
                                    <span class="subject">
                                    <span class="from">Richard Doe</span>
                                    <span class="time">16 mins</span>
                                    </span>
                                    <span class="message">
                                    Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
                                    auctor nibh...
                                    </span>
                </a>
            </li>
            <li>
                <a href="inbox.html?a=view">
                    <span class="photo"><img src=".//DomainSystem/Public/metronic/media/image/avatar1.jpg" alt=""/></span>
                                    <span class="subject">
                                    <span class="from">Bob Nilson</span>
                                    <span class="time">2 hrs</span>
                                    </span>
                                    <span class="message">
                                    Vivamus sed nibh auctor nibh congue nibh. auctor nibh
                                    auctor nibh...
                                    </span>
                </a>
            </li>
            <li class="external">
                <a href="inbox.html">查看????消息<i class="m-icon-swapright"></i></a>
            </li>
        </ul>
    </li>
    <!-- END INBOX DROPDOWN -->
    <!-- BEGIN USER LOGIN DROPDOWN -->
    <li class="dropdown user">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img alt="" src="/DomainSystem/Public/metronic/media/image/avatar1_small.jpg"/>
            <span class="username">Bob Nilson</span>
            <i class="icon-angle-down"></i>
        </a>
        <ul class="dropdown-menu">
            <li><a href="extra_profile.html"><i class="icon-user"></i> My Profile</a></li>
            <li><a href="page_calendar.html"><i class="icon-calendar"></i> My Calendar</a></li>
            <li><a href="inbox.html"><i class="icon-envelope"></i> My Inbox(3)</a></li>
            <li><a href="#"><i class="icon-tasks"></i> My Tasks</a></li>
            <li class="divider"></li>
            <li><a href="extra_lock.html"><i class="icon-lock"></i> Lock Screen</a></li>
            <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
        </ul>
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
    <li>
        <a href="javascript:;">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="title">Customers manager</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
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
     <li>
        <a href="<?php echo U('Order/orderlist');;?>">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            <span class="title">Order manager</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li>
        <a href="<?php echo U('Transaction/translist');;?>">
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <span class="title">Transaction manager</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li class="active">
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
            Domain Manager
            <small> Domain Manager</small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="<?php echo U('Profile/index');;?>">Home</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="<?php echo U('Domain/domainlist');;?>">Domain Manager</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li><a href="<?php echo U('Domain/domainlist');;?>">Domain List</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
            <li><a href="#">Domain Detail</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <div class="span12">

		<!--BEGIN TABS-->
<div class="tabbable tabbable-custom tabbable-full-width">
<ul class="nav nav-tabs">   
    <li class="active"><a href="#tab_1_1" data-toggle="tab">Domain Detail</a></li>
	<li><a href="#tab_1_2" data-toggle="tab">Update </a></li>
	<li><a href="#tab_1_3" data-toggle="tab">Registration Profile Update </a></li>
	<li><a href="#tab_1_4" data-toggle="tab">Domain tools </a></li>
</ul>
<div class="tab-content">

<!--end tab-pane-->
<div class="tab-pane row-fluid active" id="tab_1_1">
    <div class="span12">
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption"><i class="icon-coffee"></i>Domain Detail</div>
            </div>
            <div class="portlet-body">
				<div class = "row-fluid">
					<div class="span12">
						<div class="span6">
							<h5><strong>Domain name :</strong> <?php echo ($domain["domainname"]); ?></h5>
							<h5><strong>Username :</strong> <?php echo ($domain["username"]); ?></h5>
							<h5><strong>Registrar :</strong><span class="label label-info"> <?php echo ($domain["registrar"]); ?></span></h5>
							<h5><strong>Registrar date :</strong> <?php echo ($domain["registrationdate"]); ?></h5>

						</div>
						<div class="span6">
							<h5><strong>Expiry date:</strong> <?php echo ($domain["expirydate"]); ?></h5>
							<h5><strong>Next due date:</strong> <?php echo ($domain["nextduedate"]); ?></h5>
							<h5><strong>Status:</strong> <?php echo ($domain["status"]); ?></h5>
                            <h5><strong>Auto Renew ON:</strong> <?php echo ($domain["autorenew"]); ?></h5>
						</div>
					</div>
					<a class="btn yellow easy-pie-chart-reload" href="<?php echo U('Order/orderdetail?orderid='.$orderid.'');;?>">
					View Order		
					</a>
					<a class="btn green easy-pie-chart-reload" href="<?php echo U('Domain/domainsendemail?domainid='.$domainid.'');;?>">
					Send Email		
					</a>
					<a class="btn red easy-pie-chart-reload" href="<?php echo U('Domain/domainremove?domainid='.$domainid.'');;?>">
					Remove		
					</a>
				</div>
				
            </div>
        </div> 
		<div class="portlet box green">
            <div class="portlet-title">
                <div class="caption"><i class="icon-coffee"></i>Domain Whois</div>
            </div>
            <div class="portlet-body">
				<div class = "row-fluid">
					<div class="span12">
						<?php echo ($whois); ?>
					</div>	
				</div>
				
            </div>
        </div>
	</div>
    
</div>
<!--tab_1_2-->
<div class="tab-pane" id="tab_1_2">
	<div style="height: auto;" id="accordion1-1" class="accordion collapse">
        <div class="span12">
            <h4><i class="fa fa-cog" aria-hidden="true"></i> Update domain</h4>
                <form role="form" action="<?php echo U('Domain/domainupdate?domainid='.$domainid.'');;?>" method="post">  
                    <label class="control-label">Domain Name</label>
					<input name="domainname" type="text" id="domainname" value="<?php echo ($domain["domainname"]); ?>" class="m-wrap span8" readonly/>
					<label class="control-label">Expired Date</label>
                    <input name="expirydate" type="text" id="expirydate" placeholder="Expiry date" value="<?php echo ($domain["expirydate"]); ?>" class="m-wrap span8" required/>
					<label class="control-label">Next due date</label>
                    <input name="nextduedate" type="text" id="nextduedate" placeholder="Next due date" value="<?php echo ($domain["nextduedate"]); ?>" class="m-wrap span8" required/>
					<label>Status</label>
					<select class="m-wrap span8" name="status" required>
						<option value= "pending">pending</option>
						<option value= "active">active</option>
						<option value= "suspend">suspend</option>
					</select>
					<label>Auto renew</label>
					<select class="m-wrap span8" name="autorenew" required>
						<option value= "N">N</option>
						<option value= "Y">Y</option>
					</select>
					
					
                    <div class="submit-btn">
                        <button type="submit" class="btn green">Save Changes</button>
                    </div>
                </form>
        </div>       
    </div>
</div>
<!-- tab_1_3 -->
<div class="tab-pane" id="tab_1_3">
	<div class="row-fluid">	
        <div class="span12">
			<h4><i class="fa fa-cog" aria-hidden="true"></i> Domain Registration Profile</h4>
			<form role="form" action="<?php echo U('Domain/domainprofileupdate?domainid='.$domainid.'');;?>" method="post">  
				<label class="control-label">First Name</label>
				<input class="m-wrap span8"  name="firstname" type="text" id="firstname" placeholder="first name" value="<?php echo ($domain["firstname"]); ?>" required/>  
				<label>Last Name</label>
				<input class="m-wrap span8" name="lastname" type="text" id="lastname" placeholder="last name" value="<?php echo ($domain["lastname"]); ?>" required/> 
				<label>Company Name</label>
				<input class="m-wrap span8" name="company" type="text" id="company" placeholder="Company" value="<?php echo ($domain["company"]); ?>" /> 
				<label>Job Title</label>
				<input class="m-wrap span8" name="jobtitle" type="text" id="jobtitle" placeholder="Job title" value="<?php echo ($domain["jobtitle"]); ?>" /> 
				<label>Email</label>
				<input class="m-wrap span8" name="email" type="email" id="email" placeholder="Email" value="<?php echo ($domain["email"]); ?>" required/> 
				<label>City</label>
				<input  name="city" type="text" id="city" placeholder="City" value="<?php echo ($domain["city"]); ?>" required/> 
				<label>State</label>
				<input class="m-wrap span8" name="state" type="text" id="state" placeholder="State" value="<?php echo ($domain["state"]); ?>" required/> 
				<label>Postcode</label>
				<input class="m-wrap span8" type="number" value="<?php echo ($domain["postcode"]); ?>" name="postcode" id="postcode" placeholder="Postcode" required> 
				<label>Country</label>
				<input class="m-wrap span8" name="country" type="text" id="country" placeholder="Country" value="<?php echo ($domain["country"]); ?>" required/>
				<label>Phone</label>
				<input class="m-wrap span8" type="tel" value="<?php echo ($domain["phone"]); ?>" name="phone" id="phone" placeholder="Phone" required> 
				<label>FAX</label>
				<input class="m-wrap span8" type="tel" value="<?php echo ($domain["fax"]); ?>" name="fax" id="fax" placeholder="Fax" required> 
				<label>Address1</label>
				<input class="m-wrap span8" name="address1" type="text" id="address1" placeholder="Address 1" value="<?php echo ($domain["address1"]); ?>" required/> 
				<label>Address2</label>
				<input class="m-wrap span8" name="address2" type="text" id="address2" placeholder="Address 2" value="<?php echo ($domain["address2"]); ?>" required/>
				<label>NameServer1(require)</label>
				<input class="m-wrap span8" name="ns1" type="text" id="ns1" placeholder="NameServer" value="<?php echo ($domain["ns1"]); ?>" required/>
				<label>NameServer2(optional)</label>
				<input class="m-wrap span8" name="ns2" type="text" id="ns2" placeholder="NameServer" value="<?php echo ($domain["ns2"]); ?>" required/>
				<label>NameServer3(optional)</label>
				<input class="m-wrap span8" name="ns3" type="text" id="ns3" placeholder="NameServer" value="<?php echo ($domain["ns3"]); ?>" required/>
				<label>NameServer4(optional)</label>
				<input class="m-wrap span8" name="ns4" type="text" id="ns4" placeholder="NameServer" value="<?php echo ($domain["ns4"]); ?>" required/>
				<div class="submit-btn">
					<button type="submit" class="btn green">Save Changes</button>
				</div>
			</form>	
        </div>     
	</div>
</div>

<!-- tab_1_4 -->
<div class="tab-pane" id="tab_1_4">
	<div class="row-fluid">	
        <div class="span12">
			<h4>Domain tools</h4>
			<form role="form" action="<?php echo U('Domain/domaintools?domainid='.$domainid.'');;?>" method="post"> 
				<label class="control-label">Email forwarding</label>
				<input name="mainforward" type="email" id="mainforward" placeholder="mainforward" value="<?php echo ($domain["mainforward"]); ?>" class="m-wrap span8" />
				<label class="control-label">DNS</label>
				<input name="DNSmgr" type="text" id="DNSmgr" placeholder="DNS" value = "<?php echo ($domain["DNSmgr"]); ?>" class="m-wrap span8" />
				<label class="control-label">ID protect</label>
				<select class="m-wrap span8" name="IDprotect" required>
					<option value= "Y">Y</option>
					<option value= "N">N</option>
				</select>
				<div class="submit-btn">
					<button type="submit" class="btn green">Save Changes</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!--end tab-pane-->
<!--end tab-pane-->
<div class="tab-pane row-fluid" id="tab_1_6">
<div class="row-fluid">
<div class="span12">
<div class="span9">
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
        2013 &copy; Metronic by keenthemes.
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
<!--兼容1.9 以前的代??-->
<script src="/DomainSystem/Public/metronic/media/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT!   ??引入bootstrap.min.js 前引??jquery-ui-1.10.1.custom.min.js 避免 bootstrap tooltip ??jquery ui tooltip 冲突 -->
<!--jquery UI js-->
<script src="/DomainSystem/Public/metronic/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<!-- IE 支持 canvas -->
<script src="/DomainSystem/Public/metronic/media/js/excanvas.min.js"></script>
<!--Respond.js 是一个快速??轻量??polyfill，用于为 IE6-8 以及其它不支??CSS3 /DomainSystem/Public/metronic/media Queries 的浏览器提供媒体查询??min-width ??max-width 特??，实现响应式网页设计（Responsive Web Design）??-->
<script src="/DomainSystem/Public/metronic/media/js/respond.min.js"></script>
<![endif]-->
<!--滚动??插件-->
<script src="/DomainSystem/Public/metronic/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<!--进行 AJAX 操作时模拟同步传输时锁定浏览器操??->
<script src="/DomainSystem/Public/metronic/media/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.cookie.min.js" type="text/javascript"></script>
<!--美化 form 表单元素-->
<script src="/DomainSystem/Public/metronic/media/js/jquery.uniform.min.js" type="text/javascript"></script>

<!-- BEGIN PAGE LEVEL PLUGINS -->

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--项目config -->


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