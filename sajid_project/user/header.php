<?php
	require_once('../db_connect.php');
	ob_start();
	session_start();
	$id=$_SESSION['id'];
     if($id == NULL) {
          header('Location: ../index.php');
         }
		 
	
	if(isset($_GET['status'])){
		require('../function.php');
		admin_logout();
		
	}
?>
<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en-US"><!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<title>DOT Wedding & Event Planners</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Fav Icon-->
		<link id="favicon" rel="icon" type="image/png" href="images/fav-icon.png" />
		<!--Google Fonts-->
		<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600,700" rel="stylesheet">
		<!--Bootstrap Reset CSS-->
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<!--Bootstrap CSS-->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<!--Font Awesome CSS-->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
		<!--Stylesheet CSS-->
		<link rel="stylesheet" type="text/css" href="style.css" />
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	</head>
	<body class="body" id="home">
		<div class="container">
			<div class="row">