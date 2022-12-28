<?php
session_start();
require("config.php");

if (!isset($_SESSION['auser'])) {
    header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Nep Yatra | Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="../images/logo/favicon.png">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Feathericon CSS -->
    <link rel="stylesheet" href="assets/css/feathericon.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!-- Header -->
    <?php include("header.php"); ?>
    <!-- /Header -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Welcome Admin!</h3>
                        <p></p>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM user WHERE utype = 'admin'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">Registered Admin</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM user WHERE utype = 'user'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">Registered Users</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-primary w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-success">
                                    <i class="fe fe-users"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM user WHERE utype = 'Guide'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">Guides</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-success w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-info">
                                    <i class="fe fe-home"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">Packages</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-warning">
                                    <i class="fe fe-table"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where type = 'Himalayan'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">No. of Himalayan Packages</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-warning">
                                    <i class="fe fe-table"></i>
                                </span>


                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where type = 'Heritages'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">No. of Heritage Packages</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-info">
                                    <i class="fe fe-home"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where type = 'National Park'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">No. of National park Packages</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-info">
                                    <i class="fe fe-home"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where type = 'Nature'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">No. of Nature Packages</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fe fe-tablet"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where type = 'Sports Activities'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">No. of Sport Activities Packages</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-primary">
                                    <i class="fe fe-tablet"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where type = 'Camping'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">No. of Camping Packages</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-success">
                                    <i class="fe fe-quote-left"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where stype = 'Trekking'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">Trekking</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-success">
                                    <i class="fe fe-quote-left"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where stype = 'Climbing'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">Climbing</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-info">
                                    <i class="fe fe-quote-right"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where stype = 'Tours'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">Tours</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="dash-widget-header">
                                <span class="dash-widget-icon bg-info">
                                    <i class="fe fe-quote-right"></i>
                                </span>

                            </div>
                            <div class="dash-widget-info">

                                <h3><?php $sql = "SELECT * FROM packages where stype = 'Adventure'";
                                    $query = $con->query($sql);
                                    echo "$query->num_rows"; ?></h3>

                                <h6 class="text-muted">Adventures</h6>
                                <div class="progress progress-sm">
                                    <div class="progress-bar bg-info w-50"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- /Page Wrapper -->


    <!-- /Main Wrapper -->

    <!-- jQuery -->
    <script src="assets/js/jquery-3.2.1.min.js"></script>

    <!-- Bootstrap Core JS -->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Slimscroll JS -->
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/js/chart.morris.js"></script>

    <!-- Custom JS -->
    <script src="assets/js/script.js"></script>

</body>

</html>