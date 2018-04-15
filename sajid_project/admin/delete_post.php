<?php include ('../db_connect.php');?>
<?php
	if(isset($_GET['status_id'])){
		$post_id=$_GET['status_id'];
		
	}
	$sql="DELETE FROM tbl_status WHERE post_id='$post_id'";
		if (mysqli_query($db_connect, $sql) ) {
			header('Location:view_post.php');
		} else {
			die('Query problem'.mysqli_error($db_connect));
		}
?>