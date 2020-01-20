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
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="navbar-brand-wrapper d-flex justify-content-center">
        <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">  
          <a class="navbar-brand brand-logo" href="index.php">Travel Agency</a>
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
        <div class="content-wrapper">
          
<!-- ##########################  3 star Hotel ######################-->
  <!-- ######################################################-->

          <div class="row card" style="margin-left: 5%;margin-right: 5%"> 
           
            <form action="" method="POST" enctype="multipart/form-data">

          
             <br> <h4 class="text-center">Update Hotels Details</h4><br>
              <div class="card m-2 p-3">
              <?php 
                if(isset($_GET['id']))
                {
                $GLOBALS['id']=$_GET['id'];
                $GLOBALS['star']=$_GET['stars'];
                $sql="select * from hotel where package_id='$id'  AND stars='$star'";
                $query=mysqli_query($con,$sql);
                $counter=2;
                while($row=mysqli_fetch_array($query))
                {
                ?>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <label for="name">Hotel Name</label>
                      <input type="text" name="name" class="form-control" value="<?php echo $row['hotel_name'] ?>" id="">
                    </div>
                
                    <div class="col-lg-4">
                      <label for="name">Stars</label>
                      <input type="text" name="stars" class="form-control" value="<?php echo $row['stars'] ?>" id="">
                    </div>

                    <div class="col-lg-4">
                        <label for="cost">Double/tripple Sharing Cost</label>
                        <input type="text" name="double-sharing" value="<?php echo $row['double_tripple_sharing_cost'] ?>" class="form-control" id="cost">
                    </div>
                  </div>


                  </div><br>

                  <div class="row">
                        <div class="col-lg-4">
                          <div class="form-group">
                            <label for="days">single occupancy cost</label>
                            <input type="text" name="single-occupancy" value="<?php echo $row['single_occupancy_cost'] ?>" class="form-control" id="days">
                          </div>
                    </div>

                    <div class="col-lg-4">
                          <div class="form-group">
                            <label for="nights">child bed cost</label>
                            <input type="text" name="child-bed" value="<?php echo $row['child_bed_cost'] ?>" class="form-control" id="nights">
                          </div>
                    </div>

                    <div class="col-lg-4">
                          <div class="form-group">
                            <label for="nights">child without bed cost</label>
                            <input type="text" name="child-without" value="<?php echo $row['child_without_bed_cost'] ?>" class="form-control" id="nights">
                          </div>
                    </div>


                </div>


                
                <div class="row">
                  <button value="Update Hotel" name="update-package" class="btn btn-primary m-3">Update Hotel</button>
                </div>

                <?php  
                }}
              ?></div><br>
            </form>


<!-- Update package Code php -->
<?php
  if(isset($_POST['update-package']))
  {
    $id=$_GET['id'];
    $name=$_POST['name'];
    $stars=$_POST['stars'];
    $double_sharing=$_POST['double-sharing'];
    $single_occupancy=$_POST['single-occupancy'];
    $child_bed=$_POST['child-bed'];
    $child_without=$_POST['child-without'];
    $sql = "UPDATE hotel SET hotel_name='$name',stars='$stars',double_tripple_sharing_cost='$double_sharing',	single_occupancy_cost='$single_occupancy',child_bed_cost='$child_bed',child_without_bed_cost='$child_without'  WHERE package_id='$id' and stars='$star'";
    $query=mysqli_query($con,$sql);
   
    if($query)
    {
     echo '<script>alert("Hotel Updated Successfully");</script>';
     echo '<script>window.location.href = "updatepackage.php?id='.$id.'";</script>';
    }
    else{
      echo '<p class="alert alert-success m-5">Error '.mysqli_error($con).'</p>';
    }
  }
  
?>

          </div>

  <!-- ######################################################-->
  <!-- End 3 star Hotels -->







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

