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
			<a href="#">Home</a> » <span class="breadcrumb_last" aria-current="page">Services</span>
		</div>
	</nav>
	<!-- //breadcrumbs -->
	<!-- /services-grids-->
	<section class="w3l-content-with-photo-4">
		<!-- /content-grids-->
		<div class="content-photo-info py-5">
			<div class="container py-lg-5">
				<!-- /row-->
				<div class="content-photo-grids row mt-0">
					<div class="photo-6-inf-left col-lg-6 pr-lg-4">
						<a href="#"><img src="assets/images/banner4.jpg" class="img-fluid" alt=""></a>
					</div>
					<div class="photo-6-inf-right col-lg-6 text-left pl-lg-5 mt-lg-0 mt-4">
						<h6 class="sub-title"> Services for you</h6>
						<h3 class="hny-title">Car Servicing
						</h3>
						<div class="servehny-1 mt-3">
							<a href="#link" class="ser1"><span class="fa fa-check"></span> Well trained technician.</a>
							<a href="#link" class="ser1"><span class="fa fa-check"></span> A hassle free Service</a>
							<a href="#link" class="ser1"><span class="fa fa-check"></span> Using Best Quality tools.</a>
							<a href="#link" class="ser1"><span class="fa fa-check"></span> Money is on safe Hand</a>

							<div class="read">
								<a class="btn mt-4" href="services.php">Read More</a>
							</div>

						</div>
					</div>
				</div>
			
				<!-- //row-->
				<!-- /row-->
			
				<!-- //row-->
				<!-- /row-->
				<div class="content-photo-grids row">

					<div class="photo-6-inf-right col-lg-6 text-left pr-lg-5 mb-lg-0 mb-4">
						<h6 class="sub-title"> Services for you</h6>
						<h3 class="hny-title">Electrical Wiring
						</h3>
						<div class="servehny-1 mt-3">
							<a href="#link" class="ser1"><span class="fa fa-check"></span> Well trained technician.</a>
							<a href="#link" class="ser1"><span class="fa fa-check"></span> 100% satisfactory work</a>
							<a href="#link" class="ser1"><span class="fa fa-check"></span> Reasonable Cost.</a>
							<a href="#link" class="ser1"><span class="fa fa-check"></span> Get Expert Technician</a>

							<div class="read">
								<a class="btn mt-4" href="services.php">Read More</a>
							</div>

						</div>
					</div>
					<div class="photo-6-inf-left col-lg-6 pr-lg-4">
						<a href="#"><img src="assets/images/banner43.jpeg" class="img-fluid" alt=""></a>
					</div>
				</div>
				<!-- //row-->

			</div>
		</div>
	</section>

	<!-- //specification-6-->
	<!--pricing-16-->
	
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
<!-- //script -->

<script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
<?php 
ob_flush();
?>