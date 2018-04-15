<?php
	require('../db_connect.php');
	session_start();
	ob_start();
	
	if(isset($_GET['status'])){
		require('../function.php');
		admin_logout();
		
	}
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Event Mangement Admin Panel</title>
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom styles for this template -->
		<link href="css/simple-sidebar.css" rel="stylesheet">
	</head>

	<body>
		<div class="top">
			<div class="container-fluid">
				<div class="col-md-12">
					<div class="top-menu text-right">
						
						<a href="?status=logout">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 no-padding">
					<div class="menu">
						<!-- Sidebar Menu-->
						<div class="image text-center">
							<img src="images/admin.jpg" alt="..." class="rounded-circle">
						</div>
						<?php include('admin_menu.php');?>
					</div>
				</div>
				<div class="col-md-9">