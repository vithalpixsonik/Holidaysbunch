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
  <title>HolidaysBunch Admin Dashboard</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/tabs.css">
  <!-- endinject -->
 
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php">Altfit</a>
          <a class="navbar-brand brand-logo-mini" href="index.php">A</a>
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
        <div class="content-wrapper">
          
          
          
          
          <div class="row">
           

           


<div class="tab card">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Profile</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Update Password</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Logout</button>
</div>

<div id="London" class="tabcontent">
 <?php
 echo "<h5 class='mt-4'>Welcome ".$_SESSION['username']." to altfit dashboard</h5>";
 ?>
</div>

<div id="Paris" class="tabcontent">
    <form method="POST" action="adminprofile.php" style="padding:5% 5%;width:70%">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text"  class="form-control" name="username" style="border:1px solid #757575" id="username">
      </div>
      <div class="form-group">
        <label for="password">Old Password</label>
        <input type="password" class="form-control" name="password" style="border:1px solid #757575" id="password">
      </div>
      <div class="form-group">
        <label for="new-password">New Password</label>
        <input type="password" class="form-control" name="new-password" style="border:1px solid #757575" id="new-password">
      </div>
      <br>
      <input type="submit" name="update" class="btn btn-primary form-control" value="Update">
    </form>
</div>

<div id="Tokyo" class="tabcontent">
  <a href="logout.php"><button class="btn btn-info mt-2">Logout</button></a>
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   
   <?php
                    include "functions/connection.php";
                    if (isset($_POST['update'])){
                      $username = stripslashes($_POST['username']);
                      $username = mysqli_real_escape_string($con,$username);
                      $oldpassword = stripslashes($_POST['password']);
                      $oldpassword = mysqli_real_escape_string($con,$oldpassword);
                      $newpassword = md5(stripslashes($_POST['new-password']));
                      $newpassword = mysqli_real_escape_string($con,$newpassword);
                     $query = "SELECT * FROM `admin` WHERE username='$username' and password='".md5($oldpassword)."'";
                      $result = mysqli_query($con,$query) or die(mysql_error());
                      $rows = mysqli_num_rows($result);
                        if($rows>0){
                         $sql="update admin SET password='$newpassword' WHERE username='$username'";
                        $result = mysqli_query($con,$sql) or die(mysqli_error($con));
                          if($result)
                          {
                            echo "<p style='color:green'>Password Updated Successfully</p>";
                            
                          }
                          else{
                            echo mysqli_error($con);
                          }
                        }
                        else{
                          echo "<p style='color:red;margin-left:10%;'>Invalid Username Or Password. </p>";								
                          
                        }
                      }
							?>           
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
  <script src="js/data-table.js"></script>
  <script src="js/jquery.dataTables.js"></script>
  <script src="js/dataTables.bootstrap4.js"></script>
  <!-- End custom js for this page-->
</body>

</html>

