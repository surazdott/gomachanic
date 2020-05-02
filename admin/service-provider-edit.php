<?php

/* Call Objective */
$obj = new database(); 

?>

<?php

/**
* Add Service title, description an image
*/

$id=$_GET['id'];
$select=$obj->sd_edit_service_providers($id);
$row=$select->fetch_assoc();


if (isset($_POST['submit'])) {
    // If you leave the image black it takes Old Image 
    if($_FILES['company_image']['name'] == '') {
         $company_image = $_POST['old_company_image'];
    }
    // If you upload new image 
    else {
        unlink('../uploads/'.$_POST['old_company_image']);
        move_uploaded_file($_FILES['company_image']['tmp_name'],'../uploads/'. $_FILES["company_image"]['name']);
        $company_image          =   $_FILES['company_image']['name'];
    }

    $company_name               =   $_POST['company_name'];
    $company_email              =   $_POST['company_email'];
    $company_service            =   $_POST['company_service'];
    $company_number             =   $_POST['company_number'];
    $company_address            =   $_POST['company_address'];
    $city_name                  =   $_POST['city_name'];
    $company_desc               =   $_POST['company_desc'];
    $update_service_provider    =   $obj->sd_update_service_providers($id, $company_name, $company_email, $company_service, $company_number, $company_address, $city_name, $company_desc, $company_image);
    if($update_service_provider == 1) {
        echo "<div class='alert alert-success' role='alert'>Edit Successfully</div>";
       echo '<script>window.location.href = "index.php?page=service-provider-view";</script>';
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>Failed to Edit</div>";
    }
}


?>
<div class="col-lg-12">
     <h2 class="page-header">Edit Service Providers</h2>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Company Name</label>
                <input type="textarea" class="form-control" name="company_name" placeholder="Enter Company Name" required="required" value="<?php echo $row['company_name']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email Address</label>
                <input type="textarea" class="form-control" name="company_email" placeholder="Enter Company Name" required="required" value="<?php echo $row['company_email']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Company Service</label>
                <input type="textarea" class="form-control" name="company_service" placeholder="Enter Company Service" required="required" value="<?php echo $row['company_service']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Contact Number</label>
                <input type="textarea" class="form-control" name="company_number" placeholder="Enter Contact Number" required="required" value="<?php echo $row['company_number']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Company Address</label>
                <input type="textarea" class="form-control" name="company_address" placeholder="Enter Addresss" required="required" value="<?php echo $row['company_address']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">City Name</label>
                <input type="textarea" class="form-control" name="city_name" placeholder="Enter Addresss" required="required" value="<?php echo $row['city_name']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">About Service Provider</label>
            <textarea name="company_desc" cols="66" rows="10" id="txt_descripcion" class="form-control"><?php echo $row['company_desc'] ?></textarea>
        </div>
        <img src="../uploads/<?php echo $row['company_image']; ?>" alt="<?php echo $row['company_name']; ?>" class="img-thumbnail" width="200px" height="200px">
        <div class="form-group">
            <label for="exampleFormControlFile1">Update Image</label>
            <input type="file" class="form-control-file" name="company_image">
            <input type="text" name="old_company_image" value="<?php echo $row['company_image']; ?>">
        </div>
        <button class="btn btn-primary" name="submit">Update Location</button>
    </form> 
