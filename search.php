<?php

include_once('includes/db.php');
if(isset($_GET['search'])){
    $keyword = $_GET['keyword'];
    $query = mysqli_query($conn,"SELECT * FROM tbl_service_providers WHERE city_name LIKE '%$keyword%' OR company_service LIKE '%$keyword%' "); 
    $count = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Search Results - GoMachanics</title>
    <!-- Search Engine Optomization -->
    <meta name="description" content=""/>
    <meta name="keywords" content=""/>
    <meta name="author" content=""/>
    <!-- Socila Media Optomization -->
    <meta property="og:locale" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:type" content=""/>
    <meta property="og:title" content=""/>
    <meta property="og:description" content=""/>
    <meta property="og:url" content=""/>
    <meta property="fb:app_id" content=""/>
    <meta name="twitter:card" content=""/>
    <meta name="twitter:site" content=""/>
    <meta name="twitter:title" content=""/>
    <meta name="twitter:description" content=""/>
    <link rel="canonical" href=""/>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" type="text/css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" type="text/css">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Playfair+Display:400" type="text/css">
    <!-- Theme CSS -->
    <link rel="stylesheet" href="assets/css/style.css" type="text/css">
</head>

<body class="">

    <div class="page-wrapper">
        <div class="header-wrapper">
    <div class="header">
        <div class="container-fluid">
            <div class="header-brand">
                <a href="/">
                    <span class="header-brand-image">                        
                        <svg width="40px" height="50px" viewBox="0 0 40 50" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <defs></defs>
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="logo" transform="translate(-20.000000, -15.000000)" stroke="#FF1D47" stroke-width="3">
                                    <g id="Marker" transform="translate(22.000000, 17.000000)">
                                        <path d="M18,45.2332275 C30,33.8305966 36,24.7932582 36,18.1212121 C36,8.11314302 27.9411255,0 18,0 C8.0588745,0 0,8.11314302 0,18.1212121 C0,24.7932582 6,33.8305966 18,45.2332275 Z" id="Oval"></path>
                                        <ellipse id="Oval-2" cx="18" cy="16.7272727" rx="5.53846154" ry="5.57575758"></ellipse>
                                    </g>
                                </g>
                            </g>
                        </svg>
                                            </span><!-- /.header-brand-image -->

                    <span class="header-brand-title">
                        <strong>Go</strong><span>Machanics</span>
                    </span><!-- /.header-brand-title -->
                </a>
            </div><!-- /.header-brand -->

            <div class="header-nav-primary">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link ">
                            Home
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class="nav-item">
                        <a href="#" class="nav-link active">
                            Listings
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            Blog
                        </a> 
                    </li><!-- /.nav-item -->                    
                    
                                    </ul><!-- /.nav -->
            </div><!-- /.header-nav-primary -->

            <div class="header-nav-secondary">
                <ul class="nav">
                                            <li class="nav-item hidden-sm-down">
                            <a href="#" class="nav-link" data-toggle="modal" data-target="#modal-login">
                                Login
                            </a>
                        </li>

                        
                                            
                    <li class="nav-item">
                        <a href="#" class="nav-link nav-btn">
                            <i class="fa fa-plus"></i> Add Listing
                        </a>
                    </li>
                </ul>
            </div><!-- /.header-nav-secondary -->

                    </div><!-- /.container -->
    </div><!-- /.header -->

    <div class="header-toggle">
        <span>Toggle Navigation</span>
    </div><!-- /.header-toggle -->
</div><!-- /.header-wrapper -->
        
        <div class="main-wrapper fullwidth">
            	    
	<div class="container">
		<div class="container"> 

	            

<div class="listing-options">

</div><!-- /.listing-options-wrapper  --> 
<div class="row">   

<?php
    // Search Result in PHP
    if($count == "0"){
        echo'<h2>No result found!</h2>';
    }else{
        while($row = mysqli_fetch_array($query)){ ?>
    		
																	
	<div class="col-md-6">
		<div class="listing">
            <div class="listing-inner">
                <div
                    style="background-image: url('uploads/<?php echo $row['company_image']; ?>');"
                    class="listing-image">
                    <a href="#" class="listing-image-link"></a>
                    <div class="listing-image-content">
                        <div class="listing-image-featured">
                            Tel- <?php echo $row['company_number']; ?>
                        </div><!-- /.listing-image-featured -->
                        <address><?php echo $row['company_address']; ?>,<br/><?php echo $row['city_name']; ?></address>
                    </div><!-- /.listing-image-content -->
                    <div class="listing-image-price"> <?php echo $row['company_service']; ?></div><!-- /.listing-image-price -->
                    <a class="listing-image-favorites" href="#"><i class="fa fa-heart"></i> <span>0</span></a><!-- /.listing-image-favorites -->
                    </div>
        <div class="listing-content">
            <h3>
                <a href="#">
                    <?php echo $row['company_name']; ?>
                </a>

                   <i class="fa fa-check"></i>
                     </h3>

         <div class="listing-rating">
                                                                        <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star"></i>
                                                                                                <i class="fa fa-star-o"></i>
                                                            </div><!-- /.listing-rating -->
                    </div><!-- /.listing-content -->
    </div><!-- /.listing-inner -->
</div><!-- /.listing -->							</div><!-- /.col-* -->													
																	
	<?php } } } // End Looping of Service Provider Search ?>																	
											
					</div><!-- /.row -->
									</div><!-- /.container -->
	</div><!-- /.content -->	



    <script src="assets/js/javascript.js" type="text/javascript"></script>


</body>
</html>