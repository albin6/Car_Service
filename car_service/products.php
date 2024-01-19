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
		<section class="w3l-team-main">
		<div class="team py-5">
			<div class="container py-lg-5">
				
				<div class="row team-row">
                                    <?php 
                                    $qvnm=  mysqli_query($con, "select *from products where Quantity>0 order by Id desc");
                                    while ($r1=  mysqli_fetch_array($qvnm))
                                    {
                                    ?>
					<div class="col-lg-3 col-sm-6 team-wrap">
						<div class="team-info text-left">
							<div class="column position-relative">
                                                            <a href="#url"><img style="height: 200px;" src="admin/<?php echo $r1['Image'];?>" alt=""
										class="img-fluid team-image" /></a>
							</div>
							<div class="column">
								<h3 class="name-pos"><a href="#url"><?php echo $r1['Name'];?></a></h3>
								<p><?php echo $r1['Des'];?> </p>
                                                                <p><b>Features:</b><?php echo $r1['Features'];?> </p>
                                                        <p><b>Price:</b><?php echo $r1['Price'];?> </p>
                                                         <p><b>Available Quantity:</b><?php echo $r1['Quantity'];?> </p>
                                                        <?php 
                                                        $qn=$r1['Quantity'];
                                                        if($qn>0)
                                                        {
                                                        ?>
                                                        <a href="payment.php?id=<?php echo $r1['Id'];?>" class="btn btn-danger">BUY</a>
                                                        <?php 
                                                        }
                                                        else
                                                        {
                                                            ?>
                                                         <a href="#" class="btn btn-danger">OUT OF STOCK</a>
                                                        <?php 
                                                        }
                                                        ?>
							</div>
						</div>
					</div>
					<?php 
                                    }
                                        ?>
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