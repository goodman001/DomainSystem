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
    <link href="/DomainSystem/Public/metronic/media/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/DomainSystem/Public/metronic/media/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END begin global -->
    <!-- BEGIN page-->
    <link href="/DomainSystem/Public/metronic/media/css/jquery.gritter.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/daterangepicker.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/fullcalendar.css" rel="stylesheet" type="text/css"/>
    <link href="/DomainSystem/Public/metronic/media/css/jqvmap.css" rel="stylesheet" type="text/css" /DomainSystem/Public/metronic/media="screen"/>
    <link href="/DomainSystem/Public/metronic/media/css/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" /DomainSystem/Public/metronic/media="screen"/>
    <!-- END page ->
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
    <div class="page-sidebar nav-collapse collapse">
    <!-- BEGIN SIDEBAR MENU -->
        
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
    <li class="">
        <a href="index.html">
            <i class="icon-home"></i>
            <span class="title">Welcome</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="start active">
        <a href="javascript:;">
            <i class="icon-bookmark-empty"></i>
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
                <a href="ui_buttons.html">
                    Inbox</a>
            </li>
            <li>
                <a href="ui_modals.html">
                    Enhanced Modals</a>
            </li>
            <li>
                <a href="ui_tabs_accordions.html">
                    Tabs切换�?手风琴风�?/a>
            </li>
            <li>
                <a href="ui_jqueryui.html">
                    jQuery UI Components</a>
            </li>
            <li>
                <a href="ui_sliders.html">
                    滑块Sliders</a>
            </li>
            <li>
                <a href="ui_tiles.html">
                    标题Tiles</a>
            </li>
            <li>
                <a href="ui_typography.html">
                    文字排版Typography</a>
            </li>
            <li>
                <a href="ui_tree.html">
                    树形结构Tree View</a>
            </li>
            <li>
                <a href="ui_nestable.html">
                    嵌套结构 List</a>
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
                    时间轴顺�?/a>
            </li>
            <li>
                <a href="page_coming_soon.html">
                    <i class="icon-cogs"></i>
                    倒计�?/a>
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
                    新闻详情�?/a>
            </li>
            <li>
                <a href="page_about.html">
                    <i class="icon-group"></i>
                    关于�?/a>
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
                    收件�?/a>
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
            <span class="title">3级目�?/span>
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
                    响应式表�?/a>
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
                    可拖动组�?/a>
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

    
    <!-- END SIDEBAR MENU -->
    </div>
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
        <div class="color-panel hidden-phone">
            <div class="color-mode-icons icon-color"></div>
            <div class="color-mode-icons icon-color-close"></div>
            <div class="color-mode">
                <p>THEME COLOR</p>
                <ul class="inline">
                    <li class="color-black current color-default" data-style="default"></li>
                    <li class="color-blue" data-style="blue"></li>
                    <li class="color-brown" data-style="brown"></li>
                    <li class="color-purple" data-style="purple"></li>
                    <li class="color-grey" data-style="grey"></li>
                    <li class="color-white color-light" data-style="light"></li>
                </ul>
                <label>
                    <span>Layout</span>
                    <select class="layout-option m-wrap small">
                        <option value="fluid" selected>Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </label>
                <label>
                    <span>Header</span>
                    <select class="header-option m-wrap small">
                        <option value="fixed" selected>Fixed</option>
                        <option value="default">Default</option>
                    </select>
                </label>
                <label>
                    <span>Sidebar</span>
                    <select class="sidebar-option m-wrap small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected>Default</option>
                    </select>
                </label>
                <label>
                    <span>Footer</span>
                    <select class="footer-option m-wrap small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected>Default</option>
                    </select>
                </label>
            </div>
        </div>
        <!-- END BEGIN STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            My Profile
            <small> my profile </small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="<?php echo U('Client/index');;?>">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li>
                <a href="#">My Infomation</a>
                <i class="icon-angle-right"></i>
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
    <li><a href="#tab_1_4" data-toggle="tab">Projects</a></li>
    <li><a href="#tab_1_6" data-toggle="tab">Help</a></li>
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
        <li class=""><a data-toggle="tab" href="#tab_2-2"><i class="icon-picture"></i> Change Avatar</a></li>
        <li class=""><a data-toggle="tab" href="#tab_3-3"><i class="icon-lock"></i> Change Password</a></li>
        <li class=""><a data-toggle="tab" href="#tab_4-4"><i class="icon-eye-open"></i> Privacity Settings</a></li>
    </ul>
