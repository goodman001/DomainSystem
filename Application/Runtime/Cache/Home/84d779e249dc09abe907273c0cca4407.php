<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:wb="http://open.weibo.com/wb" lang="zh-CN">
	<head>
		<title>domain shopping</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="domain shopping">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link href="/domain/Public/style.css" rel="stylesheet" type="text/css">
		<script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</head>
	<body>
	   <div class="container ">
			<!-- nav -->
			<ul class="nav nav-tabs">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">ABOUTME</a></li>
			</ul>
			<!-- nav end-->
		</div>
		
	<div class="container" style="margin-top:20px">
	   <div class="row">
			<div class="col-md-6">
				<form action="<?php echo U("Index/search");?>" method="post" >
				<div class="input-group">
					<input name="dmname" type="text" class="form-control" placeholder="Search for...">
					<span class="input-group-btn">
						<button class="btn btn-default" type="submit">Search</button>
					</span>
				</div><!-- /input-group -->
				</form>
			</div>
			<div class="col-md-6"> 
			</div>
		</div>
		<?php if($showflag == 1): ?><h3>Search results</h3>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Domain state
					</div>
					<div class="panel-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>Domain</th>
									<th>State</th>
									<th>Price</th>
									<th>Option</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Tanmay</td>
									<td>Bangalore</td>
									<td>560001</td>
									<td>560001</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						Whois infomation
					</div>
					<div class="panel-body">
						xxx
					</div>
				</div>
			</div>
			
		</div><?php endif; ?>
	</div>

	</body>
</html>