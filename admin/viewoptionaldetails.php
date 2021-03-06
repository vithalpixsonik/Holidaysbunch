<?php include "functions/connection.php";
session_start();
echo $_SESSION['username'];
if(!isset($_SESSION['username']))
{
  header('Location: login.php');
}  ?>
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
  <!-- endinject -->
  <!-- Font awesome cdn -->
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php">HolidaysBunch</a>
          <a class="navbar-brand brand-logo-mini" href="index.php">TR</a>
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
        <div class="content-wrapper" style="background-color:white">
          <h3 class="text-center mb-5">Optional Tour Details</h3>
            <div class="row">
             
            
              <div class="col-lg-6">
                  <h4 class="p-2">Sic Basis</h4>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Adult Price</th>
                        <th scope="col">Child Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>        
                      <?php
                        $country=$_GET['country'];
                        $sql="select * from optional_tour where country='$country' and type='sic'";
                        $query=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($query))
                        {
                          echo '
                          
                          <tr>
                            <td>'.$row['heading'].'</td>
                            <td>'.$row['adult_price'].' ₹</td>
                            <td>'.$row['child_price'].' ₹</td>
                            <td> <a href="editoptionaldetails.php?name='.$row['heading'].'&type='.$row['type'].'">Edit</a></td>
                            <td><a href="deleteoptionaldetails.php?name='.$row['heading'].'&type='.$row['type'].'&country='.$country.'">Delete</a></td>
                        </tr>
                          ';
                        }
                      ?>
                    </tbody>
                  </table>
                 
              </div>  
             

              <div class="col-lg-6">
                  <h4 class="p-2">Pvt Basis</h4>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Adult Price</th>
                        <th scope="col">Child Price</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                      </tr>
                    </thead>
                    <tbody>        
                      <?php
                        $country=$_GET['country'];
                        $sql="select * from optional_tour where country='$country' and type='pvt'";
                        $query=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($query))
                        {
                          echo '
                          
                          <tr>
                            <td>'.$row['heading'].'</td>
                            <td>'.$row['adult_price'].' ₹</td>
                            <td>'.$row['child_price'].' ₹</td>
                            <td> <a href="editoptionaldetails.php?name='.$row['heading'].'&type='.$row['type'].'">Edit</a></td>
                            <td><a href="deleteoptionaldetails.php?name='.$row['heading'].'&type='.$row['type'].'&country='.$country.'">Delete</a></td>
                        </tr>
                          ';
                        }
                      ?>
                    </tbody>
                  </table>
              </div>  
            
           
             
              <?php
                    if(isset($_GET['msg']))
                    {
                      echo '<div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
                     '.$_GET['msg'].'
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>';
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

