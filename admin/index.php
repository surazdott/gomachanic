<?php

/* Database Connection */
include('../includes/functions.php'); 

session_start();
if(!$_SESSION['login']) {
    header('location: login.php');
}

?>

<!--Header Content Started --> 
<?php include('templates/header.php'); ?>
<!-- Headers Page Ended --> 

<!--Sidebar Content Started --> 
<?php include('templates/sidebar.php'); ?>
<!-- sidebar Page Ended --> 
        
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">

                  
<!-- Page Content -->                 
<?php

/** 
* $page varaibale show the required pages in dashboard
* Dashboard is shown only in index page of Admin Panel
*/

$page='templates/dashboard';

if(isset($_GET['page'])) {

    $page=$_GET['page'];

}

include "$page.php";

/** 
* Dashboard Page Content
*/

?>


            <!-- /.col-lg-12 -->
            </div>
        <!-- /.row -->
        </div>
    <!-- /.container-fluid -->
    </div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->


<!--Footer Content Started --> 
<?php include('templates/footer.php'); ?>
<!-- Footer Content Started --> 