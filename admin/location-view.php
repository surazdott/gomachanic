<?php

$obj = new database();
$locations = $obj->sd_view_locations();

if (isset($_GET['did'])) {
	$did = $_GET['did'];
	$del_location = $obj->sd_delete_locations($did);

	if ($del_location == 1) {
		 echo '<script>window.location.href = "index.php?page=location-view";</script>';
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
					      	<th scope="col">Location Name</th>
					      	<th scope="col">Location Image</th>
					      	<th scope="col">Edit</th>
					      	<th scope="col">Delete</th>
				    	</tr>
				  	</thead>
					<tbody>
						<?php

							while ($row=$locations->fetch_assoc()) {

						?>
				    	<tr>
					      	<th scope="row"><?php echo $row['id']; ?></th>
					      	<td><?php echo $row['location_name']; ?></td>
					      	<td><img src="../uploads/<?php echo $row['location_image']; ?>" alt="<?php echo $row['location_name']; ?>" class="img-thumbnail" width="50px" height="50px"></td>
					      	<td><a href="index.php?page=location-edit&id=<?php echo $row['id']; ?>" class="btn btn-primary"> Edit</a></td>
					      	
					      	<td><a href="javascript:void(0);" class="btn btn-danger" onclick="
								if(confirm('Are you sure to delete this record'))
								window.location='index.php?page=location-view&did=<?php echo $row['id']; ?>';"> Delete</a></td>
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
