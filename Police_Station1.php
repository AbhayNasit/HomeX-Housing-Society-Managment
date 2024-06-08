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
  background: #ffb301;
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
              <li ><a href="emergency_contact1.php">Contact</a></li>
              <li><a href="Hospitals1.php">Hospitals</a></li>
              <li class="active"><a href="Police_Station1.php">Police Station</a></li>
              <li><a href="City_Department1.php">City Department</a></li>
              <li><a href="Transport_Services.php">Transport Services</a></li>
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
         <b style="text-align:left;">Vadodara Police Services</b>
         </div>
          
        
            <div class="table">
              
              <div class="row header1">
                <div class="cell">
                  Name
                </div>
                <div class="cell">
                  Contact Number
                </div>
                <div class="cell">
                  Address
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Bapod Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2510820	
                </div>
                <div class="cell" data-title="Address">
                Bapod Talav, Ajwa Road, Near Vrundavan Char Rasta, Vadodara, Gujarat 390019	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Harni Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2541423	
                </div>
                <div class="cell" data-title="Address">
                Harni Road, Near Hanuman Temple, Harni, Vadodara, Gujarat 390022	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Manjalpur Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2635856	
                </div>
                <div class="cell" data-title="Address">
                GIDC Road, Near Vadsar Bridge, Vadodara, Gujarat 390010	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Chhani Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2776763	
                </div>
                <div class="cell" data-title="Address">
                Chhani Village, Vadodara, Gujarat 391740
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                J P Road Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2342400	
                </div>
                <div class="cell" data-title="Address">
                Tandalja Rd, Patrakar Colony, Tandalja, Vadodara, Gujarat 390012	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Nandesari Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2840440	
                </div>
                <div class="cell" data-title="Address">
                GIDC Road, Near Jalaram Mandir, Nandesari, Vadodara, Gujarat 391340	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                City Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2571211	
                </div>
                <div class="cell" data-title="Address">
                Panigate Road, Opposite Jamnabai Hospital, Syedwada, Mandvi, Vadodara, Gujarat 390006	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Jawahar Nagar Police Station		
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2230233		
                </div>
                <div class="cell" data-title="Address">
                Ranoli bridge Karachiya Petro Chemical Complex INA, Vadodara, Gujarat 391345		
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Navapura Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 24595999	
                </div>
                <div class="cell" data-title="Address">
                RV Desai Road, Near Gangotri Apartment, Bakrawadi, Navapura, Vadodara, Gujarat
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Fatehgunj Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2776722	
                </div>
                <div class="cell" data-title="Address">
                Old Chhani Road, Roshan Nagar, Ram Wadi, Vadodara, Gujarat 390024
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Karelibaug Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2459744		
                </div>
                <div class="cell" data-title="Address">
                Bhutdi Jampa Road, Near Police Parade Ground, Bhutdi Zampa, Fatehpura, Karelibagh, Vadodara, Gujarat 390018	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Panigate Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2516722		
                </div>
                <div class="cell" data-title="Address">
                4, Panigate Rd, Syedwada, Chhipwad, Vadodara, Gujarat 390006	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Gorwa Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2285803		
                </div>
                <div class="cell" data-title="Address">
                Gujarat Refinery Rd, opposite Bapu ni Dargah, Gorwa, Vadodara, Gujarat 390016		
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Laxmipura Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2399500
                </div>
                <div class="cell" data-title="Address">
                1, Maruti Dham Society, Laxmipura, Subhanpura, Vadodara, Gujarat 390023
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Raopura Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2411227		
                </div>
                <div class="cell" data-title="Address">
                Raopura Rd, Raopura, Jambubet, Vadodara, Gujarat 390001
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Gotri Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2373751		
                </div>
                <div class="cell" data-title="Address">
                6, Gotri Road, Juni Geri Compound, Gotri, Vadodara, Gujarat 390007		
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Makarpura Police Station		
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2656000		
                </div>
                <div class="cell" data-title="Address">
                Makarpura Road Near Baroda Dairy, opposite Bhavans School, Vadodara, Gujarat 390009	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Sayajiganj Police Station		
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2361479		
                </div>
                <div class="cell" data-title="Address">
                Sayajigunj Rd, Near Radhika Hotel, Pawan Park Society, Sayajiganj, Vadodara, Gujarat 390005
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Sama Police Station
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2774445	
                </div>
                <div class="cell" data-title="Address">
                D-1/1 & 1/2, Narmada Colony, Ekta Nagar, New Sama, Vadodara, Gujarat 390024
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Wadi Police Station		
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2424397		
                </div>
                <div class="cell" data-title="Address">
                Pratap Nagar Road, Near, Gendi Gate Rd, Baranpura Chokhandi, Gujarat 390001	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Warasiya Police Station	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2523255		
                </div>
                <div class="cell" data-title="Address">
                13-A2, Old RTO Rd, Warasiya, Vadodara, Gujarat 390006	
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
