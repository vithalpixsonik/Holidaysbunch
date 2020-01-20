<?php
include "functions/connection.php"; 
session_start();
echo $_SESSION['username'];
if(!isset($_SESSION['username']))
{
  header('Location: login.php');
} ?>
<!DOCTYPE html>
<html lang="en">
<a href="functions/connection.php"></a>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Holidaysbunch Admin Dashboard</title>
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
 <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <style>
 .tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}
.clicked{
  background-color:black;
  color:white !important;
}
.unclicked{
  background-color:#f1f1f1;
  color:black !important;
}
/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
.tablink {
  
  color: black;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 25%;
}


/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: 50px 20px;
  height: 100%;
}
 </style>
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
      <div class="main-panel" style="background-color:white !important">
        <div class="content-wrapper" style="overflow-y:scroll;background-color:white !important">
            <h3 class="text-center mb-4">Make Tour Package</h3>

         

          <!-- ####################################################### -->
          <!-- ################ Add Package Details ################## -->
    

<button class="tablink" onclick="openPage('Package', this)" id="defaultOpen">Add Package</button>
<button class="tablink" onclick="openPage('Hotel', this)" id="hotel">Hotel</button>
<button class="tablink" onclick="openPage('Itinerary', this)" id="itinerary">Itinerary</button>
<button class="tablink" onclick="openPage('Incl', this)" id="inclusion">Inclusions & Exclusions</button>




          <div id="Package" class="tabcontent">
          <div>
          
          <form action="addpackage.php" method="POST" enctype="multipart/form-data"  class="mt-4 mb-5">
            <div class="row">
              <div class="col-lg-2">
                    <div class="form-group">
                      <label for="id">Package Id</label>
                      <input type="text" name="id" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Package Id" id="id" required>
                    </div>
              </div>

              <div class="col-lg-5">
                    <div class="form-group">
                      <label for="name">Package Name</label>
                      <input type="text" name="name" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Package Name" id="id" required>
                    </div>
              </div>

              <div class="col-lg-5">
                    <div class="form-group">
                      <label for="">Category</label><br>
                      <input type="checkbox" name="category[]" value="adventure" id=""> Adventure &nbsp;&nbsp;
                      <input type="checkbox" name="category[]" value="honeymoon" id=""> Honeymoon &nbsp;&nbsp;
                      <input type="checkbox" name="category[]" value="family" id=""> Family &nbsp;&nbsp;
                      <input type="checkbox" name="category[]" value="solo" id=""> Solo
                    </div>
              </div>

            </div> 




            


            <div class="row">
              <div class="col-lg-6">
                    <div class="form-group">
                      <label for="country">Country</label><br>
                      <select name="country"  style="width:100%;height:45px;border:1px solid #ececed;" id="">
                          <?php
                            $sql="select * from country where destination_type='international'";
                            $query=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($query))
                            {
                              echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
                            }
                              
                          ?>
                        
                      </select>
                    </div>
              </div>

      
              <div class="col-lg-6">
                    <div class="form-group">
                      <label for="package-image">Package Image (800px X 400px)</label>
                      <input type="file" name="featured_image"  style="border: 1px solid #b9b9b9;border-radius: 0">
                    </div>
              </div>

            </div> 


            <div class="row">
            

              <div class="col-lg-3">
                    <div class="form-group">
                      <label for="adult-cost">Days</label>
                      <select name="days" style="width:100%;height:45px;border:1px solid #ececed;"  id="">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                      </select>
                    </div>
              </div>

              <div class="col-lg-3">
                    <div class="form-group">
                      <label for="adult-cost">Nights</label>
                      <select name="nights" style="width:100%;height:45px;border:1px solid #ececed;"  id="">
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          
                      </select>
                    </div>
              </div>

              <div class="col-lg-6">
                    <div class="form-group">
                      <label for="package-cost">Package Cost</label>
                      <input type="text" name="package-cost" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Package Cost" id="id" required>
                    </div>
              </div>

            </div> 


            <div class="row">
              <input type="submit" name="add-package" value="Add Package" class="btn btn-primary ml-2">
            </div>

          </form>
          <?php
            if(isset($_POST['add-package']))
            {
              $id=$_POST['id'];
              $name=$_POST['name'];
              $country=$_POST['country'];
              $featured_image = $_FILES['featured_image']['name'];
              $target_dir1 = "uploads/package/";
              $target_file = $target_dir1 . basename($_FILES["featured_image"]["name"]);
             //folder where images will be uploaded
             $folder = 'uploads/featured/';
              $days=$_POST['days'];
              $nights=$_POST['nights'];
              $cost=$_POST['package-cost'];
              $a=$_POST['category'];
              $b=implode(",",$a); 
              $sql="insert into package (`id`,`name`,`category`,`country`,`image`,`days`,`nights`,`price`)
              values('$id','$name','$b','$country','$featured_image','$days','$nights','$cost')";
              $query=mysqli_query($con,$sql);
              move_uploaded_file($_FILES['featured_image']['tmp_name'],$target_dir1.$featured_image);
            
              if($query)
              {
                echo '<p class="alert alert-success">Package Added Successfully!</p>';
              }
              else{
                echo '<p class="alert alert-danger">'.mysqli_error($con).'</p>';
              }
              
            }
          ?>
      </div>
          </div>

          <!--#############################  Add Hotels Details ############################## -->





          <!--#####################################################-->
         

          <div id="Hotel" class="tabcontent">
            <form action="addpackage.php" method="POST" enctype="multipart/form-data"  class="mt-4 mb-5">
                <div class="row">

                  <div class="col-lg-2">
                        <div class="form-group">
                          <label for="id">Package Id</label>
                          <input type="text" name="id" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Package Id" id="id" required>
                        </div>
                  </div>
                  <div class="col-lg-2">
                        <div class="form-group">
                          <label for="id">Country Name</label>
                          
                          <select name="country" style="width:100%;height:45px;border:1px solid #ececed;" id="type">
                              <?php
                                $sql="select * from country where destination_type='international'";
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

                  <div class="col-lg-5">
                        <div class="form-group">
                          <label for="id">Hotel Name</label>
                          <input type="text" name="name" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Hotel Name" id="id" required>
                        </div>
                  </div>

                  <div class="col-lg-3">
                        <div class="form-group">
                          <label for="stars">Hotel Stars</label>
                          <select name="stars" style="width:100%;height:45px;border:1px solid #ececed;" id="stars">
                            <option value="3">3 Star</option>
                            <option value="4">4 Star</option>
                            <option value="5">5 Star</option>
                          </select>
                        </div>
                  </div>

                </div> 


                <div class="row">
                  <div class="col-lg-6">
                        <div class="form-group">
                          <label for="double">Double / Twin / tripple sharing cost</label>
                          <input type="text" name="double" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Double / Twin / tripple sharing cost" id="double" required>
                        </div>
                  </div>

                  <div class="col-lg-6">
                        <div class="form-group">
                          <label for="single">Single Occupancy Cost</label>
                          <input type="text" name="single-occupancy" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Single Occupancy Cost" id="single" required>
                        </div>
                  </div>

                </div> 


                <div class="row">
                  <div class="col-lg-6">
                          <div class="form-group">
                            <label for="childb">Child With Bed</label>
                            <input type="text" name="child-bed" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Child With Bed cost" id="childb" required>
                          </div>
                    </div>

                    <div class="col-lg-6">
                          <div class="form-group">
                            <label for="childw">Child Without Bed</label>
                            <input type="text" name="child-without-bed" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Child Without Bed" id="childw" required>
                          </div>
                    </div>
                </div> 


                <div class="row">
                  <input type="submit" name="add-hotel" value="Add Hotel" class="btn btn-primary ml-2">
                </div>

              </form>
          
          <?php
            if(isset($_POST['add-hotel']))
            {
            $id=$_POST['id'];
            $country=$_POST['country'];
            $name=$_POST['name'];
            $stars=$_POST['stars'];
            $double=$_POST['double'];
            $single_occupancy=$_POST['single-occupancy'];
            $child_bed=$_POST['child-bed'];
            $child_without_bed=$_POST['child-without-bed'];
              $sql="insert into hotel (`package_id`,`country`,`hotel_name`,`stars`,`double_tripple_sharing_cost`,`single_occupancy_cost`
              ,`child_bed_cost`,`child_without_bed_cost`)
              values('$id','$country','$name','$stars','$double','$single_occupancy','$child_bed','$child_without_bed')";
              $query=mysqli_query($con,$sql);
              if($query)
                  {
                    echo '<p class="alert alert-success">Hotel Added Successfully!</p>';
                  }
                  else{
                    echo '<p class="alert alert-danger">'.mysqli_error($con).'</p>';
                  }
                  
                  
            }
          ?>
          

          </div>






















            <!--#####################################################-->
          <!--################## itinerary ##################-->

          <div id="Itinerary" class="tabcontent">
            <form action="addpackage.php" method="POST" enctype="multipart/form-data"  class="mt-4 mb-5">
                    <div class="row">
                      <div class="col-lg-4">
                            <div class="form-group">
                              <label for="id">Package Id</label>
                              <input type="text" name="id" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Package Id" id="id" required>
                            </div>
                      </div>

                      <div class="col-lg-8">
                            <div class="form-group">
                              <label for="heading">Itinerary Heading</label>
                              <textarea name="content" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Itinerary Heading" id="heading" required></textarea>
                            </div>
                      </div>

                    </div> 

                    <div class="row">
                      <input type="submit" name="add-itinerary" value="Add Itinerary" class="btn btn-primary ml-2">
                    </div>

                  </form>  
                  <script>
                        CKEDITOR.replace( 'content' );
                </script>
                <?php
                  if(isset($_POST['add-itinerary']))
                  {
                    $id=$_POST['id'];
                    $heading=$_POST['content'];
                    
                        $sql="insert into itinerary(package_id,heading)
                        values('$id','$heading')";
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

          </div>


          <!--#####################################################-->
          <!--################## Inclusion & Exclusion ##################-->

          <div id="Incl" class="tabcontent">
          <form action="addpackage.php" method="POST" enctype="multipart/form-data"  class="mt-4 mb-5">
                    <div class="row">
                      <div class="col-lg-4">
                            <div class="form-group">
                              <label for="id">Package Id</label>
                              <input type="text" name="id" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Enter Package Id" id="id" required>
                            </div>
                      </div>


                      <div class="col-lg-8">
                            <div class="form-group">
                              <label for="excl">Enter Inclusions & Exclusions</label>
                              <textarea name="incl" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" placeholder="Inclusions/Exclusions Heading" id="excl" required></textarea>
                            </div>
                      </div>

                    </div> 

                    <div class="row">
                      <input type="submit" name="add-inc" value="Add inclusions/Exclusions" class="btn btn-primary ml-2">
                    </div>

                  </form>  
                  <script>
                        CKEDITOR.replace( 'incl' );
                </script>
                <?php
                  if(isset($_POST['add-inc']))
                  {
                   $id=$_POST['id'];
                    $heading=$_POST['incl'];
                   $sql="insert into inclusions(package_id,title)
                    values('$id','$heading')";
                    $query=mysqli_query($con,$sql);
                    if($query)
                      {
                        echo '<p class="alert alert-success">Data Added Successfully</p>';
                      }
                    else{
                        echo '<p class="alert alert-danger">Entry Already Exist.</p>';
                        } 
                    }   
                  
                ?>
          </div>







<script>
  function openPage(pageName,elmnt) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;
  }

  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
</script>

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
</script>

<script>
  $(document).ready(function(){
    $("#defaultOpen").addClass('clicked');
    $("#defaultOpen").click(function()
    {
      $("#defaultOpen").addClass('clicked');
      $("#hotel").removeClass('clicked');
      $("#itinerary").removeClass('clicked');
      $("#inclusion").removeClass('clicked');
    });


    $("#hotel").click(function()
    {
      $("#defaultOpen").removeClass('clicked');
      $("#hotel").addClass('clicked');
      $("#itinerary").removeClass('clicked');
      $("#inclusion").removeClass('clicked');
    });


    $("#itinerary").click(function()
    {
      $("#defaultOpen").removeClass('clicked');
      $("#hotel").removeClass('clicked');
      $("#itinerary").addClass('clicked');
      $("#inclusion").removeClass('clicked');
    });


    $("#inclusion").click(function()
    {
      $("#defaultOpen").removeClass('clicked');
      $("#hotel").removeClass('clicked');
      $("#itinerary").removeClass('clicked');
      $("#inclusion").addClass('clicked');
    });
    
  });
</script>


        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.php -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2020 Holidaysbunch. All rights reserved.</span>
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

