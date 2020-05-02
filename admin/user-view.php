<?php

$obj = new database();
$view_admin = $obj->sd_view_admins();

if (isset($_GET['did'])) {
	$did = $_GET['did'];
	$del_admin = $obj->sd_delete_admins($did);

	if ($del_admin == 1) {
		 echo "<div class='alert alert-success' role='alert'>Delete Successfully</div>";
		 echo '<script>window.location.href = "index.php?page=user-view";</script>';
	}
	else {
		echo "<div class='alert alert-success' role='alert'>Failed to Delete</div>";
	}
}

?>
                    <div class="col-lg-12">
                        <h1 class="page-header">View Users</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->

                <table class="table table-striped">
					<thead>
				    	<tr>
					      	<th scope="col">ID</th>
					      	<th scope="col">Username</th>
					      	<th scope="col">Email</th>
					      	<th scope="col">Edit</th>
					      	<th scope="col">Delete</th>
				    	</tr>
				  	</thead>
					<tbody>
						<?php

							while ($row=$view_admin->fetch_assoc()) {

						?>
				    	<tr>
					      	<th scope="row"><?php echo $row['id']; ?></th>
					      	<td><?php echo $row['username']; ?></td>
					      	<td><?php echo $row['email']; ?></td>
					      	<td><a href="index.php?page=user-edit&id=<?php echo $row['id']; ?>" class="btn btn-primary"> Edit</a></td>
					      	
					      	<td><a href="javascript:void(0);" class="btn btn-danger" onclick="
								if(confirm('Are you sure to delete this record'))
								window.location='index.php?page=user-view&did=<?php echo $row['id']; ?>';"> Delete</a></td>
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
