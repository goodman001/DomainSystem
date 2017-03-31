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
    </ul>
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
            <li>
                <a href="<?php echo U('Client/myprofile');;?>">
                    My Profile
                </a>
            </li>
            <li class="active">
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
            User Profile
            <small>user profile sample</small>
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
            <li><a href="#">My Wallet</a></li>
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
    <li class="active"><a href="#tab_1_1" data-toggle="tab">Overview</a></li>
    <li><a href="#tab_1_2" data-toggle="tab">Add credit</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane row-fluid active" id="tab_1_1">
<div class="span9">
<div class="row-fluid">
    <div class="span6 profile-info">
        <h3>Current balance </h3>
        <div class="dashboard-stat yellow">
            <div class="visual">
                <i class="icon-bar-chart"></i>
            </div>
            <div class="details">
                <div class="number"><?php echo ($balance); ?>$<?php echo ($type); ?></div>
                <div class="desc">My currency type : <?php echo ($type); ?></div>
            </div>
        </div>
        <ul class="unstyled inline">
            
        </ul>
    </div>
    <!--end span8-->
</div>
<!--end row-fluid-->
<div class="tabbable tabbable-custom tabbable-custom-profile">
<ul class="nav nav-tabs">
    <li class="active"><a href="#tab_1_11" data-toggle="tab">Adding credit records</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active" id="tab_1_11">
    <div class="portlet-body" style="display: block;">
        <table class="table table-striped table-bordered table-advance table-hover">
            <thead>
            <tr>
                <th><i class="icon-briefcase"></i> Time</th>
                <th><i class="icon-briefcase"></i> Amount</th>
                <th><i class="icon-briefcase"></i> Card Number/Account number</th>
                <th><i class="icon-briefcase"></i> Account Type</th>
            </tr>
            </thead>
            <tbody>
                <?php if(is_array($lists)): foreach($lists as $key=>$vo): ?><tr>
                        <td><?php echo ($vo["optime"]); ?></td>
                        <td class="hidden-phone">$<?php echo ($vo["amount"]); echo ($vo["currency"]); ?></td>
                        <td><?php echo ($vo["accountnumber"]); ?></td>
                        <td><?php echo ($vo["accounttype"]); ?></td>
                    </tr><?php endforeach; endif; ?>
            
            </tbody>
        </table>
    </div>
</div>
<!--tab-pane-->
<!--tab-pane-->
</div>
</div>
</div>
<!--end span9-->
</div>
<!--end tab-pane-->
<div class="tab-pane profile-classic row-fluid" id="tab_1_2">
    <div class="span1"></div>
	<div class="span6">
    <form role="form" action="<?php echo U('Client/addcredit');;?>" method="post">  
            <label class="control-label">Amount</label>
            <input type="text" value="" name="amount" id="amount" pattern="^[0-9]+([\.,]{0,1}[0-9]*)$" maxlength="15" minlength="1" placeholder="0.0$<?php echo ($type); ?>"  class="m-wrap span8" required> 
            <label class="control-label">Currency(if you want to modify,please go to my profile)</label>
            <input type="text" value="<?php echo ($type); ?>" name="currency" id="currency"  class="m-wrap span8" readonly> 
			<label class="control-label">Select payment method</label>
			<select class="form-control" name="accounttype" required>
				<option value= "Credit Card">Credit Card</option>
				<option value= "PayPal">PayPal</option>
				<option value="Bank Transfer">Bank Transfer</option>
				<option value="Cheque">Cheque</option>
				<option value="E-Banking">E-Banking</option>
				<option value="User Credit">User Credit</option>
				<option value="Google Checkout ">Google Checkout</option>
				<option value="Alipay">Alipay</option>
				<option value="AsiaPay">AsiaPay</option>
			</select>
            <label class="control-label">Card Number/Account number</label>
            <input type="text" value="" name="accountnumber" id="accountnumber"  placeholder="Amount Number" class="m-wrap span8" required> 
            <label class="control-label">One-Time Password</label>
            <input type="password" value="" name="onepassword" id="onepassword"  placeholder="onepassword" class="m-wrap span8" required> 
            <div class="submit-btn">
                <button type="submit" class="btn green">Deposit</button>
                <a href="<?php echo U('Client/mywallet');;?>" class="btn">Cancel</a>
            </div>
        </form>
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
        <li class=""><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>
        <li class=""><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
        <li class=""><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Privacity Settings</a></li>
    </ul>
