<?php

/* Database Connection */
include('../includes/functions.php');
$obj = new database();
$locations = $obj->sd_view_locations(); 

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
	$company_name     			=   $_POST['company_name'];
	$company_email				=	$_POST['company_email'];
	$company_service      		=   $_POST['company_service'];
	$company_number				=	$_POST['company_number'];
	$company_address    		=   $_POST['company_address'];
	$city_name					=	$_POST['city_name'];
	$company_desc				=	$_POST['company_desc'];
	move_uploaded_file($_FILES['company_image']['tmp_name'],'../uploads/'. $_FILES["company_image"]['name']);
	$company_image       		=   $_FILES['company_image']['name'];
	$add_service_provider   =   $obj->sd_add_service_providers($company_name, $company_email, $company_service, $company_number, $company_address, $city_name, $company_desc, $company_image);
	if($add_service_provider == 1) {
		echo "<div class='alert alert-success' role='alert'>Added Successfully</div>";
		echo '<script>window.location.href = "index.php?page=service-provider-view";</script>';
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
                <h2 class="page-header">Add Service Provider</h2>
                </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
					    	<label for="exampleFormControlInput1">Name</label>
					    	<input type="textarea" class="form-control" name="company_name" placeholder="Enter Company Name" required="required">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleFormControlInput1">Email</label>
					    	<input type="email" class="form-control" name="company_email" placeholder="Enter Email Address" required="required">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleFormControlInput1">Service</label>
					    	<input type="textarea" class="form-control" name="company_service" placeholder="Enter Company Service" required="required">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleFormControlInput1">Phone Number</label>
					    	<input type="textarea" class="form-control" name="company_number" placeholder="Enter Telephone Number" required="required">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleFormControlInput1">Address</label>
					    	<input type="textarea" class="form-control" name="company_address" placeholder="Enter Company Address" required="required">
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleFormControlInput1">City Name</label>
					    	<select name="city_name" class="form-control">
							    <option value="volvo">-Select Option-</option>
							    <?php while($row=$locations->fetch_assoc()) { ?>
							    <option value="<?php echo $row['location_name']; ?>"><?php echo $row['location_name']; ?></option>
								<?php } ?>
							</select>
					 	</div>
					 	<div class="form-group">
					    	<label for="exampleFormControlTextarea1">About Service Provider</label>
					    	<textarea class="form-control" name="company_desc" rows="3" required="required"></textarea>
					 	</div>
					  	<div class="form-group">
    						<label for="exampleFormControlFile1">Upload Profile Picture</label>
   							<input type="file" class="form-control-file" name="company_image">
 					  	</div>
 					  	<button class="btn btn-primary" name="submit">Add Service Provider</button>
					</form> 
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


<?php include('templates/footer.php'); ?>