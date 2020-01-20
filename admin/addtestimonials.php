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
          <h3 class="text-center">Add Testimonial</h3>
            <form action="addtestimonials.php" method="POST" enctype="multipart/form-data" style="width:70%;margin-left:15%">
              <div class="row">
                <div class="col-lg-12">
                      <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Name" id="id" required>
                      </div>
                </div>

                <div class="col-lg-6">
                      <div class="form-group">
                        <label for="image1">Image 1</label>
                        <input type="file" name="image1" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Package Name" id="id" required>
                      </div>
                </div>

                <div class="col-lg-6">
                      <div class="form-group">
                        <label for="image2">image 2</label>
                        <input type="file" name="image2" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Package Name" id="id" required>
                      </div>
                </div>

                <div class="col-lg-12">
                      <div class="form-group">
                        <label for="message">Testimonial Message</label>
                        <textarea name="message" rows="5" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter clients testimonials here" id="id"></textarea>
                      </div>
                </div>

                <div class="col-lg-12">
                      <div class="form-group">
                        <input type="submit" name="add-test" value="Add Testimonials" class="btn btn-primary">
                      </div>
                </div>

                
              </div> 
            
            </form>
        </div>

<!-- insert Php Code -->
<?php 
  if(isset($_POST['add-test']))
  {
    $name=$_POST['name'];
    $featured_image1 = $_FILES['image1']['name'];
    $featured_image2 = $_FILES['image2']['name'];
    $target_dir1 = "uploads/testimonial/img1/";
    $target_dir2 = "uploads/testimonial/img2/";
    $target_file1 = $target_dir1 . basename($_FILES["image1"]["name"]);
    $target_file2 = $target_dir2 . basename($_FILES["image2"]["name"]);
    $testimonial=$_POST['message'];
    $sql="insert into testimonial(`name`,`image1`,`image2`,`testimonial`)
    values('$name','$featured_image1','$featured_image2','$testimonial')";
    $query=mysqli_query($con,$sql);
    move_uploaded_file($_FILES['image1']['tmp_name'],$target_dir1.$featured_image1);
    move_uploaded_file($_FILES['image2']['tmp_name'],$target_dir2.$featured_image2);
    exit;
    if($sql)
    {
      echo '<p class="alert alert-success">Testimonials Added Successfully!<p>';
    }
    else{
      echo '<p class="alert alert-danger"> '.mysqli_error($con).' <p>';
    }

  }
?>




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

