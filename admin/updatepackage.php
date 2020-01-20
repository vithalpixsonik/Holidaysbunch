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
 <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
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
          
          <div class="row card" style="margin-left: 5%;margin-right: 5%"> 
           
            <form action="" method="POST" enctype="multipart/form-data">

            <!-- ######################################################-->
            <!-- #####################  Update Package ################-->
             <br> <h4 class="text-center">Update Package Details</h4><br>
              <div class="card m-2 p-3">
              <?php 
                if(isset($_GET['id']))
                {
                  $GLOBALS['id']=$_GET['id'];
                
               
                $sql="select * from package where id='$id'";
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query))
                {
                ?>
                <div class="container">

                  <div class="row">
                    <div class="col-lg-6">
                      <label for="name">Package Name</label>
                      <input type="text" name="name" class="form-control" value="<?php echo $row['name'] ?>" id="">
                    </div>
                

                    <div class="col-lg-6">
                        <label for="cost">Package Cost</label>
                        <input type="text" name="package-cost" value="<?php echo $row['price'] ?>" class="form-control" id="cost">
                    </div>
                  </div>


                  </div><br>

                  <div class="row">
                        <div class="col-lg-6">
                          <div class="form-group">
                            <label for="days">Days</label>
                            <input type="text" name="days" value="<?php echo $row['days'] ?>" class="form-control" id="days">
                          </div>
                    </div>

                    <div class="col-lg-6">
                          <div class="form-group">
                            <label for="nights">Nights</label>
                            <input type="text" name="nights" value="<?php echo $row['nights'] ?>" class="form-control" id="nights">
                          </div>
                    </div>


                </div>
                
                <div class="row">
                  <button value="Update Package" name="update-package" class="btn btn-primary m-3">Update Package</button>
                </div>

               

                <?php  
                }}
              ?></div><br>
            </form>


<!-- Update package Code php -->
<?php
  if(isset($_POST['update-package']))
  {
    $name=$_POST['name'];
    $days=$_POST['days'];
    $nights=$_POST['nights'];
    $cost=$_POST['package-cost'];  
    $sql = "UPDATE package SET name='$name',days='$days',nights='$nights',price='$cost'  WHERE id='$id'";
    $query=mysqli_query($con,$sql);
   
    if($query)
    {
      echo '<script>alert("Package Updated Successfully!")</script>';
      echo '<script>window.location.href = "updatepackage.php?id='.$id.'";</script>';
     
    }
    else{
      echo '<p class="alert alert-success m-5">Error '.mysqli_error($con).'</p>';
    }
  }
  
?>









<!-- ############################################################################## -->
<!-- ################################################ Manage Hotels  ######################################################## -->


<div class="content-wrapper bg-white">
<div class="row card"> 
            <h4 class="text-center p-4">Manage Hotels</h4>
            <table class="table table-bordered m-2">
                <thead>
                    <tr>
                    <th scope="col">Country</th>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Stars</th>
                    <th scope="col">Operation</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Fetch Country From Db -->
                    <?php
                        if(isset($_GET['id']))
                        {
                        $id=$_GET['id'];
                        $sql="select * from hotel where package_id='$id'";
                        $query=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($query))
                        {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $row['country']; ?></th>
                    <td><?php echo $row['hotel_name']; ?></td>
                    <td><?php echo $row['stars']; ?></td>
                    <td>
                        <?php  echo'  
                        <a href="updatehotels.php?id='.$row['package_id'].'&stars='.$row['stars'].'">
                        <button class="btn btn-info"><i class="fa fa-edit" aria-hidden="true"></i></button></a>
                        <a href="managehotels.php?id='.$row['package_id'].'&stars='.$row['stars'].'">
                        <button class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                        
                        ';?>
                        
                   
                    </tr>
                        <?php }} ?>
                </tbody>
            </table>

            
<?php
  if(isset($_GET['id']) && isset($_GET['stars']))
  {
    $id=$_GET['id'];
    $stars=$_GET['stars'];
    $sql1="delete from hotel where package_id='$id' AND stars='$stars'";
    $query1=mysqli_query($con,$sql1);
    echo '<p class="alert alert-success m-5">Hotel Deleted Successfully!</p>';
  }
                        

?>
          </div>

</div>



