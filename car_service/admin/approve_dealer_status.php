<?php
ob_start();
include '../db.php';
$id=$_GET['id'];
$qb=  mysqli_query($con, "update tbl_dealer set Status='Approve' where Id='$id'");
echo '<script>alert("Approve User");window.location.href="viewdealers.php"</script>';
ob_flush();
?>
