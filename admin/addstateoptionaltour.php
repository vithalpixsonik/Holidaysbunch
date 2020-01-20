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
          
          

 <!--################## Additional Tour ##################-->

          <div id="Additional" class="tabcontent" >
            <h3 class="text-center">Add Optional Tour</h3>
            <form action="addstateoptionaltour.php" method="POST" enctype="multipart/form-data"  class="mt-4 mb-5">
                  <div class="row">
                    <div class="col-lg-6">
                          <div class="form-group">
                            <label for="id">Destination</label>
                            <select name="country"  style="width:100%;height:45px;border:1px solid #ececed;" id="type">
                              <?php
                                $sql="select * from country where destination_type='domestic'";
                                $query=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($query))
                                {
                                  echo '
                                  <option value="'.$row['name'].'">'.$row['name'].'</option>
                                  ';
                                }
                              ?>
                              
                            </select>
                          </div>
                    </div>

                    <div class="col-lg-6">
                          <div class="form-group">
                            <label for="type">Optional Tour Type</label>
                            <select name="type" style="width:100%;height:45px;border:1px solid #ececed;" id="type">
                              <option value="sic">SIC</option>
                              <option value="pvt">PVT</option>
                            </select>
                          </div>
                    </div>

                  </div> 


                  <div class="row">
                    <div class="col-lg-4">
                          <div class="form-group">
                            <label for="double">Sightseeing Heading</label>
                            <input type="text" name="tour-heading" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Sightseeing Heading" id="double" required>
                          </div>
                    </div>

                    <div class="col-lg-4">
                          <div class="form-group">
                            <label for="single">Adult Price</label>
                            <input type="text" name="adult-price" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Adult Price" id="single" required>
                          </div>
                    </div>

                    <div class="col-lg-4">
                          <div class="form-group">
                            <label for="single">Child Price</label>
                            <input type="text" name="child-price" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Child Price" id="single" required>
                          </div>
                    </div>

                  </div> 

                  <div class="row">
                    <input type="submit" name="add-optional-tour" value="Add Optional Tour" class="btn btn-primary ml-2">
                  </div>

                </form>  
                <?php
                  if(isset($_POST['add-optional-tour']))
                  { 
                    $GLOBALS['country']=$_POST['country'];
                    $type=$_POST['type'];
                    $tour_heading=$_POST['tour-heading'];
                    $adult_price=$_POST['adult-price'];
                    $child_price=$_POST['child-price'];
                    $sql="insert into optional_tour(country,type,heading,adult_price,child_price)
                    values('$country','$type','$tour_heading','$adult_price','$child_price')";
                    $query=mysqli_query($con,$sql);
                    if($query)
                        {
                          echo '<p class="alert alert-success">Success</p>';
                        }
                        else{
                          echo '<p class="alert alert-danger">'.mysqli_error($con).'</p>';
                        }
                      
                        
                  }

                  ?>
                  <div class="container">
                      <div class="row">
                        <div class="col-lg-6">
                          <h5 class="ml-5">Sic Basis</h5>
                            <?php
                            if(isset($country))
                            {
                            $sql1="select * from optional_tour where country='$country' and type='sic'";
                            $query1=mysqli_query($con,$sql1);
                            while($row=mysqli_fetch_array($query1))
                            {
                              echo '        
                                    
                                    <p class="ml-5">'.$row['heading'].'</p>
                              
                              ';
                            }
                          }
                          ?>
                        </div>


                        <div class="col-lg-6">
                          <h5 class="ml-5">PVT Basis</h5>
                            <?php
                            if(isset($country))
                            {
                            $sql1="select * from optional_tour where country='$country' and type='pvt'";
                            $query1=mysqli_query($con,$sql1);
                            while($row=mysqli_fetch_array($query1))
                            {
                              echo '        
                                    
                                    <p class="ml-5">'.$row['heading'].'</p>
                              
                              ';
                            }
                          }
                          ?>
                        </div>


                    </div></div>
                  </div>
          
          
          
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 <a href="" >HolidaysBunch</a>. All rights reserved.</span>
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

