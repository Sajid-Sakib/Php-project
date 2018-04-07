<?php
	session_start();
	function admin_login_check($data){
		require_once ('db_connect.php');
		$sql="SELECT * FROM tbl_user WHERE user_id='$data[user_id]' AND password='$data[password]'";
		if(mysqli_query($db_connect,$sql)){
			$query_result=mysqli_query($db_connect,$sql);
			$admin_info=mysqli_fetch_assoc($query_result);
			//echo '<pre>';
			//print_r($admin_info);
			if($admin_info){
				$_SESSION['id']=$admin_info['id'];
				$_SESSION['user_id']=$admin_info['user_id'];
				$_SESSION['first_name']=$admin_info['first_name'];
				$_SESSION['last_name']=$admin_info['last_name'];
				if($admin_info['user_type']==1){
					header('Location:user/index.php');
				}
			}
			else{
				$ex_massage='Email and Password does not match';
				return $ex_massage;
			}
		}
		else{
			die('Query Problem'.mysqli_error($db_connect));
		}
	}
	
	function admin_logout(){
		unset($_SESSION['id']);
		unset($_SESSION['user_id']);
		unset($_SESSION['first_name']);
		unset($_SESSION['last_name']);
		header('Location:../index.php');
	}
	
	
?>