<?php
     include "functions/connection.php";
    session_start();
    $_SESSION['username'];
    if(!isset($_SESSION['username']))
    {
      header('Location: login.php');
    }  


    if(isset($_GET['id']))
    {
        echo $id=$_GET['id'];
        $sql1="delete from package where id='$id'";
        $sql2="delete from itinerary where package_id='$id'";
        $sql3="delete from inclusions where package_id='$id'";
        $query1=mysqli_query($con,$sql1);
        $query2=mysqli_query($con,$sql2);
        $query3=mysqli_query($con,$sql3);
        echo "deleted";
        header('Location: packagestats.php');
    }
?>