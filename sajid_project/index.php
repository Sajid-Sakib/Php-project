<?php
	session_start();
	if(isset($_SESSION['id'])) {
        $id=$_SESSION['id'];
        if($id != NULL ) {
			header('Location: user/index.php');
        }
    }
	
	if(isset($_POST['btn'])){
		//echo '<pre>';
		//print_r($_POST);
		require('function.php');
		$ex_massage=admin_login_check($_POST);
	
	}

?>
<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>OOSD login Pannel</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body class="body-login">
		<div class="structure">
			<div class="login-pannel">
				<h2>Login Pannel
					<h4 style="color:red">
						<?php if(isset($ex_massage)){
							echo $ex_massage;
							unset($ex_massage);}?>
					</h4>
				</h2>
				<form action="" method="post">
					<label for="email">Email Address:</label>
					<input type="text" name="user_id" id="email" />
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" />
					<div class="submit-btn">
						<input type="submit" id="button" name="btn" value="Login" />
					</div>
				</form>
				<div class="register">
					<p>Not a Member? Please <a href="register.php">Register</a></p>
				</div>
			</div>
		</div>
	</body>
</html>