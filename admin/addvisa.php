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
        <div class="content-wrapper" style="background-color:white">
          <h3 class="text-center mb-5">Add Visa Country</h3>
            <form action="addvisa.php" method="POST">
              
              <div class="row">

                  <div class="col-lg-3">
                      <label for="">Select Country</label><br>
                      <select name="country" class="form-control" id="">
                        <?php
                          $sql="select * from country";
                          $query=mysqli_query($con,$sql);
                          while($row=mysqli_fetch_array($query))
                          {
                        ?>
                        <option value="<?php echo $row['name'] ?>"><?php echo $row['name'] ?></option>
                        <?php
                        }
                        ?>
                      </select>
                    </div>

                   

                    <div class="col-lg-3">
                      <label for="">Type Of Visa</label><br>
                      <select name="visa-type" class="form-control" id="">
                        <option value="15 Days Tourist Entry Visa">15 Days Tourist Entry Visa</option>
                        <option value="30 Days Tourist eVISA">30 Days Tourist eVISA</option>
                        <option value="30 Days Multiple Entry Sticker Visa">30 Days Multiple Entry Sticker Visa</option>
                        <option value="Business Visa">Business Visa</option>
                        <option value="Tourist E-Visa (Express)">Tourist E-Visa (Express)</option>
                        <option value="Tourist Visa (Stamp Visa)">Tourist Visa (Stamp Visa)</option>
                        <option value="Business Visa (Stamp Visa)">Business Visa (Stamp Visa)</option>
                      </select>
                    </div>
                    
                    <div class="col-lg-3">
                        <label for="">Visa Fees</label><br>
                        <input type="text" name="visa-fees" placeholder="Enter Visa Fees" id="" class="form-control">
                    </div>
                    
                    <div class="col-lg-3">
                        <label for="">Service Fees</label><br>
                        <input type="text" name="service-fees" id="" placeholder="Enter Service Fees" class="form-control">
                    </div>
                 

              </div>




              <div class="row mt-4">

                   <div class="col-lg-3">
                      <label for="">Processing Time</label><br>
                      <select name="processing-time" class="form-control" id="">
                        <option value="1-2">1-2 Days</option>
                        <option value="2-3">2-3 Days</option>
                        <option value="3-4">3-4 Days</option>
                        <option value="4-5">4-5 Days</option>
                        <option value="5 & more">5 & More</option>
                      </select>
                    </div>

                  <div class="col-lg-3">
                      <label for="">Stay Period</label><br>
                      <select name="stay-period" class="form-control" id="">
                        <option value="15">15 Days</option>
                        <option value="30">30 Days</option>
                        <option value="90">90 Days</option>
                        <option value="upto 2 years">Upto 2 years</option>
                      </select>
                    </div>



                    <div class="col-lg-3">
                      <label for="">Validity</label><br>
                      <select name="validity" class="form-control" id="">
                        <option value="3 months">3 Months</option>
                        <option value="upto 12 months">Upto 12 Months</option>
                      </select>
                    </div>
                    

                  
                    <div class="col-lg-3">
                      <label for="">Entry</label><br>
                      <select name="entry" class="form-control" id="">
                        <option value="single">Single</option>
                        <option value="multiple">Multiple</option>
                        <option value="single/multiple">Single/Multiple</option>
                      </select>
                    </div>

                  </div>

                  <div class="row mt-4">
                    
                      <div class="col-lg-6">
                        <label for="">Visa Documents</label><br>
                        <textarea name="documents" class="form-control" id="" cols="30" rows="8"></textarea>
                      </div>

                      <div class="col-lg-6 ">
                        <label for="">Business Visa Documents</label><br>
                        <textarea name="b-documents" class="form-control" id="" cols="30" rows="8"></textarea>
                      </div>
               
                  </div>

                  <div class="row mt-4">

                      <div class="col-lg-12">
                        <input type="submit" name="add-visa" value="Add Visa Details" id="" class="btn btn-primary">
                      </div>

                  </div>
            </form>
            <script>
                        CKEDITOR.replace( 'b-documents' );
                        CKEDITOR.replace( 'documents' );
                </script>

<!-- ############# Php Code To Insert Visa Data ########### -->
      <?php
        if(isset($_POST['add-visa']))
        {
          $country=$_POST['country'];
          $visa_type=$_POST['visa-type'];
          $processing_time=$_POST['processing-time'];
          $stay_period=$_POST['stay-period'];
          $validity=$_POST['validity'];
          $entry=$_POST['entry'];
          $visa_fees=$_POST['visa-fees'];
          $service_fees=$_POST['service-fees'];
          $document=$_POST['documents'];
          $b_document=$_POST['b-documents'];
          $sql="insert into visa (`country`,`visa_type`,`processing_time`,`stay_period`,`validity`,`entries`,`documents`,`b_document`,`visa_fees`,`service_fees`)
          values('$country','$visa_type','$processing_time','$stay_period','$validity','$entry','$document','$b_document','$visa_fees','$service_fees')";
          $query=mysqli_query($con,$sql);
          if($query)
          {
            echo '<p class="alert alert-success">Visa details added successfully</p>';
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
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="">Holidaysbunch</a>. All rights reserved.</span>
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

