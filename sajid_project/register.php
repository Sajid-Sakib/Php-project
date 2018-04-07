<?php include('db_connect.php');?>
<?php 
	if(isset($_POST['btn'])){
		$sql="INSERT INTO tbl_user (first_name, last_name, user_id, password, user_type) VALUES('$_POST[first_name]', '$_POST[last_name]', '$_POST[user_id]', '$_POST[password]', '1')";
			if (mysqli_query($db_connect, $sql) ) {
				$message="Registration Successfull";
			} else {
				die('Query problem'.mysqli_error($db_connect));
			}
	}

?>

<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>OOSD Registration Panel</title>
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
	<body class="body-login">
		<div class="structure">
			<div class="login-pannel">
				<h2>Registration Panel
					<h4 style="color:red">
						<?php if(isset($ex_massage)){
							echo $message;
							unset($message);}?>
					</h4>
				</h2>
				<form action="" method="post">
					<label for="first_name">First Name:</label>
					<input type="text" name="first_name" id="first_name" />
					<label for="last_name">Last Name:</label>
					<input type="text" name="last_name" id="last_name" />
					<label for="user_id">user ID:</label>
					<input type="text" name="user_id" id="user_id" />
					<label for="password">Password:</label>
					<input type="password" name="password" id="password" />
					<div class="submit-btn">
						<input type="submit" id="button" name="btn" value="Register" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>