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
            <i class="icon-home"></i>
            <span class="title">My Profile</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="icon-bookmark-empty"></i>
            <span class="title">Customers manager</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li >
                <a href="<?php echo U('Customer/customerlist');;?>">
                    Customers List
                </a>
            </li>
            <li>
                <a href="<?php echo U('Customer/customeradd');;?>">
                    Add Customers</a>
            </li>
        </ul>
    </li>
	<li>
        <a href="javascript:;">
            <i class="icon-bookmark-empty"></i>
            <span class="title">Order manager</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo U('Order/orderlist');;?>">
                    Order List
                </a>
            </li>
            <li>
                <a href="<?php echo U('Order/orderadd');;?>">
                    Add Order</a>
            </li>
        </ul>
    </li>
	<li>
        <a href="javascript:;">
            <i class="icon-bookmark-empty"></i>
            <span class="title">Transaction manager</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="<?php echo U('Transaction/translist');;?>">
                    Transaction List
                </a>
            </li>
        </ul>
    </li>
	<li class="active">
        <a href="javascript:;">
            <i class="icon-bookmark-empty"></i>
            <span class="title">Domains manager</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li class="active">
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
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="icon-table"></i>
            <span class="title">表单系列</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="form_layout.html">
                    表单布局</a>
            </li>
            <li>
                <a href="form_samples.html">
                    高级表单样式</a>
            </li>
            <li>
                <a href="form_component.html">
                    表单组件</a>
            </li>
            <li>
                <a href="form_wizard.html">
                    表单向导</a>
            </li>
            <li>
                <a href="form_validation.html">
                    表单验证</a>
            </li>
            <li>
                <a href="form_fileupload.html">
                    文件上传</a>
            </li>
            <li>
                <a href="form_dropzone.html">
                    拖拽文件上传</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="icon-briefcase"></i>
            <span class="title">页面</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="page_timeline.html">
                    <i class="icon-time"></i>
                    时间轴顺</a>
            </li>
            <li>
                <a href="page_coming_soon.html">
                    <i class="icon-cogs"></i>
                    倒计</a>
            </li>
            <li>
                <a href="page_blog.html">
                    <i class="icon-comments"></i>
                    博客列表</a>
            </li>
            <li>
                <a href="page_blog_item.html">
                    <i class="icon-font"></i>
                    带评论的博客列表</a>
            </li>
            <li>
                <a href="page_news.html">
                    <i class="icon-coffee"></i>
                    新闻列表</a>
            </li>
            <li>
                <a href="page_news_item.html">
                    <i class="icon-bell"></i>
                    新闻详情</a>
            </li>
            <li>
                <a href="page_about.html">
                    <i class="icon-group"></i>
                    关于</a>
            </li>
            <li>
                <a href="page_contact.html">
                    <i class="icon-envelope-alt"></i>
                    联系我们</a>
            </li>
            <li>
                <a href="page_calendar.html">
                    <i class="icon-calendar"></i>
                    日历</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="icon-gift"></i>
            <span class="title">附加</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="extra_profile.html">
                    个人�?��</a>
            </li>
            <li>
                <a href="extra_lock.html">
                    屏幕锁定</a>
            </li>
            <li>
                <a href="extra_faq.html">
                    FAQ</a>
            </li>
            <li>
                <a href="inbox.html">
                    收件�?</a>
            </li>
            <li>
                <a href="extra_search.html">
                    查询结果</a>
            </li>
            <li>
                <a href="extra_invoice.html">
                    账单</a>
            </li>
            <li>
                <a href="extra_pricing_table.html">
                    价格列表</a>
            </li>
            <li>
                <a href="extra_image_manager.html">
                    图片管理</a>
            </li>
            <li>
                <a href="extra_404_option1.html">
                    404 Page Option 1</a>
            </li>
            <li>
                <a href="extra_404_option2.html">
                    404 Page Option 2</a>
            </li>
            <li>
                <a href="extra_404_option3.html">
                    404 Page Option 3</a>
            </li>
            <li>
                <a href="extra_500_option1.html">
                    500 Page Option 1</a>
            </li>
            <li>
                <a href="extra_500_option2.html">
                    500 Page Option 2</a>
            </li>
        </ul>
    </li>
    <li>
        <a class="active" href="javascript:;">
            <i class="icon-sitemap"></i>
            <span class="title">3级目</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="javascript:;">
                    �?��目录1
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">二级目录1</a></li>
                    <li><a href="#">二级目录2</a></li>
                    <li><a href="#">二级目录3</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                     一级目录2
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#">二级目录1</a></li>
                    <li><a href="#">二级目录2</a></li>
                    <li><a href="#">二级目录3</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    �?��目录3
                </a>
            </li>
        </ul>
    </li>
    <li>
        <a href="javascript:;">
            <i class="icon-folder-open"></i>
            <span class="title">四级目录</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="javascript:;">
                    <i class="icon-cogs"></i>
                    目录1
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="javascript:;">
                            <i class="icon-user"></i>
                            连接 1
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="#"><i class="icon-remove"></i> 连接 1</a></li>
                            <li><a href="#"><i class="icon-pencil"></i> 连接 1</a></li>
                            <li><a href="#"><i class="icon-edit"></i> 连接 1</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-user"></i> 连接 1</a></li>
                    <li><a href="#"><i class="icon-external-link"></i> 连接 2</a></li>
                    <li><a href="#"><i class="icon-bell"></i> 连接 3</a></li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-globe"></i>
                    目录 2
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li><a href="#"><i class="icon-user"></i> 连接 1</a></li>
                    <li><a href="#"><i class="icon-external-link"></i> 连接 1</a></li>
                    <li><a href="#"><i class="icon-bell"></i> 连接 1</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="icon-folder-open"></i>
                    Item 3
                </a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="icon-user"></i>
            <span class="title">登录</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="login.html">
                    登录样式1</a>
            </li>
            <li>
                <a href="login_soft.html">
                    登录样式2</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="icon-th"></i>
            <span class="title">数据表格</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="table_basic.html">
                    基本表格</a>
            </li>
            <li>
                <a href="table_responsive.html">
                    响应式表</a>
            </li>
            <li>
                <a href="table_managed.html">
                    可操作表格（以行为编辑单位）</a>
            </li>
            <li>
                <a href="table_editable.html">
                    可编辑表格（以单元格为编辑单位）</a>
            </li>
            <li>
                <a href="table_advanced.html">
                    高级表格操作</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="icon-file-text"></i>
            <span class="title">组件 Portlets</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="portlet_general.html">
                    普�?组件</a>
            </li>
            <li>
                <a href="portlet_draggable.html">
                    可拖动组</a>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="javascript:;">
            <i class="icon-map-marker"></i>
            <span class="title">地图</span>
            <span class="arrow "></span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="maps_google.html">
                    Google Maps</a>
            </li>
            <li>
                <a href="maps_vector.html">
                    Vector Maps</a>
            </li>
        </ul>
    </li>
    <li class="last ">
        <a href="charts.html">
            <i class="icon-bar-chart"></i>
            <span class="title">可视图表</span>
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
					<option value="2" >two years </option> 
					<option value="3">three years</option>
					<option value="5">five years </option>
					<option value="10">ten years </option>
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