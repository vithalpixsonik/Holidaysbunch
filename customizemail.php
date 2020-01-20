<?php
        if(isset($_POST['enquiry']))
        {   
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $adult=$_POST['adult'];
        $child=$_POST['child'];
        $departure_city=$_POST['departure-city'];
        $destination_type=$_POST['type'];
        $destination=$_POST['destination'];
        $budget=$_POST['budget'];
        $stars=$_POST['stars'];
        $date=$_POST['date'];
        $description=$_POST['description'];
        
        $headers .= "Holiday Bunch Website <shubham.mhadgut24@gmail.com.com>". "\r\n"; 
        // Set content-type header for sending HTML email 
        $headers = "MIME-Version: 1.0" . "\r\n"; 
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        $subject='New Enquiry For Customize Package';
        $message = '<h2>New Enquiry For Customize Package</h2>
    
        <h3>Passenger Details</h3>
        Name : '.$name.'<br>
        Email : '.$email.'<br>
        Contact : '.$contact.'<br>
        Adult : '.$adult.'<br>
        Child : '.$child.'<br>
        Departure City : '.$departure_city.'<br>

        <h3>Package Details</h3>
        Destination Type : '.$destination_type.'<br>
        Destination : '.$destination.'<br>
        Budget : '.$budget.'<br>
        Hotel Preferrence : '.$stars.'<br>
        Date : '.$date.'<br>
        Description : '.$description.'<br>
        
        ';
    
        mail("admin@holidaysbunch.com", $subject, $message, $headers);  


        $headers1 .= "Holiday Bunch Website <admin@holidaysbunch.com>". "\r\n"; 
        // Set content-type header for sending HTML email 
        $headers1 = "MIME-Version: 1.0" . "\r\n"; 
        $headers1 .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
        $subject1='Thanks For Choosing HolidaysBunch';
        $message1 = '<h2>Greetings from Holidays Bunch !!</h2>
        <h3>Thank You for your email.</h3> 
        <p>We appreciate and acknowledge receipt of your query.<br>
        Your Query have been assigned to Chetan Patil- +91 9619599074 will revert back to you within 4 
        business hours from the time of receipt of the query.<br>
        If you do not receive the response within the specified time,
        we request to call on the given number.</p>
        <img src="http://holidaysbunch.com/img/logo1.png" width="100px">
            ';
    
        mail($email, $subject1, $message1, $headers1);  



        
        header('Location: thanks.php');
        exit();
        }
    ?>