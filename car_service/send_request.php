<?php 
ob_start();
include './db.php';
$uid=$_SESSION['user']['Id'];
//$mid=$_GET['id'];
?>
<!doctype html>
<html lang="zxx">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Car Service Center
	</title>
	<!-- Template CSS -->
	<link rel="stylesheet" href="assets/css/style-starter.css">
	<!-- Template CSS -->
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:400,400i,500,600,700&display=swap"
		rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Lato:300,400,400i,700&display=swap" rel="stylesheet">
	<!-- Template CSS -->
</head>

<body>
	<!--w3l-header-->
<?php 
        include './header.php';
        ?>
	<!-- //w3l-header -->
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="#">Home</a> » <span class="breadcrumb_last" aria-current="page">Login</span>
		</div>
	</nav>
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container py-lg-5">
				<div class="grid contact-grids row">
					
					<div class="col-lg-6 contacts12-main">
	 <form class="form-contact " action="" method="POST" id="" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="row">
                                    <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" id="name"    placeholder="Enter your Title" required=""/> 
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                     <textarea class="form-control" name="complaint" id="name"    placeholder="Enter your Request" required=""></textarea>   
                                    </div>
                                </div>
                               
                                
                            </div>
                            <div class="form-group mt-3">
                                <input type="submit" class="btn-primary btn" name="submit" value="SEND REQUEST">
                            </div>
                           
                        </form>
         <?php

                    if(isset($_POST['submit']))
                    {
                        $uid=$_SESSION['user']['Id'];
                         $title=$_POST['title']; 
                        $complaint=$_POST['complaint']; 
                     $qr1=mysqli_query($con,"insert into tbl_request(Userid,Title,Request,Status,Employee) values('$uid','$title','$complaint','Pending','none')");
                      if($qr1)
                        {
                          echo '<script>alert("Request Registered Successfully!!");</script>';
                        }
                    }
                    ?>
					</div>
                                    <div class="col-lg-6 contacts12-main">
                                         <h2 class="contact-title">Reply</h2>
                        <form class="form-contact " action="" method="POST" id="" novalidate="novalidate" enctype="multipart/form-data">
                            <div class="row">
                                 <?php 
                                 $qj=  mysqli_query($con, "select *from tbl_request where Userid='$uid'");
                                 ?>
                           <div class="col-12">
                                    <div class="form-group">
                                        <table border="1">
                                            <tr>
                                                <th>Title</th>
                                                <th>Request</th>
                                                
                                            </tr>
                                            <?php 
                                            while ($r6=  mysqli_fetch_array($qj))
                                 {
                                            ?>
                                            <tr>
                                                <td><?php echo $r6['Title'];?></td> 
                                                  <td><?php echo $r6['Request'];?></td> 
                                                 
                                            </tr>
                                             <?php 
                                 }
                                ?>
                                        </table>  
                                    </div>
                                </div>    
                              
                            </div>
                         
                           
                        </form>
                                    </div>

				</div>
			</div>
	</section>

	
	<?php 
        include './footer.php';
?>
	<!--//footer-66 -->


<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->

<!--//-->
<script>
	$(function () {
		$('.navbar-toggler').click(function () {
			$('body').toggleClass('noscroll');
		})
	});
</script>
<!--/scroll-down-JS-->
<!-- stats -->
<script src="assets/js/jquery.waypoints.min.js"></script>
<script src="assets/js/jquery.countup.js"></script>
<script>
	$('.counter').countUp();
</script>
<!-- //stats -->
<!-- for blog carousel slider -->
<script src="assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
	$(document).ready(function () {
		$('.owl-one').owlCarousel({
			loop: true,
			margin: 0,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: true
				},
				1000: {
					items: 1,
					nav: true
				}
			}
		})
	})
</script>
<!-- //testimonials owlcarousel -->
<script>
	$(document).ready(function () {
		$('.owl-two').owlCarousel({
			loop: true,
			margin: 30,
			nav: false,
			responsiveClass: true,
			autoplay: false,
			autoplayTimeout: 5000,
			autoplaySpeed: 1000,
			autoplayHoverPause: false,
			responsive: {
				0: {
					items: 1,
					nav: false
				},
				480: {
					items: 1,
					nav: false
				},
				667: {
					items: 1,
					nav: false
				},
				1000: {
					items: 1,
					nav: false
				}
			}
		})
	})
</script>
<!-- //script for Testimonials-->
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>