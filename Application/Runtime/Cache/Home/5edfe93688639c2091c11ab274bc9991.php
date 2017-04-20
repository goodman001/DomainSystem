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
    <li class="active">
        <a href="javascript:;">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <span class="title">My Infomation</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li class="active">
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
    <li>
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
        <!-- BEGIN STYLE CUSTOMIZER -->
        <!-- END BEGIN STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            My Profile
            <small> my profile </small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="fa fa-home" aria-hidden="true"></i>
                <a href="<?php echo U('Client/index');;?>">Home</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li>
                <a href="#">My Infomation</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li><a href="#">My Profile</a></li>
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
    
    <li class="active"><a href="#tab_1_1" data-toggle="tab">Profile Info</a></li>
    <li><a href="#tab_1_3" data-toggle="tab">Account</a></li>
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
			<li><span>Register Time:</span><strong> <?php echo ($profiles["regtime"]); ?></strong></li>
		</ul>
	</div>
    
</div>
<!--tab_1_2-->
<div class="tab-pane row-fluid profile-account" id="tab_1_3">
<div class="row-fluid">
<div class="span12">
<div class="span3">
    <ul class="ver-inline-menu tabbable margin-bottom-10">
        <li class="active">
            <a data-toggle="tab" href="#tab_1-1">
                <i class="icon-cog"></i>
                Personal info
            </a>
            <span class="after"></span>
        </li>
        <li class=""><a data-toggle="tab" href="#tab_2-2"><i class="icon-lock"></i> Change Password</a></li>
    </ul>
</div>
<div class="span9">
<div class="tab-content">
<div id="tab_1-1" class="tab-pane active">
    <div style="height: auto;" id="accordion1-1" class="accordion collapse">
        <form role="form" action="<?php echo U('Client/updateprofile');;?>" method="post">  
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
            <div class="control-group span12">
                <div class="controls" style="margin-left:10px">
                    <label class="radio" style="width:60px">
                        <span><input type="radio" name="overdue" id="optionsRadios1" value="Enable"  checked/>Enable</span>
                    </label>
                    <label class="radio" style="width:60px">
                        <span><input type="radio" name="overdue" id="optionsRadios2" value="Disable" />Disable</span>
                    </label>    
                </div>
            </div>
			<label class="control-label">Currency</label>
			<select class="form-control" name="currency" required>
				<option value="HKD">HKD</option>
				<option value="USD" >USD</option> 
				<option value="GBP">GBP</option>
				<option value="CNY">CNY</option>
			</select>  	
            <div class="submit-btn">
                <button type="submit" class="btn green">Save Changes</button>
                <a href="<?php echo U('Client/myprofile');;?>" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</div>
<div id="tab_2-2" class="tab-pane">
    <div style="height: auto;" id="accordion3-3" class="accordion collapse">
        <form role="form" data-toggle="validator" action="<?php echo U('Client/updatepwd');;?>" method="post">
            <label class="control-label">Current Password</label>
            <input name="pwd1" type="password" class="m-wrap span8" required/>
            <label class="control-label">New Password</label>
            <input name="pwd2" id="pwd2" type="password" class="m-wrap span8" required/>
            <label class="control-label">Re-type New Password</label>
            <input type="password" class="m-wrap span8" id="inputPasswordConfirm" data-match="#pwd2" data-match-error="Whoops, these don't match" placeholder="Confirm" required>
            <div class="help-block with-errors">Please re-type the password</div>
            <div class="submit-btn">
                <button type="submit" class="btn green">Save Changes</button>
                <a href="<?php echo U('Client/myprofile');;?>" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</div>
<div id="tab_4-4" class="tab-pane">
    <div style="height: auto;" id="accordion4-4" class="accordion collapse">
        <form action="#">
            <div class="profile-settings row-fluid">
                <div class="span9">
                    <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus..</p>
                </div>
                <div class="control-group span3">
                    <div class="controls">
                        <label class="radio">
                            <input type="radio" name="optionsRadios1" value="option1"/>
                            Yes
                        </label>
                        <label class="radio">
                            <input type="radio" name="optionsRadios1" value="option2" checked/>
                            No
                        </label>
                    </div>
                </div>
            </div>
            <!--end profile-settings-->
            <div class="profile-settings row-fluid">
                <div class="span9">
                    <p>Enim eiusmod high life accusamus terry richardson ad squid wolf moon</p>
                </div>
                <div class="control-group span3">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value=""/> All
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" value=""/> Friends
                        </label>
                    </div>
                </div>
            </div>
            <!--end profile-settings-->
            <div class="profile-settings row-fluid">
                <div class="span9">
                    <p>Pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson</p>
                </div>
                <div class="control-group span3">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value=""/> Yes
                        </label>
                    </div>
                </div>
            </div>
            <!--end profile-settings-->
            <div class="profile-settings row-fluid">
                <div class="span9">
                    <p>Cliche reprehenderit enim eiusmod high life accusamus terry</p>
                </div>
                <div class="control-group span3">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value=""/> Yes
                        </label>
                    </div>
                </div>
            </div>
            <!--end profile-settings-->
            <div class="profile-settings row-fluid">
                <div class="span9">
                    <p>Oiusmod high life accusamus terry richardson ad squid wolf fwopo</p>
                </div>
                <div class="control-group span3">
                    <div class="controls">
                        <label class="checkbox">
                            <input type="checkbox" value=""/> Yes
                        </label>
                    </div>
                </div>
            </div>
            <!--end profile-settings-->
            <div class="space5"></div>
            <div class="submit-btn">
                <a href="#" class="btn green">Save Changes</a>
                <a href="#" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<!--end span9-->
</div>
</div>
</div>
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