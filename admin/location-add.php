<?php

/* Database Connection */
include('../includes/functions.php');
$obj = new database(); 

/* Session Started */
session_start();
if(!$_SESSION['login']) {
    header('location: login.php');
}

?>

<?php

/**
* Add Service title, description an image
*/

if (isset($_POST['submit'])) {
	$location_name     =   $_POST['location_name'];
	move_uploaded_file($_FILES['location_image']['tmp_name'],'../uploads/'. $_FILES["location_image"]['name']);
	$location_image    =   $_FILES['location_image']['name'];	
	$add_location      =   $obj->sd_add_locations($location_name, $location_image);
	if($add_location == 1) {
		echo "<div class='alert alert-success' role='alert'>Added Successfully</div>";
		echo '<script>window.location.href = "index.php?page=location-view";</script>';
	}
	else {
		echo "<div class='alert alert-danger' role='alert'>Failed to Added</div>";
	}
}


?>


<!-- Header Content Started -->
<?php include('templates/header.php'); ?>
<!-- Header Content Ended -->

<!-- Sidebars Content Started -->
<?php include('templates/sidebar.php'); ?>
<!-- Sidebars Content Ended -->

<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Add Location</h2>
                </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
					    	<label for="exampleFormControlInput1">Location Name</label>
					    	<input type="textarea" class="form-control" name="location_name" placeholder="Enter Location Name" required="required">
					 	</div>
					 	<div class="form-group">
    						<label for="exampleFormControlFile1">Upload Image</label>
   							<input type="file" class="form-control-file" name="location_image">
 					  	</div>
 					  	<button class="btn btn-primary" name="submit">Add Location</button>
					</form> 
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


<?php include('templates/footer.php'); ?>