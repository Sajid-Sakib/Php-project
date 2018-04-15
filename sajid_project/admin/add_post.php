<?php include('pages/admin_header.php'); ?>
<?php
	if(isset($_POST['btn'])){
		//echo '<pre>';
		//print_r ($_POST);

       $directory='images/uploads/';
       $target_file=$directory.$_FILES['image']['name'];
       $file_type=  pathinfo($target_file, PATHINFO_EXTENSION);
       $file_size=$_FILES['image']['size'];
       $check=getimagesize($_FILES['image']['tmp_name']);

       if($check) {
            if(file_exists($target_file)) {
                $message= 'This file is already exists. please try new one';
            } else {
                if($file_size>10000000) {
                    $message= 'File is too large. please try new one';
                } else {
                    if($file_type !='jpg' && $file_type != 'png') {
                        $message= 'File type is not valid. please try new one';
                    } else {
                        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
                        $sql="INSERT INTO tbl_post (post_title, post_description, publication_status, image) VALUES ('$_POST[post_title]', '$_POST[post_description]','$_POST[publication_status]', '$target_file')";
                        if (mysqli_query($db_connect, $sql) ) {
                            $message= 'Post save successfully';
                        } else {
                            die('Query problem'.  mysqli_error($db_connect) );
                        }
						
                    }
                }
            }
       } else {
           $message= 'This is not an image';
       }
		//echo '</pre>';
		//echo $message;
	}
?>

					<div class="page-content" style="padding-right:40px">
						<h1>Add New Post <span style="color:red;"><?php if(isset($message)){
							echo $message;
							unset($message);
						}?></span></h1>
						<div class="col-md-6">
							<form action="" method="post" enctype="multipart/form-data">
								<input type="text" placeholder="Post Title" class="form-control" name="post_title"/>
								<textarea name="post_description" rows="5" class="form-control" placeholder="Description"></textarea>
								<select class="form-control" name="publication_status">
									<option>Publication Status</option>
									<option value="1">Published</option>
									<option value="0">Unpublished</option>
								</select>
								<input type="file" class="form-control" name="image">
								
								<button class="btn btn-primary" type="submit" name="btn">Save Data</button>
							</form>
						</div>
					</div>
				<?php include('pages/admin_footer.php'); ?>