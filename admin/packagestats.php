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

          <form action="packagestats.php" class="d-flex justify-content-center" style="width:100%" method="POST">
            <div class="row">
              <div class="col-lg-12">
              <h4 class="text-center mb-3">Search Package Details</h4>
                <div class="row">
                  <div class="col-lg-8">
                    <select name="country_name" style="width:350px;height:40px;border:1px solid #ececed" id="">
                      <option value="">Select Country From Below Options..</option>
                      <?php 
                      $sql="select * from country where destination_type='international'";
                      $query=mysqli_query($con,$sql);
                      while($row=mysqli_fetch_array($query))
                      {
                      ?>  
                      <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                      <?php } ?>  
                    </select>
                  </div>
                  <div class="col-lg-4">
                    <input type="submit" name="search" class="btn btn-primary"  value="Search Country Wise packages">
                  </div>
                </div>
                
               
              </div>
            </div>
          </form>
          <?php 
          if(isset($_POST['search']))
          {
            $country_name= $_POST['country_name'];
            echo '<h4 class="text-center mt-5 mb-4">'.$country_name.' Packages</h4>'
          ?>
              
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Country</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Price</th>
                  <th scope="col">Operation</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $sql="SELECT * FROM package where country='$country_name'";
              $run=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($run))
              {
              ?>
                <tr>
                  <th><?php echo $row['id'];  ?></th>
                  <td><?php echo $row['name'];  ?></td>
                  <td><?php echo $row['country'];  ?></td>
                  <td><?php echo $row['days'];  ?>D <?php echo $row['nights'];  ?>N</td>
                  <td>₹ <?php echo $row['price'];  ?></td>
                  <td><?php
                  echo '
                    <a href="updatepackage.php?id='.$row['id'].'"><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                    <a href="deletepackage.php?id='.$row['id'].'"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                  ';
                  ?></td>
                </tr>
              <?php } ?>

              </tbody>
            </table>

            

              <?php } ?>






          <?php
              if(!isset($_POST['search']))
          {
          ?>
              
          <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Id</th>
                  <th scope="col">Name</th>
                  <th scope="col">Country</th>
                  <th scope="col">Duration</th>
                  <th scope="col">Price</th>
                  <th scope="col">Operation</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $sql="SELECT * FROM package";
              $run=mysqli_query($con,$sql);
              while($row=mysqli_fetch_array($run))
              {
              ?>
                <tr>
                  <th><?php echo $row['id'];  ?></th>
                  <td><?php echo $row['name'];  ?></td>
                  <td><?php echo $row['country'];  ?></td>
                  <td><?php echo $row['days'];  ?>D <?php echo $row['nights'];  ?>N</td>
                  <td>₹ <?php echo $row['price'];  ?></td>
                  <td><?php
                  echo '
                    <a href="updatepackage.php?id='.$row['id'].'"><button class="btn btn-info"><i class="fa fa-edit"></i></button></a>
                    <a href="deletepackage.php?id='.$row['id'].'"><button class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                  ';
                  ?></td>
                </tr>
              <?php } ?>

              </tbody>
            </table>

            

              <?php } ?>

















      
        

        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 holidaysbunch</a>. All rights reserved.</span>
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

