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
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $code = $_POST['code'];
    $stype = $_POST['stype'];
    $guest = $_POST['guest'];
    $pid = $_REQUEST['id'];
    $visiting_date = $_POST['visiting_date'];

    $sql = "UPDATE book SET name= '{$name}', email= '{$email}', phone='{$phone}', code='{$code}', type='{$stype}',
	guest='{$guest}', visiting_date='{$visiting_date}' WHERE id = {$pid}";

    echo $sql;

    $result = mysqli_query($con, $sql);
    if ($result == true) {
        $msg = "<p class='alert alert-success'>Booking Updated</p>";
        header("Location:feature.php?msg=$msg");
    } else {
        $msg = "<p class='alert alert-warning'>Booking Not Updated</p>";
        header("Location:feature.php?msg=$msg");
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
            $query = mysqli_query($con, "select * from book where id='$pid'");
            while ($row = mysqli_fetch_row($query)) {
            ?>
                <div class="page-wrappers login-body full-row bg-gray">
                    <div class="login-wrapper">
                        <div class="container">
                            <div class="loginbox">
                                <div class="login-right">
                                    <div class="login-right-wrap">
                                        <h1>Update Booking</h1>
                                        <p class="account-subtitle">Let's Feel the Nature</p>
                                        <?php echo $error; ?><?php echo $msg; ?>
                                        <!-- Form -->
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <input type="text" name="name" class="form-control" placeholder="Your Name*" required value="<?php echo $row['1']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" name="email" class="form-control" placeholder="Your Email*" required value="<?php echo $row['2']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="phone" class="form-control" placeholder="Your Phone*" maxlength="10" required value="<?php echo $row['3']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="code" class="form-control" placeholder="Your Package Code" required value="<?php echo $row['4']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" required name="stype">
                                                    <option value="">Select Packages</option>
                                                    <option value="Trekking">Trekking</option>
                                                    <option value="Tours">Tour</option>
                                                    <option value="Climbing">Climbing</option>
                                                    <option value="Adventure">Adventure</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <input type="number" name="guest" class="form-control" placeholder="No. of People Visit" required value="<?php echo $row['6']; ?>">
                                            </div>
                                            <div class="form-group">
                                                <input type="date" name="visiting_date" class="form-control" required>
                                            </div>

                                            <button class="btn btn-success" name="update" value="Book Now" type="submit">Update</button>

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
            <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a>
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