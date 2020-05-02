<?php

/* Call Objective */
$obj = new database(); 

?>

<?php

/**
* Add Service title, description an image
*/

$id=$_GET['id'];
$select=$obj->sd_services_edit($id);
$row=$select->fetch_assoc();


if (isset($_POST['submit'])) {
    // If you leave the image black it takes Old Image 
    if($_FILES['service_img']['name'] == '') {
         $service_img = $_POST['old_service_image'];
    }
    // If you upload new image 
    else {
        unlink('../uploads/'.$_POST['old_service_image']);
        move_uploaded_file($_FILES['service_img']['tmp_name'],'../uploads/'. $_FILES["service_img"]['name']);
        $service_img   =   $_FILES['service_img']['name'];
    }

    $service_title     =   $_POST['service_title'];
    $service_price     =   $_POST['service_price'];
    $service_desc      =   $_POST['service_desc'];
    
    $update_service       =   $obj->sd_services_update($id, $service_title, $service_price, $service_desc, $service_img);
    if($update_service == 1) {
        echo "<div class='alert alert-success' role='alert'>Edit Successfully</div>";
        echo '<script>window.location.href = "index.php?page=services-view";</script>';
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>Failed to Edit</div>";
    }
}


?>
<div class="col-lg-12">
     <h2 class="page-header">Edit Service</h2>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Service Title</label>
                <input type="textarea" class="form-control" name="service_title" placeholder="Enter Service Name" required="required" value="<?php echo $row['service_title']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Service Price</label>
                <input type="textarea" class="form-control" name="service_price" placeholder="Enter Service Price" required="required" value="<?php echo $row['service_price']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Service Description</label>
            <textarea name="service_desc" cols="66" rows="10" id="txt_descripcion" class="form-control"><?php echo $row['service_desc'] ?></textarea>
        </div>
        <img src="../uploads/<?php echo $row['service_img']; ?>" alt="<?php echo $row['service_title']; ?>" class="img-thumbnail" width="200px" height="200px">
        <div class="form-group">
            <label for="exampleFormControlFile1">Upload Image</label>
            <input type="file" class="form-control-file" name="service_img">
            <input type="text" name="old_service_image" value="<?php echo $row['service_img']; ?>">
        </div>
        <button class="btn btn-primary" name="submit">Update Service</button>
    </form> 
