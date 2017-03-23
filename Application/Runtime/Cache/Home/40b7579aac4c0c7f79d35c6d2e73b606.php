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
        <a href="<?php echo U('Client/index');;?>">
            <i class="icon-home"></i>
            <span class="title">Welcome</span>
            <span class="selected"></span>
        </a>
    </li>
    <li class="">
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
                <a href="<?php echo U('Client/mywallet');;?>">
                    My Wallet</a>
            </li>
        </ul>
    </li>
    <li class='active'>
        <a href="<?php echo U('Client/orderlist');;?>">
            <i class="icon-bookmark-empty"></i>
            <span class="title">My Orders</span>
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
            My orders
            <small> My orders</small>
        </h3>
        <ul class="breadcrumb">
            <li>
				<i class="fa fa-home" aria-hidden="true"></i>
				<a href="<?php echo U('Client/index');;?>">Home</a>
				<i class="fa fa-angle-right" aria-hidden="true"></i>
			</li>
            <li>
                <a href="#">My Orders</a>
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </li>
            <li><a href="<?php echo U('Client/orderlist');;?>">Order List</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<!-- BEGIN PAGE CONTENT-->
<div class="row-fluid">
    <div class="span12">
    <table class="table table-striped table-hover">
       <thead>
        <tr>
            <th>orderID</th>
            <th>transactionID</th>
            <th>issue Date</th>
            <th>status</th>
            <th>refund</th>
            <th>refund amount</th>
            <th>Invoice date</th>
            <th>Due date</th>
            <th></th>
        </tr>
       </thead>
       <tbody>
        <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
            <td><?php echo ($vo["orderID"]); ?></td>
            <td><?php echo ($vo["transactionID"]); ?></td>
            <td><?php echo ($vo["issuedate"]); ?></td>
            <td><?php echo ($vo["status"]); ?></td>
            <td><?php echo ($vo["refund"]); ?></td>
            <td><?php echo ($vo["refundamount"]); ?></td>
            <td><?php echo ($vo["invoicedate"]); ?></td>
			<?php if($vo["status"] == 'pending'): ?><td>NULL</td>
			<?php else: ?>
				<td><?php echo ($vo["duedate"]); ?></td><?php endif; ?>
            <td>
                <a class="btn yellow easy-pie-chart-reload" href="<?php echo U('Client/orderdetail?orderid='.$vo['orderID'].'');;?>">
                    view detail		
                </a>
            </td>
          </tr><?php endforeach; endif; ?>
       </tbody>
    </table>
    <span><div class="page"><?php echo ($page); ?></div></span>
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