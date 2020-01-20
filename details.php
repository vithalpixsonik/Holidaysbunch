<?php
include "admin/functions/connection.php"; 
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Holiday Bunch</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/logo1.png">
    <!-- Place favicon.ico in the root directory -->
    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
    #close-btn{
        
    }
    /* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: #009DFF;
  top: 0;
  bottom: 0;
  left: 10%;
  margin-left: -3px;
}

/* Container around content */
.containers {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.containers::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: #fff;
  border: 4px solid #009dff;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the containers to the left */
.left {
  left: 0;
}

/* Place the containers to the right */
.right {
  left: 10%;
}

/* Add arrows to the left containers (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right containers (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containerss on the right side */
.right::after {
  left: -13px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containerss */
  .containers {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .containers::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containerss behave like the left ones */
  .right {
  left: 0%;
  }
}
.tablink {
  background-color: #202020;
  color: white;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  margin:1%;
  width: 20%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: black;
  display: none;
  padding: 100px 20px;
  height: 100%;
}
#hotel-content1{
    display:none;
}
#hotel-content2{
    display:none;
}
#hotel-content3{
    display:none;
}
#hotel-content4{
    display:none;
}
#hotel-content5{
    display:none;
}
.cl{
    border:2px solid #DCDCDC;
}

@media (min-width: 320px) and (max-width: 480px) {
    .tablink {
  background-color: #202020;
  color: white;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  border-radius:20px;
  margin:1%;
  width: 40%;
}
}
#final-calculation{
    position:absolute;
    top:25%;
    width:70%;
    background-color:white;
    color:black;
    padding:2%;
    right:15%;
    border-radius:30px;
    display:block;
   
    box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}
#close-popup{
    display:none;
}
/*  Large Screen Monitor  */ 
@media (min-width: 1500px) {
    #final-calculation{
    position:absolute;
    top:55%;
    width:60%;
    background-color:white;
    color:black;
    padding:2%;
    right:20%;
    border-radius:30px;
    display:block;
    
}
#tx{
      font-size:16px !inportant;
  }
#close-popup{
    display:none;
}


}

/* Mobile Screen */

@media (min-width: 320px) and (max-width: 480px) {
    #final-calculation{
    position:absolute;
    top:15%;
    width:90%;
    background-color:white;
    color:black;
    padding:2%;
    right:5%;
    border-radius:30px;
    display:block;
    font-size:18px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

  #tx{
      font-size:15px
  }
  #optional{
    margin-top:20%
  }
}

p{
    font-weight:500
}


    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#">Special Tours <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="packages.php?type=Honeymoon">Honeymoon</a></li>
                                                <li><a href="packages.php?type=Family">Family</a></li>
                                                <li><a href="packages.php?type=Adventure">Adventure</a></li>
                                                <li><a href="packages.php?type=Solo">Solo</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Destinations <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="destination.php?type=domestic">Domestic</a></li>
                                                <li><a href="destination.php?type=international">International</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="visa.php">Visa</a></li>
                                        <li id="customize-link"><a href="customize.php">Customize Package</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.php">
                                    <img src="img/logo1.png" style="width:150px" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                            <div class="book_room">
                                <div id="navigation" class="book_btn d-none d-lg-block mr-5">
                                    <a href="customize.php">Customize Package</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg_1">
        
    </div>
   
<br><br>
<!-- Package Details -->
<div class="container mt-5 mb-5">
<div class="row  justify-content-center">
    <?php
        if(isset($_GET['id']))
        {
            $id=$_GET['id'];
            $sql="select * from package where id='$id'";
            $query=mysqli_query($con,$sql);
            while($row=mysqli_fetch_array($query))
            {
                echo '
                <div class="col-lg-6">
                    <img src="admin/uploads/package/'.$row['image'].'" class="justify-content-center" style="width:100%" alt="">
                </div>
                
                <div class="col-lg-6">
                    <br>
                    <span style="font-size:14px;font-weight:500;">Tour Code: '.$row['id'].'</span>
                    <h2>'.$row['name'].'</h2>
                    <p style="font-weight:500">Country : '.$row['country'].'</p>
                    <h2 style="color:#bc895a">₹ '.$row['price'].' </h2>
                    <span style="font-size:18px;">'.$row['days'].' Days &</span><span style="font-size:18px;"> '.$row['nights'].' Nights</span>
                    <br><br>  
                    <span><i class="fa fa-hotel" style="color:#bc895a" aria-hidden="true"></i></span>
                    <span class="ml-3"><i class="fa fa-car" style="color:#bc895a" aria-hidden="true"></i></span>
                    <span class="ml-3"><i class="fa fa-cutlery" style="color:#bc895a" aria-hidden="true"></i></span>
                    <span class="ml-3"><i class="fa fa-camera" style="color:#bc895a" aria-hidden="true"></i></span>
                </div>
                ';
          
    ?>
    <?php   }} ?>
