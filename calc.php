<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Holiday Bunch</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
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

    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
    @media (min-width: 320px) and (max-width: 480px) {
    #calculation {
  width:90%
}
 
  
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
        <h3>Countries</h3>
    </div>

    

    <?php
include "admin/functions/connection.php"; 
                    if(isset($_POST['calculate']))
                    {
                          $GLOBALS['pax_name']=$_POST['pax-name'];
                          $nationality=$_POST['nationality'];
                          $stars=$_POST['stars'];
                          $GLOBALS['date']=$_POST['date'];
                          $GLOBALS['email']=$_POST['email'];
                          $GLOBALS['contact']=$_POST['contact'];
                          $GLOBALS['rooms']=$_POST['rooms'];
                          $GLOBALS['adult']=$_POST['adult'];
                          $with_bed=$_POST['with-bed'];
                          $without_bed=$_POST['without-bed'];
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
                                {
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
                                {   
                                    $GLOBALS['country']=$row['country'];
                                    $pvt_cost_adult=$pvt_cost_adult+$row['adult_price'];
                                    $pvt_cost_child=$pvt_cost_child+$row['child_price'];
                                }
                                
                            }
                            $t_pvt_adult=(int) $pvt_cost_adult*(int) $adult;
                            $total_child=(int) $with_bed+(int) $without_bed;
                            $t_pvt_child=$pvt_cost_child*$total_child;
                            
                            $GLOBALS['total_optional_tour2']=$t_sic_adult+$t_sic_child;
                        }
                        if(!isset($_POST['additional-pvt']))
                        {   
                            $GLOBALS['total_optional_tour2']=0;
                        }
                      
                    
                     
                       



                        
                      $sql="select * from hotel where stars='$stars'";
                      $query=mysqli_query($con,$sql);
                      $price=0;
                      $package_price=0;
                      while($row=mysqli_fetch_array($query))
                      {
                          $package_id=$row['package_id'];
                          $GLOBALS['id']=$row['package_id'];
                         
                        $double_sharing= $row['double_tripple_sharing_cost'];
                        $single_occupancy_cost= $row['single_occupancy_cost'];
                        $child_bed_cost= $row['child_bed_cost'];
                        $child_without_bed_cost= $row['child_without_bed_cost'];
                        $adult_cost=(int) $adult*(int) $double_sharing;
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

    
    

<div id="calculate-fare" class="mb-5 mt-5">
    <div class="container">
        <div class="row">
            <div class="card" id="calculation" style="width:80%;margin-left:10%">
                <div class="container"><br>
                    <h3 class="text-center p-2">Total Cost</h3><hr style="width:60%">
                    <?php
                        echo '
                        <div class="row">
                        <div class="col-lg-6">
                            <h4 class="p-1">Package Cost <span style="float:right">'.$package_price.' ₹</span></h4>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="p-1">Hotel Cost <span style="float:right">'.$grand_total.' ₹</span></h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="p-1">Optional Tour Cost <span style="float:right">'.$total_optional_tour.' ₹</span></h4>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="p-1">No.of Rooms <span style="float:right">'.$rooms.'</span></h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="p-1">Adult <span style="float:right">'.$adult.'</span></h4>
                        </div>
                        <div class="col-lg-6">
                            <h4 class="p-1">Child <span style="float:right">'.$child.'</span></h4>
                        </div>
                    </div>
                    <h3 class="text-center p-2 mt-2">Grand Total : '.$fianl_total.' ₹</h3>   
                    
                    <center>
                    <a href="sendmail.php?email='.$email.'&package_id='.$id.'&p_name='.$package_name.'&date='.$date.'&day='.$days.'&night='.$nights.'&adult='.$adult.'&child='.$child.'&contact='.$contact.'"><button name="enquiry" class="btn" value="Book Now" style="background-color:black;font-weight:500;color:white">Book Now</button></a>
                    <br><br>
                    <a href="details.php?id='.$id.'&country='.$country.'" style="margin-top:10px"><i class="fa fa-arrow-right" aria-hidden="true"></i>View Package Details</a>
                    </center> ';
                    ?>
                    
                    <br>
                   
                          
                    <br><br>

<!-- Send Email -->
<?php
if(isset($_POST['book']))
{
     $to="shubham.mhadgut24@gmail.com";
     $from=$email;
    $headers .= "From: travel@travel.com". "\r\n"; 
// Set content-type header for sending HTML email 
$headers = "MIME-Version: 1.0" . "\r\n"; 
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 

// Additional headers 

$subject='New Enquiery For Tour Package From Website';
$message = '<h2>New Enquiry From Website</h2>

<h3>Package Details</h3>
Package Id : '.$package_id.'
Package Name : '.$package_name.'<br>
To: '.$to.'
From : '.$from.'
Date : '.$date.'
Days: '.$days.'<br>
Nights: '.$nights.'<br>
<h3>Passenger Details</h3>
Name : '.$pax_name.'
Adult : '.$adult.'
Child : '.$child.'<br>
Email : '.$email.'<br>
Contact : '.$contact.'<br>
';

mail("shubham.mhadgut24@gmail.com", $subject, $message, $headers);  
}
?>


                </div>
            </div>
        </div>
    </div>
</div>
   











    <!-- footer -->
   <!-- footer -->
    <!-- footer -->
    <?php
  include('footer.php');
  ?>

    <!-- link that opens popup -->

    <!-- form itself end-->
        <form id="test-form" method="POST" action="sendenquiry.php"  class="white-popup-block mfp-hide">
                <div class="popup_box ">
                        <div class="popup_inner">
                            <h3>Make Your Custom Package</h3>
                            <form  >
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6">
                                        <input type="text" name="to" placeholder="To" required class="form-control wide" id=""><br>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <input type="text" name="from" required placeholder="From" class="form-control wide" id=""><br>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <input id="datepicker" required name="departure_date" placeholder="Departure Date">
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <select class="form-select wide" name="days" id="default-select" class="">
                                            <option data-display="Day">Day</option>
                                            <option value="1-3">1-3 Days</option>
                                            <option value="3-5">3-5 Days</option>
                                            <option value="5-8">5-8 Days</option>
                                            <option value="8-10">8-10 Days</option>
                                            <option value="11-13">11-13 Days</option>
                                            <option value="13 & more">13 Days & more</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <select class="form-select wide" name="adult" id="default-select" class="">
                                            <option data-display="Adult">Adult</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="6 & more">6 & more</option>
                                        </select>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <select class="form-select wide" name="child" id="default-select" class="">
                                            <option data-display="Children">Children</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="5 & more">6 & more</option>
                                        </select>
                                    </div>
                                    

                                    <div class="col-xl-6 col-lg-6">
                                        <input type="tel" required name="contact" placeholder="Contact" class="form-control wide" id=""><br>
                                    </div>

                                    <div class="col-xl-6 col-lg-6">
                                        <input type="email" required name="email" placeholder="Email" class="form-control wide" id=""><br>
                                    </div>

                                    <div class="col-xl-12 col-lg-12">
                                        <button type="submit" name="enquiry" class="boxed-btn3">SEND ENQUIRY</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
            </form>



            <?php 
             include "admin/functions/connection.php";

                if(isset($_POST['enquiry']))
                {
                   
                }
            ?>


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