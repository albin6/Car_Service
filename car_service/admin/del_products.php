<?php
ob_start();
include '../db.php';
        if(isset($_GET['id']))
        {
            $iid=$_GET['id'];
            
            $qr1="delete from products where Id='$iid'";
            $qr2=mysqli_query($con,$qr1);
           
            if($qr2)
            {
            header("location:addproducts.php?d=1");
        }
        else 
        {
        	echo '<script>alert("Can not delete... officers exist!!!");</script>';
        }
        }
ob_flush();
?>