</div>
<!-- end package details -->





<!-- Optional Tour Details -->
    <div id="optional" class="mt-5">
    <h2 class="text-center pt-5 pb-4">Package Details</h2>
 <div class="text-center">       
<button class="tablink col-lg-3 col-sm-6 col-xs-6" onclick="openPage('Home', this)" id="defaultOpen">Calculate Price</button>
<button class="tablink col-lg-3 col-sm-6 col-xs-6" onclick="openPage('News', this)" >Itinerary</button>
<button class="tablink col-lg-3 col-sm-6 col-xs-6" onclick="openPage('incl', this)">Inclusions & Exclusions</button>
<button class="tablink col-lg-3 col-sm-6 col-xs-6" onclick="openPage('About', this)">Terms & Conditions</button>
</div>

<!--################################ Calculate Price ################################-->
<div id="Home" class="tabcontent">
<!-- Hotels Details -->
<div id="hotel-details">
        <h2 class="pb-4 text-center">Hotels Details</h2>
        <form action="" method="POST">
            <p>Choose Your Hotel From Below Options</p>
        <div class="row">
            
            <div class="col-lg-12">
                
                <?php
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $sql="select * from hotel where package_id='$id' and stars=3";
                    $query=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($query))
                    {
                        echo '<div class="card text-dark">
                        
                            <h4 class="card-header p-3" style="background-color:#202020;color:white">
                            <input type="radio" style="color:red" name="stars" value="3" id="" checked>
                            <span style="margin-left:2%;margin-right:2%;color:#e5bf8f;text-transform: uppercase;"><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span> '.$row['hotel_name'].'<span style="color:white;float:right;margin-right:3%"><i class="fa fa-plus" id="plus-icon" aria-hidden="true"></i></span></h4>
                            <div id="hotel-content1">
                            <h6 class="p-2">- Double / Tripple Sharing <span style="position:absolute;right:4%">₹ '.$row['double_tripple_sharing_cost'].' </span></h6>
                            <h6 class="p-2">- Single occupancy  <span style="position:absolute;right:4%">₹ '.$row['single_occupancy_cost'].'</span></h6>
                            <h6 class="p-2">- Child With Bed Cost  <span style="position:absolute;right:4%">₹ '.$row['child_bed_cost'].'</span></h6>
                            <h6 class="p-2">- Child Without Bed Cost <span style="position:absolute;right:4%">₹ '.$row['child_without_bed_cost'].'</span></h6>
                            </div></div>
                        ';
                    }
                }
                ?>   
            </div>
            <script>
                $(document).ready(function(){
                    $("#plus-icon").click(function(){
                        $("#hotel-content1").slideToggle();
                        $("#plus-icon").toggleClass("fa fa-plus fa fa-minus");
                    });
                    
                });
            </script>

            

 <div class="col-lg-12 mt-2">
                
                <?php
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $sql="select * from hotel where package_id='$id' and stars=4";
                    $query=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($query))
                    {
                        echo '<div class="card text-dark">
                        
                            <h4 class="card-header p-3" style="background-color:#202020;color:white">
                            <input type="radio" style="color:red" name="stars" value="4" id="">
                            <span style="margin-left:2%;margin-right:2%;color:#e5bf8f;text-transform: uppercase;"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span> '.$row['hotel_name'].'<span style="color:white;float:right;margin-right:3%"><i class="fa fa-plus" id="plus-icon1" aria-hidden="true"></i></span></h4>
                            <div id="hotel-content2">
                            <h6 class="p-2">- Double / Tripple Sharing <span style="position:absolute;right:4%">₹ '.$row['double_tripple_sharing_cost'].' </span></h6>
                            <h6 class="p-2">- Single occupancy  <span style="position:absolute;right:4%">₹ '.$row['single_occupancy_cost'].'</span></h6>
                            <h6 class="p-2">- Child With Bed Cost  <span style="position:absolute;right:4%">₹ '.$row['child_bed_cost'].'</span></h6>
                            <h6 class="p-2">- Child Without Bed Cost <span style="position:absolute;right:4%">₹ '.$row['child_without_bed_cost'].'</span></h6>
                            </div></div>
                        ';
                    }
                }
                ?>   
            </div>
            <script>
                $(document).ready(function(){
                    $("#plus-icon1").click(function(){
                        $("#hotel-content2").slideToggle();
                        $("#plus-icon1").toggleClass("fa fa-plus fa fa-minus");
                    });
                    
                });
            </script>







