<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['security_name'])){
   header('location:index.php');
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
    <title>HomeX</title>

    <!-- Favicons -->
    <link href="img/1.ico" rel="icon">
    <link href="img/1.ico">

    <!-- Bootstrap core CSS -->
    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet">
    <script src="lib/chart-master/Chart.js"></script>
</head>
<style>
body {
    margin: 10%;
    margin-left: 20%;
}

#slider {
    position: relative;
    width: 950px;
    height: 575px;

    overflow: hidden;
    box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
}

#slider ul {
    position: relative;
    list-style: none;
    height: 100%;
    width: 10000%;
    padding: 0;
    margin: 0;
    transition: all 750ms ease;
    left: 0;
}

#slider ul li {
    position: relative;
    height: 100%;

    float: left;
}

#slider ul li img {
    width: 950px;
    height: 575px;
}

#slider #prev,
#slider #next {
    width: 50px;
    line-height: 50px;
    border-radius: 50%;
    font-size: 2rem;
    text-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
    text-align: center;
    color: white;
    text-decoration: none;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    transition: all 150ms ease;
}

#slider #prev:hover,
#slider #next:hover {
    background-color: rgba(0, 0, 0, 0.5);
    text-shadow: 0;
}

#slider #prev {
    left: 10px;
}

#slider #next {
    right: 10px;
}
</style>

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
                    <h5 class="centered">welcome <span><?php echo $_SESSION['security_name'] ?></span></h5>

                    <li class="mt">
                        <a class="active" href="security_page.php">
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
                        <a href="javascript:;">
                            <i class="fa fa-tasks"></i>
                            <span>Society Vehical</span>
                        </a>
                        <ul class="sub">
                            <li><a href="vehical_list.php">Society Vehical List</a></li>
                            <li><a href="vehical_detail.php">Society Vehical Detail</a></li>
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
            <section class="wrapper">
                <div class="row">
                    <div class="col-lg-9 main-chart">
                        <div class="border-head">
                            <h3>DESHBOARD</h3>
                        </div>
                        <!--CUSTOM CHART START -->

                        <div id="slider">
                            <ul id="slideWrap">
                                <li><img src="img/portfolio/port010.jpg" alt=""></li>
                                <li><img src="img/portfolio/port02.jpg" alt=""></li>
                                <li><img src="img/portfolio/port03.jpg" alt=""></li>
                                <li><img src="img/portfolio/port04.jpg" alt=""></li>
                                <li><img src="img/portfolio/port09.jpg" alt=""></li>
                            </ul>
                            <a id="prev" href="#">&#8810;</a>
                            <a id="next" href="#">&#8811;</a>
                        </div>
                        <!--custom chart end-->



                        <div class="row mt">
                            <!-- WEATHER PANEL -->
                            <div class="col-md-4 col-sm-4 mb">
                                <div class="weather pn">
                                    <i class="fa fa-cloud fa-4x"></i>
                                    <h2>31º C</h2>
                                    <h4>GUJARAT</h4>
                                </div>
                            </div>


                            <!-- /col-md-4 -->
                            <!-- WEATHER-3 PANEL -->
                            <div class="col-md-4 col-sm-4 mb">
                                <!-- REVENUE PANEL -->
                                <div class="green-panel pn">
                                    <div class="green-header">
                                        <h5>REVENUE</h5>
                                    </div>
                                    <div class="chart mt">
                                        <div class="sparkline" data-type="line" data-resize="true" data-height="75"
                                            data-width="90%" data-line-width="1" data-line-color="#fff"
                                            data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff"
                                            data-spot-radius="4"
                                            data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
                                    </div>
                                    <p class="mt"><b>17,980 rs</b><br />Month Income</p>
                                </div>
                            </div>
                            <!--/ col-md-4 -->
                            <!-- WEATHER-3 PANEL -->
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="darkblue-panel pn">
                                    <div class="darkblue-header">
                                        <h5>SITE STATICS</h5>
                                    </div>
                                    <h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
                                    <p>+ 1,789 NEW VISITS</p>
                                    <footer>
                                        <div class="centered">
                                            <h5><i class="fa fa-trophy"></i> 17,988</h5>
                                        </div>
                                    </footer>
                                </div>
                                <!--  /darkblue panel -->
                            </div>
                            <!-- /col-md-4 -->
                        </div>

                        <div class="row">
                            <!-- TWITTER PANEL -->
                            <div class="col-md-4 mb">
                                <div class="twitter-panel pn">
                                    <i class="fa fa-twitter fa-4x"></i>
                                    <p>Homex is here! Take a look and enjoy this new Bootstrap Dashboard theme.</p>
                                    <p class="user">@HomeX_07</p>
                                </div>
                            </div>
                            <!-- /col-md-4 -->
                            <div class="col-md-4 mb">
                                <!-- WHITE PANEL - TOP USER -->
                                <div class="white-panel pn">
                                    <div class="white-header">
                                        <h5>TOP USER</h5>
                                    </div>
                                    <p><img src="img/5.png" class="img-circle" width="50"></p>
                                    <h5 class="mt">Abhay</h5>
                                    <h6>MEMBER SINCE:2022</h6>
                                </div>
                            </div>
                            <!-- /col-md-4 -->
                            <div class="col-md-4 mb">
                                <!-- INSTAGRAM PANEL -->
                                <div class="instagram-panel pn">
                                    <i class="fa fa-instagram fa-4x"></i>
                                    <p>@THISISYOU<br /> 5 min. ago
                                    </p>
                                    <p><i class="fa fa-comment"></i> 18 | <i class="fa fa-heart"></i> 49</p>
                                </div>
                            </div>
                            <!-- /col-md-4 -->
                        </div>
                        <!-- /row -->
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="product-panel-2 pn">
                                    <div class="badge badge-hot">TOP USER</div>
                                    <img src="img/5.png" class="img-circle" width="120">
                                    <h5 class="mt">vansh</h5>
                                    <h6>MEMBER SINCE:2022</h6>
                                </div>
                            </div>


                            <!-- /col-md-4 -->
                            <!-- WEATHER-3 PANEL -->
                            <div class="col-lg-4 col-md-4 col-sm-4 mb">
                                <div class="weather-3 pn centered">
                                    <i class="fa fa-sun-o"></i>
                                    <h1>30º C</h1>
                                    <div class="info">
                                        <div class="row">
                                            <h3 class="centered">VADODARA</h3>
                                            <div class="col-sm-6 col-xs-6 pull-left">
                                                <p class="goleft"><i class="fa fa-tint"></i> 13%</p>
                                            </div>
                                            <div class="col-sm-6 col-xs-6 pull-right">
                                                <p class="goright"><i class="fa fa-flag"></i> 15 MPH</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ col-md-4 -->
                            <div class="col-md-4 col-sm-4 mb">
                                <div class="content-panel pn">
                                    <div id="blog-bg">
                                        <div class="badge badge-popular">HomeX</div>
                                    </div>
                                    <div class="blog-text">
                                        <p>HomeX is the website portal to reduce conflicts among society members,
                                            and advanced tools that can meet common goals, save time and money,
                                            and reduce unnecessary efforts.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /col-md-4 -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /col-lg-9 END SECTION MIDDLE -->
                    <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
                    <div class="col-lg-3 ds">
                        <!--COMPLETED ACTIONS DONUTS CHART-->
                        <!-- RECENT ACTIVITIES SECTION -->
                        <h4 class="centered mt">ACTIVITY</h4>
                        <!-- First Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>Maintanance</muted>
                                    <br />
                                    <a href="#">HomeX</a> provide pay mounthly maintanance.<br />
                                </p>
                            </div>
                        </div>
                        <!-- Second Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>Security</muted>
                                    <br />
                                    <a href="#">HomeX</a> provide an entry exit system.<br />
                                </p>
                            </div>
                        </div>
                        <!-- Third Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>Emerngance</muted>
                                    <br />
                                    <a href="#">HomeX</a> provide emergency contact information.<br />
                                </p>
                            </div>
                        </div>
                        <!-- Fourth Activity -->
                        <div class="desc">
                            <div class="thumb">
                                <span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
                            </div>
                            <div class="details">
                                <p>
                                    <muted>Club</muted>
                                    <br />
                                    <a href="#">HomeX</a> provide an online club house booking for events.<br />
                                </p>
                            </div>
                        </div>
                        <!-- USERS ONLINE SECTION -->
                        <h4 class="centered mt">TEAM MEMBERS ONLINE</h4>
                        <!-- First Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="img/9.png" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                    <a href="#">Vansh</a><br />
                                    <muted>Available</muted>
                                </p>
                            </div>
                        </div>
                        <!-- Second Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="img/4.png" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                    <a href="#">Abhay</a><br />
                                    <muted>Available</muted>
                                </p>
                            </div>
                        </div>
                        <!-- Third Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="img/8.png" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                    <a href="#">fardin</a><br />
                                    <muted>Available</muted>
                                </p>
                            </div>
                        </div>
                        <!-- Fourth Member -->
                        <div class="desc">
                            <div class="thumb">
                                <img class="img-circle" src="img/7.png" width="35px" height="35px" align="">
                            </div>
                            <div class="details">
                                <p>
                                    <a href="#">Kishan</a><br />
                                    <muted>Available</muted>
                                </p>
                            </div>
                        </div>
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top"
                                        style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div>
                        <!-- / calendar -->
                    </div>
                    <!-- /col-lg-3 -->
                </div>
                <!-- /row -->
            </section>
        </section>
        <!--main content end-->
        <!--footer start-->
        <footer class="site-footer">
            <div class="text-center">
                <p>
                    &copy; Copyrights <strong>HomeX</strong>. All Rights Reserved
                </p>
                <div class="credits">
                    <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
                </div>
                <a href="welcome.php#" class="go-top">
                    <i class="fa fa-angle-up"></i>
                </a>
            </div>
        </footer>
        <!--footer end-->
    </section>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="lib/jquery/jquery.min.js"></script>

    <script src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
    <script src="lib/jquery.scrollTo.min.js"></script>
    <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="lib/jquery.sparkline.js"></script>
    <!--common script for all pages-->
    <script src="lib/common-scripts.js"></script>
    <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="lib/gritter-conf.js"></script>
    <!--script for this page-->
    <script src="lib/sparkline-chart.js"></script>
    <script src="lib/zabuto_calendar.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome to HomeX!',
            // (string | mandatory) the text inside the notification
            text: 'HomeX is automated Society management system and website portal to reduce conflicts among society members.',
            // (string | optional) the image to display on the left
            image: 'img/1.ico',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: 8000,
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
    });
    </script>
    <script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                    type: "text",
                    label: "Special event",
                    badge: "00"
                },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
    </script>

    <script type="application/javascript">
    $(document).ready(function() {
        $("#date-popover").popover({
            html: true,
            trigger: "manual"
        });
        $("#date-popover").hide();
        $("#date-popover").click(function(e) {
            $(this).hide();
        });

        $("#my-calendar").zabuto_calendar({
            action: function() {
                return myDateFunction(this.id, false);
            },
            action_nav: function() {
                return myNavFunction(this.id);
            },
            ajax: {
                url: "show_data.php?action=1",
                modal: true
            },
            legend: [{
                    type: "text",
                    label: "Special event",
                    badge: "00"
                },
                {
                    type: "block",
                    label: "Regular event",
                }
            ]
        });
    });

    function myNavFunction(id) {
        $("#date-popover").hide();
        var nav = $("#" + id).data("navigation");
        var to = $("#" + id).data("to");
        console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
    </script>

    <script>
    var responsiveSlider = function() {

        var slider = document.getElementById("slider");
        var sliderWidth = slider.offsetWidth;
        var slideList = document.getElementById("slideWrap");
        var count = 1;
        var items = slideList.querySelectorAll("li").length;
        var prev = document.getElementById("prev");
        var next = document.getElementById("next");

        window.addEventListener('resize', function() {
            sliderWidth = slider.offsetWidth;
        });

        var prevSlide = function() {
            if (count > 1) {
                count = count - 2;
                slideList.style.left = "-" + count * sliderWidth + "px";
                count++;
            } else if (count = 1) {
                count = items - 1;
                slideList.style.left = "-" + count * sliderWidth + "px";
                count++;
            }
        };

        var nextSlide = function() {
            if (count < items) {
                slideList.style.left = "-" + count * sliderWidth + "px";
                count++;
            } else if (count = items) {
                slideList.style.left = "0px";
                count = 1;
            }
        };

        next.addEventListener("click", function() {
            nextSlide();
        });

        prev.addEventListener("click", function() {
            prevSlide();
        });

        setInterval(function() {
            nextSlide()
        }, 2000);

    };

    window.onload = function() {
        responsiveSlider();
    }
    </script>
</body>

</html>