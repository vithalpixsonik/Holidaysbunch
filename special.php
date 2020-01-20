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
        <h3>Special Packages</h3>
    </div>

    

    <!-- offers_area_start -->
    <div class="offers_area">
        <div class="container">
            <div class="row">

    <?php
        include "admin/functions/connection.php";
       
        $query="select * from package ORDER BY RAND() LIMIT 8";
        $run_pro = mysqli_query($con, $query) or die("Error: " . mysqli_error($con));
        while($row = $run_pro->fetch_assoc()) {
        echo '
        <div class="col-xl-4 col-md-4">
        
        <div class="single_offers">
            <div class="about_thumb">
                <img src="admin/uploads/package/'.$row['image'].'" alt="">
            </div>
            <h3 style="font-weight:500" class="pl-3">'.$row['name'].'</h3>
                <p class="pl-3" style="color:#757575;font-weight:400;font-size:15px"><i class="fa fa-calendar" aria-hidden="true"></i> '.$row['days'].' Days & '.$row['nights'].' Nights</p>
                <h4 style="color:#009DFF;font-weight:700" class="ml-3"><i class="fa fa-inr" aria-hidden="true"></i>'.$row['price'].' <span style="font-size:13px;color:#C0C0C0;font-weight:400">per person</span></h4>
                <span class="ml-3"><i class="fa fa-hotel" style="color:#00695C" aria-hidden="true"></i></span>
                <span class="ml-2"><i class="fa fa-car" style="color:#00695C" aria-hidden="true"></i></span>
                <span class="ml-2"><i class="fa fa-cutlery" style="color:#00695C" aria-hidden="true"></i></span>
                <span class="ml-2"><i class="fa fa-camera" style="color:#00695C" aria-hidden="true"></i></span>
                <a href="details.php?id='.$row['id'].'&country='.$row['country'].'" class="book_now">View Package</a>
        </div>
       
    </div>
        
        ';
        }
        
    ?>

               



            </div>
        </div>
    </div>
    <!-- offers_area_end -->

    
    

   











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