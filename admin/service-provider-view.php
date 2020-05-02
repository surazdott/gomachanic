<?php

$obj = new database();
$service_provider = $obj->sd_view_service_providers();

if (isset($_GET['did'])) {
	$did = $_GET['did'];
	$del_service_provider = $obj->sd_delete_service_providers($did);

	if ($del_service_provider == 1) {
		 echo '<script>window.location.href = "index.php?page=service-provider-view";</script>';
	}
}

?>
                    <div class="col-lg-12">
                        <h1 class="page-header">View Service Providers</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <table class="table table-striped">
					<thead>
				    	<tr>
					      	<th scope="col">ID</th>
					      	<th scope="col">Name</th>
					      	<th scope="col">Email</th>
					      	<th scope="col">Service</th>
					      	<th scope="col">Contact Number</th>
					      	<th scope="col">Address</th>
					      	<th scope="col">City Name</th>
					      	<th scope="col">Description</th>
					      	<th scope="col">Image</th>
					      	<th scope="col">Edit</th>
					      	<th scope="col">Delete</th>
				    	</tr>
				  	</thead>
					<tbody>
						<?php

							while ($row=$service_provider->fetch_assoc()) {

						?>
				    	<tr>
					      	<th scope="row"><?php echo $row['id']; ?></th>
					      	<td><?php echo $row['company_name']; ?></td>
					      	<td><?php echo $row['company_email']; ?></td>
					      	<td><?php echo $row['company_service']; ?></td>
					      	<td><?php echo $row['company_number']; ?></td>
					      	<td><?php echo $row['company_address']; ?></td>
					      	<td><?php echo $row['city_name']; ?></td>
					      	<td><?php echo $row['company_desc']; ?></td>
					      	<td><img src="../uploads/<?php echo $row['company_image']; ?>" alt="<?php echo $row['company_name']; ?>" class="img-thumbnail" width="50px" height="50px"></td>
					      	<td><a href="index.php?page=service-provider-edit&id=<?php echo $row['id']; ?>" class="btn btn-primary"> Edit</a></td>
					      	
					      	<td><a href="javascript:void(0);" class="btn btn-danger" onclick="
								if(confirm('Are you sure to delete this record'))
								window.location='index.php?page=service-provider-view&did=<?php echo $row['id']; ?>';"> Delete</a></td>
				    	</tr>
				    	<?php

				    		}

				    ?>
				 	</tbody>
				</table>


            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
