<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
    header("location:index.php");
}

$error = "";
$msg = "";
if (isset($_POST['add'])) {

    $title = $_POST['title'];
    $content = $_POST['content'];
    $ptype = $_POST['ptype'];
    $duration = $_POST['duration'];
    $day = $_POST['day'];
    $code = $_POST['code'];
    $extra1 = $_POST['extra1'];
    $stype = $_POST['stype'];
    $night = $_POST['night'];
    $discount = $_POST['discount'];
    $extra2 = $_POST['extra2'];
    $price = $_POST['price'];
    $city = $_POST['city'];
    $extra4 = $_POST['extra4'];
    $loc = $_POST['loc'];
    $state = $_POST['state'];
    $status = $_POST['status'];
    $uid = $_POST['uid'];
    $feature = $_POST['feature'];

    $extra3 = $_POST['extra3'];
    $isFeatured = $_POST['isFeatured'];

    $aimage = $_FILES['aimage']['name'];
    $aimage1 = $_FILES['aimage1']['name'];
    $aimage2 = $_FILES['aimage2']['name'];
    $aimage3 = $_FILES['aimage3']['name'];
    $aimage4 = $_FILES['aimage4']['name'];

    $fimage = $_FILES['fimage']['name'];
    $fimage1 = $_FILES['fimage1']['name'];
    $fimage2 = $_FILES['fimage2']['name'];

    $temp_name  = $_FILES['aimage']['tmp_name'];
    $temp_name1 = $_FILES['aimage1']['tmp_name'];
    $temp_name2 = $_FILES['aimage2']['tmp_name'];
    $temp_name3 = $_FILES['aimage3']['tmp_name'];
    $temp_name4 = $_FILES['aimage4']['tmp_name'];

    $temp_name5 = $_FILES['fimage']['tmp_name'];
    $temp_name6 = $_FILES['fimage1']['tmp_name'];
    $temp_name7 = $_FILES['fimage2']['tmp_name'];

    move_uploaded_file($temp_name, "packages/$aimage");
    move_uploaded_file($temp_name1, "packages/$aimage1");
    move_uploaded_file($temp_name2, "packages/$aimage2");
    move_uploaded_file($temp_name3, "packages/$aimage3");
    move_uploaded_file($temp_name4, "packages/$aimage4");

    move_uploaded_file($temp_name5, "packages/$fimage");
    move_uploaded_file($temp_name6, "packages/$fimage1");
    move_uploaded_file($temp_name7, "packages/$fimage2");

    $sql = "INSERT INTO packages (title,pcontent,type,duration,stype,day,night,code,discount,extra1,extra2,extra4,price,location,city,state,feature,pimage,pimage1,pimage2,pimage3,pimage4,uid,status,mapimage,topmapimage,groundmapimage,extra3,isFeatured)
	VALUES('$title','$content','$ptype','$duration','$stype','$day','$night','$code','$discount','$extra1','$extra2','$extra4','$price',
	'$loc','$city','$state','$feature','$aimage','$aimage1','$aimage2','$aimage3','$aimage4','$uid','$status','$fimage','$fimage1','$fimage2','$extra3','$isFeatured')";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $msg = "<p class='alert alert-success'>Package Inserted Successfully</p>";
    } else {
        $error = "<p class='alert alert-warning'>Something went wrong. Please try again</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Nep Yatra | Packages</title>
    <link rel="shortcut icon" type="image/png" href="../images/logo/favicon.png">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>

<body>


    <!-- Header -->
    <?php include("header.php"); ?>
    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Packages</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Packages</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Add Packages Details</h4>
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h5 class="card-title">Packages Detail</h5>
                                <?php echo $error; ?>
                                <?php echo $msg; ?>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Title</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="title" required
                                                    placeholder="Enter Title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Information</label>
                                            <div class="col-lg-9">
                                                <textarea class="tinymce form-control" name="content" rows="10"
                                                    cols="30"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Tour Type</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="ptype">
                                                    <option value="">Select Tour Types</option>
                                                    <option value="Himalayan">Himalayan</option>
                                                    <option value="Heritages">Heritages</option>
                                                    <option value="National Park">National</option>
                                                    <option value="Nature">Nature</option>
                                                    <option value="Sports Activities">Sports Activities</option>
                                                    <option value="Camping">Camping</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Packages Type</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="stype">
                                                    <option value="">Select Packages</option>
                                                    <option value="Trekking">Trekking</option>
                                                    <option value="Tours">Tours</option>
                                                    <option value="Climbing">Climbing</option>
                                                    <option value="Adventure">Adventure</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Nights</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="night" required
                                                    placeholder="Enter Nights (only no 1 to 10)">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Discounts</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="discount" required
                                                    placeholder="Enter Discount ">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row mb-3">
                                            <label class="col-lg-3 col-form-label">Duration: </label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="duration">
                                                    <option value="">Select Duration</option>
                                                    <option value="1">1 Days</option>
                                                    <option value="2">2 Days</option>
                                                    <option value="3">3 Days</option>
                                                    <option value="4">4 Days</option>
                                                    <option value="5">5 Days</option>
                                                    <option value="6">6 Days</option>
                                                    <option value="7">7 Days</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Days</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="day" required
                                                    placeholder="Enter Days">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Package Code</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="code" required
                                                    placeholder="Enter Package Code ">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Extra</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="extra1" required
                                                    placeholder="Extra">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <h4 class="card-title">Price & Location</h4>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Extra</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="extra2">
                                                    <option value="">Select</option>
                                                    <option value="Booking">Booking</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Price</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="price" required
                                                    placeholder="Enter Price">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">City</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="city" required
                                                    placeholder="Enter City">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">State</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="state" required
                                                    placeholder="Enter State">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Extra</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="extra3">
                                                    <option value="">Select</option>

                                                    <option value="Booking">Booking</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Extra</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="extra4" required
                                                    placeholder="Extra">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Address</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="loc" required
                                                    placeholder="Enter Address">
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-lg-2 col-form-label">Feature</label>
                                    <div class="col-lg-9">
                                        <p class="alert alert-danger">* Important Please Do Not Remove Below Content
                                            Only Change <b>Yes</b> Or <b>No</b> or Details and Do Not Add More Details
                                        </p>

                                        <textarea class="tinymce form-control" name="feature" rows="10" cols="30">
												<!---feature area start--->
												<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Package Type : </span>Climbing</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">English Speakers : </span>Yes/No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Restaurants : </span>Yes/No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Hotels : </span>Yes/No</li>
														</ul>
													</div>
													<div class="col-md-4">
														<ul>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Tour Type : </span>Himalayans</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Camping : </span>Yes/No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Trekking : </span>Yes/No</li>
														<li class="mb-3"><span class="text-secondary font-weight-bold">Culture  : </span>Yes</li>
														
														</ul>
													</div>
												
												<!---feature area end---->
											</textarea>
                                    </div>
                                </div>

                                <h4 class="card-title">Image & Status</h4>
                                <div class="row">
                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage" type="file" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image 2</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage2" type="file" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image 4</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage4" type="file" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Status</label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="status">
                                                    <option value="">Select Status</option>
                                                    <option value="Booking Available">Booking Available</option>
                                                    <option value="Booking Not Available">Booking Not Available</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="fimage1" type="file">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image 1</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage1" type="file" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">image 3</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="aimage3" type="file" required="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Uid</label>
                                            <div class="col-lg-9">
                                                <input type="text" class="form-control" name="uid" required
                                                    placeholder="Enter Admin ID">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="fimage" type="file">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label">Image</label>
                                            <div class="col-lg-9">
                                                <input class="form-control" name="fimage2" type="file">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label"><b>Is Featured?</b></label>
                                            <div class="col-lg-9">
                                                <select class="form-control" required name="isFeatured">
                                                    <option value="">Select...</option>
                                                    <option value="0">No</option>
                                                    <option value="1">Yes</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <input type="submit" value="Submit" class="btn btn-primary" name="add"
                                    style="margin-left:200px;">

                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Main Wrapper -->


    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="assets/plugins/tinymce/init-tinymce.min.js"></script>
    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>