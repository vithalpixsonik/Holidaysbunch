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
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
    <style>
    
        .black-border{
            border-radius:0;
            border:1.5px solid #757575;
            outline:0;
        }
        #enq-form{
            width:40%;
            margin-left:9%
        }



        /* mob */
        @media (min-width: 320px) and (max-width: 480px) {
  
            #enq-form{
            width:90%;
            margin-left:5%
            }

        }

    </style>
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
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
    <div class="section_title mb-20px mt-5 ">
        <h3 style="margin-left:10%" class="">Make Your Own Custom Package</h3>
        <form action="customizemail.php" id="enq-form" method="POST">
            <div class="container">
                <!-- User Details -->
                <h4 style="font-weight:bold">Personal  Details</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" style="border:1px solid #989898"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" style="border:1px solid #989898"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="contact">Contact</label>
                        <input type="tel" class="form-control" name="contact" id="contact" style="border:1px solid #989898">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-6">
                        <label for="adult">Adult</label>
                        <input type="number" class="form-control" min="1" max="50" name="adult" id="adult" style="border:1px solid #989898">
                    </div>
                    <div class="col-lg-6">
                        <label for="child">Child (below 12 years)</label>
                        <input type="number" class="form-control" min="0" max="30" name="child" id="child" style="border:1px solid #989898">
                    </div>
                    <div class="col-lg-12">
                    <br>
                        <label for="departure-city">Departure City</label>
                        <input type="text" class="form-control" name="departure-city" id="departure-city" style="border:1px solid #989898">
                    </div>   
                </div>

                <!-- Package Details -->
                <h4 style="font-weight:bold;margin-top:5%">Package Details</h4>
                <div class="row mt-3">

                    <div class="col-lg-12">
                        <label for="destination-type">Destination Type</label><br>
                        <input type="radio" name="type" value="Domestic" checked> Domestic
                        <input type="radio" class="ml-3" name="type" value="International"> International <br><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="destination">Destination</label>
                        <input type="text" class="form-control" name="destination" id="destination" style="border:1px solid #989898"><br>
                    </div>
                    
                    <div class="col-lg-12">
                        <label for="budget">Your Estimated Budget</label>
                        <input type="text" class="form-control" name="budget" id="budget" style="border:1px solid #989898">
                    </div>   
                </div>


                <div class="row mt-3">

                    <div class="col-lg-12">
                        <label for="stars">Hotel Type</label><br>
                        <select name="stars" style="color:black" id="stars">
                            <option value="3">3 Star &nbsp;&nbsp;</option>
                            <option value="4">4 Star &nbsp;&nbsp;</option>
                            <option value="5">5 Star &nbsp;&nbsp;</option>
                        </select><br><br><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="date">Package Starts Date</label>
                        <input type="date" class="form-control" name="date" id="date" style="border:1px solid #989898"><br>
                    </div>
                    
                    <div class="col-lg-12">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" rows="5" id="description" style="border:1px solid #989898"></textarea><br>
                    </div>  

                    <div class="col-lg-12">
                        <input class="btn mb-3" style="background-color:#151515;color:white" type="submit" name="enquiry"  value="Send Enquiry">    
                    </div>    
                </div>


            </div>
        </form>
         
    </div>


    
    <!-- Timeline end -->
    <!-- ###### Php Send Enqiry Code ##### -->
    








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