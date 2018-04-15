<?php include('pages/admin_header.php'); ?>
					<div class="page-content" style="padding-right:40px">
						<h1>View All Post</h1>
						
						<table class="table table-striped">
						  <thead>
							<tr>
							  <th scope="col">SL.</th>
							  <th scope="col">Post Name</th>
							  <th scope="col">Description</th>
							  <th scope="col">Publication Status</th>
							  <th scope="col">Image</th>
							  <th scope="col">Action</th>
							</tr>
						  </thead>
						  <tbody>
							<?php $sql="SELECT * FROM tbl_post";
								if(mysqli_query($db_connect,$sql)){
									$query_result=mysqli_query($db_connect,$sql);
								}
								$count=1;
								while($rows=mysqli_fetch_assoc($query_result)){ ?>
						  
									<tr>
									  <th scope="row"><?php echo $count; ?></th>
									  <td><?php echo $rows["post_title"];?></td>
									  <td><?php $desc=$rows["post_description"];
											$description=explode(" ",$desc);
											//print_r($description);
											$short_desc=array_slice($description, 0, 20);
											echo implode(" ",$short_desc)."....";
									  ?></td>
									  <td><?php if($rows["publication_status"]==1){
											echo "published";
											}
											else{
												echo "Unpublished";
											}
									  ?></td>
									  <td><img class="view-img" src="<?php echo $rows["image"];?>" alt="" /></td>
									  <td><a href="edit_post.php?status_id=<?php echo $rows["post_id"];?>">Edit Post </a>| 
										<a href="delete_post.php?status_id=<?php echo $rows["post_id"];?>"> Delete Post</a></td>
									</tr>

								<?php
									$count++;
								}
								?>
						  </tbody>
						</table>
						
						
					</div>
				<?php include('pages/admin_footer.php'); ?>