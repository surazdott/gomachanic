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
    $username     =   $_POST['username'];
    $email        =   $_POST['email'];
    $password     =   $_POST['password'];  
    $add_admin    =   $obj->sd_add_admins($username, $email, $password);
    if($add_admin == 1) {
        echo "<div class='alert alert-success' role='alert'>Added Successfully</div>";
        echo '<script>window.location.href = "index.php?page=user-view";</script>';
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
                <h2 class="page-header">Add User</h2>
                </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">User Name</label>
                            <input type="textarea" class="form-control" name="username" placeholder="Enter User Name" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email Address" required="required">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="textarea" class="form-control" name="password" placeholder="Enter Password" required="required">
                        </div>
                        <button class="btn btn-primary" name="submit">Add User</button>
                    </form> 
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->


<?php include('templates/footer.php'); ?>