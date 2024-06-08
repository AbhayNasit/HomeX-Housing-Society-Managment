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
              <li><a href="emergency_contact1.php">Contact</a></li>
              <li class="active"><a href="Hospitals1.php">Hospitals</a></li>
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

         <div> <b style="text-align:left;">Vadodara Hospitals Services</b></div>

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
                Ayurvedic Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2561872
                </div>
                <div class="cell" data-title="Address">
                Opposite Panigate Bus Depot
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                ESIS Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                +91-265-2336421, +91-265-2336422
                </div>
                <div class="cell" data-title="Address">
                Main Road, Sarabhai Cross Road, Gotri Road,
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Hospital For Mental Health
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2466834
                </div>
                <div class="cell" data-title="Address">
                karelibag,vadodara
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Infectious Diseases Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2465739
                </div>
                <div class="cell" data-title="Address">
                Bahucharaji Rd, Opp Sadna Nagar Society, Karelibagh
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Jamnabai General Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2517400, 91-265-2517915
                </div>
                <div class="cell" data-title="Address">
                near mandvi gate,vadodara
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                SSG Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2424848
                </div>
                <div class="cell" data-title="Address">
                Near Kala Godha Circle, Opposite Aradhana Cinema, Jail Road, Raopura
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                 Aashray Urology Institute
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2356295
                </div>
                <div class="cell" data-title="Address">
                Sampatrao Colony
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Amish Hospital & Burns Centre	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2337895, 91-265-2337795	
                </div>
                <div class="cell" data-title="Address">
                Shri Ashapuri Society, Akota Jain Mandir Road	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Bankers Heart Institute	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2320099	
                </div>
                <div class="cell" data-title="Address">
                Old Padra Road, Opposite Suryakiran Complex, Sukrutinagar, Diwalipura
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Bankers Heart Institute	& Research Centre	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2322021, 91-265-2325444	
                </div>
                <div class="cell" data-title="Address">
                Old Padra Road, Opposite Suryakiran Complex, Sukrutinagar, Diwalipura
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Bhailal Amin General Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2285555, 91-265-2286666	
                </div>
                <div class="cell" data-title="Address">
                Bhailal Amin Marg, Road, Gorwa,
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Dwarkesh Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2464999	
                </div>
                <div class="cell" data-title="Address">
                L&T Circle, VIP Road, Karelibaug	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Metro Hospital & Research Institute	
                </div>
                <div class="cell" data-title="Contact Number">
                91-9601277020	
                </div>
                <div class="cell" data-title="Address">
                Near Kendriya Vidyalaya, Harni-Savli Road	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Shubhechha Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                09978694108	
                </div>
                <div class="cell" data-title="Address">
                Srinagar Society, Productivity Road	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Sterling Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2354488	
                </div>
                <div class="cell" data-title="Address">
                Near amitnagar circle,karelibag
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Sundaram Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2330788	
                </div>
                <div class="cell" data-title="Address">
                9, Anand Society, Behind Express Hotel	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Medistar Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-9512007272	
                </div>
                <div class="cell" data-title="Address">
                GIDC Vadsar Road, Adjoining Vadsar Flyover, Suncity, Manjalpur
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Sunshine Global Hospitals - Manjalpur	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-3300400/2632044/2638044, 91-9377412777	
                </div>
                <div class="cell" data-title="Address">
                Nalini House, Close to Shreyas Vidhyalaya, Manjalpur
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Balaji Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                0265-228-2111
                </div>
                <div class="cell" data-title="Address">
                Opposite to Vidya Vikas School, Ellora Park, Shubhanpura
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Spandan Multispeciality Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                078198 17511	
                </div>
                <div class="cell" data-title="Address">
                Municipal Corporation, Sindhwai Mata Road Beside Ward Office No: 4, Manjalpur
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Dhiraj Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                02668 245264	
                </div>
                <div class="cell" data-title="Address">
                Waghodia Road, Pipariya
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Parul Sevashram Hospital
                </div>
                <div class="cell" data-title="Contact Number">
                098791 85000
                </div>
                <div class="cell" data-title="Address">
                P.O. Limda, Tal., Waghodia, 
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Venus Super Speciality Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                085111 78564	
                </div>
                <div class="cell" data-title="Address">
                Off OP Road Opposite Akota Ward Office No 6	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Centre for Sight	
                </div>
                <div class="cell" data-title="Contact Number">
                18001200477	
                </div>
                <div class="cell" data-title="Address">
                Atlantis K10, Tower A, 101, Opposite Honest Restaurant, Sarabhai Compound, Genda Circle
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Welcare Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2337172	
                </div>
                <div class="cell" data-title="Address">
                Vadsar Road, Near Mercedes showroom, Atladara
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                B.M. Parikh Foundation Trust Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2437372	
                </div>
                <div class="cell" data-title="Address">
                Mandvi
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                BAPS Shastriji Maharaj Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-9998991018	
                </div>
                <div class="cell" data-title="Address">
                Shastri Yagna Purush Marg, Near Railway Crossing, Vadodara District, Atladara
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                KG Patel Children's & Women's Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2463906	
                </div>
                <div class="cell" data-title="Address">
                Jalaram Mandir Rd, opp. Chandralok Complex, Pratiksha Society, Karelibagh
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Narhari Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2794413, 91-265-2794414	
                </div>
                <div class="cell" data-title="Address">
                Narayan Bhavan, Sayajibaug Road, Fatehgunj, near Kamati Bagh
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Our Lady Of Pillar Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2791038	
                </div>
                <div class="cell" data-title="Address">
                Fatehgunj
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Premdas Jalaram Hospital		
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2565863, 91-265-2565867	
                </div>
                <div class="cell" data-title="Address">
                Behind RTO, Harni Varasia Ring Road	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Yogini Vasantdevi Arogya Mandir	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2433300, 91-265-2431179, 91-265-2582050, 91-265-2433083	
                </div>
                <div class="cell" data-title="Address">
                Pratapnagar
                </div>
              </div>

            </div>    
            
            <div><b>Day And Night Chemists</b></div>
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
                Valaji Medico
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-6990172	
                </div>
                <div class="cell" data-title="Address">
                Opposite Government Press, Kothi, Vadodara, Gujarat 390001	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Atmajyoti Medical Store	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2387920	
                </div>
                <div class="cell" data-title="Address">
                Shop - 2, Near Atmajyoti Mandir Vip Apartment, Subhanpura, Vadodara-390023	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Narhari Hospital	
                </div>
                <div class="cell" data-title="Contact Number">
                91-265-2794414	
                </div>
                <div class="cell" data-title="Address">
                Narayan Bhavan, Near Sayajigunj, Fatehgunj, Vadodara-390002
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Om Chemist And Super Store	
                </div>
                <div class="cell" data-title="Contact Number">
                91-8758224477, 91-9512224477	
                </div>
                <div class="cell" data-title="Address">
                Gf-29 Deluxe Society, Delux Cross Road, Nizampura, Vadodara - 390002, Opposite Devdeep Complex	
                </div>
              </div>
              
              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Sheetal Medical & Provision Store	
                </div>
                <div class="cell" data-title="Contact Number">
                0265 2653070	
                </div>
                <div class="cell" data-title="Address">
                Kubereshwar Mahadev Marg, Manjalpur Naka, Opp. Shreyas School, Krupal Society, Manjalpur, Vadodara, Gujarat 390011	
                </div>
              </div>

              <div class="row">
                <div class="cell" data-title="Name" id="Name">
                Om Chemist		
                </div>
                <div class="cell" data-title="Contact Number">
                070432 24477	
                </div>
                <div class="cell" data-title="Address">
                A/2, Wagheshwari Society, VIP Road, Near Om Children Hospital, near SBI / Kotak Bank, Amit Nagar, Jay Santhoshi Nagar, Karelibagh, Vadodara, Gujarat 390018	
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
