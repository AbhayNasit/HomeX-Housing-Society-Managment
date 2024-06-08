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
            <a class="active" href="javascript:;">
              <i class="fa fa-ambulance"></i>
              <span>Emergency Contact</span>
              </a>
            <ul class="sub">
              <li ><a href="emergency_contact.php">Contact</a></li>
              <li><a href="Hospitals.php">Hospitals</a></li>
              <li><a href="Police_Station.php">Police Station</a></li>
              <li class="active"><a href="City_Department.php">City Department</a></li>
              <li><a href="Transport_Services.php">Transport Services</a></li>
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
        

        <div> <b style="text-align:left;">Electricity Department</b></div>
          
        
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
                Ajwa Road	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2564715	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Akota	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2358277	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Alkapuri	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2344777	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Atladra
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2338987	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Baranpura	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2420610	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Champaner/Fathepura	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2510335	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Chhani	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2771622	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Dandia Bazar	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2420621	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Fatehgunj
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2793633	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                GEB Main (Navlakhi)	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2436121	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Gendigate/Wadi	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2583745	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                General Complaints	
                </div>
                <div class="cell" data-title="Contact Number">
                155333	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                GIDC (Makrpura)	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2642382	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Gorwa/Subhanpura	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2290773	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Head Office	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2310582	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Karelibaug/Harni	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2484491	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Lalbaug/Pratapnagar	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2631795	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Mandvi	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2560126	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Panigate	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2513922
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Raopura
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2433777	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Sama	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2712304	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Tarsali	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2635677	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Vidhyut Nagar
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2332766	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Vishwamitri/East Division	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2433788		
                </div>
              </div>

            </div>  


            <div><b>Postal Department</b></div>
            <div class="table">
              
              <div class="row header1 green">
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
                Vadodara Head Post Office
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2422449		
                </div>
                <div class="cell" data-title="Address">
                Kharivav Road, Near Surya Narayan Mandir, Raopura, Jambubet, Vadodara		
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                India Post Office		
                </div>
                <div class="cell" data-title="Contact Number">
                1800112011		
                </div>
                <div class="cell" data-title="Address">
                Near Chakli Circle, Race Course Road, Haribhakti Colony, Vadodara		
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Alkapuri Sub Post Office		
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2353354		
                </div>
                <div class="cell" data-title="Address">
                NIndubhai Patel Marg, Arunoday Society, Alkapuri, Vadodara, Gujarat 390007	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Subhanpura Sub Post Office	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2390600		
                </div>
                <div class="cell" data-title="Address">
                Pujer Complex, Subhanpura, Vadodara, Gujarat 390023
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Fatehgunj Head Post Office	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2794178		
                </div>
                <div class="cell" data-title="Address">
                VIP Road, Fatehgunj, Vadodara		
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Indian Post - Sayajigunj			
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2363665		
                </div>
                <div class="cell" data-title="Address">
                Beside Kalyan Hotel, Sayajiganj, Vadodara	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Vidyutnagar Sub Post Office				
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2359650			
                </div>
                <div class="cell" data-title="Address">
                F-2, Old Padra Road, Vidyutnagar Colony, Sukrutinagar, Akota, Vadodara		
                </div>
               </div>
               
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Chhani Sub Post Office				
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2772847		
                </div>
                <div class="cell" data-title="Address">
                Near shell petrol pump, Opp. Balaji Banglows, Chhani, Vadodara	
                </div>
              </div>
              
            </div> 

            <div><b>Telephone Department</b></div>
            <div class="table">
              
              <div class="row header1 blue">
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
                BSNL Alkapuri Telephone Exchange	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2332111		
                </div>
                <div class="cell" data-title="Address">
                Alkapuri Tele EXCh Nr. Chakli Circle, Race Course Vadodara
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Karelibaug Telephone Exchange		
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2461822	
                </div>
                <div class="cell" data-title="Address">
                Karelibaug Tele. Exch Bldg Opp.Ambalal Park,Karelibaug Vadodara	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Subhanpura Telephone Exchange		
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2397367		
                </div>
                <div class="cell" data-title="Address">
                Subhanpura Telephone Exchange, Nr. Atmajyoti Ashram, Subhanpura, Vadodara	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Fatehgunj Telephone Exchange		
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2784500		
                </div>
                <div class="cell" data-title="Address">
                Fatehgunj Telephone Exchange, Near Fatehgunj Post Office, Vadodara	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                City Telephone Exchange	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2426813		
                </div>
                <div class="cell" data-title="Address">
                City Telephone Exchange, Opp. Maharani Shantadevi Nursing Home, Jail Road, Vadodara		
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Panigate Telephone Exchange			
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2560010		
                </div>
                <div class="cell" data-title="Address">
                Panigate Telephone Exchange, Ajwa Road, Vadodara	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Makarpura Telephone Exchange			
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2652400			
                </div>
                <div class="cell" data-title="Address">
                Makarpura Telephone Exchange, GIDC Makarpura, Vadodara		
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
