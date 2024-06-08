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
    <link href="lib/fancybox/jquery.fancybox.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/jquery/jquery.min.js"></script>


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
                        <a href="javascript:;">
                            <i class="fa fa-cart-plus"></i>
                            <span>Service Providers</span>
                        </a>
                        <ul class="sub">
                            <li><a href="blank.php">Contact</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a class="active" href="javascript:;">
                            <i class="fa fa-info-circle"></i>
                            <span>Society info</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="society_info.php">Information</a></li>
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
                <h3><i class="fa fa-angle-right"></i>Society_Information</h3>
                <hr>
                <div class="row mt">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/2.jpg"><img class="img-responsive"
                                                src="img/portfolio/2.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/3.jpg"><img class="img-responsive"
                                                src="img/portfolio/3.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/4.jpg"><img class="img-responsive"
                                                src="img/portfolio/4.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                </div>
                <!-- /row -->
                <div class="row mt">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/5.jpg"><img class="img-responsive"
                                                src="img/portfolio/5.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/6.jpg"><img class="img-responsive"
                                                src="img/portfolio/6.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/port03.jpg"><img class="img-responsive"
                                                src="img/portfolio/port03.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                </div>
                <!-- /row -->
                <div class="row mt mb">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/port01.jpg"><img class="img-responsive"
                                                src="img/portfolio/port01.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/port06.jpg"><img class="img-responsive"
                                                src="img/portfolio/port06.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
                        <div class="project-wrapper">
                            <div class="project">
                                <div class="photo-wrapper">
                                    <div class="photo">
                                        <a class="fancybox" href="img/portfolio/port06.jpg"><img class="img-responsive"
                                                src="img/portfolio/port04.jpg" alt=""></a>
                                    </div>
                                    <div class="overlay"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- col-lg-4 -->
                </div>
                <!-- /row -->
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
                <a href="gallery.php#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/fancybox/jquery.fancybox.js"></script>
    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <!--script for this page-->
    <script type="text/javascript">
    $(function() {
        //    fancybox
        jQuery(".fancybox").fancybox();
    });
    </script>

</body>

</html>