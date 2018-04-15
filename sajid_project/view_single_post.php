<?php include('pages/header.php');?>
<?php
	if(isset($_GET['status_id'])){
		$post_id=$_GET['status_id'];
		//echo $post_id;
	}
 ?>

		<!-- Page Content -->
		<div class="container">

		  <h1 class="my-4"></h1>

		  <!-- Marketing Icons Section -->
		  <div class="row">
		  
		  <?php $sql="SELECT * FROM tbl_post WHERE post_id='$post_id'";
								if(mysqli_query($db_connect,$sql)){
									$query_result=mysqli_query($db_connect,$sql);
								}
								$rows=mysqli_fetch_assoc($query_result); ?>
			<div class="col-lg-12 mb-12">
			  <div class="card h-100">
				<h4 class="card-header"><?php echo $rows["post_title"]; ?></h4>
				<div class="card-body">
				  <p class="card-text"><?php echo $rows["post_description"]; ?></p>
				  <img src="admin/<?php echo $rows["image"]; ?>" alt="" />
				</div>
				
			  </div>
			</div>
			
			
			
		  </div>
		  <!-- /.row -->

		  

		  <?php include('pages/footer.php');?>