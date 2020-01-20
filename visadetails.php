<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Montana</title>
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
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
   <style>
    strong{
        font-weight:500;
        font-family: "Roboto", sans-serif;
    }
    #toggle{
        cursor:pointer;
    }
    #toggle1{
        cursor:pointer;
    }


    @media (min-width: 320px) and (max-width: 480px) {
        #visa-document{
        padding-top:7% !important;
        padding-bottom:7% !important;
    }
  
}
    
   </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

     <!-- header-start -->
    
                                            
      
    </div>
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
   
<br>


    <!-- Timeline -->
    <div class="section_title mb-20px mt-5 mb-5 text-center">
        
            <div class="container">
            <?php
            include "admin/functions/connection.php";
            if(isset($_GET['country']))
            {
                $country=$_GET['country'];
                $sql="select * from country where name='$country'";
                $query=mysqli_query($con,$sql);
                while($row=mysqli_fetch_array($query))
                {
                    $GLOBALS['country_name']=$row['name'];
                }
            }
            ?>
            <h1 class="mb-4 text-left" style="font-size:40px"><?php echo $country_name; ?> Visa Details</h1>
                <div class="row">
                    <?php 
                        include "admin/functions/connection.php";
                        if(isset($_GET['country']))
                        {
                            $country=$_GET['country'];
                            $sql="select * from visa where country='$country'";
                            $query=mysqli_query($con,$sql);
                            while($row=mysqli_fetch_array($query))
                            {
                        
                    ?>

                    <div class="col-lg-4">
                        <div class="card m-2">
                            <h5 style="font-size:18px" class="card-head bg-dark text-white p-3"><?php echo $row['visa_type'] ?></h5>
                            <p class="text-left pl-3 pr-3" >Processing time: <span style="float:right;color:#303030"><?php echo $row['processing_time'] ?> Days</span></p>
                            <p class="text-left pl-3 pr-3" style="margin-top:-20px">Stay period : <span style="float:right;color:#303030"><?php echo $row['stay_period'] ?> Days</span></p>
                            <p class="text-left pl-3 pr-3" style="margin-top:-20px">Validity : <span style="float:right;color:#303030"><?php echo $row['validity'] ?></span></p>
                            <p class="text-left pl-3 pr-3" style="margin-top:-20px">Entry : <span style="float:right;color:#303030"><?php echo $row['entries'] ?></span></p>
                            <p class="text-left pl-3 pr-3" style="margin-top:-20px">Visa Fees : <span style="float:right;color:#303030">₹ <?php echo $row['visa_fees'] ?></span></p>
                            <p class="text-left pl-3 pr-3" style="margin-top:-20px">Service Fees : <span style="float:right;color:#303030">₹ <?php echo $row['service_fees'] ?></span></p>
                        </div>
                    </div>
                    

                    <?php }}  ?>
                
                </div>

               
                <div class="row mt-5" id="visa-document" style="background-color:#fafafa;width:100%;margin:0;padding:3%">
                                
                    <div class="col-lg-7 col-xs-12">
                        <div class="" id="toggle" style="width:100%;padding:2%;margin:1%;background-color:white">
                            
                            <h4 class="text-left">Must have documents <i  style="float:right;font-size:20px;font-weight:400;color:grey" class="fa fa-chevron-down pt-1"></i></h4>
                          
                            <div id="doc-content" class="text-left">   
                             
                            <?php
                            echo '<hr>';
                            if(isset($_GET['country']))
                            {
                                $country=$_GET['country'];
                                $sql="select * from visa where country='$country'";
                                $query=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($query))
                                {
                                    $GLOBALS['type']=$row['visa_type'];
                                    echo '<span style="font-family: "Roboto", sans-serif;">'.$row['documents'].'</span>';
                             
                               
                            
                            }}
                            ?>
                            </div>
                            </div>

                            <script>
                                $(document).ready(function(){
                                    $("#doc-content").hide();
                                        $("#toggle").click(function(){
                                            $("#doc-content").slideToggle(1000);
                                        });

                                });
                            </script>





                            <?php
                            if($type=="Business Visa"){
                            ?>
                            <div class="mt-3" id="toggle1" style="width:100%;padding:2%;margin:1%;background-color:white">
                            <h4 class="text-left">Supporting documents as per your occupation, type of visit:
                             <i  style="float:right;font-size:20px;font-weight:400;color:grey" class="fa fa-chevron-down pt-1"></i></h4>
                            <div id="doc-content1" class="text-left">   
                            <hr> 
                            <?php
                            
                            if(isset($_GET['country']))
                            {
                                $country=$_GET['country'];
                                $sql="select * from visa where country='$country'";
                                $query=mysqli_query($con,$sql);
                                while($row=mysqli_fetch_array($query))
                                {
                                
                                echo '<span style="font-family: "Roboto", sans-serif;">'.$row['b_document'].'</span>';
                             
                                
                            
                            }}
                            ?>
                            
                            </div>
                           



                        </div>   <?php } ?>
                    </div>

    <script>
        $(document).ready(function(){
            $("#doc-content1").hide();
                $("#toggle1").click(function(){
                    $("#doc-content1").slideToggle(1000);
                });

        });
    </script>







                    <div class="col-lg-5 col-xs-12">
                    <h2 class="mb-4 text-left" style="font-size:40px">Send Visa Enquiry</h2>
                <div style="width:100%">
                    <form action="" method="POST">
                        <input type="text" name="name" id="" class="form-control" placeholder="Name" required><br>
                        <input type="email" name="email" id="" class="form-control" placeholder="Email" required><br>
                        <input type="tel" name="contact" id="" class="form-control" placeholder="Contact" required><br>
                        <select name="visa-type" class="form-control" style="width:100%" id="">
                        <?php
                             if(isset($_GET['country']))
                             {
                                 $country=$_GET['country'];
                                 $sql="select * from visa where country='$country'";
                                 $query=mysqli_query($con,$sql);
                                 while($row=mysqli_fetch_array($query))
                                 {
                                     $visa_country=$row['country'];
                        ?>
                        <option value="30 Days Multiple Entry Sticker Visa"><?php echo $row['visa_type'] ?></option>
                        <?php
                        }}
                        ?>
                        </select>
                        <br>
                        <textarea  name="message" class="form-control" cols="30" rows="4" placeholder="Type Your Message ..." ></textarea><br>
                        <input type="submit" name="send-mail" value="Submit" id="" class="btn btn-default bg-dark text-white form-control"><br>
                    </form>
                </div>

                <?php
                    if(isset($_POST['send-mail']))
                    {   
                        $headers .= "From: holidaysbunch@holidaysbunch.com". "\r\n"; 
                        // Set content-type header for sending HTML email 
                        $headers = "MIME-Version: 1.0" . "\r\n"; 
                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                        $name=$_POST['name'];
                        $email=$_POST['email'];
                        $contact=$_POST['contact'];
                        $visa_type=$_POST['visa-type'];
                        $message=$_POST['message'];
                        // Additional headers                    
                        $subject='New Enquiery For Visa From Website';
                        $message = '<h2>New Enquiery For Visa From Website</h2>                    
                        <h3>User Details</h3>
                        Name : '.$name.'<br>
                        Email : '.$email.'<br>
                        Contact : '.$contact.'<br>
                        country : '.$country.'<br>
                        visa-type: '.$visa_type.'<br>
                        message: '.$message.'<br>
                        ';
                        mail("admin@holidaysbunch.com", $subject, $message, $headers);  




                        $headers1 .= "Holiday Bunch Website <admin@holidaysbunch.com>". "\r\n"; 
                        // Set content-type header for sending HTML email 
                        $headers1 = "MIME-Version: 1.0" . "\r\n"; 
                        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
                        $subject1='Thanks For Choosing HolidaysBunch';
                        $message1 = '<h2>Greetings from Holidays Bunch !!</h2>
                    <h4>Thank You for your email.</h4> 
                
                    <p>We appreciate and acknowledge receipt of your query. Your Query have been assigned<br>
                    to Chetan Patil- +91 9619599074 will revert back to you within 4 <br>
                    business hours from the time of receipt of the query.<br>
                    If you do not receive the response within the specified time,<br>
                    we request to call on the given number.</p>
                            ';
                    
                        mail($email, $subject1, $message1, $headers1);  
                



                        echo '<script>window.location.href = "thanks.php";</script>';
                    }
                ?>
                    </div>
                </div>



               
               
                   
             


                
                



            </div>
    </div>
<br>

    
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