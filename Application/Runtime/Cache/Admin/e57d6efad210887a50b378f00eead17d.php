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
    <li>
        <a href="javascript:;">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="title">Customer Managerment</span>
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
            <span class="title">Order Managerment</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li>
        <a href="<?php echo U('Transaction/translist');;?>">
            <i class="fa fa-cogs" aria-hidden="true"></i>
            <span class="title">Transaction Managerment</span>
            <span class="arrow "></span>
        </a>
    </li>
    <li class="active">
        <a href="<?php echo U('Domain/domainlist');;?>">
            <i class="fa fa-database" aria-hidden="true"></i>
            <span class="title">Domains Managerment</span>
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
            <span class="title">Report</span>
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
                    <li><a href="<?php echo U('Configure/adminlist');;?>">Users Managerment</a></li>
                    <li><a href="<?php echo U('Configure/adminrolelist');;?>">Roles Managerment</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    Domain Price
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="<?php echo U('Configure/pricesetting');;?>">Price setting</a></li>
                    <li><a href="<?php echo U('Configure/pricetools');;?>">Tools Managerment</a></li>
                    <li><a href="<?php echo U('Configure/premiumlist');;?>">Premium Managerment</a></li>
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
            Domain Managerment
            <small> Domain Managerment</small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="<?php echo U('Profile/index');;?>">Home</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="<?php echo U('Domain/domainlist');;?>">Domain Managerment</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li><a href="<?php echo U('Domain/domainlist');;?>">Domain List</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <div class="span12">
        <form role="form" action="<?php echo U('Transaction/translist');;?>" method="post" class="form-search">
            <div class="control">
                <input name = 'search' class="m-wrap" type="text" required><button type="submit" class="btn green" type="button">Search!</button>
            </div>
        </form>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">

		<!--BEGIN TABS-->
<div class="tabbable tabbable-custom tabbable-full-width">
<ul class="nav nav-tabs">   
    <li class="active"><a href="#tab_1_1" data-toggle="tab">Domain List</a></li>
	<li><a href="#tab_1_2" data-toggle="tab">Add new Domain </a></li>
</ul>
<div class="tab-content">

<!--end tab-pane-->
<div class="tab-pane row-fluid active" id="tab_1_1">
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
			<th>Status</th>
			<th>Expiry Date</th>
			<th></th>
		</tr>
	   </thead>
	   <tbody>
		<?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
			<td><a href="<?php echo U('Domain/domaindetail?domainid='.$vo['id'].'');;?>"><?php echo ($vo["domainname"]); ?></a></td>
			<td><?php echo ($vo["registrar"]); ?></td>
			<td><?php echo ($vo["email"]); ?></td>
			<td><?php echo ($vo["firstname"]); ?></td>
			<td><?php echo ($vo["lastname"]); ?></td>
			<td><?php echo ($vo["city"]); ?></td>
			<td><?php echo ($vo["state"]); ?></td>
			<td><?php echo ($vo["country"]); ?></td>
			<td><?php echo ($vo["phone"]); ?></td>
			<td><?php echo ($vo["status"]); ?></td>
			<td><?php echo ($vo["expirydate"]); ?></td>
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
<!--tab_1_2-->
<div class="tab-pane" id="tab_1_2">
	<div style="height: auto;" id="accordion1-1" class="accordion collapse">
        <div class="span12">
            <h4><i class="fa fa-cog" aria-hidden="true"></i> Add new domain</h4>
                
                <form role="form" action="<?php echo U('Domain/domainadd');;?>" method="post">  
                    <h5>domain infomation</h5>
                    <label class="control-label">Domain Name</label>
					<input name="domainname" type="text" value="" placeholder="Domain name" class="m-wrap span8" required/>
                    <label class="control-label">Username</label>
                    <select class="m-wrap span8" name="username" required>
                        <?php if(is_array($users)): foreach($users as $key=>$vo): ?><option value="<?php echo ($vo["username"]); ?>"><?php echo ($vo["username"]); ?></option><?php endforeach; endif; ?>
                    </select>
                    <label class="control-label">Years</label>
                    <select class="m-wrap span8" name="years" required>
                        <option value="1">one years </option>
                        <option value="2" >two years </option> 
                        <option value="3">three years</option>
                        <option value="5">five years </option>
                        <option value="10">ten years </option>
                    </select>
					<label>Auto renew</label>
					<select class="m-wrap span8" name="autorenew" required>
						<option value= "N">N</option>
						<option value= "Y">Y</option>
					</select>                    
                    <h5>Transaction infomation</h5>

					<label>Select payment method</label>
					<select class="form-control" name="paymethod" required>
						<?php if(is_array($payments)): foreach($payments as $key=>$vo): ?><option value= "<?php echo ($vo["method"]); ?>"><?php echo ($vo["method"]); ?></option><?php endforeach; endif; ?>
					</select>
					<h5>If you use Credit Card and Paypal,you must input below infomation</h5>
                    <label >Card Number/Account Number</label>
                    <input type="text" value="" name="accountnumber" id="accountnumber"  placeholder="Amount Number" class="form-control" >
                    <label >Client name</label>
                    <input type="text" value="" name="clientname" id="accountnumber"  placeholder="Client's real name" class="form-control" >
                    
                    <div class="submit-btn">
                        <button type="submit" class="btn green">Save Changes</button>
                    </div>
                </form>
                
        </div>       
    </div>
</div>
<!--end tab-pane-->
<!--end tab-pane-->

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