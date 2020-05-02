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
	$service_title     =   $_POST['service_title'];
	$service_price     =   $_POST['service_price'];
	$service_desc      =   $_POST['service_desc'];
	move_uploaded_file($_FILES['service_img']['tmp_name'],'../uploads/'. $_FILES["service_img"]['name']);
	$service_img       =   $_FILES['service_img']['name'];
	$add_service       =   $obj->sd_add_services($service_title, $service_price, $service_desc, $service_img);
	if($add_service == 1) {
		echo "<div class='alert alert-success' role='alert'>Add Successfully</div>";
		echo '<script>window.location.href = "index.php?page=services-view";</script>';
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
                <h2 class="page-header">Add Service</h2>
                </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
					    	<label for="exampleFormControlInput1">Service Title</label>
					    	<input type="textarea" class="form-control" name="service_title" placeholder="Enter Service Name" required="required">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleFormControlInput1">Service Price</label>
					    	<input type="textarea" class="form-control" name="service_price" placeholder="Enter Service Price" required="required">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleFormControlTextarea1">Service Description</label>
					    	<textarea class="form-control" name="service_desc" rows="3" required="required"></textarea>
					 	</div>
					  	<div class="form-group">
    						<label for="exampleFormControlFile1">Upload Image</label>
   							<input type="file" class="form-control-file" name="service_img">
 					  	</div>
 					  	<button class="btn btn-primary" name="submit">Add Service</button>
					</form> 
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


<?php include('templates/footer.php'); ?>