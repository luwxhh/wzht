<!DOCTYPE html>
<html lang="en">
<head>
<!-- Meta, title, CSS, favicons, etc. -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>后台管理</title>

<!-- Bootstrap -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="css/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="css/green.css" rel="stylesheet">
<!-- Custom Theme Style -->
<link href="css/custom.min.css" rel="stylesheet">

</head>

<?php
$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "test";

// Create connection
$conn = new mysqli( $servername, $username, $password, $dbname );
$conn->query("SET NAMES UTF8");
// Check connection
if ( $conn->connect_error ) {
	die( "Connection failed: " . $conn->connect_error );
}

$sql = "SELECT * FROM xueyuan";
$xyjs = $conn->query( $sql );

$sql = "SELECT * FROM new1";
$xw = $conn->query( $sql );
	
$sql = "SELECT * FROM new2";
$hd = $conn->query( $sql );
	
$sql = "SELECT * FROM xyhj";
$xyhj = $conn->query( $sql );
	
$sql = "SELECT * FROM wyhd";
$wyhd = $conn->query( $sql );
	
$sql = "SELECT * FROM shly";
$shly = $conn->query( $sql );

$conn->close();
?>

<body class="nav-md">
<div class="container body">
	<div class="main_container"> 
		
		<!---->
		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;"> <a href="#" class="site_title"><i class="fa fa-paw"></i> <span> 后台管理系统</span></a> </div>
				<div class="clearfix"></div>
				
				<!-- menu profile quick info -->
				<div class="profile clearfix">
					<div class="profile_pic"> <img src="images/img.jpg" alt="..." class="img-circle profile_img"> </div>
					<div class="profile_info"> <span>Welcome,</span>
						<h2>John Doe</h2>
					</div>
				</div>
				<!-- /menu profile quick info --> 
				
				<br />
				
				<!-- sidebar menu -->
				<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
					<div class="menu_section">
						<h3>General</h3>
						<ul class="nav side-menu">
							<li><a><i class="fa fa-database"></i> 数据库 <span class="fa fa-chevron-down"></span></a>
								<ul class="nav child_menu">
									<li><a onclick="myqiehuan('xyjs')">学院介绍</a></li>
									<li><a onclick="myqiehuan('xw')">新闻</a></li>
									<li><a onclick="myqiehuan('hd')">活动</a></li>
									<li><a onclick="myqiehuan('xyhj')">校园环境</a></li>
									<li><a onclick="myqiehuan('wyhd')">文娱活动</a></li>
									<li><a onclick="myqiehuan('shly')">生活掠影</a></li>
								</ul>
							</li>
							<li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> 更多功能 <span class="label label-success pull-right"> 开发中 </span></a>
							</li>
						</ul>
					</div>
				</div>
				<!-- /sidebar menu --> 
				
				<!-- /menu footer buttons -->
				<div class="sidebar-footer hidden-small"> <a data-toggle="tooltip" data-placement="top" title="Settings"> <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="FullScreen"> <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="Lock"> <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span> </a> <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html"> <span class="glyphicon glyphicon-off" aria-hidden="true"></span> </a> </div>
				<!-- /menu footer buttons --> 
			</div>
		</div>
		<!--/--> 
		
		<!-- top navigation -->
		<div class="top_nav">
			<div class="nav_menu">
				<nav>
					<div class="nav toggle"> <a id="menu_toggle"><i class="fa fa-bars"></i></a> </div>
					<ul class="nav navbar-nav navbar-right">
						<li class=""> <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <img src="images/img.jpg" alt="">John Doe <span class=" fa fa-angle-down"></span> </a>
							<ul class="dropdown-menu dropdown-usermenu pull-right">
								<li><a href="javascript:;"> Profile</a></li>
								<li> <a href="javascript:;"> <span class="badge bg-red pull-right">50%</span> <span>Settings</span> </a> </li>
								<li><a href="javascript:;">Help</a></li>
								<li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
							</ul>
						</li>
						<li role="presentation" class="dropdown"> <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-envelope-o"></i> <span class="badge bg-green">6</span> </a>
							<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
								<li> <a> <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
								<li> <a> <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
								<li> <a> <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
								<li> <a> <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span> <span> <span>John Smith</span> <span class="time">3 mins ago</span> </span> <span class="message"> Film festivals used to be do-or-die moments for movie makers. They were where... </span> </a> </li>
								<li>
									<div class="text-center"> <a> <strong>See All Alerts</strong> <i class="fa fa-angle-right"></i> </a> </div>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- /top navigation --> 
		
		<!-- page content -->
		<div class="right_col" role="main"> 
			
			<!--xyjs-->
			<div id="xyjs" class="rcon" style="">
				<div class="page-title">
					<div class="title_left">
						<h3>Projects <small>Listing design</small></h3>
					</div>
					<div class="title_right">
						<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
								</span> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Projects</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
									<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a> </li>
											<li><a href="#">Settings 2</a> </li>
										</ul>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a> </li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<p>Simple table with project listing with progress and editing options</p>
								
								<!-- start project list -->
								<table class="table table-striped projects">
									<thead>
										<tr>
											<th style="width: 1%">#</th>
											<th style="width: 10%">标题</th>
											<th>内容</th>
											<th>颜色</th>
											<th style="width: 8%">链接</th>
											<th style="width: 8%">图片</th>
											<th style="width: 5%">#操作</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ( $xyjs->num_rows > 0 ) {

											// output data of each row
											while ( $row = $xyjs->fetch_assoc() ) {
												echo "<tr>";
												echo "<td>" . $row[ 'id' ] . "</td>";
												echo "<td>" . $row[ 'title' ] . "</td>";
												echo "<td>" . $row[ 'content' ] . "</td>";
												echo "<td>" . $row[ 'color' ] . "</td>";
												echo "<td>" . $row[ 'url' ] . "</td>";
												echo "<td>" . $row[ 'img' ] . "</td>";
												echo '<td><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><font><font class=""> 编辑 </font></font></a><a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i><font><font> 删除 </font></font></a></td>';
												echo "</tr>";
											}

										}
										?>
									</tbody>
								</table>
								<!-- end project list --> 
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/xyjs--> 
			
			<!--xw--> 
			<div id="xw" class="rcon" style="display: none;">
				<div class="page-title">
					<div class="title_left">
						<h3>Projects <small>Listing design</small></h3>
					</div>
					<div class="title_right">
						<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
								</span> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Projects</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
									<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a> </li>
											<li><a href="#">Settings 2</a> </li>
										</ul>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a> </li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<p>Simple table with project listing with progress and editing options</p>
								
								<!-- start project list -->
								<table class="table table-striped projects">
									<thead>
										<tr>
											<th style="width: 1%">#</th>
											<th style="width: 20%">标题</th>
											<th>内容</th>
											<th style="width: 8%">链接</th>
											<th style="width: 8%">图片</th>
											<th style="width: 5%">#操作</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ( $xw->num_rows > 0 ) {

											// output data of each row
											while ( $row = $xw->fetch_assoc() ) {
												echo "<tr>";
												echo "<td>" . $row[ 'id' ] . "</td>";
												echo "<td>" . $row[ 'title' ] . "</td>";
												echo "<td>" . $row[ 'content' ] . "</td>";
												echo "<td>" . $row[ 'url' ] . "</td>";
												echo "<td>" . $row[ 'img' ] . "</td>";
												echo '<td><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><font><font class=""> 编辑 </font></font></a><a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i><font><font> 删除 </font></font></a></td>';
												echo "</tr>";
											}

										}
										?>
									</tbody>
								</table>
								<!-- end project list --> 
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/xw-->
			
			<!--hd-->
			<div id="hd" class="rcon" style="display: none;">
				<div class="page-title">
					<div class="title_left">
						<h3>Projects <small>Listing design</small></h3>
					</div>
					<div class="title_right">
						<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
								</span> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Projects</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
									<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a> </li>
											<li><a href="#">Settings 2</a> </li>
										</ul>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a> </li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<p>Simple table with project listing with progress and editing options</p>
								
								<!-- start project list -->
								<table class="table table-striped projects">
									<thead>
										<tr>
											<th style="width: 1%">#</th>
											<th style="width: 20%">标题</th>
											<th>内容</th>
											<th style="width: 8%">链接</th>
											<th style="width: 8%">图片</th>
											<th style="width: 5%">#操作</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ( $hd->num_rows > 0 ) {

											// output data of each row
											while ( $row = $hd->fetch_assoc() ) {
												echo "<tr>";
												echo "<td>" . $row[ 'id' ] . "</td>";
												echo "<td>" . $row[ 'title' ] . "</td>";
												echo "<td>" . $row[ 'content' ] . "</td>";
												echo "<td>" . $row[ 'url' ] . "</td>";
												echo "<td>" . $row[ 'img' ] . "</td>";
												echo '<td><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><font><font class=""> 编辑 </font></font></a><a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i><font><font> 删除 </font></font></a></td>';
												echo "</tr>";
											}

										}
										?>
									</tbody>
								</table>
								<!-- end project list --> 
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/hd-->
			
			<!--xyhj-->
			<div id="xyhj" class="rcon" style="display: none;">
				<div class="page-title">
					<div class="title_left">
						<h3>Projects <small>Listing design</small></h3>
					</div>
					<div class="title_right">
						<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
								</span> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Projects</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
									<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a> </li>
											<li><a href="#">Settings 2</a> </li>
										</ul>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a> </li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<p>Simple table with project listing with progress and editing options</p>
								
								<!-- start project list -->
								<table class="table table-striped projects">
									<thead>
										<tr>
											<th style="width: 1%">#</th>
											<th style="width: 20%">标题</th>
											<th style="width: 8%">图片</th>
											<th style="width: 5%">#操作</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ( $xyhj->num_rows > 0 ) {

											// output data of each row
											while ( $row = $xyhj->fetch_assoc() ) {
												echo "<tr>";
												echo "<td>" . $row[ 'id' ] . "</td>";
												echo "<td>" . $row[ 'title' ] . "</td>";
												echo "<td>" . $row[ 'img' ] . "</td>";
												echo '<td><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><font><font class=""> 编辑 </font></font></a><a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i><font><font> 删除 </font></font></a></td>';
												echo "</tr>";
											}

										}
										?>
									</tbody>
								</table>
								<!-- end project list --> 
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/xyhj-->
			
			<!--wyhd-->
			<div id="wyhd" class="rcon" style="display: none;">
				<div class="page-title">
					<div class="title_left">
						<h3>Projects <small>Listing design</small></h3>
					</div>
					<div class="title_right">
						<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
								</span> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Projects</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
									<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a> </li>
											<li><a href="#">Settings 2</a> </li>
										</ul>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a> </li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<p>Simple table with project listing with progress and editing options</p>
								
								<!-- start project list -->
								<table class="table table-striped projects">
									<thead>
										<tr>
											<th style="width: 1%">#</th>
											<th style="width: 20%">标题</th>
											<th style="width: 8%">图片</th>
											<th style="width: 5%">#操作</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ( $wyhd->num_rows > 0 ) {

											// output data of each row
											while ( $row = $wyhd->fetch_assoc() ) {
												echo "<tr>";
												echo "<td>" . $row[ 'id' ] . "</td>";
												echo "<td>" . $row[ 'title' ] . "</td>";
												echo "<td>" . $row[ 'img' ] . "</td>";
												echo '<td><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><font><font class=""> 编辑 </font></font></a><a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i><font><font> 删除 </font></font></a></td>';
												echo "</tr>";
											}

										}
										?>
									</tbody>
								</table>
								<!-- end project list --> 
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/wyhd-->
			
			<!--shly-->
			<div id="shly" class="rcon" style="display: none;">
				<div class="page-title">
					<div class="title_left">
						<h3>Projects <small>Listing design</small></h3>
					</div>
					<div class="title_right">
						<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search for...">
								<span class="input-group-btn">
								<button class="btn btn-default" type="button">Go!</button>
								</span> </div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="row">
					<div class="col-md-12">
						<div class="x_panel">
							<div class="x_title">
								<h2>Projects</h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a> </li>
									<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
										<ul class="dropdown-menu" role="menu">
											<li><a href="#">Settings 1</a> </li>
											<li><a href="#">Settings 2</a> </li>
										</ul>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a> </li>
								</ul>
								<div class="clearfix"></div>
							</div>
							<div class="x_content">
								<p>Simple table with project listing with progress and editing options</p>
								
								<!-- start project list -->
								<table class="table table-striped projects">
									<thead>
										<tr>
											<th style="width: 1%">#</th>
											<th style="width: 20%">标题</th>
											<th style="width: 8%">图片</th>
											<th style="width: 5%">#操作</th>
										</tr>
									</thead>
									<tbody>
										<?php
										if ( $shly->num_rows > 0 ) {

											// output data of each row
											while ( $row = $shly->fetch_assoc() ) {
												echo "<tr>";
												echo "<td>" . $row[ 'id' ] . "</td>";
												echo "<td>" . $row[ 'title' ] . "</td>";
												echo "<td>" . $row[ 'img' ] . "</td>";
												echo '<td><a href="#" class="btn btn-info btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i><font><font class=""> 编辑 </font></font></a><a href="#" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal"><i class="fa fa-trash-o"></i><font><font> 删除 </font></font></a></td>';
												echo "</tr>";
											}

										}
										?>
									</tbody>
								</table>
								<!-- end project list --> 
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/shly-->
			
		</div>
		<!-- /page content --> 
		
		<!-- footer content -->
		<footer>
			<div class="pull-right"> Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a> </div>
			<div class="clearfix"></div>
		</footer>
		<!-- /footer content -->
		
		<!-- 模态框（Modal） -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
							&times;
						</button>
						<h4 class="modal-title" id="myModalLabel">
							模态框（Modal）标题
						</h4>
					</div>
					<div class="modal-body">
						开发中......
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">关闭
						</button>
						<!--
						<button type="button" class="btn btn-primary">
							提交更改
						</button>
						-->
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal -->
		</div>
		<!--/模态框-->
	</div>
</div>

<script>
function myqiehuan(id)
{
	
	var ui =document.getElementsByClassName("rcon");
	for (var i = 0; i<ui.length;i++) {
	ui[i].style.display="none";
	};
	var xx=document.getElementById(id);
	xx.style.display="block";
}
</script>

<!-- jQuery --> 
<script src="js/jquery.min.js"></script> 
<!-- Bootstrap --> 
<script src="js/bootstrap.min.js"></script> 
<!-- NProgress --> 
<script src="js/nprogress.js"></script> 
<!-- bootstrap-progressbar --> 
<script src="js/bootstrap-progressbar.min.js"></script> 
<!-- Custom Theme Scripts --> 
<script src="js/custom.min.js"></script>
</body>
</html>