<!-- ############################################################################## -->
<!-- ################################################ Manage Itinerary  ######################################################## -->

<div class="content-wrapper bg-white">
<div class="row card"> 
            <h4 class="text-center p-4 mt-3">Update Itinerary</h4>
          
            <form action="" method="POST" enctype="multipart/form-data">
          
              <div class="m-2 p-3">
              <?php 
                if(isset($_GET['id']))
                {
                $id=$_GET['id'];
                $sql="select * from itinerary where package_id='$id'";
                $query=mysqli_query($con,$sql);
                $counter=2;
                while($row=mysqli_fetch_array($query))
                {
                 
                ?>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3">
                      <label for="name">Package Id</label>
                      <input type="text" name="id" class="form-control" value="<?php  echo $row['package_id']; ?>" id="">
                    </div>
                
                    <div class="col-lg-9">
                            <div class="form-group">
                              <label for="heading">Itinerary Heading</label>
                              <textarea name="content" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" value="" placeholder="Enter Itinerary Heading" id="heading" required><?php echo $row['heading']; ?></textarea>
                            </div>
                      </div>
                
                  </div>
                  </div>

                <div class="row">
                  <button value="Update Itinerary" name="update-itinerary" class="btn btn-primary m-3">Update Itinerary</button>
                </div>

                <?php  
                }}
              ?></div><br>
            </form>
            <script>
                        CKEDITOR.replace( 'content' );
                </script>

<!-- Update package Code php -->
<?php
  if(isset($_POST['update-itinerary']))
  {
    $id=$_GET['id'];
    $itinerary_heading=$_POST['content'];
    $sql = "update itinerary set heading='$itinerary_heading' WHERE package_id='$id'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
      echo '<script>alert("Itinerary Updated Successfully!")</script>';
      echo '<script>window.location.href = "updatepackage.php?id='.$id.'";</script>';
     
    }
    else{
      echo '<p class="alert alert-success m-5">Error '.mysqli_error($con).'</p>';
    }
  }
  
?>

          </div>
</div>













<!-- ############################################################################## -->
<!-- ################################################ Manage Inclusions  ######################################################## -->

<div class="content-wrapper bg-white">
<div class="row card"> 
            <h4 class="text-center p-4 mt-3">Update Inclusions & Exclusions</h4>
          
            <form action="" method="POST" enctype="multipart/form-data">
          
              <div class="m-2 p-3">
              <?php 
                if(isset($_GET['id']))
                {
                $GLOBALS['id']=$_GET['id'];
                $sql="select * from inclusions where package_id='$id'";
                $query=mysqli_query($con,$sql);
                $counter=2;
                while($row=mysqli_fetch_array($query))
                {
                ?>
                <div class="container">
                  <div class="row">
                    <div class="col-lg-3">
                      <label for="name">Package Id</label>
                      <input type="text" name="id" class="form-control" value="<?php echo $row['package_id'] ?>" id="">
                    </div>
                
                    <div class="col-lg-9">
                            <div class="form-group">
                              <label for="heading">Inclusions & Exclusions</label>
                              <textarea name="inclusions" class="form-control" style="border: 1px solid #b9b9b9;border-radius: 0" value="" placeholder="Enter Itinerary Heading" id="heading" required><?php echo $row['title'] ?></textarea>
                            </div>
                      </div>
                
                  </div>
                  </div>

                <div class="row">
                  <button value="Update Inclusions Exclusions" name="update-inclusions" class="btn btn-primary m-3">Update Itinerary</button>
                </div>

                <?php  
                }}
              ?></div><br>
            </form>
            <script>
              CKEDITOR.replace( 'inclusions' );
            </script>

<!-- Update package Code php -->
<?php
  if(isset($_POST['update-inclusions']))
  {
    $id=$_GET['id'];
    $incl_heading=$_POST['inclusions'];
    $sql = "update inclusions set title='$incl_heading' WHERE package_id='$id'";
    $query=mysqli_query($con,$sql);
    if($query)
    {
      echo '<script>alert("Inclusions/Exclusions Updated Successfully!")</script>';
      echo '<script>window.location.href = "updatepackage.php?id='.$id.'";</script>';
    }
    else{
      echo '<p class="alert alert-success m-5">Error '.mysqli_error($con).'</p>';
    }
  }
  
?>

          </div>
</div>
















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

