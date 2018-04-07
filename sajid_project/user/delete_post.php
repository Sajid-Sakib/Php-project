<?php include ('db_connect.php');?>
<?php
	if(isset($_GET['status_id'])){
		$status_id=$_GET['status_id'];
		//echo $status_id;
	}
	$sql="DELETE FROM tbl_status WHERE status_id='$status_id'";
		if (mysqli_query($db_connect, $sql) ) {
			header('Location:index.php');
		} else {
			die('Query problem'.mysqli_error($db_connect));
		}
?>