<?php

$obj = new database();
// View Services
$services=$obj->sd_view_services();
// Services Pagination in Table
$service_pagination=$obj->admin_services_pagination();

if(isset($_GET['did'])) {
	$did = $_GET['did'];
	$del_service = $obj->sd_delete_services($did);

	if($del_service == 1) {
		echo '<script>window.location.href = "index.php?page=services-view";</script>';
	}
}


?>
                    <div class="col-lg-12">
                        <h1 class="page-header">View Services</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <table class="table table-striped">
					<thead>
				    	<tr>
					      	<th scope="col">ID</th>
					      	<th scope="col">Service Title</th>
					      	<th scope="col">Service Price</th>
					      	<th scope="col">Service Description</th>
					      	<th scope="col">Service Image</th>
					      	<th scope="col">Edit Service</th>
					      	<th scope="col">Delete Service</th>
				    	</tr>
				  	</thead>
					<tbody>

						<?php

						// Pagination Started Here

							$limit = 3;
							// Get Pages and Offset Values
							if(isset($_GET['pages'])) {
								$pages = $_GET['pages'] - 1;
								$offset = $pages * $limit;
							}
							else {
								$pages = 0;
								$offset = 0;
							}

							// Count Total Number of Pages
							$total_rows = $service_pagination;
							// Determine Number of Pages
							if($total_rows > $limit ) {
								$num_of_pages =  ceil($total_rows / $limit);
							}
							else {
								$pages = 1;
								$num_of_pages = 1;
							}

							// Loop For Services View
							while ($row=$services->fetch_assoc()) {

						?>
				    	<tr>
					      	<th scope="row"><?php echo $row['id']; ?></th>
					      	<td><?php echo $row['service_title']; ?></td>
					      	<td><?php echo $row['service_price']; ?></td>
					      	<td><?php echo $row['service_desc']; ?></td>
					      	<td><img src="../uploads/<?php echo $row['service_img']; ?>" alt="<?php echo $row['service_title']; ?>" class="img-thumbnail" width="50px" height="50px"></td>

					      	<td><a href="index.php?page=services-edit&id=<?php echo $row['id']; ?>" class="btn btn-primary"> Edit</a></td>

					      	<td><a href="javascript:void(0);" class="btn btn-danger" onclick="
								if(confirm('Are you sure to delete this record'))
								window.location='index.php?page=services-view&did=<?php echo $row['id']; ?>';"> Delete</a></td>
				    	</tr>
				    	<?php

				    		}

				    ?>
				 	</tbody>
				</table>


			<div class="row">
				<div class="col-md-12">
					<div class="product-pagination text-center">
						<nav aria-label="Page navigation example">
						  <ul class="pagination">
						  	<li>				
						  		<?php 
						  			if($pages) {
						  				echo "<a href='#' aria-label='Previous'><span aria-label='hidden='true>&laquo;</span>";
						  			}
						  		?></a>
						  	</li>
						  	<li>
						  		<?php 
						  			for ($i=1;$i<=$num_of_pages;$i++) {
						  				echo "<a href='index.php?page=service-view?pages=$i'>1</a></li>";
						  			}
						  		?>
						  	<li>
						  		
						  		<?php

						  			if(($pages + 1) != $num_of_pages) {
						  				echo "<a href='#' aria-label='Next'><span aria-label='hidden='true>&laquo;</span>";
						  			}

						  		?>
						  	</a>
						  	</li>


						</nav>
					</div>
				</div>
			</div>


            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
