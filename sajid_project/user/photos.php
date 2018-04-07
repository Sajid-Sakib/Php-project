<?php
	include ('db_connect.php');
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
								
							
								<div class="posts">
								<div class="post_title">
									<div class="pp_image">
										<img src="images/profile_picture.jpg" alt="" />
									</div>
									<div class="PP_title">
										<a href="photos.php">Photos</a>
									</div>
								</div>
								<?php
								$sql="SELECT * FROM tbl_status where id='$id'";
								if(mysqli_query($db_connect,$sql)){
									$query_result=mysqli_query($db_connect,$sql);
								}
								while($rows=mysqli_fetch_assoc($query_result)){ ?>
										<div class="" style="width:25%;display:inline-block">
											<img src="<?php echo $rows["image"];?>" class="image-1" alt="" />
										</div>
									<?php
										}
									?>
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