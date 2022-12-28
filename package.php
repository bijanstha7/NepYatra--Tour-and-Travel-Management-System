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
    <meta name="description" content="Real Estate PHP">
    <meta name="keywords" content="">
    <meta name="author" content="Unicoder">
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
    <title>Nep Yatra | Packages</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/favicon.png">
</head>

<body>


    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->

            <div class="full-row">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-8">
                            <div class="row">

                                <?php
                                $query = mysqli_query($con, "SELECT packages.*, user.uname,user.utype,user.uimage FROM `packages`,`user` WHERE packages.uid=user.uid");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>

                                <div class="col-md-6">
                                    <div class="featured-thumb hover-zoomer mb-4">
                                        <div class="overlay-black overflow-hidden position-relative"> <img
                                                src="admin/packages/<?php echo $row['18']; ?>" alt="pimage">

                                            <div class="sale bg-success text-white">For <?php echo $row['4']; ?> Days
                                            </div>
                                            <div class="price text-primary text-capitalize">Rs.<?php echo $row['13']; ?>
                                                <span class="text-white">⭐⭐⭐⭐</span>
                                            </div>

                                        </div>
                                        <div class="featured-thumb-data shadow-one">
                                            <div class="p-4">
                                                <h5 class="text-secondary hover-text-success mb-2 text-capitalize"><a
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
                                                    <li><span><?php echo $row['9']; ?></span> Discount</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="sidebar-widget">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Discount
                                    Calculator</h4>
                                <form class="d-inline-block w-100" action="calc.php" method="post">
                                    <label class="sr-only">Packages Amount</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rs.</div>
                                        </div>
                                        <input type="text" class="form-control" name="amount"
                                            placeholder="Packages Price">
                                    </div>

                                    <label class="sr-only">Discount Rate</label>
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">%</div>
                                        </div>
                                        <input type="text" class="form-control" name="interest"
                                            placeholder="Discount Rate">
                                    </div>
                                    <button type="submit" value="submit" name="calc"
                                        class="btn btn-danger mt-4">Calculate Discount</button>
                                </form>
                            </div>

                            <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4 mt-5">Featured
                                Packages</h4>
                            <ul class="property_list_widget">

                                <?php
                                $query = mysqli_query($con, "SELECT * FROM `packages` WHERE isFeatured = 1 ORDER BY date DESC LIMIT 4");
                                while ($row = mysqli_fetch_array($query)) {
                                ?>
                                <li> <img src="admin/packages/<?php echo $row['18']; ?>" alt="pimage">
                                    <h6 class="text-secondary hover-text-success text-capitalize"><a
                                            href="packagedetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a>
                                    </h6>
                                    <span class="font-14"><i class="fas fa-map-marker-alt icon-success icon-small"></i>
                                        <?php echo $row['14']; ?></span>

                                </li>
                                <?php } ?>

                            </ul>

                            <div class="sidebar-widget mt-5">
                                <h4 class="double-down-line-left text-secondary position-relative pb-4 mb-4">Recently
                                    Added Packages</h4>
                                <ul class="property_list_widget">

                                    <?php
                                    $query = mysqli_query($con, "SELECT * FROM `packages` ORDER BY date DESC LIMIT 5");
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                    <li> <img src="admin/packages/<?php echo $row['18']; ?>" alt="pimage">
                                        <h6 class="text-secondary hover-text-success text-capitalize"><a
                                                href="packagedetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a>
                                        </h6>
                                        <span class="font-14"><i
                                                class="fas fa-map-marker-alt icon-success icon-small"></i>
                                            <?php echo $row['14']; ?></span>

                                    </li>
                                    <?php } ?>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


            <!--	Footer   start-->
            <?php include("include/footer.php"); ?>
            <!--	Footer   start-->

            <!-- Scroll to top -->
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i
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

    <script src="js/custom.js"></script>
</body>

</html>