<div class="col-lg-12 mt-2">
                
                <?php
                if(isset($_GET['id']))
                {
                    $id=$_GET['id'];
                    $sql="select * from hotel where package_id='$id' and stars=5";
                    $query=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($query))
                    {
                        echo '<div class="card text-dark">
                        
                            <h4 class="card-header p-3" style="background-color:#202020;color:white">
                            <input type="radio" style="color:red" name="stars" value="5" id="">
                            <span style="margin-left:2%;margin-right:2%;color:#e5bf8f;text-transform: uppercase;"><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i></span> '.$row['hotel_name'].'<span style="color:white;float:right;margin-right:3%"><i class="fa fa-plus" id="plus-icon2" aria-hidden="true"></i></span></h4>
                            <div id="hotel-content3">
                            <h6 class="p-2">- Double / Tripple Sharing <span style="position:absolute;right:4%">₹ '.$row['double_tripple_sharing_cost'].' </span></h6>
                            <h6 class="p-2">- Single occupancy  <span style="position:absolute;right:4%">₹ '.$row['single_occupancy_cost'].'</span></h6>
                            <h6 class="p-2">- Child With Bed Cost  <span style="position:absolute;right:4%">₹ '.$row['child_bed_cost'].'</span></h6>
                            <h6 class="p-2">- Child Without Bed Cost <span style="position:absolute;right:4%">₹ '.$row['child_without_bed_cost'].'</span></h6>
                            </div></div>
                        ';
                    }
                }
                ?>   
            </div>
            <script>
                $(document).ready(function(){
                    $("#plus-icon2").click(function(){
                        $("#hotel-content3").slideToggle();
                        $("#plus-icon2").toggleClass("fa fa-plus fa fa-minus");
                    });
                    
                });
            </script>




