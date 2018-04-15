<?php include('pages/header.php');?>

		<!-- Page Content -->
		<div class="container">
		  
		  <!-- Portfolio Section -->
		  <h2>Photos</h2>

		  <div class="row">
		  
		  <?php $sql="SELECT * FROM tbl_post ORDER BY `tbl_post`.`post_id` DESC";
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