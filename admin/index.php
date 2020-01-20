<?php include "functions/connection.php";
session_start();
echo $_SESSION['username'];
if(!isset($_SESSION['username']))
{
  header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>HolidayBunch Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php">HolidaysBunch</a>
          <a class="navbar-brand brand-logo-mini" href="index.php">HB</a>
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-sort-variant"></span>
          </button>
        </div>  
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name"><?php echo $_SESSION['username']; ?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item" href="adminprofile.php">
                <i class="mdi mdi-settings text-primary"></i>
                Edit Profile
              </a>
              <a class="dropdown-item" href="logout.php">
                <i class="mdi mdi-logout text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.php -->
      <?php include('menu.php'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper bg-white">
          

        <h4 class="text-center">International Tours Stats</h4>
          <div class="row pt-3 pb-5 bg-white">
             
             <div class="col-lg-4 card">
               <br>
               <center><img src="../img/icon/country.png" style="height:100px;width:100px" alt=""></center> 
               <h3 class="m-3 p-3 text-center">Total Countries</h3>
                <?php
                  $sql="select * from country where destination_type='international'";
                  $query=mysqli_query($con,$sql);
                  $count=mysqli_num_rows($query);
                  echo '<h2 class="text-center">'.$count.'</h2> ';
                ?>
               <br>
             </div>





             <div class="col-lg-4 card"><br>
             <center><img src="../img/icon/package.png" style="height:90px;width:90px" alt=""></center>
               <h3 class="m-3 p-3 text-center">Total Packages</h3>
               <?php
                  $sql="select * from package ";
                  $query=mysqli_query($con,$sql);
                  $count=mysqli_num_rows($query);
                  echo '<h2 class="text-center">'.$count.'</h2> ';
                ?><br>
             </div>





             <div class="col-lg-4 card"><br>
             <center><img src="../img/icon/hotel.png" style="height:100px;width:100px" alt=""></center>
               <h3 class="m-3 p-3 text-center">Total Hotels</h3>
               <?php
                  $sql="select * from hotel";
                  $query=mysqli_query($con,$sql);
                  $count=mysqli_num_rows($query);
                  echo '<h2 class="text-center">'.$count.'</h2> ';
                ?><br>
             </div>


      </div>







      <h4 class="text-center">Domestic Tours Stats</h4>
          <div class="row pt-3 pb-5 bg-white">
             
             <div class="col-lg-4 card">
               <br>
               <center><img src="../img/icon/country.png" style="height:100px;width:100px" alt=""></center> 
               <h3 class="m-3 p-3 text-center">Total Destinations</h3>
                <?php
                  $sql="select * from country where destination_type='domestic'";
                  $query=mysqli_query($con,$sql);
                  $count=mysqli_num_rows($query);
                  echo '<h2 class="text-center">'.$count.'</h2> ';
                ?>
               <br>
             </div>





             <div class="col-lg-4 card"><br>
             <center><img src="../img/icon/package.png" style="height:90px;width:90px" alt=""></center>
               <h3 class="m-3 p-3 text-center">Total Packages</h3>
               <?php
                  $sql="SELECT *  FROM package  LEFT  JOIN country  ON package.country = country.name where destination_type='domestic';";
                  $query=mysqli_query($con,$sql);
                  $count=mysqli_num_rows($query);
                  echo '<h2 class="text-center">'.$count.'</h2> ';
                ?><br>
             </div>





             <div class="col-lg-4 card"><br>
             <center><img src="../img/icon/hotel.png" style="height:100px;width:100px" alt=""></center>
               <h3 class="m-3 p-3 text-center">Total Hotels</h3>
               <?php
                  $sql="SELECT *  FROM hotel  LEFT  JOIN country  ON hotel.country = country.name where destination_type='domestic';";
                  $query=mysqli_query($con,$sql);
                  $count=mysqli_num_rows($query);
                  echo '<h2 class="text-center">'.$count.'</h2> ';
                ?><br>
             </div>


      </div>





        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="">HolidaysBunch</a>. All rights reserved.</span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <script src="js/chart.js"></script>
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

