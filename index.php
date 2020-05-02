<?php include('includes/functions.php'); ?>
<?php
$obj = new database();
$user_view_services = $obj->sd_userview_services();
$recent_services = $obj->sd_recent_services();
$discover_locations = $obj->sd_userview_locations();
$popular_services = $obj->sd_popular_services();

?>


<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Go Machanic - Your Nearest Service Finder of Mechanics, Workshops &amp; Garages</title>
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

<body class="header-transparent">

    <div class="page-wrapper">
        <div class="header-wrapper">
    <div class="header">
        <div class="container">
            <div class="header-brand">
                <a href="index.html">
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
                        <a href="index.php" class="nav-link active">
                            Home
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            Our Services
                        </a> 
                    </li><!-- /.nav-item -->

                    <li class="nav-item">
                        <a href="#" class="nav-link ">
                            About Us
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
        
        <div class="main-wrapper">
                <div class="hero-wrapper">
    <div class="hero">
        <div class="container">
            <h1>Search Your City</h1>
            <p>Find the best Mechanics or Workshops in your city by using keywords. Get Rapid Service & Start listing your service today.</p>

            <form name="filter-hero-form" method="get" action="search.php">
            <div>
                <div class="form-group keyword">
                    <input type="text" id="keyword" name="keyword" placeholder="Keyword Search" class="form-control" />
                </div>
                <div class="form-group category">
                    <select id="category" name="category" class="form-control">
                        <option value="">All Categories</option><?php while($row=$user_view_services->fetch_assoc()) { ?><option value="1" data-icon="fa-car"><?php echo $row['service_title']; ?></option><?php }; ?>
                    </select>
                </div>
                <div class="form-group button"><button type="submit" id="save" name="search" class="btn btn-primary btn-block btn">Search Listings</button></div></div>
            </form>

                            <div class="hero-categories">
                    <strong>Popular categories</strong>

                    <ul>
                                                    <li>
                                <a href="categories/food-drink.html">
                                    Bike & Scooter <span>(5)</span>
                                </a>,</li>
                                                    <li>
                                <a href="categories/education.html">
                                    Car <span>(3)</span>
                                </a>,</li>
                                                    <li>
                                <a href="categories/travel.html">
                                    Bus <span>(3)</span>
                                </a>,</li>
                                            </ul>
                </div><!-- /.hero-categories -->
                    </div><!-- /.container -->
    </div><!-- /.hero -->
