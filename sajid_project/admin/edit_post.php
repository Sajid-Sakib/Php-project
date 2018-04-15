<?php include('pages/admin_header.php'); ?>
<?php
	if(isset($_GET['status_id'])){
		$post_id=$_GET['status_id'];
		//echo $post_id;
	}
	if(isset($_POST['btn'])){
		//echo '<pre>';
		//print_r ($_POST);
		$sql="UPDATE tbl_post SET post_title='$_POST[post_title]', post_description='$_POST[post_description]', publication_status='$_POST[publication_status]' WHERE post_id='$post_id'";
			if (mysqli_query($db_connect, $sql) ) {
				header('Location:view_post.php');
				//echo "Updated";
			} else {
				die('Query problem'.mysqli_error($db_connect));
			}
       
	}
?>

					<div class="page-content" style="padding-right:40px">
						<h1>Edit Post <span style="color:red;"><?php if(isset($message)){
							echo $message;
							unset($message);
						}?></span></h1>
						<div class="col-md-6">
							<form action="" method="post" name="posta" >
							<?php $sql="SELECT * FROM tbl_post WHERE post_id='$post_id'";
								if(mysqli_query($db_connect,$sql)){
									$query_result=mysqli_query($db_connect,$sql);
								}
								$rows=mysqli_fetch_assoc($query_result); ?>
						  
								<input type="text" placeholder="Post Title" class="form-control" name="post_title" value="<?php echo $rows["post_title"]; ?>"/>
								<textarea name="post_description" rows="5" class="form-control" placeholder="Description"><?php echo $rows["post_description"]; ?></textarea>
								<select class="form-control" name="publication_status" id="publication_status">
									<option>Publication Status</option>
									<option value="1">Published</option>
									<option value="0">Unpublished</option>
								</select>
								
								<div style="width:100px">
									<img src="<?php echo $rows["image"]; ?>" style="width:100px" alt="" />
								</div>
								<button class="btn btn-primary" type="submit" name="btn">Edit Data</button>
							</form>
						</div>
					</div>
					<script>
						document.forms['posta'].elements['publication_status'].value='<?php echo $rows["publication_status"];?>';
					</script>
				<?php include('pages/admin_footer.php'); ?>