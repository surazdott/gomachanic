<?php

/* Call Objective */
$obj = new database(); 

?>

<?php

/**
* Add Service title, description an image
*/

$id=$_GET['id'];
$select=$obj->sd_locations_edit($id);
$row=$select->fetch_assoc();


if (isset($_POST['submit'])) {
    // If you leave the image black it takes Old Image 
    if($_FILES['location_image']['name'] == '') {
         $location_image = $_POST['old_location_image'];
    }
    // If you upload new image 
    else {
        unlink('../uploads/'.$_POST['old_location_image']);
        move_uploaded_file($_FILES['location_image']['tmp_name'],'../uploads/'. $_FILES["location_image"]['name']);
        $location_image    =   $_FILES['location_image']['name'];
    }

    $location_name      =   $_POST['location_name'];
    $update_location    =   $obj->sd_locations_update($id, $location_name, $location_image);
    if($update_location == 1) {
        echo "<div class='alert alert-success' role='alert'>Edit Successfully</div>";
        echo '<script>window.location.href = "index.php?page=location-view";</script>';
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>Failed to Edit</div>";
    }
}


?>
<div class="col-lg-12">
     <h2 class="page-header">Edit Locations</h2>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">Location Name</label>
                <input type="textarea" class="form-control" name="location_name" placeholder="Enter Location Name" required="required" value="<?php echo $row['location_name']; ?>">
        </div>
        <img src="../uploads/<?php echo $row['location_image']; ?>" alt="<?php echo $row['location_name']; ?>" class="img-thumbnail" width="200px" height="200px">
        <div class="form-group">
            <label for="exampleFormControlFile1">Update Image</label>
            <input type="file" class="form-control-file" name="location_image">
            <input type="text" name="old_location_image" value="<?php echo $row['location_image']; ?>">
        </div>
        <button class="btn btn-primary" name="submit">Update Location</button>
    </form> 
