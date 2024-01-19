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
	<?php 
        include './header.php';
        ?>
	<!-- //w3l-header -->
	<!-- /breadcrumbs -->
	<nav id="breadcrumbs" class="breadcrumbs">
		<div class="container page-wrapper">
			<a href="#">Home</a> » <span class="breadcrumb_last" aria-current="page">Dealers</span>
		</div>
	</nav>
	<!-- //breadcrumbs -->

	<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
				<div class="title-content text-center">
					<h6 class="sub-title">Meet Our</h6>
					<h3 class="hny-title">Amazing Dealers</h3>
					
				</div>
				<div class="row team-row">
                                    <?php 
                                    $qbn=  mysqli_query($con, "select *from tbl_dealer order by Id desc");
                                    while($r1=  mysqli_fetch_array($qbn))
                                    {
                                    ?>
					<div class="col-lg-3 col-sm-6 team-wrap">
						<div class="team-info text-left">
							
							<div class="column">
								<h3 class="name-pos"><a href="#url"><?php echo $r1['Name'];?></a></h3>
								<p><?php echo $r1['Address'];?></p>
                                                                <p><?php echo $r1['Place'];?></p>
								<div class="social">
									
									<div class="social">
										<a href="#email" class="email"><span class="fa fa-envelope-o"></span></a><?php echo $r1['Email'];?>
										<a href="#phone" class="phone"><span class="fa fa-phone"></span></a><?php echo $r1['Phno'];?>
									</div>
								</div>
                                                                <a href="send_request.php?id=<?php echo $r1['Id'];?>">
                Send Request
                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
              </a>
							</div>
						</div>
					</div>
					<?php 
                                    }
                                        ?>

				
				</div>
			</div>
	</section>
<?php 
        include './footer.php';
?>
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