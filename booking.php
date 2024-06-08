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
    form {
        width: 50%;
        margin: 20px auto;
    }

    div.elem-group {
        margin: 20px 0;
    }

    div.elem-group.inlined {
        width: 49%;
        display: inline-block;
        float: left;
        margin-left: 1%;
    }

    label {
        display: block;
        font-family: 'Nanum Gothic';
        padding-bottom: 10px;
        font-size: 1.25em;
    }

    input,
    select,
    textarea {
        border-radius: 2px;
        border: 2px solid #777;
        box-sizing: border-box;
        font-size: 1.25em;
        font-family: 'Nanum Gothic';
        width: 100%;
        padding: 10px;
    }

    div.elem-group.inlined input {
        width: 95%;
        display: inline-block;
    }

    textarea {
        height: 250px;
    }

    hr {
        border: 1px dotted #ccc;
    }

    button {
        height: 50px;
        background: orange;
        border: none;
        color: white;
        font-size: 1.25em;
        font-family: 'Nanum Gothic';
        border-radius: 4px;
        cursor: pointer;
    }

    button:hover {
        border: 2px solid black;
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
                    <p class="centered"><a href="#"><img src="img/5.png" class="img-circle" width="80"></a>
                    </p>

                    <li class="mt">
                        <a href="user_page.php">
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
                            <li><a href="member_list1.php">Society Members Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-address-card-o"></i>
                            <span>Committee Members</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Committee1.php">Committee Members Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cc-paypal"></i>
                            <span>Maintance</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Maintance_Pay1.php">Maintance Pay</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cogs"></i>
                            <span>Components</span>
                        </a>
                        <ul class="sub">
                            <li><a href="calendar1.php">Calendar</a></li>
                            <li><a href="gallery1.php">Gallery</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-ambulance"></i>
                            <span>Emergency Contact</span>
                        </a>
                        <ul class="sub">
                            <li><a href="emergency_contact1.php">Contact</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-user-secret"></i>
                            <span>Security</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Security1.php">Security Gurd Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-bullhorn"></i>
                            <span>Notice Board</span>
                        </a>
                        <ul class="sub">
                            <li><a href="notice_board1.php">Notice</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-balance-scale"></i>
                            <span>Complaints</span>
                        </a>
                        <ul class="sub">
                            <li><a href="Complaints1.php">Complaints</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a class="active" href="javascript:;">
                            <i class="fa fa-calendar-check-o"></i>
                            <span>Event</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="booking.php">Booking</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-facebook"></i>
                            <span>Financial</span>
                        </a>
                        <ul class="sub">
                            <li><a href="manage_expense1.php">Manage expense</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-users"></i>
                            <span>Staff</span>
                        </a>
                        <ul class="sub">
                            <li><a href="attendance.php">Attendance</a></li>
                            <li><a href="attendance_details.php">Attendance_Details</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-cart-plus"></i>
                            <span>Service Providers</span>
                        </a>
                        <ul class="sub">
                            <li><a href="service_providers1.php">Contact</a></li>
                        </ul>
                    </li>

                    <li class="sub-menu">
                        <a href="javascript:;">
                            <i class="fa fa-info-circle"></i>
                            <span>Society info</span>
                        </a>
                        <ul class="sub">
                            <li><a href="society_info1.php">Information</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="google_maps1.php">
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


                <?php
        /*
        // Database Connection
            $connection = mysqli_connect("localhost","root","","homex");

        // Check connection
            if (!$connection) {
                die("Connection failed: " . mysqli_connect_error());
            }

        // Form Processing
            if (isset($_POST['submit'])) { 
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $subject = $_POST['subject'];
                $fromdate = $_POST['fromdate'];
                $fromtime = $_POST['fromtime'];
                $todate = $_POST['todate'];
                $totime = $_POST['totime'];

        // Inserting into database 
            $sql = "INSERT INTO event(name, email, phone, subject, fromdate, fromtime, todate, totime)
            VALUES ('$name', '$email', '$phone', '$subject', 'fromdate', 'fromtime', 'todate', 'totime')";

            if (mysqli_query($connection, $sql)) {
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($connection);
            }

        }
        */
        ?>
                <form onsubmit="sendEmail" action="https://formsubmit.co/homex.manage@gmail.com" method="POST">
                    <!--
                    <br>
                    <form action="" method="POST">
                        -->
                    <center>
                        <h1 style="color:DarkRed;"><b>Book Club House Now!...</b></h1>
                    </center>
                    <input type="hidden" name="_subject" value="Hi! HomeX New Booking!....">
                    <form action="https://formsubmit.co/homex.manage@gmail.com" method="POST">
                        <input type="hidden" name="_subject" value="Hi HomeX New Booking Request..!">
                        <input type="hidden" name="_captcha" value="false">
                        <input type="hidden" name="_template" value="box">
                        <input type="hidden" name="_next" value="https://rzp.io/l/6KfF3ZYuBr">


                        <div class="elem-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" placeholder="Enter your name..."
                                pattern=[A-Z\sa-z]{3,20} required>
                        </div>
                        <div class="elem-group">
                            <label for="email">Your E-mail</label>
                            <input type="email" id="email" name="email" placeholder="Enter your e-mail..." required>
                        </div>

                        <!-- <input type="hidden" name="_next" value="https://rzp.io/l/6KfF3ZYuBr"> -->


                        <div class="elem-group">
                            <label for="phone">Your Phone</label>
                            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number..."
                                pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
                        </div>
                        <div class="elem-group">
                            <label for="Subject">Subject</label>
                            <input type="text" id="subject" placeholder="Enter your Subject..." name="subject" required>
                        </div>

                        <div class="elem-group inlined">
                            <label for="fromdate">From Date</label>
                            <input type="datetime-local" id="fromdate" name="fromdate" required>
                        </div>

                        <!--
                    <div class="elem-group inlined">
                        <label for="fromtime">From Time</label>
                        <input type="time" id="fromtime" name="fromtime" required>
                    </div>
                    -->

                        <div class="elem-group inlined">
                            <label for="todate">To Date</label>
                            <input type="datetime-local" id="todate" name="todate" required>
                        </div>

                        <!--
                    <div class="elem-group inlined">
                        <label for="totime">To Time</label>
                        <input type="time" id="totime" name="totime" required>
                    </div>
                    -->
                        <hr>

                        <center><button type="submit" id="btn">Book The clube house</button></center>

                        <!--
                        <center><button type="submit" id="btn" name="submit" onclick="myFunction()">Book The clube
                                house</button></center>
                        <br>

                        <script>
                        function myFunction() {
                            location.replace("https://rzp.io/l/6KfF3ZYuBr")
                        }
                        </script> -->
                    </form>



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
    <!--script for this page-->

    <script src="./script.js"></script>

</body>

</html>