</div><!-- /.hero-wrapper -->
    <div class="container">
        <div class="content mb-70">
                            <div class="page-title ">    
            <h2>Discover Our Locations</h2>
    
            <p>Most visited locations in the directory platform. Missing your city? Feel free to let us know.</p>
    </div><!-- /.page-title -->
                <div class="locations-wrapper">
                    <div class="row">


                        <?php while($row=$discover_locations->fetch_assoc()) { ?>
                                                    <div class="col-md-4">
                                <div class="location" style="background-image: url('uploads/<?php echo $row['location_image']; ?>');">
    <div class="location-inner">
        <a href="#" class="location-link"></a>

        <div class="location-content">
            <div class="location-title">
                <h3>
                    <a href="#">
                       <?php echo $row['location_name']; ?>
                    </a>
                </h3>

                <p>                
                    <?php echo $row['id']; ?> available listing                   
                </p>
            </div><!-- /.location-title -->

            <a href="#" class="btn btn-primary">Show all</a>
        </div>
    </div><!-- /.location-inner -->
</div><!-- /.location-->                            </div><!-- /.col-* -->


<?php } ?>
                                                    
                                            </div><!-- /.row -->
                </div><!-- /.locations-wrapper -->
            
                            <div class="page-title ">    
            <h2>Most Recent Services</h2>
    
            <p>Find out most recent listings services &amp; classifieds added into our service catalogue by our users.</p>
    </div><!-- /.page-title -->
                <div class="listings-wrapper">
                    <div class="row">

                        <?php while($row=$recent_services->fetch_assoc()) { ?>
                                                    <div class="col-md-4">
                                <div class="listing">
    <div class="listing-inner">
        <div
                            style="background-image: url('uploads/<?php echo $row['service_img']; ?>');"
                       class="listing-image">

           <a href="#" class="listing-image-link"></a>
                            <div class="listing-image-content">
                    
                                            <address><?php //echo $row['service_location']; ?></address>
                                    </div><!-- /.listing-image-content -->
            
                            <div class="listing-image-price">
                    <?php echo $row['service_price']; ?>
                </div><!-- /.listing-image-price -->
            
            <a class="listing-image-favorites" href="index.html">
                <i class="fa fa-heart"></i> <span> <?php echo $row['id']; ?></span>
            </a><!-- /.listing-image-favorites -->
        </div>

        <div class="listing-content">
            <h3>
                <a href="#">
                    <?php echo $row['service_title']; ?>
                </a>

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
</div><!-- /.listing -->                            </div><!-- /.col-* -->
                                                   
                               

<?php } ?>


                                            </div><!-- /.row -->
                </div><!-- /.listings-wrapper -->
            
                            <div class="page-title ">    
            <h2>Select Your Service</h2>
    
            <p>Most popular categories in system ordered by highest number of assigned listings.</p>
    </div><!-- /.page-title -->
                <div class="categories-wrapper">
                    <div class="row">
                        <?php while($row=$popular_services ->fetch_assoc()) { ?>
                                                    <div class="col-md-3">
                                <a href="#" class="category">
    <span class="category-count">
         <?php echo $row['id']; ?>

                    listings
            </span>

            <span class="category-icon">
            <i class="fa fa-car"></i>
        </span><!-- /.category-icon -->
    
    <span class="category-title">
        <?php echo $row['service_title']; ?>
    </span><!-- /.category-title -->
</a><!-- /.category -->                            </div><!-- /.col-* -->

<?php } ?>
                                                    
                                            </div><!-- /.row -->
                </div><!-- /.categories-wrapper -->

                <div class="btn-center">
                    <a href="categories.html" class="btn btn-primary">Show All Categories</a>
                </div><!-- /.btn-center -->
 
                    </div><!-- /.content -->
    </div><!-- /.container -->
        </div><!-- /.main-wrapper -->

        <div class="cta">
    <div class="container">
        <div class="cta-inner">
            <div class="row">
                <div class="col-md-8">
                    <div class="cta-content">
                        <h3>Get best listing notifications happening near you.</h3>

                        <p>
                            Once per month we will post you e-mail informing you about nearby events. We promise that we will not share your e-mail address. You can always have an option to unsubscribe.
                        </p>
                    </div><!-- /.cta-content -->
                </div><!-- /.col-* -->

                <div class="col-md-4">
                    <div class="cta-form">
                        <form name="subscriber" method="post" action="http://directory-platform.wearecodevision.com/subscriber/subscribe">
<div id="subscriber"><div class="form-group email"><input type="email" id="subscriber_email" name="subscriber[email]" required="required" placeholder="E-mail address" class="form-control" /></div><div class="form-group button"><button type="submit" id="subscriber_save" name="subscriber[save]" class="btn btn-primary btn">Subscribe</button></div><input type="hidden" id="subscriber__token" name="subscriber[_token]" value="Zg6ErsPy9-k5Fwn3iRHuHQgN02VDiyZ7gHW6uVrswOA" /></div>
</form>
                    </div><!-- /.cta-form -->
                </div><!-- /.col-* -->
            </div><!-- /.row -->
        </div><!-- /.cta-inner -->
    </div><!-- /.container -->
</div><!-- /.cta -->        
        <div class="footer-wrapper">
    <div class="footer">
        <div class="container">
            <div class="footer-left">
                <p>
                    &copy; 2018 All rights reserved. Created by <a href="http://wearecodevision.com/">RSS Group</a>.
                </p>
            </div><!-- /.footer-left-->

            <div class="footer-right">
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                </ul>
            </div><!-- /.footer-right -->
        </div><!-- /.container -->
    </div><!-- /.footer -->
</div><!-- /.footer-wrapper -->    </div><!-- /page-wrapper -->

    <div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-login" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-close"></i>
        </button>
      </div>

      <div class="modal-body">                  
      </div>
    </div>
  </div>
</div>    <div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="modal-register" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Create Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-close"></i>
        </button>
      </div>

      <div class="modal-body">                  
      </div>
    </div>
  </div>
</div>
    <script type="text/javascript">
        var map_styles = [{"featureType":"administrative.land_parcel","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"simplified"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"hue":"#f49935"}]},{"featureType":"road.highway","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"hue":"#fad959"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"visibility":"simplified"}]},{"featureType":"road.local","elementType":"labels","stylers":[{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#a1cdfc"},{"saturation":30},{"lightness":49}]}]
    </script>


<script src="http://maps.googleapis.com/maps/api/js?libraries=weather,geometry,visualization,places,drawing&amp;key=AIzaSyDmXybAJzoPZ6hH-Jhv7QMCSGgQ6MY8WqY" type="text/javascript"></script>


    <script src="assets/js/javascript.js" type="text/javascript"></script>


</body>

</html>