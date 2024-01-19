
<?php
ob_start();
include '../db.php';

 $username=$_REQUEST['txtname'];  
$password=$_REQUEST['txtpassword'];
//echo "select * from login where Username='$username' && Password='$password'";
$sel_ad=mysqli_query($con,"select * from login where Username='$username' && Password='$password' && Usertype='Staff'");
 $num=  mysqli_num_rows($sel_ad);
$row_ad=  mysqli_fetch_array($sel_ad);
//if($username==$row_ad['Username'] && $password==$row_ad['Passsword'])
//{
 if($num>=1)
{   

if ($row_ad['Usertype']=='Staff') {
$_SESSION['admin']=$row_ad;
   header("location:home.php");
}

}
 

else{
echo '<script>alert("Invalide Username or Password...");window.location.href="index.php"</script>'; 
}



ob_flush();
?>