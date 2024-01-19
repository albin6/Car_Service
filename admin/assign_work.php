<?php
ob_start();
include '../db.php';
$id=$_POST['hid'];
 $sltwrk=$_POST['sltwrk'];
  $qr="update tbl_request set Employee='$sltwrk',Status='Forward to Employee' where Id='$id'";
$qrr=  mysqli_query($con,$qr);
echo '<script>alert("Assign work to employee...");window.location.href="viewrequest.php";</script>';
?>