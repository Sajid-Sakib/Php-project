<?php
	include ('db_connect.php');
	if(isset($_GET['status_id'])){
		$status_id=$_GET['status_id'];
		//echo $status_id;
	}
	if(isset($_POST['status'])){
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
                        $sql="UPDATE tbl_status status_text='$_POST[status_text]', image='$target_file', id='$id' WHERE status_id='$status_id'";
                        if (mysqli_query($db_connect, $sql) ) {
                            
							header('Location:index.php');
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
<?php include('header.php'); ?>
				<div class="col-md-12 custom-col-md-12 padding-zero">
					<div class="content-area container-padding-right">
						<div class="cover">
							<img src="images/cover.jpg" alt="" />
						</div>
						<div class="short-menu">
							<div class="like float-left">
								<a href="index.php">Home</a>
								<a href="photos.php">Photos</a>
								<a href="about.php">About</a>
								<a href="posts.php">Posts</a>
							</div>
							<div class="call-now float-right">
								<a id="call-now" href="#">Call Now</a>
								<a class="message" href="?status=logout"><i class="fa fa-commenting"></i>Logout</a>
							</div>
						</div>
						<div class="content">
							<div class="col-md-8 padding-zero" style="padding-right:10px;">
								<div class="status">
									<h3>Status</h3>
									<?php
										$sql="SELECT * FROM tbl_status WHERE status_id='$status_id'";
										if(mysqli_query($db_connect,$sql)){
											$query_result=mysqli_query($db_connect,$sql);
										}
										$rows=mysqli_fetch_assoc($query_result);
										
											
										
										?>
										
									<form action="" method="post" enctype="multipart/form-data">
										<textarea  rows="5" name="status_text" placeholder="Type Your Text"><?php echo $rows["status_text"];?></textarea>
										<div class="post">
											<div class="text-left" style="width:610px;display:inline-block">
												<input type="file" name="image" value="Camera" />
												<div class="edit-image" style="width:40px">
													<img src="<?php echo $rows["image"];?>" class="image-1" alt="" />
												</div>
											</div>
											<div class="text-right" style="width:100px;display:inline-block">
												<input type="submit" value="Post" name="status" id="submit"/>
											</div>
										</div>
									</form>
									
									
								</div>
							</div>
							<div class="col-md-4 padding-zero">
								<div class="right-sidebar">
									<h3>Event Planner in Dhaka, Bangladesh</h3>
									<p>5.0 <i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>· Open Now</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 custom-col-md-3 padding-zero">
					
				</div>
			</div>
		</div>
		<?php include('footer.php'); ?>