</div>
<div class="span9">
<div class="tab-content">
<div id="tab_1-1" class="tab-pane active">
    <div style="height: auto;" id="accordion1-1" class="accordion collapse">
        <form role="form" action="<?php echo U('Client/updateprofile');;?>" method="post">  
            <label class="control-label">First Name</label>
            <input name="firstname" type="text" id="firstname" placeholder="first name" value="" class="m-wrap span8" required/>
            <label class="control-label">Last Name</label>
            <input name="lastname" type="text" id="lastname" placeholder="last name" value=""   class="m-wrap span8" required />
            <label class="control-label">Company</label>
            <input name="company" type="text" id="company" placeholder="Company" value="" class="m-wrap span8" />
				
			<label class="control-label">Job title</label>
            <input type="text" name="jobtitle" type="text" id="jobtitle" placeholder="Job title" value=""  class="m-wrap span8" />
			<label class="control-label">Email</label>
            <input name="email" type="email" id="email" placeholder="Email" value=""  class="m-wrap span8" required/>
			
			<label class="control-label">Security Question</label>
            <select class="form-control" name="question" required>
				<option value="Where is your birthplace?" >Where is your birthplace?</option> 
				<option value="What is your favorite sport?">What is your favorite sport?</option>
				<option value="Who is your first love?">Who is your first love?</option>
			</select>
			<label class="control-label">Answer</label>
            <input name="answer" type="text" id="answer" placeholder="answer" value=""  class="m-wrap span8" required/>	
			<label class="control-label">Address1</label>
            <input name="address1" type="text" id="address1" placeholder="Address 1" value=""  class="m-wrap span8" required/>	
			<label class="control-label">Address2</label>
            <input name="address2" type="text" id="address2" placeholder="Address 2" value=""  class="m-wrap span8" required/>
			
			<label class="control-label">City</label>
            <input name="city" type="text" id="city" placeholder="City" value=""  class="m-wrap span8" required/>
			<label class="control-label">State</label>
            <input name="state" type="text" id="state" placeholder="state" value=""  class="m-wrap span8" required/>
			<label class="control-label">Postcode</label>
            <input type="number" value="" name="postcode" id="postcode" placeholder="Postcode"  class="m-wrap span8" required> 
			<label class="control-label">Country</label>
			<input name="country" type="text" id="country" placeholder="Country" value=""  class="m-wrap span8" required/> 
			<label class="control-label">Phone</label>
			<input type="tel" value="" name="phone" id="phone" placeholder="Phone"  class="m-wrap span8" required> 
			<label class="control-label">Fax</label>
			<input type="tel" value="" name="fax" id="fax" placeholder="Fax"  class="m-wrap span8" required> 
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
				<option value="EUR">GBP</option>
				<option value="EUR">CNY</option>
			</select>  	
            <div class="submit-btn">
                <button type="submit" class="btn green">Save Changes</button>
                <a href="<?php echo U('Client/myprofile');;?>" class="btn">Cancel</a>
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
<!--兼容1.9 以前的代??->
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
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<!-- jquery.vmap 地图    js 可以         shenglve  -->
<script src="/DomainSystem/Public/metronic/media/js/jquery.vmap.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.vmap.russia.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.vmap.world.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.vmap.europe.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.vmap.germany.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.vmap.usa.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.vmap.sampledata.js" type="text/javascript"></script>
<!-- jquery.vmap 地图 end -- >
<!--图表数据js -->
<script src="/DomainSystem/Public/metronic/media/js/jquery.flot.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.flot.resize.js" type="text/javascript"></script>
<!--脉动效果，引起用户注  http://kilianvalkhof.com/jquerypulsate/  -->
<script src="/DomainSystem/Public/metronic/media/js/jquery.pulsate.min.js" type="text/javascript"></script>
<!--日期操作类js http://www.datejs.com/-->
<script src="/DomainSystem/Public/metronic/media/js/date.js" type="text/javascript"></script>
<!--日期范围选择  https://github.com/dangrossman/bootstrap-daterangepicker -->
<script src="/DomainSystem/Public/metronic/media/js/daterangepicker.js" type="text/javascript"></script>
<script src="/DomainSystem/Public/metronic/media/js/jquery.gritter.js" type="text/javascript"></script>
<!--日历js-->
<script src="/DomainSystem/Public/metronic/media/js/fullcalendar.min.js" type="text/javascript"></script>
<!--饼图js-->
<script src="/DomainSystem/Public/metronic/media/js/jquery.easy-pie-chart.js" type="text/javascript"></script>
<!--折线??->
<script src="/DomainSystem/Public/metronic/media/js/jquery.sparkline.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--项目config -->
<script src="/DomainSystem/Public/metronic/media/js/app.js" type="text/javascript"></script>
<!--首页js-->
<script src="/DomainSystem/Public/metronic/media/js/index.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        App.init(); // initlayout and core plugins
        Index.init();
        Index.initJQVMAP(); // init index page's custom scripts
        Index.initCalendar(); // init index page's custom scripts
        Index.initCharts(); // init index page's custom scripts
        Index.initChat();
        Index.initMiniCharts();
        Index.initDashboardDaterange();
        Index.initIntro();
    });
</script>
<script type="text/javascript" charset="utf-8">  
	MyValidator.init();  
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>