<!-- ################################# Optional Tour ########################### -->


            <div class="col-lg-12">
                <?php
                    $country=$_GET['country'];
                    $sql5="select * from optional_tour where country='$country'";
                    $query5=mysqli_query($con,$sql5);
                    $rowcount=mysqli_num_rows($query5);
                    if($rowcount>0)
                    {

                    
                ?>
                    <h2 class="mt-5 text-center mb-5">Optional Tour</h2>
                    <table class="table table-bordered" id="hotel-content4">
                        <thead>
                            <h4 class="mt-3 p-3" style="background-color:#202020;color:white">On SIC Basis <span style="color:white;float:right;margin-right:3%"><i class="fa fa-plus" id="plus-icon3" aria-hidden="true"></i></span></h4>
                        <tr>
                            <th> </th>
                            <th>Sightseeing</th>
                            <th>Adult Price</th>
                            <th>Child Price</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        $country=$_GET['country'];
                        $sql="select * from optional_tour where type='sic' and country='$country'";
                        $query=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($query))
                        {
                            echo '
                            <div >
                            <tr>
                                <td><input type="checkbox" name="additional-sic[]" value="'.$row['heading'].'" id=""></td>
                                <td>'.$row['heading'].'</td>
                                <td>₹ '.$row['adult_price'].'</td>
                                <td>₹ '.$row['child_price'].'</td>
                            </tr>';
                        }}
                        
                    ?>
                     </tbody>
                    </table>
                    <script>
                $(document).ready(function(){
                    $("#plus-icon3").click(function(){
                        $("#hotel-content4").slideToggle();
                        $("#plus-icon3").toggleClass("fa fa-plus fa fa-minus");
                    });
                    
                });
            </script>







                    <table class="table table-bordered" id="hotel-content5">
                        <thead>
                            <h4 class="mt-3 p-3" style="background-color:#202020;color:white">On PVT Basis <span style="color:white;float:right;margin-right:3%"><i class="fa fa-plus" id="plus-icon4" aria-hidden="true"></i></span></h4>
                        <tr>
                            <th> </th>
                            <th>Sightseeing</th>
                            <th>Adult Price</th>
                            <th>Child Price</th>
                        </tr>
                        </thead>
                        <tbody>
                    <?php
                    if(isset($_GET['id']))
                    {
                        $id=$_GET['id'];
                        $country=$_GET['country'];
                        $sql="select * from optional_tour where type='pvt' and country='$country'";
                        $query=mysqli_query($con,$sql);
                        while($row=mysqli_fetch_array($query))
                        {
                            echo '
                            <tr>
                                <td><input type="checkbox" name="additional-pvt[]" value="'.$row['heading'].'" id=""></td>
                                <td>'.$row['heading'].'</td>
                                <td>₹ '.$row['adult_price'].'</td>
                                <td>₹ '.$row['child_price'].'</td>
                            </tr>';
                        }}
                    ?>
                     </tbody>
                    </table>

                    <?php } ?>

                    <script>
                $(document).ready(function(){
                    $("#plus-icon4").click(function(){
                        $("#hotel-content5").slideToggle();
                        $("#plus-icon4").toggleClass("fa fa-plus fa fa-minus");
                    });
                    
                });
            </script>

                    <!-- Personal Details Form -->

                    <h2 class="mt-5 mb-5 text-center">Personal Details</h2>
                        <div class="row mt-3">
                            <div class="col-lg-4">
                                <label for="pax">PAX Name</label><br>
                                <input type="text" name="pax-name" class="form-control cl" id="pax">
                            </div>
                            <div class="col-lg-4">
                                <label for="nation">Nationality</label><br>
                                <input type="text" name="nationality" class="form-control cl" id="nation">
                            </div>
                            <div class="col-lg-4">
                                <label for="date">Date</label><br>
                                <input type="date" name="date" class="form-control cl"  id="date">
                            </div>
                            
                        </div>



                        <div class="row mt-3">
                            
                            <div class="col-lg-6">
                                <label for="Email">Email</label><br>
                                <input type="email" name="email" required class="form-control cl"  id="Email">
                            </div>
                            <div class="col-lg-6">
                                <label for="Contact">Contact</label><br>
                                <input type="tel" name="contact" required class="form-control cl"  id="Contact">
                            </div>
                            

                        </div>


                     <div class="row mt-4">
                     
                        <div class="col-lg-3 col-xs-6 col-sm-6">
                            <label for="room">Rooms</label><br>
                            <select name="rooms" class="cl" id="room">
                                <option value="1">1 &nbsp;&nbsp;</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-xs-6 col-sm-6">
                            <label for="adult">Adult</label><br>
                            <select name="adult" class="cl" id="adult">
                                <option value="1">1 &nbsp;&nbsp;</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-xs-6 col-sm-6">
                            <label for="cb">Child With Bed</label><br>
                            <select name="with-bed" class="form-control cl" id="cb">
                                <option value="0">0 &nbsp;&nbsp;</option>
                                <option value="1">1 </option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>

                        <div class="col-lg-3 col-xs-6 col-sm-6">
                            <label for="cwb">Child Without Bed</label><br>
                            <select name="without-bed" class="form-control cl" id="cwb">
                                <option value="0">0 &nbsp;&nbsp;</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </div>




                     </div>   

                    <input type="submit" id="calculate"  class="btn mt-4" style="background-color:transparent;background-color: #202020;color:white" value="Calculate" name="calculate">

                </form>


               
            </div>

        </div>
    </div>
   
<!-- End Hotels Details -->


</div>
<!--################ End Calculate ############-->







