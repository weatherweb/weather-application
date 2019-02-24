<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Compass Starter by Ariona, Rian</title>

    <!-- Loading third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">

    <!--[if lt IE 9]>
    <script src="js/ie-support/html5.js"></script>
    <script src="js/ie-support/respond.js"></script>
    <![endif]-->

</head>


<body>

<div class="site-content">
    <div class="site-header">
        <div class="container">
            <a href="index.html" class="branding">
                <img src="images/logo.png" alt="" class="logo">
                <div class="logo-type">
                    <h1 class="site-title">Company name</h1>
                    <small class="site-description">tagline goes here</small>
                </div>
            </a>

            <!-- Default snippet for navigation -->
            <div class="main-navigation">
                <button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
                <ul class="menu">
                    <li class="menu-item"><a href="index.html">Home</a></li>
                    <li class="menu-item"><a href="news.html">News</a></li>
                    <li class="menu-item current-menu-item"><a href="live-cameras.html">Live cameras</a></li>
                    <li class="menu-item"><a href="photos.html">Photos</a></li>
                    <li class="menu-item"><a href="contact.html">Contact</a></li>
                </ul> <!-- .menu -->
            </div> <!-- .main-navigation -->

            <div class="mobile-navigation"></div>

        </div>
    </div> <!-- .site-header -->

    <main class="main-content">
        <div class="container">
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span>Live cameras</span>
            </div>
        </div>

        <div class="fullwidth-block">
            <div class="container">
                <div class="filter">
                    <div class="country filter-control">
                        <label for="">Country</label>
                        <span class="select control">
									<select name="" id="">
										<option value="">All Countries</option>
									</select>
								</span>
                    </div>
                    <div class="count filter-control">
                        <label for="">Show per page</label>
                        <span class="select control">
									<select name="" id="">
										<option value="">1</option>
										<option value="">2</option>
										<option value="">3</option>
										<option value="">4</option>
										<option value="">5</option>
										<option value="">6</option>
										<option value="">7</option>
										<option value="">8</option>
										<option value="">9</option>
										<option value="">10</option>
									</select>
								</span>
                    </div>
                    <div class="quality filter-control">
                        <label for="">Only high quality</label>
                        <span class="select control">
									<select name="" id="">
										<option value="">Yes</option>
										<option value="">No</option>
									</select>
								</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="live-camera">
                            <figure class="live-camera-cover"><img src="images/live-camera-1.jpg" alt=""></figure>
                            <h3 class="location">New York</h3>
                            <small class="date">8 oct, 8:00AM</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="live-camera">
                            <figure class="live-camera-cover"><img src="images/live-camera-2.jpg" alt=""></figure>
                            <h3 class="location">Los Angeles</h3>
                            <small class="date">8 oct, 8:00AM</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="live-camera">
                            <figure class="live-camera-cover"><img src="images/live-camera-3.jpg" alt=""></figure>
                            <h3 class="location">Chicago</h3>
                            <small class="date">8 oct, 8:00AM</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="live-camera">
                            <figure class="live-camera-cover"><img src="images/live-camera-4.jpg" alt=""></figure>
                            <h3 class="location">London</h3>
                            <small class="date">8 oct, 8:00AM</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="live-camera">
                            <figure class="live-camera-cover"><img src="images/live-camera-5.jpg" alt=""></figure>
                            <h3 class="location">New York</h3>
                            <small class="date">8 oct, 8:00AM</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="live-camera">
                            <figure class="live-camera-cover"><img src="images/live-camera-6.jpg" alt=""></figure>
                            <h3 class="location">Los Angeles</h3>
                            <small class="date">8 oct, 8:00AM</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="live-camera">
                            <figure class="live-camera-cover"><img src="images/live-camera-7.jpg" alt=""></figure>
                            <h3 class="location">Chicago</h3>
                            <small class="date">8 oct, 8:00AM</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="live-camera">
                            <figure class="live-camera-cover"><img src="images/live-camera-8.jpg" alt=""></figure>
                            <h3 class="location">London</h3>
                            <small class="date">8 oct, 8:00AM</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main> <!-- .main-content -->

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <form action="#" class="subscribe-form">
                        <input type="text" placeholder="Enter your email to subscribe...">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
                <div class="col-md-3 col-md-offset-1">
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>

            <p class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved</p>
        </div>
    </footer> <!-- .site-footer -->
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>

</body>

</html>