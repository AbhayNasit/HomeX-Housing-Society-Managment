<?php

// Database Connection
    $connection = mysqli_connect("localhost","root","","homex");

// Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

if(isset($_POST['save'])){
    $name = $_POST['name'];
    $flat_no = $_POST['flat_no'];
    $vehicle_no = $_POST['vehicle_no'];
    $id = $_POST['id'];

    $sql = "UPDATE vehicle_details SET name='$name',flat_no='$flat_no',vehicle_no='$vehicle_no' WHERE name='$id'";
    if(mysqli_query($connection,$sql)){
        header('location: vehical_detail.php');
    }
    else{
        echo"Error:".$sql."<br>".mysqli_error($connection);
    }
}

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $flat_no = $_GET['flat'];
    $vehicle_no = $_GET['vehicle'];
    $sql = "SELECT name, flat_no, vehicle_no FROM vehicle_details WHERE name='$id'";
    $result = mysqli_query($connection,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $name = $row['name'];
        $flat_no = $row['flat_no'];
        $vehicle_no = $row['vehicle_no'];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>HomeX</title>

    <!-- Favicons -->
    <link href="img/1.ico" rel="icon">
    <link href="img/1.ico">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">

    <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 70%;
    }

    table.center {
        margin-left: auto;
        margin-right: auto;
    }

    td,
    th {
        border: 3px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #dddddd;
    }
    </style>

</head>

<body>
    <section id="container">
        <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <!--header start-->
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="#" class="logo"><b>Home<span>X</span></b></a>
            <!--logo end-->

            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </header>
        <!--header end-->
        <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered"><a href="#"><img src="img/6.png" class="img-circle" width="80"></a></p>

                    <li class="mt">
                        <a href="security_page.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-desktop"></i>
                            <span>Society Members</span>
                        </a>
                        <ul class="sub">
                            <li><a href="member_list2.php">Society Members Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-book"></i>
                            <span>Visitors</span>
                        </a>
                        <ul class="sub">
                            <li><a href="New_Visitor.php">New Visitor</a></li>
                            <li><a href="manage-newvisitors.php">Manage Visitor</a></li>
                            <li><a href="bwdates-reports.php">Visitor Data</a></li>
                        </ul>
                    </li>
                    <li class="sub-menu">
                        <a class="active" href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>Society Vehical</span>
                        </a>
                        <ul class="sub">
                            <li><a href="vehical_list.php">Society Vehical List</a></li>
                            <li class="active"><a href="vehical_detail.php">Society Vehical Detail</a></li>
                        </ul>
                    </li>

                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper site-min-height">
                <br>
                <div class="container">
                    <div class="">
                        <div class="well clearfix">
                            <center>
                                <h1 style="color:DarkRed;">Edit Vehicle Details</h1>
                            </center>
                            <form action="" method="post">
                                <div class="form-group">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" value="<?php echo $name; ?>" class="form-control"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label>Flat No</label>
                                    <input type="text" name="flat_no" value="<?php echo $flat_no; ?>"
                                        class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Vehicle No</label>
                                    <input type="text" name="vehicle_no" value="<?php echo $vehicle_no; ?>"
                                        class="form-control" required>
                                </div>
                                <input type="submit" name="save" value="Save" class="btn btn-primary">
                                <a href="vehical_detail.php" class="btn btn-secondary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>


            </section>
            <!-- /wrapper -->
        </section>
        <!-- /MAIN CONTENT -->
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Copyrights <strong>HomeX</strong>. All Rights Reserved
                </p>
                <a href="blank.html#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="lib/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="lib/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>


    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>