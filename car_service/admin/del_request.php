<?php
ob_start();
include '../db.php';
   
            $iid=$_GET['id'];
            $qr1="delete from tbl_request where Id='$iid'";
            $qr2=mysqli_query($con,$qr1);
            header("location:viewrequest.php");
      
ob_flush();
?>
