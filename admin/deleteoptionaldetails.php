<?php
include "functions/connection.php";
session_start();
$_SESSION['username'];
if(!isset($_SESSION['username']))
{
  header('Location: login.php');
} 
    if(isset($_GET['country']))
    {
        echo $headiing=$_GET['name'];
        echo $type=$_GET['type'];
        echo $country=$_GET['country'];
        $sql="delete from optional_tour where country='$country' AND heading='$headiing' AND type='$type'";
        $query=mysqli_query($con,$sql);
        if($query)
        {
            echo "Deleted!";
            echo '<script>window.location.href = "viewoptionaldetails.php?country='.$country.'&msg=Tour Deleted Successfully!";</script>';
           
        }
    }
?>