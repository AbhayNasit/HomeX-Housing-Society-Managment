<?php
include("config1.php");
$update = false;
$del = false;
$expenseamount = "";
$expensedate = date("d-m-Y");
$expensecategory = "Entertainment";
if (isset($_POST['add'])) {
    $expenseamount = $_POST['expenseamount'];
    $expensedate = $_POST['expensedate'];
    $expensecategory = $_POST['expensecategory'];

    $expenses = "INSERT INTO expenses (expense,expensedate,expensecategory) VALUES ('$expenseamount','$expensedate','$expensecategory')";
    $result = mysqli_query($con, $expenses) or die("Something Went Wrong!");
    header('location: add_expense.php');
}

if (isset($_POST['update'])) {
    $id = $_GET['edit'];
    $expenseamount = $_POST['expenseamount'];
    $expensedate = $_POST['expensedate'];
    $expensecategory = $_POST['expensecategory'];

    $sql = "UPDATE expenses SET expense='$expenseamount', expensedate='$expensedate', expensecategory='$expensecategory' WHERE user_id='$userid'AND expense_id='$id'";
    if (mysqli_query($con, $sql)) {
        echo "Records were updated successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    header('location: manage_expense.php');
}

if (isset($_POST['update'])) {
    $id = $_GET['edit'];
    $expenseamount = $_POST['expenseamount'];
    $expensedate = $_POST['expensedate'];
    $expensecategory = $_POST['expensecategory'];

    $sql = "UPDATE expenses SET expense='$expenseamount', expensedate='$expensedate', expensecategory='$expensecategory' WHERE user_id='$userid'AND expense_id='$id'";
    if (mysqli_query($con, $sql)) {
        echo "Records were updated successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    header('location: manage_expense.php');
}

if (isset($_POST['delete'])) {
    $id = $_GET['delete'];
    $expenseamount = $_POST['expenseamount'];
    $expensedate = $_POST['expensedate'];
    $expensecategory = $_POST['expensecategory'];

    $sql = "DELETE FROM expenses WHERE user_id='$userid' AND expense_id='$id'";
    if (mysqli_query($con, $sql)) {
        echo "Records were updated successfully.";
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
    }
    header('location: manage_expense.php');
}

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $update = true;
    $record = mysqli_query($con, "SELECT * FROM expenses WHERE expense_id=$id");
    if (mysqli_num_rows($record) == 1) {
        $n = mysqli_fetch_array($record);
        $expenseamount = $n['expense'];
        $expensedate = $n['expensedate'];
        $expensecategory = $n['expensecategory'];
    } else {
        echo ("WARNING: AUTHORIZATION ERROR: Trying to Access Unauthorized data");
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $del = true;
    $record = mysqli_query($con, "SELECT * FROM expenses WHERE  expense_id=$id");

    if (mysqli_num_rows($record) == 1) {
        $n = mysqli_fetch_array($record);
        $expenseamount = $n['expense'];
        $expensedate = $n['expensedate'];
        $expensecategory = $n['expensecategory'];
    } else {
        echo ("WARNING: AUTHORIZATION ERROR: Trying to Access Unauthorized data");
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

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Feather JS for Icons -->
    <script src="js/feather.min.js"></script>

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
                            <li><a href="Maintance_Details.php">Maintance Details</a></li>
                            <li><a href="Maintance_Pay.php">Maintance Pay</a></li>
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
                        <a class="active" href="javascript:;">
                            <i class="fa fa-facebook"></i>
                            <span>Financial</span>
                        </a>
                        <ul class="sub">
                            <li class="active"><a href="add_expense.php">Add income/expense</a></li>
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
            <section class="wrapper site-min-height"><br>
                <div class="container">
                    <div class="">
                        <div class="well clearfix">
                            <center>
                                <h1 style="color:DarkRed;">Add Your Daily Income/Expenses</h1>
                            </center>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="">
                        <div class="well clearfix">

                            <div class="row ">

                                <div class="col-md-3"></div>

                                <div class="col-md" style="margin:auto;">
                                    <form action="" method="POST" style="font-size: 12px;"><br>
                                        <div class="form-group row">
                                            <label for="expenseamount" class="col-sm-6 col-form-label"><b>Enter
                                                    Amount(Rs)</b></label>
                                            <div class="col-md-6">
                                                <input type="number" class="form-control col-sm-12"
                                                    value="<?php echo $expenseamount; ?>" id="expenseamount"
                                                    name="expenseamount" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="expensedate" class="col-sm-6 col-form-label"><b>Date</b></label>
                                            <div class="col-md-6">
                                                <input type="date" class="form-control col-sm-12"
                                                    value="<?php echo $expensedate; ?>" name="expensedate"
                                                    id="expensedate" required>
                                            </div>
                                        </div>
                                        <fieldset class="form-group">
                                            <div class="row">
                                                <div class="col-form-label col-sm-6 pt-0"><b>Category</b></div>
                                                <div class="col-md">

                                                    <div><b>Expense</b></div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory4"
                                                            value="Lift Maintenance Expense"
                                                            <?php echo ($expensecategory == 'Lift Maintenance Expense') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory4">
                                                        &nbsp&nbsp&nbsp&nbsp Lift Maintenance Expense
                                                        </label>
                                                    </div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory3"
                                                            value="Society equipment Maintenance Expense "
                                                            <?php echo ($expensecategory == 'Society equipment Maintenance Expense ') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory3">
                                                        &nbsp&nbsp&nbsp&nbsp Equipment Maintenance Expense</label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory2"
                                                            value="Property Tax Expense"
                                                            <?php echo ($expensecategory == 'Property Tax Expense') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory2">
                                                        &nbsp&nbsp&nbsp&nbsp Property Tax Expense
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory1"
                                                            value="Water Charges Expense"
                                                            <?php echo ($expensecategory == 'Water Charges Expense') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory1">
                                                        &nbsp&nbsp&nbsp&nbsp Water Charges Expense
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory7"
                                                            value="Common Electricity Charges Expense"
                                                            <?php echo ($expensecategory == 'Common Electricity Charges Expense') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory7">
                                                        &nbsp&nbsp&nbsp&nbsp Common Electricity Charges Expense
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory6"
                                                            value="Society cleaning services Expense"
                                                            <?php echo ($expensecategory == 'Society cleaning services Expense') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory6">
                                                        &nbsp&nbsp&nbsp&nbsp Society cleaning services Expense
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory5"
                                                            value="Others Expense"
                                                            <?php echo ($expensecategory == 'Others Expense') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory5">
                                                        &nbsp&nbsp&nbsp&nbsp Others Expense
                                                        </label>
                                                    </div><br>

                                                    <div><b>Income</b></div>

                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory8"
                                                            value="Maintenance income"
                                                            <?php echo ($expensecategory == 'Maintenance income') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory8">
                                                        &nbsp&nbsp&nbsp&nbsp Maintenance income
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory9"
                                                            value="Rent income"
                                                            <?php echo ($expensecategory == 'Rent income') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory9">
                                                        &nbsp&nbsp&nbsp&nbsp Rent income
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="expensecategory" id="expensecategory10"
                                                            value="Event income"
                                                            <?php echo ($expensecategory == 'Event income') ? 'checked' : '' ?>>
                                                        <label class="form-check-label" for="expensecategory10">
                                                        &nbsp&nbsp&nbsp&nbsp Event income
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-12 text-right">
                                                <?php if ($update == true) : ?>
                                                <button class="btn btn-lg btn-block btn-warning"
                                                    style="border-radius: 0%;" type="submit"
                                                    name="update">Update</button>
                                                <?php elseif ($del == true) : ?>
                                                <button class="btn btn-lg btn-block btn-danger"
                                                    style="border-radius: 0%;" type="submit"
                                                    name="delete">Delete</button>
                                                <?php else : ?>
                                                <button type="submit" name="add"
                                                    class="btn btn-lg btn-block btn-success"
                                                    style="border-radius: 5%; font-size: 15px; background-color:orange;">Add
                                                    Income/Expense</button>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-md-3"></div>

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
                <p style="font-size: 13px;     font-family: sans-serif;">
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

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
    <script>
    feather.replace();
    </script>
    <script>

    </script>

</body>

</html>