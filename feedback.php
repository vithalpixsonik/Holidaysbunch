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

    <a href="https://wa.me/919987989572?text=Our%20Tour%20Feedback%20" target="_new"><img src="img/whatsapp.png" style="width:90px;position:fixed;right:3%;bottom:5%;border-radius:50%" alt=""></a>
        <h3 style="margin-left:10%" class="">Share Your Tour Feedback</h3>
        <form action="feedback.php" enctype="multipart/form-data"  id="enq-form" method="POST">
            <div class="container">
                <!-- User Details -->
                <div class="row">
                    <div class="col-lg-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" style="border:1px solid #989898"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="contact">Email</label>
                        <input type="email" class="form-control" name="email" id="contact" style="border:1px solid #989898"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" name="country" id="country" style="border:1px solid #989898"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="image1">Image 1</label>
                        <input type="file" class="form-control" name="file[]" id="image1" style="border:1px solid #989898"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="image2">Image 2</label>
                        <input type="file" class="form-control" name="file[]" id="image2" style="border:1px solid #989898"><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="ratings">Ratings</label>
                        <select name="ratings" class="form-control" id="">
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select><br>
                    </div>
                    <div class="col-lg-12">
                        <label for="experience">Share Your Experience With Holidaybunch</label>
                        <textarea class="form-control" rows="5" name="experience" id="experience" style="border:1px solid #989898"></textarea>
                    </div>
                    <br>
                </div>

                <div class="row mt-3">
                    <div class="col-lg-12">
                        <input class="btn mb-3" style="background-color:#151515;color:white" type="submit" name="sent"  value="Share Feedback">    
                    </div>    
                </div>

            </div>
        </form>
         
    </div>


    
    <!-- Timeline end -->
    <!-- ###### Php Send Enqiry Code ##### -->
   




    <?php
if(isset($_POST['sent']))
{   
    $name=$_POST['name'];
    $email=$_POST['email']; 
    $country=$_POST['country'];
    $ratings=$_POST['ratings'];
    $experience=$_POST['experience'];
    
if($_POST && isset($_FILES['file']))
{
	$recipient_email 	= "admin@holidaysbunch.com"; //recepient
	$from_email 		= $email; //from email using site domain.
	$subject			= "New Tour Feedback From ".$name; //email subject line
	
	 //capture message
	$attachments = $_FILES['file'];
	
	//php validation
    
	
	$file_count = count($attachments['name']); //count total files attached
	$boundary = md5("sanwebe.com"); 
			
	if($file_count > 0){ //if attachment exists
		//header
        $headers = "MIME-Version: 1.0\r\n"; 
        $headers .= "From:".$from_email."\r\n"; 
        $headers .= "Reply-To: ".$sender_email."" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary = $boundary\r\n\r\n"; 
        
        //message text
        $body = "--$boundary\r\n";
        $body .= "Content-Type: text/plain; charset=ISO-8859-1\r\n";
        $body .= "Content-Transfer-Encoding: 7bit\r\n\r\n"; 
        $body .= '<h2>New Enquiery For Visa From Website</h2>                    
        <h3>User Details</h3>
        Name : '.strip_tags($name).'
        Email : '.strip_tags($email).'
        country : '.strip_tags($country).'
        ratings: '.strip_tags($ratings).'
        message: '.strip_tags($experience).'
        ';
        $body .= chunk_split(base64_encode($sender_message)); 
         
		//attachments
		for ($x = 0; $x < $file_count; $x++){		
			if(!empty($attachments['name'][$x])){
				
				if($attachments['error'][$x]>0) //exit script and output error if we encounter any
				{
					$mymsg = array( 
					1=>"The uploaded file exceeds the upload_max_filesize directive in php.ini", 
					2=>"The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form", 
					3=>"The uploaded file was only partially uploaded", 
					4=>"No file was uploaded", 
					6=>"Missing a temporary folder" ); 
					die($mymsg[$attachments['error'][$x]]); 
				}
				
				//get file info
				$file_name = $attachments['name'][$x];
				$file_size = $attachments['size'][$x];
				$file_type = $attachments['type'][$x];
				
				//read file 
				$handle = fopen($attachments['tmp_name'][$x], "r");
				$content = fread($handle, $file_size);
				fclose($handle);
				$encoded_content = chunk_split(base64_encode($content)); //split into smaller chunks (RFC 2045)
				
				$body .= "--$boundary\r\n";
				$body .="Content-Type: $file_type; name=\"$file_name\"\r\n";
				$body .="Content-Disposition: attachment; filename=\"$file_name\"\r\n";
				$body .="Content-Transfer-Encoding: base64\r\n";
                $body .="X-Attachment-Id: ".rand(1000,99999)."\r\n\r\n"; 
                $body .= $encoded_content; 
               
			}
		}

	}else{ //send plain email otherwise
       $headers = "From:".$from_email."\r\n".
        "Reply-To: ".$sender_email. "\n" .
        "X-Mailer: PHP/" . phpversion();
        $body = $sender_message;
	}
		
	 $sentMail = @mail($recipient_email, $subject, $body, $headers);
	if($sentMail) //output success or failure messages
	{       
       
        echo '<script>window.location.href = "thanks.php";</script>';
	}else{
		die('Could not send mail! Please check your PHP mail configuration.');  
	}
}
}
?>







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