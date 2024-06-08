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


    <style>
    body {
        font-family: "Helvetica Neue", Helvetica, Arial;
        font-size: 14px;
        line-height: 20px;
        font-weight: 400;
        color: #3b3b3b;
        -webkit-font-smoothing: antialiased;
        font-smooth: antialiased;
        background: #f7f6f6;
    }

    @media screen and (max-width: 580px) {
        body {
            font-size: 16px;
            line-height: 22px;
        }
    }

    .wrapper {
        margin: 0 auto;
        padding: 40px;
        max-width: 800px;
    }

    .table {
        margin: 0 0 40px 0;
        width: 100%;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
        display: table;
    }

    @media screen and (max-width: 580px) {
        .table {
            display: block;
        }
    }

    .row {
        display: table-row;
        background: #f6f6f6;
    }

    .row:nth-of-type(odd) {
        background: #e9e9e9;
    }

    .row.header1 {
        font-weight: 900;
        color: #ffffff;
        background: #53e5ea;
    }

    .row.green {
        background: #ea53b8;
    }

    .row.blue {
        background: #7e53ea;
    }

    @media screen and (max-width: 580px) {
        .row {
            padding: 14px 0 7px;
            display: block;
        }

        .row.header1 {
            padding: 0;
            height: 6px;
        }

        .row.header1 .cell {
            display: none;
        }

        .row .cell {
            margin-bottom: 10px;
        }

        .row .cell:before {
            margin-bottom: 3px;
            content: attr(data-title);
            min-width: 98px;
            font-size: 10px;
            line-height: 10px;
            font-weight: bold;
            text-transform: uppercase;
            color: #969696;
            display: block;
        }
    }

    .cell {
        padding: 6px 12px;
        display: table-cell;
    }

    @media screen and (max-width: 580px) {
        .cell {
            padding: 2px 16px;
            display: block;
        }
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
            <a href="#" class="logo"><b>home<span>x</span></b></a>
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
                        <a href="javascript:;">
                            <i class="fa fa-cc-paypal"></i>
                            <span>Maintance</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Maintance_Pay.php">Maintance Details</a></li>
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
                            <li><a href="blank.php">Security Gurd Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-car"></i>
                            <span>Visitor</span>
                        </a>
                        <ul class="sub">
                            <li><a href="blank.php">Visitor Records</a></li>
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
                        <a class="active" href="javascript:;">
                            <i class="fa fa-cart-plus"></i>
                            <span>Service Providers</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="service_providers.php">Contact</a></li>
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
        <section id="main-content"><br>

            <div class="wrapper">

                <center>
                    <h2 style="color:blue;text-align:center;">Service provider....</h2>
                </center>





                <div class="table" id="myTable">

                    <div class="row header1">
                        <div class="cell">
                            Name
                        </div>
                        <div class="cell">
                            Contact Number
                        </div>
                    </div>

                    <div class="cell"><b>Electrician:</b></div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Shree Electrical Service
                        </div>
                        <div class="cell" data-title="Contact Number">
                            07947189459
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Khushi Electrical
                        </div>
                        <div class="cell" data-title="Contact Number">
                            07942601945
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Sharnam Electricals
                        </div>
                        <div class="cell" data-title="Contact Number">
                            07947469524
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            M B Electrical Service
                        </div>
                        <div class="cell" data-title="Contact Number">
                            07947079097
                        </div>
                    </div>

                    <div class="cell"><b>Plamber:</b></div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Honest Plumber
                        </div>
                        <div class="cell" data-title="Contact Number">
                            0794727736
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Shree Hari Enterprise
                        </div>
                        <div class="cell" data-title="Contact Number">
                            07947456667
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            M S Plumber
                        </div>
                        <div class="cell" data-title="Contact Number">
                            07947226364
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            A R Plumber Works
                        </div>
                        <div class="cell" data-title="Contact Number">
                            07947227567
                        </div>
                    </div>

                    <div class="cell"><b>Dairy:</b></div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Damodardas Dairy
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9408949898
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Shree Sahajanand Dairy
                        </div>
                        <div class="cell" data-title="Contact Number">
                            8758759386
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            hree Krishna Dugdhalaya
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9898524274
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Gayatri Milk Center
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9924307863
                        </div>
                    </div>

                    <div class="cell"><b>Vegetable Vendors:</b></div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Vege Market
                        </div>
                        <div class="cell" data-title="Contact Number">
                            07947256294
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Fresh Basket
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9723707999
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Sardar Patel Vegetable Market
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9904075337
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Vegetables On Wheels
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9512521550
                        </div>
                    </div>

                    <div class="cell"><b>Newspaper Vendors:</b></div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Divya Bhaskar
                        </div>
                        <div class="cell" data-title="Contact Number">
                            0265-3988885
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Vadodara Samachar
                        </div>
                        <div class="cell" data-title="Contact Number">
                            0265-2425389
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            The Indian Express Limited
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9824033380
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            shree newspaper supply
                        </div>
                        <div class="cell" data-title="Contact Number">
                            6358071715
                        </div>
                    </div>

                    <div class="cell"><b>Supermarkets:</b></div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Harni Super markets
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9714577747
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Z Super Market
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9824908695
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Quality Fresh
                        </div>
                        <div class="cell" data-title="Contact Number">
                            0265-2491149
                        </div>
                    </div>

                    <div class="row">
                        <div class="cell" data-title="Name" id="Name">
                            Purohit Super Store
                        </div>
                        <div class="cell" data-title="Contact Number">
                            9687624220
                        </div>
                    </div>

                </div>








            </div>
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
    <!--script for this page-->



</body>

</html>