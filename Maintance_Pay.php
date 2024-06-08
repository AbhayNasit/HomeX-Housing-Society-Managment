<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
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

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

    <!-- <style>
    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        /* border: 3px solid black; */
        padding: 8px;
        width: 100%;
        font-size: 17px;
        font-weight: 400;
        text-transform: capitalize;
        box-shadow: 4px 4px 15px 4px #888888;
        border-radius: 5px 5px 5px 5px;
    }

    table.center {
        margin-left: auto;
        margin-right: auto;
    }

    th {
        background-color: #000000;
        border: 3px solid #ffffff00;
        border-radius: 5px 5px;
        text-align: left;
        padding: 8px;
        color: #ffffff;
        font-weight: 400;
        text-transform: capitalize;
    }

    td {
        border: 3px solid #ffffff00;
        border-radius: 30px 5px;
        text-align: left;
        padding: 8px;
        color: #000000;
        font-weight: 400;
        text-transform: capitalize;
    }

    tr:hover {
        background-color: #4ECDC4;
    }

    tr:nth-child(odd) {
        background-color: #dddddd;
    }
    </style> -->

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
            <a href="#" class="logo"><b>home<span>X</span></b></a>
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
                    <p class="centered"><a href="#"><img src="img/3.jpg" class="img-circle" width="80"></a></p>

                    <li class="mt">
                        <a href="admin_page.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-address-book-o"></i>
                            <span>Society Members</span>
                        </a>
                        <ul class="sub">
                            <li><a href="member_list.php">Society Members Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-address-card-o"></i>
                            <span>Committee Members</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Committee.php">Committee Members Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a class="active" href="javascript:;">
                            <i class="fa fa-cc-paypal"></i>
                            <span>Maintance</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="Maintance_Pay.php">Maintance Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span>Components</span>
                        </a>
                        <ul class="sub">
                            <li><a href="calendar.php">Calendar</a></li>
                            <li><a href="gallery.php">Gallery</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-ambulance"></i>
                            <span>Emergency Contact</span>
                        </a>
                        <ul class="sub">
                            <li><a href="emergency_contact.php">Contact</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-user-secret"></i>
                            <span>Security</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Security.php">Security Gurd Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-car"></i>
                            <span>Visitor</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Visitor_data.php">Visitor Records</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bullhorn"></i>
                            <span>Notice Board</span>
                        </a>
                        <ul class="sub">
                            <li><a href="notice_board.php">Notice</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-balance-scale"></i>
                            <span>Complaints</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Complaints.php">Complaints</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-facebook"></i>
                            <span>Financial</span>
                        </a>
                        <ul class="sub">
                            <li><a href="add_expense.php">Add income/expense</a></li>
                            <li><a href="manage_expense.php">Manage expense</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cart-plus"></i>
                            <span>Service Providers</span>
                        </a>
                        <ul class="sub">
                            <li><a href="service_providers.php">Contact</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-info-circle"></i>
                            <span>Society info</span>
                        </a>
                        <ul class="sub">
                            <li><a href="society_info.php">Information</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="google_maps.php">
                            <i class="fa fa-map-marker"></i>
                            <span>Google Maps </span>
                        </a>
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

                <?php
                 // Database Connection
                 $connection = mysqli_connect("localhost","root","","homex");

                // Check connection
                if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
                 }

                // Retrieving data from database
                $sql = "SELECT name, flat_no, date, month FROM maintenance ";
                $result = mysqli_query($connection, $sql);
                ?>

                <div class="container">
                    <div class="">
                        <div class="well clearfix">
                            <center>
                                <h1 style="color:DarkRed;">Maintanance Details</h1>
                            </center>
                            <div class="pull-right">
                                <form action="" method="post">
                                    <input type="text" name="search" placeholder="Search" />
                                    <button type="submit" name="submit" value="Search" class="btn btn-primary">Search</button>
                                    <button type="button" onclick="downloadPDF()" class="btn btn-primary">Download PDF</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="table">
                                        <thead>
                                            <tr>
                                            <tr>
                                                <th>S.No.</th>
                                                <th>Name</th>
                                                <th>Flat No</th>
                                                <th>Date</th>
                                                <th>Month</th>
                                            </tr>
                                            </tr>
                                        </thead>
                                        <?php
                         if(isset($_POST['submit'])){
                         $search = $_POST['search'];
                         $sql = "SELECT name, flat_no, date, month FROM maintenance WHERE name LIKE '%$search%' OR flat_no LIKE '%$search%' OR date LIKE '%$search%' OR month LIKE '%$search%'";
                         $result = mysqli_query($connection, $sql);
                         $i=0;
                         while($row = mysqli_fetch_assoc($result)) {
                         $i++;
                         echo "<tr><td align='center'>".$i."</td><td>".$row["name"]."</td><td>".$row["flat_no"]."</td><td>".$row["date"]."</td><td>".$row["month"]."</td></tr>";
                           }
                        }
                       else{
                        $sql = "SELECT name, flat_no, date, month FROM maintenance ";
                        $result = mysqli_query($connection, $sql);
                        $i=0;
                        while($row = mysqli_fetch_assoc($result)) {
                        $i++;
                        echo "<tr><td align='center'>".$i."</td><td>".$row["name"]."</td><td>".$row["flat_no"]."</td><td>".$row["date"]."</td><td>".$row["month"]."</td></tr>";
                        }
                        }
                     ?>
                                    </table>
                                    <script>
                                    function downloadPDF() {
                                        var divToPrint = document.getElementById("table");
                                        var newWin = window.open("");
                                        newWin.document.write('<html><head><title>Maintanance Details</title>');
                                        newWin.document.write(
                                            '<html><head><style>table {border-collapse: collapse; width: 100%; font-family: Arial, Helvetica, sans-serif;} th, td {border: 2px solid #ddd; padding: 8px; text-align: center;} tr:nth-child(even){background-color: #f2f2f2;}  th {padding-top: 12px; padding-bottom: 12px; background-color: #4ECDC4; color: white;}</style></head>'
                                        );
                                        newWin.document.write(
                                            '<body><center><h1 style="color:DarkRed;">Maintanance Details</h1></center>'
                                        );
                                        newWin.document.write('<body>' + divToPrint.outerHTML + '</body></html>');
                                        newWin.document.write(
                                            "<br><br><br><p style='text-align:right;'>Signature_______________</p>");
                                        newWin.document.close();
                                        newWin.focus();
                                        newWin.print();
                                        newWin.close();
                                    }
                                    </script>
                                </div>
                            </div>

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
                    &copy; Copyrights <strong>HomeX</strong>. All Rights Reserved </p>
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