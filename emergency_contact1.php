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
  background: #ea6153;
}
.row.green {
  background: #27ae60;
}
.row.blue {
  background: #2980b9;
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
          <p class="centered"><a href="#"><img src="img/5.png" class="img-circle" width="80"></a></p>
          
          <li class="mt">
            <a href="user_page.php">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>

          <li class="sub-menu">
            <a class="active" href="javascript:;">
              <i class="fa fa-ambulance"></i>
              <span>Emergency Contact</span>
              </a>
            <ul class="sub">
              <li class="active"><a href="emergency_contact1.php">Contact</a></li>
              <li><a href="Hospitals1.php">Hospitals</a></li>
              <li><a href="Police_Station1.php">Police Station</a></li>
              <li><a href="City_Department1.php">City Department</a></li>
              <li><a href="Transport_Services1.php">Transport Services</a></li>
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
    <section id="main-content"><br> 
    
     <div class="wrapper">
            
        <center><h2 style="color:blue;text-align:center;">Emergency Services....</h2></center>
        

        <div>
        <b style="text-align:left;">24-Hour Vadodara Services</b>
        </div>
          
        
            <div class="table" id="myTable">

              <div class="row header1">
                <div class="cell">
                  Name
                </div>
                <div class="cell">
                  Contact Number
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                  VMC Helpline
                </div>
                <div class="cell" data-title="Contact Number">
                  18002330265
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                  Control Room
                </div>
                <div class="cell" data-title="Contact Number">
                  100, 91-265-2415111, 91-265-2413000
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                  Police Commissioner
                </div>
                <div class="cell" data-title="Contact Number">
                  91-265-2431414
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                  Municipal Ambulance Helpline
                </div>
                <div class="cell" data-title="Contact Number">
                  108
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                SSG Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2424848
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Disaster Cell
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2427592
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                State Control Room
                </div>
                <div class="cell" data-title="Contact Number">
                  1090
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Fire brigade Control Room
                </div>
                <div class="cell" data-title="Contact Number">
                  101
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Dandia Bazar Fire Station
                </div>
                <div class="cell" data-title="Contact Number">
                  18002330265
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                GIDC Makarpura Fire Station
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2631444
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Panigate Fire Station
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2513014
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Wadiwadi Fire Station
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2343545
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Gajrawadi Fire Station
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2580908
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Control Room Dandia Bazar
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2420881
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Gas Emergency Service
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2344618
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Bhailal Amin General Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2307038
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Indu Blood Bank
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2437676
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                SSG Hospital Blood Bank
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2424848
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Shri Jalaram Blood Bank
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2464130
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Suraktam Blood Bank
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2363660
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Citizen Blood Bank
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2427640
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                SSG Hospital Eye Bank
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2424848
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Vaduwala Charitanble Eye Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                91-9925044932, 91-265-2410932
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                BOC India Ltd.
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2580529
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Urmi Oxygen Co.
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2631238
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Lifeline Medical Gases
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2291109
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Child Line
                </div>
                <div class="cell" data-title="Contact Number">
                  1098
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Narisanrakshan Kendra
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2780280
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Olakh
                </div>
                <div class="cell" data-title="Contact Number">
                1091, 91-265-2485490
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Abhayam Women Helpline
                </div>
                <div class="cell" data-title="Contact Number">
                  181
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                VCARE
                </div>
                <div class="cell" data-title="Contact Number">
                91-9409027166
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                VSPCA
                </div>
                <div class="cell" data-title="Contact Number">
                91-7046065552
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                CSPCA
                </div>
                <div class="cell" data-title="Contact Number">
                91-9825011117
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Karuna Animal Helpline Ambulance Service
                </div>
                <div class="cell" data-title="Contact Number">
                  1962
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Amish Hospital & Burns Centre
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2337895, 91-265-233779
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Jeevan Aastha Suicide Prevention Helpline
                </div>
                <div class="cell" data-title="Contact Number">
                1800 233 3330	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Cybercrime Helpline
                </div>
                <div class="cell" data-title="Contact Number">
                1930, 1800599901, 0265-2513630
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                New National Helpline Numbers For queries on Coronavirus
                </div>
                <div class="cell" data-title="Contact Number">
                1075, 1800-112-545
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Central Helpline Number
                </div>
                <div class="cell" data-title="Contact Number">
                +91-11-23978046
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                For more information
                </div>
                <div class="cell" data-title="Contact Number">
                104, 07923250818, 07923251900
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Senior Citizen Cell	
                </div>
                <div class="cell" data-title="Contact Number">
                91-6359064557
                </div>
              </div>

            </div>      
            
            
            <div> <b style="text-align:left;">Municipal Services</b></div>
          
        
            <div class="table" id="myTable">

              <div class="row header1 blue">
                <div class="cell">
                  Name
                </div>
                <div class="cell">
                  Contact Number
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Food Adulteration Checking	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2433116	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Health Officer	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2432050	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Shops & Establishment Department	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2411086	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Street Lights	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2427185	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Vadodara Municipal Corporation	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2431466	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                VMC Gas Emergency Service
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2344618	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Water Supply	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2431466	
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
