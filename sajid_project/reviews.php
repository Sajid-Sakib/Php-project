<?php include('pages/header.php');?>
<?php 
	if(isset($_POST['btn'])){
		$sql="INSERT INTO tbl_review (reviewer_name, review_text, reting_point) VALUES('$_POST[reviewer_name]', '$_POST[review_text]', '$_POST[reting_point]')";
			if (mysqli_query($db_connect, $sql) ) {
				header('Location:reviews.php');
			} else {
				die('Query problem'.mysqli_error($db_connect));
			}
	}

?>
		<!-- Page Content -->
		<div class="container">
		  
		  <!-- Portfolio Section -->
		  <h2>Reviews</h2>

		  <div class="row">
			<div class="col-md-6">
				<form action="" method="post">
					<input type="text" name="reviewer_name" placeholder="Type Your Name" class="form-control" />
					<textarea name="review_text" rows="3" Placeholder="Write Review" class="form-control"></textarea>
					<select class="custom-select" name="reting_point" >
					  <option selected>---Give Rating---</option>
					  <option value="1">One Star</option>
					  <option value="2">Two Star</option>
					  <option value="3">Three Star</option>
					  <option value="4">Four Star</option>
					  <option value="5">Five Star</option>
					</select>
					<button class="btn btn-primary" type="submit" name="btn">Add Review</button>
				</form>
			</div>
		  </div>
		  <!-- /.row -->
			<div class="row" style="margin-top:20px">
				<div class="col-md-6">
				
				<?php $sql="SELECT * FROM tbl_review";
					if(mysqli_query($db_connect,$sql)){
						$query_result=mysqli_query($db_connect,$sql);
					}
					while($rows=mysqli_fetch_assoc($query_result)){ ?>
						  
					<div class="box" style="border:1px solid #236DB4;padding:10px; margin-bottom:10px;">
						<h4><?php echo $rows["reviewer_name"];?></h4>
						<div class="star">
							<?php  $pt=$rows["reting_point"];
								//echo $pt;
								
								for($t=1; $t<=$pt; $t++){
									echo '<i class="fa fa-star" style="color:orange"></i>';
									//$count=$count+1;
								}
							
								
							?>
							
							<!--<i class="fa fa-star" style="color:orange"></i>
							<i class="fa fa-star" style="color:#bbb"></i>-->
						</div>
						<p><?php echo $rows["review_text"];?></p>
					</div>
					
					<?php } ?>
					
				</div>
			</div>
		  <?php include('pages/footer.php');?>