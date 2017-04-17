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
    <li class="active">
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
            <li><a href="<?php echo U('Client/orderlist');;?>">Order List</a><i class="fa fa-angle-right" aria-hidden="true"></i></li>
			<li><a href="<?php echo U('Client/orderdetail');;?>">Order Detail</a></li>
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
    
    <li class="active"><a href="#tab_1_1" data-toggle="tab">Order Detail</a></li>
</ul>
<div class="tab-content">

<!--end tab-pane-->
<div class="tab-pane row-fluid active" id="tab_1_1">
    <div class="span12">
        <div class="portlet box yellow">
            <div class="portlet-title">
                <div class="caption"><i class="icon-coffee"></i>Order</div>
            </div>
            <div class="portlet-body">
                <div class="span12">
                    <div class="span4">
                        <h5><strong>OrderID :</strong><?php echo ($order["orderID"]); ?></h5>
                        <h5><strong>Issue date :</strong><?php echo ($order["issuedate"]); ?></h5>
                        <h5><strong>Status :</strong><span class="label label-info"><?php echo ($order["status"]); ?></span></h5>
                        <h5><strong>Description :</strong><span class="label label-warning"><?php echo ($order["description"]); ?></span></h5>
                    </div>
                    <div class="span4">
                        <h5><strong>Refund :</strong><?php echo ($order["refund"]); ?></h5>
                        <h5><strong>Refund Amount:</strong><?php echo ($order["refundamount"]); ?></h5>
                        <?php if($order["status"] == 'pending'): ?><h5><strong>Due date :</strong>NULL</h5>
                        <?php else: ?>
                            <h5><strong>Due date :</strong><?php echo ($order["invoicedate"]); ?></h5><?php endif; ?>
                        <h5><strong>Invoice date :</strong><?php echo ($order["invoicedate"]); ?></h5>
                    </div>
                    <div class="span4">
                        <h5><strong>Transaction ID :</strong><?php echo ($trans["transactionID"]); ?></h5>
                        <h5><strong>Paymethod :</strong><?php echo ($trans["paymethod"]); ?></h5>
                        <h5><strong>Settle Date :</strong><?php echo ($trans["paydate"]); ?></h5>
                        <h5><strong>Amount :</strong><?php echo ($trans["settleamount"]); ?> HK$</h5>
                    </div>
                </div>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td class="text-center"><strong>Item</strong></td>
                            <td class="text-center"><strong>Price</strong></td>
                            <td class="text-center"><strong>Years</strong></td>
                            <td class="text-center"><strong>Totals</strong></td>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- foreach ($order->lineItems as $line) or some such thing here -->
                        <?php if(is_array($items)): foreach($items as $key=>$vo): ?><tr>
                            <td class="text-center"><?php echo ($vo["domainname"]); ?></td>
                            <td class="text-center"><?php echo ($vo["price"]); ?> HK$</td>
                            <td class="text-center"><?php echo ($vo["years"]); ?></td>
                            <td class="text-center"><?php echo $vo['years']*$vo['price']; ?> </td>
                            <!--<td class="text-center">
                                <a class="btn yellow easy-pie-chart-reload" href="<?php echo U('Order/delitem?itemid='.$vo['id'].'&orderid='.$order['orderID'].'');;?>">Remove</a>
                            </td>-->
                        </tr><?php endforeach; endif; ?>
                    </tbody>
                </table>
            </div>
        </div>      
	</div>
    
</div>
<!--tab_1_2-->

<!-- tab_1_3 -->


<!-- tab_1_3 -->
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