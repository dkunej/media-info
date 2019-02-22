<?php $page = basename($_SERVER['SCRIPT_NAME']); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OTG - Of The Grid</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,400">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Sans">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lobster">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/flexslider/flexslider.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
        
        <!-- Navigation Bar -->
		<?php include ('includes/navbar.php'); ?>

        <!-- Slider 2 -->
        <div class="slider-2-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 slider-2-text wow fadeInUp">
                        <h1><span class="violet">OTG</span> </h1><p>Of The Grid</p>
	            		<p>Patrik Durasek / Hrvoje Grgic / Dino Horvat / Belma Jakupovic / Daniela Kunej / Lucano Zganec</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services -->
        <div class="services-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 services-title wow fadeIn">
		                <h2>Movies & Music</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-eye"></i></div>
		                    <h3>Top 10 Overall</h3>
		                    <p>Movies</br>
                            Ranked Overall</p>
		                    <a class="big-link-1" href="movies.php">Read more</a>
		                </div>
					</div>
					<div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-eye"></i></div>
		                    <h3>FUN</h3>
		                    <p>Movies</br>
                            Fun Facts</p>
		                    <a class="big-link-1" href="movies.php">Read more</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-music"></i></div>
		                    <h3>Top 10 Pre</h3>
		                    <p>Music
                            </br>Ranked Pre 2000</p>
		                    <a class="big-link-1" href="musicpre.php">Read more</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-music"></i></div>
		                    <h3>Top 10 Post</h3>
		                    <p>Music</br>Ranked Post 2000</p>
		                    <a class="big-link-1" href="musicpost.php">Read more</a>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>
        

        <!-- Latest work -->
        <div class="work-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 work-title wow fadeIn">
		                <h2>Art</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="work wow fadeInUp">
		                    <img src="assets/img/slider/num8.jpg" alt="Portrait" data-at2x="assets/slider/portfolio/num8.jpg">
		                    <h3>Top 10 Pre</h3>
		                    <p>Art
                            </br>Ranked Pre 1900</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="assets/img/slider/num8.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.php"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="work wow fadeInDown">
		                    <img src="assets/img/slider/num2.jpg" alt="Card Players" data-at2x="assets/img/slider/num2.jpg">
		                    <h3>Top 10 Pre</h3>
		                    <p>Art</br>
                            Ranked Pre 1900</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="assets/img/slider/num2.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.php"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-3">
		                <div class="work wow fadeInUp">
		                    <img src="assets/img/slider/artpost10.jpg" alt="Flag" data-at2x="assets/img/slider/artpost10.jpg">
		                    <h3>Top 10 Post</h3>
		                    <p>Art</br>
                            Ranked Post 1900</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="assets/img/slider/artpost10.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="artpost.php"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-3">
		                <div class="work wow fadeInDown">
		                    <img src="assets/img/slider/artpost8.jpg" alt="Sketch" data-at2x="assets/img/slider/artpost8.jpg">
		                    <h3>Top 10 Post</h3>
		                    <p>Art</br>
                            Ranked Post 1900</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="assets/img/slider/artpost8.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="artpost.php"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
	            </div>
	        </div>
        </div>

       

        <!-- Footer -->
        		<?php include ('includes/footer.php'); ?>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/flexslider/jquery.flexslider-min.js"></script>
        <script src="assets/js/jflickrfeed.min.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="assets/js/jquery.ui.map.min.js"></script>
        <script src="assets/js/scripts.js"></script>

    </body>

</html>