</div>
<div class="span9">
<div class="tab-content">
<div id="tab_1-1" class="tab-pane active">
    <div style="height: auto;" id="accordion1-1" class="accordion collapse">
        <form action="#">
            <label class="control-label">First Name</label>
            <input type="text" placeholder="John" class="m-wrap span8"/>
            <label class="control-label">Last Name</label>
            <input type="text" placeholder="Doe" class="m-wrap span8"/>
            <label class="control-label">Mobile Number</label>
            <input type="text" placeholder="+1 646 580 DEMO (6284)" class="m-wrap span8"/>
            <label class="control-label">Interests</label>
            <input type="text" placeholder="Design, Web etc." class="m-wrap span8"/>
            <label class="control-label">Occupation</label>
            <input type="text" placeholder="Web Developer" class="m-wrap span8"/>
            <label class="control-label">Counrty</label>
            <div class="controls">
                <input type="text" class="span8 m-wrap" style="margin: 0 auto;" data-provide="typeahead" data-items="4"
                       data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;US&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]"/>
                <p class="help-block"><span class="muted">Start typing to auto complete!. E.g: US</span></p>
            </div>
            <label class="control-label">About</label>
            <textarea class="span8 m-wrap" rows="3"></textarea>
            <label class="control-label">Website Url</label>
            <input type="text" placeholder="http://www.mywebsite.com" class="m-wrap span8"/>
            <div class="submit-btn">
                <a href="#" class="btn green">Save Changes</a>
                <a href="#" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</div>
<div id="tab_2-2" class="tab-pane">
    <div style="height: auto;" id="accordion2-2" class="accordion collapse">
        <form action="#">
            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
                eiusmod.</p>
            <br/>
            <div class="controls">
                <div class="thumbnail" style="width: 291px; height: 170px;">
                    <img src="media/image/AAAAAA&amp;text=no+image" alt=""/>
                </div>
            </div>
            <div class="space10"></div>
            <div class="fileupload fileupload-new" data-provides="fileupload">
                <div class="input-append">
                    <div class="uneditable-input">
                        <i class="icon-file fileupload-exists"></i>
                        <span class="fileupload-preview"></span>
                    </div>
																		<span class="btn btn-file">
																		<span class="fileupload-new">Select file</span>
																		<span class="fileupload-exists">Change</span>
																		<input type="file" class="default"/>
																		</span>
                    <a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="controls">
                <span class="label label-important">NOTE!</span>
                <span>You can write some information here..</span>
            </div>
            <div class="space10"></div>
            <div class="submit-btn">
                <a href="#" class="btn green">Submit</a>
                <a href="#" class="btn">Cancel</a>
            </div>
        </form>
    </div>
</div>
<div id="tab_3-3" class="tab-pane">
    <div style="height: auto;" id="accordion3-3" class="accordion collapse">
        <form action="#">
            <label class="control-label">Current Password</label>
            <input type="password" class="m-wrap span8"/>
            <label class="control-label">New Password</label>
            <input type="password" class="m-wrap span8"/>
            <label class="control-label">Re-type New Password</label>
            <input type="password" class="m-wrap span8"/>
            <div class="submit-btn">
                <a href="#" class="btn green">Change Password</a>
                <a href="#" class="btn">Cancel</a>
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
<script src="/DomainSystem/Public/metronic/media/js/excanvas.min.js"></script>
<script src="/DomainSystem/Public/metronic/media/js/respond.min.js"></script>
<![endif]-->
<!--滚动??插件-->
<script src="/DomainSystem/Public/metronic/media/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<!--进行 AJAX 操作时模拟同步传输时锁定浏览器操??->
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