<?php 
ob_start();
include './db.php';
$id=$_GET['id'];
$qrt=  mysqli_query($con, "update tbl_request set Status='Forward to Admin' where Id='$id'");
echo '<script>alert("successfully send request to Admin");window.location.href="viewrequest.php";</script>';



?>