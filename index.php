<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta Tags -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="images/favicon.ico">

    <!--	Fonts
	========================================================-->
    <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

    <!--	Css Link
	========================================================-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="css/layerslider.css">
    <link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--	Title
	=========================================================-->
    <title>Nep Yatra | Home</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/favicon.png">
</head>

<body>

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->

            <!--	Banner Start   -->
            <div class="overlay-black w-100 slider-banner1 position-relative"
                style="background-image: url('images/banner/banner.png'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-lg-12">
                            <div class="text-white">
                                <h1 class="mb-4"><span class="text-success">Let us</span><br>
                                    Guide you to your Destination</h1>
                                <form method="post" action="packagegrid.php">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="type">
                                                    <option value="">Tour Type</option>
                                                    <option value="Himalayan">Himalayan</option>
                                                    <option value="Heritages">Heritages</option>
                                                    <option value="National Park">National Park</option>
                                                    <option value="Nature">Nature</option>
                                                    <option value="Sports Activities">Sports Activities</option>
                                                    <option value="Camping">Camping</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-2">
                                            <div class="form-group">
                                                <select class="form-control" name="stype">
                                                    <option value="">Packages type</option>
                                                    <option value="Trekking">Trekking</option>
                                                    <option value="Tours">Tours</option>
                                                    <option value="Climbing">Climbing</option>
                                                    <option value="Adventure">Adventure</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-lg-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="city"
                                                    placeholder="Enter your Destination City" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-lg-2">
                                            <div class="form-group">
                                                <button type="submit" name="filter" class="btn btn-success w-100">Search
                                                    Packages</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner End  -->

            <!--	Text Block One
		======================================================-->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">Our Services</h2>
                        </div>
                    </div>
                    <div class="text-box-one">
                        <div class="row">
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-rent text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Affordable
                                            Hotels</a></h5>
                                    <p>"Good Services That Are Cheap Cost Less Money Than Usual Or Than You Expected."
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-for-rent text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Food and
                                            Drinks</a></h5>
                                    <p>"Food Of A Wide Range Of Styles And Cuisine Types."</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-list text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Safety Guide</a>
                                    </h5>
                                    <p>"Your Safety Is Your Personal Responsibilities In Our Hand."</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="p-4 text-center hover-bg-white hover-shadow rounded mb-4 transation-3s">
                                    <i class="flaticon-diagram text-success flat-medium" aria-hidden="true"></i>
                                    <h5 class="text-secondary hover-text-success py-3 m-0"><a href="#">Around The
                                            Nepal</a></h5>
                                    <p>“Navigating Nepal's Mountainous, Hills And Terai Terrain”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-----  Our Services  ---->

            <!--	Recent Properties  -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-secondary double-down-line text-center mb-4">Tour Packages</h2>
                        </div>
                        <div class="col-md-6">
                            <ul class="nav property-btn float-right" id="pills-tab" role="tablist">

                            </ul>
                        </div>
                        <div class="col-md-12">
                            <div class="tab-content mt-4" id="pills-tabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home">
                                    <div class="row">

                                        <?php $query = mysqli_query($con, "SELECT packages.*, user.uname,user.utype,user.uimage FROM `packages`,`user` WHERE packages.uid=user.uid ORDER BY date DESC LIMIT 9");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>

                                        <div class="col-md-6 col-lg-4">
                                            <div class="featured-thumb hover-zoomer mb-4">
                                                <div class="overlay-black overflow-hidden position-relative"> <img
                                                        src="admin/packages/<?php echo $row['18']; ?>" alt="pimage">
                                                    <div class="featured bg-success text-white">New</div>
                                                    <div class="sale bg-success text-white text-capitalize">For
                                                        <?php echo $row['4']; ?> Days</div>
                                                    <div class="price text-primary"><b>Rs.<?php echo $row['13']; ?>
                                                        </b><span class="text-white">
                                                            ⭐⭐⭐⭐</span></div>
                                                </div>
                                                <div class="featured-thumb-data shadow-one">
                                                    <div class="p-3">
                                                        <h5
                                                            class="text-secondary hover-text-success mb-2 text-capitalize">
                                                            <a
                                                                href="packagedetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a>
                                                        </h5>
                                                        <span class="location text-capitalize"><i
                                                                class="fas fa-map-marker-alt text-success"></i>
                                                            <?php echo $row['14']; ?></span>
                                                    </div>
                                                    <div class="bg-gray quantity px-4 pt-4">
                                                        <ul>
                                                            <li><span><?php echo $row['6']; ?></span> Days</li>
                                                            <li><span><?php echo $row['7']; ?></span> Nights</li>
                                                            <li><span><?php echo $row['8']; ?></span> Package Code</li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>

                                    </div>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Recent Properties  -->

            <!--	Why Choose Us -->
            <div class="full-row living bg-one overlay-secondary-half"
                style="background-image: url('images/banner1.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="living-list pr-4">
                                <h3 class="pb-4 mb-3 text-white">Why Choose Us</h3>
                                <ul>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-reward flat-medium float-left d-table mr-4 text-success"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Top Rated</h5>
                                            <p>"Top one private Tour and Travels company in Nepal".</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-real-estate flat-medium float-left d-table mr-4 text-success"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Discount Tour Packages</h5>
                                            <p>"Provides over 100+ packages with great natural adventures and Different
                                                sports Activities."</p>
                                        </div>
                                    </li>
                                    <li class="mb-4 text-white d-flex">
                                        <i class="flaticon-seller flat-medium float-left d-table mr-4 text-success"
                                            aria-hidden="true"></i>
                                        <div class="pl-2">
                                            <h5 class="mb-3">Experienced Tour Guide</h5>
                                            <p>"More than 5 years+ experience Guide which provide you with adventure
                                                throughout your journey in Nepal."</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	why choose us -->


            <!--	How it work -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">How It Works</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">1</div>
                                <div class="left-arrow"><i class="flaticon-investor flat-medium icon-success"
                                        aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Plan Your Tour</h5>
                                <p>"Book your dream vacation now and on limited time, get 10% off."</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">2</div>
                                <div class="left-arrow"><i class="flaticon-search flat-medium icon-success"
                                        aria-hidden="true"></i></div>
                                <h5 class="text-secondary mt-5 mb-4">Leave On Us</h5>
                                <p>"We take pride in meticulously planning itineraries for our travelers to suit
                                    their unique desires and needs."</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="icon-thumb-one text-center mb-5">
                                <div class="bg-success text-white rounded-circle position-absolute z-index-9">3</div>
                                <div><i class="flaticon-handshake flat-medium icon-success" aria-hidden="true"></i>
                                </div>
                                <h5 class="text-secondary mt-5 mb-4">Your Feedback</h5>
                                <p>"Give Your genuine feedback and share your experience with us through out the
                                    journey."</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--	How It Work -->

            <!--	Achievement
        ============================================================-->
            <div class="full-row overlay-secondary"
                style="background-image: url('images/abc.png'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM packages where stype='Trekking'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="count-num text-success my-4" data-speed="3000"
                                        data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Trekking Packages</div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM packages where stype='Tours'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="count-num text-success my-4" data-speed="3000"
                                        data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Tour Packages</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM packages where stype='Climbing'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="count-num text-success my-4" data-speed="3000"
                                        data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Climbing Packages</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-house flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(pid) FROM packages where stype='Adventure'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="count-num text-success my-4" data-speed="3000"
                                        data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Adventure Packages</div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>

            <!--	Popular Place -->
            <div class="full-row bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-secondary double-down-line text-center mb-5">Popular Places to Visit</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div
                                    class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9">
                                    <img src="images/thumbnail4/11.jpg" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(state), packages.* FROM packages where state='Lumbini Province'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <h4 class="hover-text-success text-capitalize"><a
                                                href="#?id=<?php echo $row['17'] ?>"><?php echo $row['state']; ?></a>
                                        </h4>
                                        <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Packages Listed</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div
                                    class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9">
                                    <img src="images/thumbnail4/22.jpg" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(state), packages.* FROM packages where state='Bagmati Province'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <h4 class="hover-text-success text-capitalize"><a
                                                href="#?id=<?php echo $row['17'] ?>"><?php echo $row['state']; ?></a>
                                        </h4>
                                        <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Packages Listed</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div
                                    class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9">
                                    <img src="images/thumbnail4/33.jpg" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(state), packages.* FROM packages where state='Gandaki Province'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <h4 class="hover-text-success text-capitalize"><a
                                                href="#?id=<?php echo $row['17'] ?>"><?php echo $row['state']; ?></a>
                                        </h4>
                                        <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Packages Listed</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 pb-1">
                                <div
                                    class="overflow-hidden position-relative overlay-secondary hover-zoomer mx-n13 z-index-9">
                                    <img src="images/thumbnail4/44.jpg" alt="">
                                    <div class="text-white xy-center z-index-9 position-absolute text-center w-100">
                                        <?php
                                        $query = mysqli_query($con, "SELECT count(state), packages.* FROM packages where state='Province No. 1'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <h4 class="hover-text-success text-capitalize"><a
                                                href="#?id=<?php echo $row['17'] ?>"><?php echo $row['state']; ?></a>
                                        </h4>
                                        <span><?php
                                                    $total = $row[0];
                                                    echo $total; ?> Packages Listed</span>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Popular Places -->
            <div class="full-row overlay-secondary"
                style="background-image: url('images/images/g-9.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
                <div class="container">
                    <div class="fact-counter">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(aid) FROM admin");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="count-num text-success my-4" data-speed="3000"
                                        data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Registered Administrator</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(uid) FROM user where utype='Guide'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="count-num text-success my-4" data-speed="3000"
                                        data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Registered Guide</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(uid) FROM user where utype='user'");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="count-num text-success my-4" data-speed="3000"
                                        data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Registered Users</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="count wow text-center  mb-sm-50" data-wow-duration="300ms"> <i
                                        class="flaticon-man flat-large text-white" aria-hidden="true"></i>
                                    <?php
                                    $query = mysqli_query($con, "SELECT count(uid) FROM feedback");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <div class="count-num text-success my-4" data-speed="3000"
                                        data-stop="<?php
                                                                                                                $total = $row[0];
                                                                                                                echo $total; ?>">0</div>
                                    <?php } ?>
                                    <div class="text-white h5">Total Feedbacks</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--	Testonomial -->
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="content-sidebar p-4">
                                <div class="mb-3 col-lg-12">
                                    <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">
                                        Testimonial</h4>
                                    <div class="recent-review owl-carousel owl-dots-gray owl-dots-hover-success">

                                        <?php

                                        $query = mysqli_query($con, "select feedback.*, user.* from feedback,user where feedback.uid=user.uid and feedback.status='1'");
                                        while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="item">
                                            <div class="p-4 bg-success down-angle-white position-relative">
                                                <p class="text-white"><i
                                                        class="fas fa-quote-left mr-2 text-white"></i><?php echo $row['2']; ?>.
                                                    <i class="fas fa-quote-right mr-2 text-white"></i>
                                                </p>
                                            </div>
                                            <div class="p-2 mt-4">
                                                <span
                                                    class="text-success d-table text-capitalize"><?php echo $row['uname']; ?></span>
                                                <span class="text-capitalize"><?php echo $row['utype']; ?></span>
                                            </div>
                                        </div>
                                        <?php }  ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Testonomial -->


            <!--	Footer   start-->
            <?php include("include/footer.php"); ?>
            <!--	Footer   start-->


            <!-- Scroll to top -->
            <a href="#" class="bg-success text-white hover-text-secondary" id="scroll"><i
                    class="fas fa-angle-up"></i></a>
            <!-- End Scroll To top -->
        </div>
    </div>
    <!-- Wrapper End -->

    <!--	Js Link
============================================================-->
    <script src="js/jquery.min.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <!--jQuery Layer Slider -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/tmpl.js"></script>
    <script src="js/jquery.dependClass-0.1.js"></script>
    <script src="js/draggable-0.1.js"></script>
    <script src="js/jquery.slider.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/YouTubePopUp.jquery.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/jquery.cookie.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>