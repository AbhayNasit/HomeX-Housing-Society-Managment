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
  background: #f8c701;
}
.row.green {
  background: #01f805;
}
.row.blue {
  background: #7e53ea;
}
.row.red {
  background: #01f8b6;
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
              <li><a href="Police_Station1.php">Police Station</a></li>
              <li ><a href="City_Department1.php">City Department</a></li>
              <li class="active"><a href="Transport_Services1.php">Transport Services</a></li>
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
        

        <div> <b style="text-align:left;">Gujarat State Transport Corporation</b></div>
          
        
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
                Bus & Booking Enquiry	
                </div>
                <div class="cell" data-title="Contact Number">
                1800 233 666666 / 07922835000		
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Divisional Controller		
                </div>
                <div class="cell" data-title="Contact Number">
                91-6359919030		
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Div.Traffic Officer		
                </div>
                <div class="cell" data-title="Contact Number">
                91-6359918337	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Bus Enquiry	
                </div>
                <div class="cell" data-title="Contact Number">
                0265-2512566 6359918347 0265-2794700 / M: 7490036856		
                </div>
              </div> 

            </div>  

            <div> <b style="text-align:left;">Vadodara Bus Service</b></div>
          
        
            <div class="table" id="myTable">

              <div class="row header1 green">
                <div class="cell">
                  Name
                </div>
                <div class="cell">
                  Contact Number
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Central Bus Depot Vadodara		
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2794700			
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Vinayak City Bus Office			
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2225694			
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Makarpura Central Bus Station		
                </div>
                <div class="cell" data-title="Contact Number">
                1800 233 666 666		
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Panigate S.T. Depot		
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2560367			
                </div>
              </div> 

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Nizampura S.T. Bus Depo		
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2760660			
                </div>
              </div> 

            </div> 

            <div> <b style="text-align:left;">Vadodara Railways Service</b></div>
          
        
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
                Division Railway Manager		
                </div>
                <div class="cell" data-title="Contact Number">
                2633240,2638081		
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Railway Enquiry			
                </div>
                <div class="cell" data-title="Contact Number">
                139			
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Toll Free Number (Enquiry)		
                </div>
                <div class="cell" data-title="Contact Number">
                1800111139			
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                General complain		
                </div>
                <div class="cell" data-title="Contact Number">
                138			
                </div>
              </div> 

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Makarpura	
                </div>
                <div class="cell" data-title="Contact Number">
                2643837			
                </div>
              </div> 

            </div> 

            <div> <b style="text-align:left;">Vadodara Air Service</b></div>
          
        
          <div class="table" id="myTable">

            <div class="row header1 red">
              <div class="cell">
                Name
              </div>
              <div class="cell">
                Contact Number
              </div>
            </div>
            
            <div class="row">
              <div class="cell" data-title="Name" id="Name">
              Airport Direct	
              </div>
              <div class="cell" data-title="Contact Number">
              91-265-2485356			
              </div>
            </div>
            
            <div class="row">
              <div class="cell" data-title="Name" id="Name">
              Indian Airlines				
              </div>
              <div class="cell" data-title="Contact Number">
              91-265-2466635				
              </div>
            </div>
            
            <div class="row">
              <div class="cell" data-title="Name" id="Name">
              Indian Airlines Booking		
              </div>
              <div class="cell" data-title="Contact Number">
              91-265-2354889, 91-265-2354797				
              </div>
            </div>
            
            <div class="row">
              <div class="cell" data-title="Name" id="Name">
              Airport		
              </div>
              <div class="cell" data-title="Contact Number">
              2482741,2483262			
              </div>
            </div> 

            <div class="row">
              <div class="cell" data-title="Name" id="Name">
              Air India	
              </div>
              <div class="cell" data-title="Contact Number">
              2466667			
              </div>
            </div> 

            <div class="row">
              <div class="cell" data-title="Name" id="Name">
              Indigo	
              </div>
              <div class="cell" data-title="Contact Number">
              2492221			
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
