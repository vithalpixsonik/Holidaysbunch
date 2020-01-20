<?php
 if(isset($_POST['update-package']))
 {
   $id=$_GET['id'];
   $name=$_POST['name'];
   $stars=$_POST['stars'];
   $double_sharing=$_POST['double-sharing'];
   $single_occupancy=$_POST['single-occupancy'];
   $child_bed=$_POST['child-bed'];
   $child_without=$_POST['child-without'];
   $sql = "UPDATE hotel SET hotel_name='$name',stars='$stars',double_tripple_sharing_cost='$double_sharing',	single_occupancy_cost='$single_occupancy',child_bed_cost='$child_bed',child_without_bed_cost='$child_without'  WHERE package_id='$id' and stars='$star'";
   $query=mysqli_query($con,$sql);
  
   if($query)
   {
    
    header('Location: updatehotels.php');
   }
   else{
     echo mysqli_error($con);
   }
 }
?>