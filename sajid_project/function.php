<?php
	function admin_login_check($data){
		ob_start();
		require_once ('db_connect.php');
		$sql="SELECT * FROM tbl_user WHERE user_name='$data[user_name]' AND password='$data[password]'";
		if(mysqli_query($db_connect,$sql)){
			$query_result=mysqli_query($db_connect,$sql);
			$admin_info=mysqli_fetch_assoc($query_result);
			//echo '<pre>';
			//print_r($admin_info);
			if($admin_info){
				$_SESSION['user_id']=$admin_info['user_id'];
				$_SESSION['name']=$admin_info['name'];
				$_SESSION['user_name']=$admin_info['user_name'];
				if($admin_info['user_type']==1){
					header('Location:admin/index.php');
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
		unset($_SESSION['user_id']);
		unset($_SESSION['name']);
		unset($_SESSION['user_name']);
		header('Location:../index.php');
	}
	
	
?>