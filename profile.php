<?php 
ob_start();
include './db.php';
$uid=$_SESSION['user']['Id'];
$qm=  mysqli_query($con, "select *from tbl_reg where Id='$uid'");
$r1=mysqli_fetch_array($qm);
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
                                              <h3>Profile</h3>
						<form action="" method="post" class="signin-form">
							<div class="input-grids">
                                                            <input type="text" name="name" placeholder="Full name" value="<?php echo $r1['Name'];?>" class="contact-input" />
							
								<input type="text" name="place" placeholder="Place" value="<?php echo $r1['Place'];?>" class="contact-input" />
								<input type="number" name="phone" placeholder="Phone number" value="<?php echo $r1['Phno'];?>" class="contact-input" />
                                                              
                                                                
							</div>
							<div>
								<textarea name="address" placeholder="Type your Address here" required=""><?php echo $r1['Address'];?></textarea>
							</div>
							<div class="text-right">
                                                            <input type="submit" name="sub" class="btn submit" value="Update">
							</div>
						</form>
                                            <?php 
                                            if(isset($_POST['sub']))
                                            {
                                                $name=$_POST['name'];
                                               
                                                $place=$_POST['place'];
                                                $phone=$_POST['phone'];
                                                $address=$_POST['address'];
                                               
                                                $qry=  mysqli_query($con, "update tbl_reg set Name='$name',Phno='$phone',Address='$address',Place='$place' where Id='$uid'");
                                                echo '<script>alert("Updated Successfully...");</script>';
                                            }
                                            ?>
					</div>
                               
                         
                           
                       
         
					</div>

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