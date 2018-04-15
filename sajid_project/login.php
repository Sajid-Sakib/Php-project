<?php
	if(isset($_POST['btn'])){
		//echo '<pre>';
		//print_r($_POST);
		require('function.php');
		$ex_massage=admin_login_check($_POST);
	
	}

?>
<?php include('pages/header.php');?>
    <!-- Page Content -->
    <div class="container">
		<h1 class="my-4">Welcome to Event Management</h1>
		<!-- Marketing Icons Section -->
		<div class="row">
			<div class="col-lg-6 mb-6">
			  <div class="card h-100">
				<h4 class="card-header">Login <span style="color:red">
						<?php if(isset($ex_massage)){
							echo $ex_massage;
							unset($ex_massage);}?>
					</span></h4>
				<div class="card-body">
					<form action="" method="post">
						<input type="text" placeholder="Username" name="user_name" class="form-control" style="margin-bottom:10px"/>
						<input type="password" placeholder="Password" name="password" class="form-control" style="margin-bottom:10px"/>
						<button type="submit" class="btn-primary" name="btn" style="cursor:pointer">Login</button>
					</form>
				</div>
			  </div>
			</div>
		</div>
		<!-- /.row -->
		
		<?php include('pages/footer.php');?>