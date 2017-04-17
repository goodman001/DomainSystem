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
    <link href="/DomainSystem/Public/metronic/media/css/profile.css" rel="stylesheet" type="text/css" />
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
    <a class="brand" href="<?php echo U('Client/index');;?>">
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
        <a href="<?php echo U('Index/index');;?>" class="dropdown-toggle">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
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
        <a href="<?php echo U('Client/index');;?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span class="title">Welcome</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="title">My Infomation</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo U('Client/myprofile');;?>">
                    My Profile
                </a>
            </li>
            <li>
                <a href="<?php echo U('Client/mywallet');;?>">
                    My Wallet</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="<?php echo U('Client/orderlist');;?>">
            <i class="fa fa-shopping-bag" aria-hidden="true"></i>
            <span class="title">My Orders</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="active">
        <a href="<?php echo U('Client/domainlist');;?>">
            <i class="fa fa-database" aria-hidden="true"></i>
            <span class="title">My Domains</span>
            <span class="selected"></span>
        </a>
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
            My Domains
            <small> Domain Manager</small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="<?php echo U('Client/index');;?>">Home</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="<?php echo U('Client/domainlist');;?>">My Domains</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
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
	<li><a href="#tab_1_2" data-toggle="tab">Registration Profile Update </a></li>
	<li><a href="#tab_1_3" data-toggle="tab">Domain tools </a></li>
	<li><a href="#tab_1_4" data-toggle="tab">Auto Renew Setting </a></li>
	<li><a href="#tab_1_5" data-toggle="tab">Renew Domain</a></li>
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
					<a class="btn yellow easy-pie-chart-reload" href="<?php echo U('Client/orderdetail?orderid='.$orderid.'');;?>">
					View Order		
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
<!-- tab_1_2 -->
<div class="tab-pane" id="tab_1_2">
	<div class="row-fluid">	
        <div class="span12">
			<h4><i class="fa fa-cog" aria-hidden="true"></i> Domain Registration Profile</h4>
			<form role="form" action="<?php echo U('Client/domainprofileupdate?domainid='.$domainid.'');;?>" method="post">  
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

<!-- tab_1_3 -->
<div class="tab-pane" id="tab_1_3">
	<div class="row-fluid">	
        <div class="span12">
			<h4>Domain tools</h4>
			<form role="form" action="<?php echo U('Client/domaintools?domainid='.$domainid.'');;?>" method="post"> 
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
<div class="tab-pane" id="tab_1_3">
	<div class="row-fluid">	
        <div class="span12">
			<h4>Domain tools</h4>
			<form role="form" action="<?php echo U('Client/domaintools?domainid='.$domainid.'');;?>" method="post"> 
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
<div class="tab-pane" id="tab_1_4">
	<div class="row-fluid">	
        <div class="span12">
			<h4>Auto renew setting</h4>
			<form role="form" action="<?php echo U('Client/domainautorenew?domainid='.$domainid.'');;?>" method="post"> 
				<label class="control-label">Auto Renew ON</label>
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
<div class="tab-pane" id="tab_1_5">
	<div class="row-fluid">	
        <div class="span12">
			<h4>Auto renew setting</h4>
			<form role="form" action="<?php echo U('Client/domainrenew?domainid='.$domainid.'');;?>" method="post"> 
				<label class="control-label">Renew Years</label>
				<select class="form-control" name="years" required>
					<option value="1">one years </option>
				</select>
                <label>Select payment method</label>
                <select class="form-control" name="accounttype" required>
                    <?php if(is_array($payments)): foreach($payments as $key=>$vo): ?><option value= "<?php echo ($vo["method"]); ?>"><?php echo ($vo["method"]); ?></option><?php endforeach; endif; ?>
                </select>
                <h5>If you use credit card and paypal,you must input below infomation</h5>
                    <label >Card Number/Account number</label>
                    <input type="text" value="" name="accountnumber" id="accountnumber"  placeholder="Amount Number" class="form-control" >
                    <label >Client name</label>
                    <input type="text" value="" name="clientname" id="accountnumber"  placeholder="Client's real name" class="form-control" >
                <label>One-Time Password</label>
                <input type="password" value="" name="onepassword" id="onepassword"  placeholder="onepassword" class="form-control"> 
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
        2017 &copy; JHCL.
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
<!--jquery UI js-->
<script src="/DomainSystem/Public/metronic/media/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/bootstrap.min.js" type="text/javascript"></script>

<script src="/DomainSystem/Public/metronic/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.uniform.min.js" type="text/javascript"></script>


<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->


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