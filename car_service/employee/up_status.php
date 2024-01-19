<?php
ob_start();
include '../db.php';
$id=$_POST['hid'];
$sltwrk=$_POST['sltstatus'];
  $qr="update tbl_request set Status='$sltwrk' where Id='$id'";
$qrr=  mysqli_query($con,$qr);
echo '<script>alert("Update Status...");window.location.href="viewjobs.php";</script>';
?>