<?php
include "admin/functions/connection.php"; 
                    if(isset($_POST['calculate']))
                    {
                            $GLOBALS['pax_name']=$_POST['pax-name'];
                            $nationality=$_POST['nationality'];
                           echo $GLOBALS['stars']=$_POST['stars'];
                            $GLOBALS['date']=$_POST['date'];
                            $GLOBALS['email']=$_POST['email'];
                            $GLOBALS['contact']=$_POST['contact'];
                            $GLOBALS['rooms']=$_POST['rooms'];
                            $GLOBALS['adult']=$_POST['adult'];
                            $GLOBALS['with_bed']=$_POST['with-bed'];
                            $GLOBALS['without_bed']=$_POST['without-bed'];
                            $GLOBALS['child']=(int) $with_bed+(int) $without_bed;
                            $sic="";$pvt="";
                            $product1="";$product2="";
                            $sic_cost_adult=0;$sic_cost_child=0;$pvtcost=0;$pvt_cost_adult=0;$pvt_cost_child=0;
                       
                       
                       
                        if(isset($_POST['additional-sic']))
                        {
                            $sic=$_POST['additional-sic'];
                            foreach($sic as $product1){
                              
                                $sql="select * from optional_tour where heading='$product1'";
                                $query=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($query))
                                {  $sic_heading=$row['heading'];
                                   $sic_cost_adult=$sic_cost_adult+$row['adult_price'];
                                   $sic_cost_child=$sic_cost_child+$row['child_price'];
                                }
                                
                            }
                            $t_sic_adult=(int) $sic_cost_adult*(int) $adult;
                            $total_child=(int) $with_bed+(int) $without_bed;
                            $t_sic_child=$sic_cost_child*$total_child;
                            
                            $GLOBALS['total_optional_tour1']=$t_sic_adult+$t_sic_child;
                        }
                        if(!isset($_POST['additional-sic']))
                        {   
                            $GLOBALS['total_optional_tour1']=0;
                        }




                        if(isset($_POST['additional-pvt']))
                        {
                            $pvt=$_POST['additional-pvt'];
                            foreach($pvt as $product2){
                               
                                $sql="select * from optional_tour where heading='$product2'";
                                $query=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($query))
                                {   $pvt_heading=$row['heading'];
                                    $GLOBALS['country']=$row['country'];
                                    $pvt_cost_adult=$pvt_cost_adult+$row['adult_price'];
                                    $pvt_cost_child=(int) $pvt_cost_child+(int) $row['child_price']."<br>";
                                }
                                
                            }
                            $t_pvt_adult=(int) $pvt_cost_adult*(int) $adult;
                            $total_child=(int) $with_bed+(int) $without_bed;
                            $t_pvt_child=(int) $pvt_cost_child*(int)  $total_child;
                            
                            $GLOBALS['total_optional_tour2']=$t_pvt_adult+$t_pvt_child;
                        }
                        if(!isset($_POST['additional-pvt']))
                        {   
                            $GLOBALS['total_optional_tour2']=0;
                        }
                      echo $pack_id=$_GET['id'];  
                      $sql="select * from hotel where package_id='$pack_id' AND stars='$stars'";
                      $query=mysqli_query($con,$sql);
                      $price=0;
                      $package_price=0;
                      while($row=mysqli_fetch_array($query))
                      {
                          $package_id=$_GET['id'];
                          $GLOBALS['id']=$row['package_id'];
                         
                        $double_sharing= $row['double_tripple_sharing_cost'];
                        $single_occupancy_cost= $row['single_occupancy_cost'];
                        $child_bed_cost= $row['child_bed_cost'];
                        $child_without_bed_cost= $row['child_without_bed_cost'];
                        $adult_cost=(int) $adult*(int) $single_occupancy_cost;
                        $cb_cost=(int) $with_bed*(int) $child_bed_cost;
                        $cwb_cost=(int) $without_bed*(int) $child_without_bed_cost;
                        $total=$adult_cost+$cb_cost+$cwb_cost;
                        $GLOBALS['grand_total']=(int) $total*(int) $rooms;
                      
                        $sql="select * from package where id='$package_id'";
                        $query=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($query))
                            {
                                $GLOBALS['package_price']=$row['price'];
                                $GLOBALS['days']=$row['days'];
                                $GLOBALS['country']=$row['country'];
                                $GLOBALS['nights']=$row['nights'];
                                $GLOBALS['package_name']=$row['name'];
                            }
                      }
                      $GLOBALS['total_optional_tour']=$total_optional_tour1+$total_optional_tour2;                     
                      $GLOBALS['fianl_total']=$grand_total+$total_optional_tour+$package_price;

                    }
                ?>

















<!--########################## caluclation Popup Code ################### -->

