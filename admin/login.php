<?php
include "functions/connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Holiday Bunch Dashboard</title>
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
  <div id="main">
    <div>
      <h5 style="text-align:center;margin-top:5%;font-size:25px;font-weight:bold;color:#323232">Holiday Bunch Login</h5>
      <div id="form" class="card mt-4 bg-dark text-white" style="width:30%;border:1px solid #4D83FF;position:absolute;left:50%;transform:translateX(-50%);"> 
        <form method="POST" action="login.php" style="padding:12% 10%">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text"  class="form-control" name="username" style="border:1px solid #757575" id="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" style="border:1px solid #757575" id="password">
            </div>
            <br>
            <input type="submit" name="login" class="btn btn-primary form-control" value="Login">
          </form>
      </div>
    </div>
  </div>
  

<!-- Login Php script -->
                <?php
                    include "functions/connection.php";
                    if (isset($_POST['login'])){
                      $username = stripslashes($_POST['username']);
                      $username = mysqli_real_escape_string($con,$username);
                      $password = stripslashes($_POST['password']);
                      $password = mysqli_real_escape_string($con,$password);
                      $query = "SELECT * FROM `admin` WHERE username='$username' and password='".md5($password)."'";
                      $result = mysqli_query($con,$query) or die(mysql_error());
                      $rows = mysqli_num_rows($result);
                        if($rows>0){
                          $_SESSION['username']=$username;
                        echo "done";
                        echo "<script>window.open('index.php','_self')</script>";
                        }
                        else{
                          echo "<p style='color:red;margin-left:10%;'>Invalid Username Or Password. </p>";								
                          
                        }
                      }
                      else{
                        if(isset($_GET['msg'])){
                        $msg=$_GET['msg'];
                        if($msg=='login')
                        {
                          echo '<br><p style="margin-left:10%;color:orangered">Please Login First</p>';
                        }	
                      }
                      }
							?>



</body>

</html>

