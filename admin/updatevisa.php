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
  <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
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
        <h3 class="text-center mb-4">Update Visa Details</h3>
        <div class="content-wrapper" style="background-color:white">
              <!-- fetch Visa Data To Update -->
              <?php
                if(isset($_GET['type']))
                {
                $type =$_GET['type']; 
                $country=$_GET['country'];
                $sql2="select * from visa where visa_type='$type' AND country='$country'";
                $query2=mysqli_query($con,$sql2);
                while($row=mysqli_fetch_array($query2))
                {
              ?>
              <form action="" method="POST">
              
              <div class="row">

                  <div class="col-lg-4">
                      <label for="">Select Country</label><br>
                      <input type="text" name="country" id="" value="<?php echo $row['country'] ?>"  readonly class="form-control">
                    </div>



                    <div class="col-lg-4">
                      <label for="">Type Of Visa</label><br>
                      <input type="text" name="visa-type" id="" value="<?php echo $row['visa_type'] ?>"  readonly class="form-control">
                    </div>
                    

                    <div class="col-lg-4">
                      <label for="">Processing Time</label><br>
                      <input type="text" name="processing-time" id="" value="<?php echo $row['processing_time'] ?>"  readonly class="form-control">
                    </div>

              </div>




              <div class="row mt-4">

                  <div class="col-lg-4">
                      <label for="">Stay Period</label><br>
                      <input type="text" name="stay-period" id="" value="<?php echo $row['stay_period'] ?>"  readonly class="form-control">
                    </div>



                    <div class="col-lg-4">
                      <label for="">Validity</label><br>
                      <input type="text" name="validity" id="" value="<?php echo $row['validity'] ?>"  readonly class="form-control">
                    </div>
                    

                    <div class="col-lg-4">
                      <label for="">Entry</label><br>
                      <input type="text" name="entry" id="" value="<?php echo $row['entries'] ?>"  readonly class="form-control">
                    </div>

                  </div>

                  <div class="row mt-4">

                      <div class="col-lg-6">
                        <label for="">Visa Fees</label><br>
                        <input type="text" name="visa-fees" placeholder="Enter Visa Fees" value="<?php echo $row['visa_fees'] ?>" id="" class="form-control">
                      </div>

                      <div class="col-lg-6">
                        <label for="">Service Fees</label><br>
                        <input type="text" name="service-fees" id="" placeholder="Enter Service Fees" value="<?php echo $row['service_fees'] ?>" class="form-control">
                      </div>
                      
                  </div>

                  <div class="row mt-4">

                      <div class="col-lg-6">
                        <label for="">Visa Documents</label><br>
                        <textarea name="documents" placeholder="Enter Visa Fees" value="" id="" class="form-control"><?php echo $row['documents'] ?></textarea>
                      </div>

                      <div class="col-lg-6">
                        <label for="">Business Visa Documents</label><br>
                        <textarea name="b_documents" id="" placeholder="Enter Service Fees" value="" class="form-control"><?php $row['b_document'] ?></textarea>
                      </div>
                      
                  </div>

                  <div class="row mt-4">
                      <div class="col-lg-12">
                        <input type="submit" name="update-visa" value="Update Visa Details" id="" class="btn btn-primary">
                      </div>
                  </div>
            </form>
            <script>
                        CKEDITOR.replace( 'b_documents' );
                        CKEDITOR.replace( 'documents' );
                </script>
              <?php }} ?>


<!-- ##########  Update Visa Details Code ########### -->
<?php
        if(isset($_POST['update-visa']))
        { 
          $type=$_GET['type'];
          $country=$_GET['country'];
          $visa_fees=$_POST['visa-fees'];
          $service_fees=$_POST['service-fees'];
          $documents=$_POST['documents'];
          $b_documents=$_POST['b_documents'];
          $sql="update visa set visa_fees='$visa_fees',service_fees='$service_fees',documents='$documents',b_document='$b_documents' where visa_type='$type' AND country='$country'";
          $query=mysqli_query($con,$sql);
          if($query)
          {
            echo '<script>alert("Details Updated Successfully");</script>';
            echo '<script>window.location.href ="managevisa.php"</script>';
            exit;
          }
          else{
            echo '<p class="alert alert-danger">'.mysqli_error($con).'</p>';
          }
        }
      ?>










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

