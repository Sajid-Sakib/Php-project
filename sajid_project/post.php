<?php include('pages/header.php');?>

		<!-- Page Content -->
		<div class="container">

		  <h1 class="my-4">Posts</h1>

		  <!-- Marketing Icons Section -->
		  <div class="row">
		  <?php $sql="SELECT * FROM tbl_post WHERE publication_status=1 ORDER BY `tbl_post`.`post_id` DESC";
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
		  

		  <?php include('pages/footer.php');?>