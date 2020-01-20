<!-- Send Email -->
<?php

    echo  $to="admin@holidaysbunch.com";
    $email=$_GET['email'];
    echo  $from=$email;
    $headers .= "From: travel@travel.com". "\r\n"; 
    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n"; 
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    $package_id=$_GET['package_id'];
    $package_name=$_GET['p_name'];
    $date=$_GET['date'];
    $days=$_GET['day'];
    $nights=$_GET['night'];
    $adult=$_GET['adult'];
    $child=$_GET['child'];
    $contact=$_GET['contact'];
    // Additional headers 

    $subject='New Enquiery For Tour Package From Website';
    $message = '<h2>New Enquiry From Website</h2>

    <h3>Package Details</h3>
    Package Id : '.$package_id.'<br>
    Package Name : '.$package_name.'<br>
    To: '.$to.'<br>
    Date : '.$date.'<br>
    Days: '.$days.'<br>
    Nights: '.$nights.'<br>
    <h3>Passenger Details</h3>
    Adult : '.$adult.'<br>
    Child : '.$child.'<br>
    Email : '.$email.'<br>
    Contact : '.$contact.'<br>
    ';

    mail("admin@holidaysbunch.com", $subject, $message, $headers);  
    
    header("Location:thanks.php"); 
    exit();
?>