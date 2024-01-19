<?php 
ob_start();
include './db.php';
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
			<a href="#">Home</a> » <span class="breadcrumb_last" aria-current="page">About</span>
		</div>
	</nav>
	<!-- //breadcrumbs -->
	<section class="w3l-content-about-grid">
		<div class="about-inner-cont py-5">
			<div class="container py-lg-5">
				<div class="row content-ab-grids">
					<div class="col-lg-6 content-ab-left">
						<div class="title-content text-left">
							<h6 class="sub-title">Welcome to our Car Service Center</h6>
							<h3 class="hny-title">About Our Company</h3>
						</div>
						<p class="my-3">At Car Service Center, quality service is affordable. We are powered by Bosch, to be your world-class workshop next door for complete car care - service, maintenance, and car repairs, for any car.</p>
						
						<img src="assets/images/ab2.jpg" class="img-fluid" alt="" />
					</div>
					
				</div>



			</div>
		</div>
	</section>
	<section class="w3l-progress-6">
		<!-- /content-6-section -->
		<div class="progress-6-mian py-5">
			<div class="container py-lg-3">
				<div class="progress-in row">
					<div class="content-gd col-lg-6">
						<div class="title-content text-left">
							
							<h3 class="hny-title">We have 17+ years of Professional Experience</h3>
							
						</div>
					</div>
					<div class="content-gd col-lg-6 mt-lg-0 mt-4">
						<div class="progress-info">
							<h6 class="progress-tittle">Reparing</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
									aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Office </h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 90%"
									aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Car Cleaning
							</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
									aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
						<div class="progress-info">
							<h6 class="progress-tittle">Customer Satisfaction</h6>
							<div class="progress">
								<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
									aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!--//team-sec-->
	
	
	<!--//testimonials-->
	<!-- footer-66 -->
	<?php 
        include './footer.php';
?>
	<!--//footer-66 -->
</body>

</html>

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