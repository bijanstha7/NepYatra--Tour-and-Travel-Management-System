<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
if (!isset($_SESSION['uemail'])) {
    header("location:login.php");
}
$error = "";
$msg = "";
if (isset($_POST['update'])) {
    $pid = $_REQUEST['id'];

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $order_items = $_POST['order_items'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE shopnow SET name= '{$name}', phone='{$phone}', order_items='{$order_items}', quantity='{$quantity}' WHERE id = {$pid}";

    echo $sql;

    $result = mysqli_query($con, $sql);
    if ($result == true) {
        $msg = "<p class='alert alert-success'>Order Updated</p>";
        header("Location:shopview.php?msg=$msg");
    } else {
        $msg = "<p class='alert alert-warning'>Order Not Updated</p>";
        header("Location:shopview.php?msg=$msg");
    }
}
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
    <link rel="stylesheet" type="text/css" href="css/color.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">

    <!--	Title
	=========================================================-->
    <title>Nep Yatra | Update</title>
    <link rel="shortcut icon" type="image/png" href="images/logo/favicon.png">
</head>

<body>

    <div id="page-wrapper">
        <div class="row">
            <!--	Header start  -->
            <?php include("include/header.php"); ?>
            <!--	Header end  -->


            <?php

            $pid = $_REQUEST['id'];
            $query = mysqli_query($con, "select * from shopnow where id='$pid'");
            while ($row = mysqli_fetch_row($query)) {
            ?>
            <div class="page-wrappers login-body full-row bg-gray">
                <div class="login-wrapper">
                    <div class="container">
                        <div class="loginbox">
                            <div class="login-right">
                                <div class="login-right-wrap">
                                    <h1> Upgrade Order</h1>
                                    <p class="account-subtitle">Upgrade Order Items</p>
                                    <?php echo $error; ?><?php echo $msg; ?>
                                    <!-- Form -->
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control" placeholder="Your Name*"
                                                required>
                                        </div>

                                        <div class="form-group">
                                            <input type="text" name="phone" class="form-control"
                                                placeholder="Your Phone No.*" maxlength="10" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="order_items" class="form-control"
                                                placeholder="order eg: bag, water bag,..." required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="quantity" class="form-control"
                                                placeholder="Quantity of Products" required>
                                        </div>




                                        <button class="btn btn-success" name="update" value="Buy Now"
                                            type="submit">Update
                                            Now</button>

                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            }
            ?>




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
    <script src="js/tinymce/tinymce.min.js"></script>
    <script src="js/tinymce/init-tinymce.min.js"></script>
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