<?php
if(isset($_POST['calculate']))
{




echo '<div id="final-calculation">

<h3 class="text-center p-2">Total Cost</h3><hr style="width:60%">';
               
                        echo '
                        <div class="row m-3">
                        <div class="col-lg-6">
                            <h4 id="tx" class="p-1" style="color:#707070">Package Cost <span style="float:right">'.($package_price*$adult).' ₹</span></h4>
                        </div>
                        <div class="col-lg-6">
                            <h4 id="tx" class="p-1" style="color:#707070">Hotel Cost <span style="float:right">'.$grand_total.' ₹</span></h4>
                        </div>
                    </div><hr style="width:60%">
                     '; 

                     echo ' <h3 class="text-center mt-4 mb-2">Additional Tours</h3><div class="row m-3">
                    ';
                     if(isset($_POST['additional-sic']))
                     {  $cat="sic";
                         $sic=$_POST['additional-sic'];
                         foreach($sic as $product1){
                           
                             $sql="select * from optional_tour where heading='$product1'";
                             $query=mysqli_query($con,$sql);
                             while($row=mysqli_fetch_array($query))
                             {  $GLOBALS['sic_heading']=$row['heading'];
                                $sic_cost_adult=$sic_cost_adult+$row['adult_price'];
                                $sic_cost_child=$sic_cost_child+$row['child_price'];
                                echo '
                        <div class="col-lg-6">
                            <h5 id="tx" class="p-1" style="color:#707070"> <span style="">'.$sic_heading.' ('.$cat.')</span></h5>
                        </div>
                  
                  
                        ';
                             }
                             
                         }
                         $t_sic_adult=(int) $sic_cost_adult*(int) $adult;
                         $total_child=(int) $with_bed+(int) $without_bed;
                         $t_sic_child=$sic_cost_child*$total_child;
                         
                         $GLOBALS['total_optional_tour1']=$t_sic_adult+$t_sic_child;
                     }
                     if(!isset($_POST['additional-sic']))
                     {   
                         $GLOBALS['total_optional_tour1']=0;
                     }



                   
                     if(isset($_POST['additional-pvt']))
                     {
                        $cat="pvt";
                         $pvt=$_POST['additional-pvt'];
                         foreach($pvt as $product2){
                            
                             $sql="select * from optional_tour where heading='$product2'";
                             $query=mysqli_query($con,$sql);
                             while($row=mysqli_fetch_array($query))
                             {   $GLOBALS['pvt_heading']=$row['heading'];
                                 $GLOBALS['country']=$row['country'];
                                 $pvt_cost_adult=$pvt_cost_adult+$row['adult_price'];
                                 $pvt_cost_child=(int) $pvt_cost_child+(int) $row['child_price']."<br>";

                                 echo '
                        <div class="col-lg-6">
                            <h5 id="tx" class="p-1" style="color:#707070"> <span style="">'.$pvt_heading.' ('.$cat.')</span></h5>
                        </div>
                       
                 
                        ';
                             }
                             
                         }
                         $t_pvt_adult=(int) $pvt_cost_adult*(int) $adult;
                         $total_child=(int) $with_bed+(int) $without_bed;
                         $t_pvt_child=(int) $pvt_cost_child*(int)  $total_child;
                         
                         $GLOBALS['total_optional_tour2']=$t_pvt_adult+$t_pvt_child;
                     }
                     if(!isset($_POST['additional-pvt']))
                     {   
                         $GLOBALS['total_optional_tour2']=0;
                     }

                     echo "</div>";
                 

                    echo '<div class="row">
                        <div class="col-lg-12">
                            <h4 id="tx" class="p-1 m-4 text-center" style="color:black">Total Additional Tour Cost <span style="">'.$total_optional_tour.' ₹</span></h4>
                        </div>
                        
                    </div>
                    <hr style="width:60%">
                    <div class="row">
                         <div class="col-lg-4">
                            <h4 id="tx" class="p-1" style="color:#707070">No.of Rooms <span style="float:right">'.$rooms.'</span></h4>
                        </div>
                        <div class="col-lg-4">
                            <h4 id="tx" class="p-1" style="color:#707070">Adult <span style="float:right">'.$adult.'</span></h4>
                        </div>
                        <div class="col-lg-4">
                            <h4 id="tx" class="p-1" style="color:#707070">Child <span style="float:right">'.$child.'</span></h4>
                        </div>
                    </div>
                    <h3 class="text-center p-2 mt-2">Grand Total : '.($total_optional_tour+$grand_total+($package_price*$adult)).' ₹</h3>   
                    <br>
                    <center>
                    <a href="sendmail.php?email='.$email.'&package_id='.$id.'&p_name='.$package_name.'&date='.$date.'&day='.$days.'&night='.$nights.'&adult='.$adult.'&child='.$child.'&contact='.$contact.'"><button name="enquiry" class="btn" value="Book Now" style="background-color:black;font-weight:500;color:white">Book Now</button></a>
                    <br><br><a id="close-btn" href="">Close <i class="fa fa-close"></i></a>
                    <br><br>
                   
                    </center> </div>';}
                    ?>
                    
                    <br>



<script>
$(document).ready(function(){
    $("#final-calculation").css("position:absolute;top:10%");
});
$(window).on('load', function(){
    $("#final-calculation").css("position:absolute;top:10%");
});
</script>





























<!-- ########### Iterinary #################-->


<div id="News" class="tabcontent">
   <div class="card" style="border:2px solid #353535;border-radius:30px;padding-left:30px;margin:1%">
    <h3 class="mt-3 mb-1">Tour Itinerary</h3>
    <?php 
     if(isset($_GET['id']))
     {
         $id=$_GET['id'];
         $sql="select * from itinerary where package_id='$id'";
         $query=mysqli_query($con,$sql);
         while($row=mysqli_fetch_array($query))
         {
            echo '
                <div clss="card" >
                    <span class="text-dark">'.$row['heading'].'</span></h4>
                </div>
            ';
        }
    }
    ?>
    </div>
</div>

<!--################ End Iterinary ############-->



<div id="incl" class="tabcontent">

<div class="card" style="border:1px solid black;padding:2%;border-radius:30px">
<?php 
     if(isset($_GET['id']))
     {
         $id=$_GET['id'];
         $sql="select * from inclusions where package_id='$id'";
         $query=mysqli_query($con,$sql);
         while($row=mysqli_fetch_array($query))
         {
            echo '
                
                <span style="font-weight:600;font-size:16px" font-family: "Roboto", sans-serif;" class="text-dark"> '.$row['title'].'</span>
                
            ';
        }
    }
    ?>
</div>
<br>

</div>

<div id="About" class="tabcontent">
  
  <div class="card" style="border:1px solid black;padding:2%;border-radius:30px">
  <h3>Terms And Conditions</h3>
  <p style="font-weight:500">•	5% extra on the above rate.<br>
•	Hotel accommodation is strictly subject to availability at the time of booking.<br>
•	The validity of the passport should be 06 months from the intended date of return Standard check-in time is 14:00Hrs and check-out time 12:00Hrs.<br>
•	Prices offered are net and non-commissionable.<br>
•	Hotel City Taxes, coach Toll & Parking are not included in any offer, if applicable in particular city.<br>
•	Tips extra are not included.<br>
•	Rates and availability are subject to change at the time of actual booking without prior notice.<br>
•	Average rate : If the number of nights or travel date changes the rate will change accordingly.<br>
•	No reservations are held at the time of initial quotation Rates and Confirmations are subject to availability at the time of booking.<br>
•	Holidays Bunch reserves the right to amend or change the services without prior notice.<br>
•	Offered rates are not valid for any Congress, Fair period, High/Peak/Holiday season.<br>
•	Only single person travelling, please note 25% addition on and above the single occupancy cost.<br>
•	Transfer between 2100hrs to 0700hrs night surcharges are applicable.<br>
•	Cancellation charges as applicable.

  </div>
  
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
   
    </div>

<!-- End Optional Tour Details -->





</div>
    
    <!-- Timeline end -->

    <!-- footer -->
   <!-- footer -->
  <!-- footer -->
  <?php
  include('footer.php');
  ?>

    <!-- form itself end-->
    <form id="test-form" class="white-popup-block mfp-hide">
        <div class="popup_box ">
                <div class="popup_inner">
                    <h3>Check Availability</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-xl-6">
                                <input id="datepicker" placeholder="Check in date">
                            </div>
                            <div class="col-xl-6">
                                <input id="datepicker2" placeholder="Check out date">
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select wide" id="default-select" class="">
                                    <option data-display="Adult">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                            <div class="col-xl-6">
                                <select class="form-select wide" id="default-select" class="">
                                    <option data-display="Children">1</option>
                                    <option value="1">2</option>
                                    <option value="2">3</option>
                                    <option value="3">4</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <select class="form-select wide" id="default-select" class="">
                                    <option data-display="Room type">Room type</option>
                                    <option value="1">Laxaries Rooms</option>
                                    <option value="2">Deluxe Room</option>
                                    <option value="3">Signature Room</option>
                                    <option value="4">Couple Room</option>
                                </select>
                            </div>
                            <div class="col-xl-12">
                                <button type="submit" class="boxed-btn3">Check Availability</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </form>
<!-- form itself end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>



</body>

</html>