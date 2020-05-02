<?php

/* Call Objective */
$obj = new database(); 

?>

<?php

/**
* Add Service title, description an image
*/

$id=$_GET['id'];
$select=$obj->sd_edit_admins($id);
$row=$select->fetch_assoc();


if (isset($_POST['submit'])) {

    $username       =   $_POST['username'];
    $email          =   $_POST['email'];
    $password       =   $_POST['password']; 
    $update_admin   =   $obj->sd_update_admins($id, $username, $email, $password);
    if($update_admin == 1) {
        echo "<div class='alert alert-success' role='alert'>Update Successfully</div>";
        echo '<script>window.location.href = "index.php?page=user-view";</script>';
    }
    else {
        echo "<div class='alert alert-danger' role='alert'>Failed to Update</div>";
    }
}


?>
<div class="col-lg-12">
     <h2 class="page-header">Edit Users</h2>
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
    <form method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleFormControlInput1">User Name</label>
                <input type="textarea" class="form-control" name="username" placeholder="Enter User Name" required="required" value="<?php echo $row['username']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Email</label>
                <input type="textarea" class="form-control" name="email" placeholder="Enter Email Address" required="required" value="<?php echo $row['email']; ?>">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">New Password</label>
                <input type="textarea" class="form-control" name="password" placeholder="Enter New Password" required="required" value="<?php echo $row['password']; ?>">
        </div>
        <button class="btn btn-primary" name="submit">Update User</button>
    </form> 
