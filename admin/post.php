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
          <li class="nav-item dropdown mr-4">
            <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-success">
                    <i class="mdi mdi-information mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-warning">
                    <i class="mdi mdi-settings mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item">
                <div class="item-thumbnail">
                  <div class="item-icon bg-info">
                    <i class="mdi mdi-account-box mx-0"></i>
                  </div>
                </div>
                <div class="item-content">
                  <h6 class="font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
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
          <div class="row card">
           
          <ul id="clothing-nav" class="nav nav-tabs" role="tablist">
	
  <li class="nav-item">
  <a class="nav-link active" href="#add-post" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Add Post</a>
  </li>
  
  <li class="nav-item">
  <a class="nav-link" href="#view-post" role="tab" id="hats-tab" data-toggle="tab" aria-controls="hats">View Post</a>
  </li>
  </ul>
  
  <!-- Content Panel -->
  <div id="clothing-nav-content" class="tab-content">
  <!--############ Add Post ##########-->
  <div role="tabpanel" class="tab-pane fade show active" id="add-post" aria-labelledby="home-tab">
      <form action="post.php" method="POST"  style="width:50%;" class="pl-3 pt-3" enctype="multipart/form-data">
        <div class="form-group">
          <label for="title">Blog Title : </label>
          <input type="text" name="title" style="border:1px solid #757575" class="form-control" id="title">
        </div>

       
      
        <div class="form-group">
          <label for="title">Author Name :</label>
          <input type="text" name="author" style="border:1px solid #757575" class="form-control" id="title">
        </div>
        
      
        <div class="form-group">
          <label for="title">Post:</label>
          <br>
          <textarea name="text" style="border:1px solid #757575" id="" cols="30" id="title" rows="8" class="form-control"></textarea>
        </div>

      <input type="submit" name="upload" class="btn btn-default" value="Post Update" style="background-color:#7859df;color:white">
  <br>
    </form><br>

    <?php
      if(isset($_POST['upload']))
      {
      $title=$_POST['title'];
      $author=$_POST['author'];
      $text=$_POST['text'];
      $image = $_FILES['file']['name'];
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["file"]["name"]);
      $query="select * from blog";
      $run1=mysqli_query($con,$query);
      $rowcount=0;
      while($row1=mysqli_fetch_array($run1))
      {
        if(($row1['heading']==$title) or ($row1['author']==$author)){
        $rowcount=mysqli_num_rows($run1);
        }
      }
      if($rowcount==0)
        {

          $sql="insert into blog(`heading`,`author`,`description`) values('$title','$author','$text')";
          $run=mysqli_query($con,$sql);
          move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$image);
          if($run)
          {
            echo "";
          }
          else{
            echo "Error ".mysqli_error($con);
          }


        }
        else{
          echo "record already exist";
        }
     
      }
    ?>
  </div>
  
  <!-- ####### View post #######-->
  <div role="tabpanel" class="tab-pane fade" id="view-post" aria-labelledby="hats-tab">
     
      <div class="card">
      <table class="table table-bordered" style="border:1px solid white !important;">
    <thead>
      <tr>
        <th>Heading</th>
        <th>Author</th>
        <th>Description</th>
        <th>Operation</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql="select * from blog";
      $run=mysqli_query($con,$sql);
      
      while($row=mysqli_fetch_array($run))
      {$id=$row['id'];
        echo '
        <tr>
        <td>'.$row['heading'].'</td>
        <td>'.$row['author'].'</td>
        <td>'.$row['description'].'</td>
        <td><a href="functions/deleteblog.php?id='.$id.'"><button class="btn bg-dark text-white" ><i class="fa fa-trash"></i></button></a></td>
      </tr>
        ';
      
      ?>
    </tbody>
  
      <?php } ?>
      </table>
      </div>
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

