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
        <div class="content-wrapper">
          
<!-- ##########################  3 star Hotel ######################-->
  <!-- ######################################################-->

          <div class="row card" style="margin-left: 5%;margin-right: 5%"> 
           
            <form action="" method="POST" enctype="multipart/form-data">
             <br> <h4 class="text-center">Update  Details</h4><br>
              <div class="card m-2 p-3">
              <?php 
                if(isset($_GET['name']))
                {
                $GLOBALS['name']=$_GET['name'];
                $sql="select * from country where name='$name'";
                $query=mysqli_query($con,$sql);
                $counter=2;
                while($row=mysqli_fetch_array($query))
                {
                ?>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4">
                      <label for="name">Country Name</label>
                      <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" id="" readonly>
                    </div>
                
                    <div class="col-lg-4">
                        <label for="cost">Country Image (1350x450 pixels)</label>
                        <input type="file" name="featured_image" value="<?php echo $row['double_tripple_sharing_cost'] ?>" class="form-control" id="cost">
                    </div>

                    <div class="col-lg-2">
                      <label for="name">Destination Type</label>
                      <input type="text" name="destination_type" class="form-control" value="<?php echo $row['destination_type'] ?>" id="" readonly>
                    </div>

                    <div class="col-lg-2">
                      <label for="name">Optional Tours</label>
                      <input type="text" name="optional_tour" class="form-control" value="<?php echo $row['optional_tour'] ?>" id="">
                    </div>

                    
                  </div>


                  </div>

                
                <div class="row">
                  <button value="Update Country" name="update-country" class="btn btn-primary m-3">Update Country</button>
                </div>

                <?php  
                }}
              ?></div><br>
            </form>


<!-- Update package Code php -->
<?php
  if(isset($_POST['update-country']))
  {
    
    $name=$_POST['name'];
    
    $featured_image = $_FILES['featured_image']['name'];
    if($featured_image)
    {
    $target_dir1 = "uploads/country/";
    $target_file = $target_dir1 . basename($_FILES["featured_image"]["name"]);
   //folder where images will be uploaded
    $folder = 'uploads/featured/';
    $destination_type=$_POST['destination_type'];
    $optional_tour=$_POST['optional_tour'];
    $sql = "update country set name='$name',image='$featured_image',destination_type='$destination_type',optional_tour='$optional_tour' WHERE name='$name'";
    $query=mysqli_query($con,$sql);
    move_uploaded_file($_FILES['featured_image']['tmp_name'],$target_dir1.$featured_image);
    if($query)
    {
     echo '<script>alert("Country Updated Successfully!")</script>';
     echo '<script>window.location.href = "managecountry.php";</script>';
    }}


    if(!$featured_image)
    {
    $destination_type=$_POST['destination_type'];
    $optional_tour=$_POST['optional_tour'];
    $sql = "update country set name='$name',destination_type='$destination_type',optional_tour='$optional_tour' WHERE name='$name'";
    $query=mysqli_query($con,$sql);
    move_uploaded_file($_FILES['featured_image']['tmp_name'],$target_dir1.$featured_image);
    if($query)
    {
     echo '<script>alert("Country Updated Successfully!")</script>';
     echo '<script>window.location.href = "managecountry.php";</script>';
    }}



    else{
      echo '<p class="alert alert-success m-5">'.mysqli_error($con).'</p>';
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

