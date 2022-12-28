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
    <title>Nep Yatra | Package Details</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/favi.png">
</head>

<body>

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->

            <!--	Banner   --->
            <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>Package Detail</b>
                            </h2>
                        </div>
                        <div class="col-md-6">
                            <nav aria-label="breadcrumb" class="float-left float-md-right">
                                <ol class="breadcrumb bg-transparent m-0 p-0">
                                    <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">Package Detail</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!--	Banner   --->


            <div class="full-row">
                <div class="container">
                    <div class="row">

                        <?php
                        $id = $_REQUEST['pid'];
                        $query = mysqli_query($con, "SELECT packages.*, user.* FROM `packages`,`user` WHERE packages.uid=user.uid and pid='$id'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>

                        <div class="col-lg-8">

                            <div class="row">
                                <div class="col-md-12">
                                    <div id="single-property"
                                        style="width:1200px; height:700px; margin:30px auto 50px;">
                                        <!-- Slide 1-->
                                        <div class="ls-slide"
                                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                                            <img width="1920" height="1080"
                                                src="admin/packages/<?php echo $row['18']; ?>" class="ls-bg" alt="" />
                                        </div>

                                        <!-- Slide 2-->
                                        <div class="ls-slide"
                                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                                            <img width="1920" height="1080"
                                                src="admin/packages/<?php echo $row['19']; ?>" class="ls-bg" alt="" />
                                        </div>

                                        <!-- Slide 3-->
                                        <div class="ls-slide"
                                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                                            <img width="1920" height="1080"
                                                src="admin/packages/<?php echo $row['20']; ?>" class="ls-bg" alt="" />
                                        </div>

                                        <!-- Slide 4-->
                                        <div class="ls-slide"
                                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                                            <img width="1920" height="1080"
                                                src="admin/packages/<?php echo $row['21']; ?>" class="ls-bg" alt="" />
                                        </div>

                                        <!-- Slide 5-->
                                        <div class="ls-slide"
                                            data-ls="duration:7500; transition2d:5; kenburnszoom:in; kenburnsscale:1.2;">
                                            <img width="1920" height="1080"
                                                src="admin/packages/<?php echo $row['22']; ?>" class="ls-bg" alt="" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-6">
                                    <div class="bg-success d-table px-3 py-2 rounded text-white text-capitalize">For
                                        <?php echo $row['4']; ?> days</div>
                                    <h5 class="mt-2 text-secondary text-capitalize"><?php echo $row['1']; ?></h5>
                                    <span class="mb-sm-20 d-block text-capitalize"><i
                                            class="fas fa-map-marker-alt text-success font-12"></i>
                                        &nbsp;<?php echo $row['14']; ?></span>
                                </div>
                                <div class="col-md-6">
                                    <div class="text-success text-left h5 my-2 text-md-right">
                                        Rs.<?php echo $row['13']; ?>
                                    </div>
                                    <div class="text-left text-md-right">Price</div>
                                </div>
                            </div>
                            <div class="property-details">
                                <div class="bg-gray property-quantity px-4 pt-4 w-100">
                                    <ul>
                                        <li><span class="text-secondary"><?php echo $row['6']; ?></span> Days</li>
                                        <li><span class="text-secondary"><?php echo $row['7']; ?></span> Nights</li>
                                        <li><span class="text-secondary"><?php echo $row['8']; ?></span> Package Code
                                        </li>
                                        <li><span class="text-secondary"><?php echo $row['9']; ?></span> Discount</li>

                                    </ul>
                                </div>
                                <h4 class="text-secondary my-4">Description</h4>
                                <p><?php echo $row['2']; ?></p>

                                <h5 class="mt-5 mb-4 text-secondary">Package Summary</h5>
                                <div class="table-striped font-14 pb-2">
                                    <table class="w-100">

                                        <tbody>
                                            <tr>
                                                <td>Duration :</td>
                                                <td class="text-capitalize"><?php echo $row['4']; ?></td>
                                                <td>Package Type :</td>
                                                <td class="text-capitalize"><?php echo $row['3']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>City :</td>
                                                <td class="text-capitalize"><?php echo $row['15']; ?></td>
                                                <td>State :</td>
                                                <td class="text-capitalize"><?php echo $row['16']; ?></td>
                                            </tr>
                                            <tr>
                                                <td>Status :</td>
                                                <td class="text-capitalize"><?php echo $row['24']; ?></td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <h5 class="mt-5 mb-4 text-secondary">Features</h5>
                                <div class="row">
                                    <?php echo $row['17']; ?>

                                </div>
                                <h5 class="mt-5 mb-4 text-secondary">Pictures</h5>
                                <div class="accordion" id="accordionExample">
                                    <button
                                        class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne"> Camping </button>
                                    <div id="collapseOne" class="collapse p-4" aria-labelledby="headingOne"
                                        data-parent="#accordionExample">
                                        <img src="admin/packages/<?php echo $row['25']; ?>" alt="Not Available">
                                    </div>
                                    <button
                                        class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">Trekking</button>
                                    <div id="collapseTwo" class="collapse p-4" aria-labelledby="headingTwo"
                                        data-parent="#accordionExample">
                                        <img src="admin/packages/<?php echo $row['26']; ?>" alt="Not Available">
                                    </div>
                                    <button
                                        class="bg-gray hover-bg-success hover-text-white text-ordinary py-3 px-4 mb-1 w-100 text-left rounded position-relative collapsed"
                                        type="button" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">Adventure</button>
                                    <div id="collapseThree" class="collapse p-4" aria-labelledby="headingThree"
                                        data-parent="#accordionExample">
                                        <img src="admin/packages/<?php echo $row['27']; ?>" alt="Not Available">
                                    </div>
                                </div>



                            </div>
                        </div>

                        <?php } ?>

                        <div class="col-lg-4">
                            <h4 class="double-down-line-left text-secondary position-relative pb-4 my-4">Discount
                                Calculator</h4>
                            <form class="d-inline-block w-100" action="calc.php" method="post">
                                <label class="sr-only">Packages Amount</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Rs.</div>
                                    </div>
                                    <input type="text" class="form-control" name="amount" placeholder="Packages Price">
                                </div>

                                <label class="sr-only">Discount Rate</label>
                                <div class="input-group mb-2 mr-sm-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">%</div>
                                    </div>
                                    <input type="text" class="form-control" name="interest" placeholder="Discount Rate">
                                </div>
                                <button type="submit" value="submit" name="calc" class="btn btn-danger mt-4">Calculate
                                    Discount</button>
                            </form>
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