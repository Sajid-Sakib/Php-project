<?php include('pages/header.php');?>
		<?php include('pages/slider.php'); ?>

		<!-- Page Content -->
		<div class="container">

		  <h1 class="my-4">Welcome to Our Website</h1>

		  <!-- Marketing Icons Section -->
		  <div class="row">
		  <?php $sql="SELECT * FROM tbl_post WHERE publication_status=1 ORDER BY `tbl_post`.`post_id` DESC LIMIT 3";
								if(mysqli_query($db_connect,$sql)){
									$query_result=mysqli_query($db_connect,$sql);
								}
								while($rows=mysqli_fetch_assoc($query_result)){ ?>
			<div class="col-lg-4 mb-4">
			  <div class="card h-100">
				<h4 class="card-header"><?php echo $rows["post_title"];?></h4>
				<div class="card-body">
				  <p class="card-text"><?php $desc=$rows["post_description"];
											$description=explode(" ",$desc);
											//print_r($description);
											$short_desc=array_slice($description, 0, 15);
											echo implode(" ",$short_desc)."....";
									  ?></p>
				</div>
				<div class="card-footer">
				  <a href="view_single_post.php?status_id=<?php echo $rows["post_id"];?>" class="btn btn-primary">Learn More</a>
				</div>
			  </div>
			</div>
			<?php
			}
			?>
			
			
		  </div>
		  <!-- /.row -->

		  
		  
		  <!-- Portfolio Section -->
		  <h2>Portfolio</h2>

		  <div class="row">
		  <?php $sql="SELECT * FROM tbl_post ORDER BY `tbl_post`.`post_id` DESC LIMIT 3";
								if(mysqli_query($db_connect,$sql)){
									$query_result=mysqli_query($db_connect,$sql);
								}
								while($rows=mysqli_fetch_assoc($query_result)){ ?>
			<div class="col-lg-4 col-sm-6 portfolio-item">
			  <div class="card h-100">
				<a href="view_single_post.php?status_id=<?php echo $rows["post_id"];?>"><img class="card-img-top" src="admin/<?php echo $rows["image"];?>" alt=""></a>
				<div class="card-body">
				  <h4 class="card-title">
					<a href="view_single_post.php?status_id=<?php echo $rows["post_id"];?>"><?php echo $rows["post_title"];?></a>
				  </h4>
				  
				</div>
			  </div>
			</div>
			<?php
			}
			?>
		
		  </div>
		  <!-- /.row -->


		  <?php include('pages/footer.php');?>