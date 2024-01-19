<?php 
ob_start();
include './db.php';
$uid=$_SESSION['user']['Id'];
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
                                        <h3>View Status</h3>
				<div class="row">
                                
                                <div class="col-12">
                                    <table border="1" style="width: 100%;">
                                       <tr>
                                           <th>Sl.no</th>
                                           <th>Title</th>
                                           <th>Request</th>
                                             <th>Status</th>
                                       </tr>
                                        <?php 
                                        $i=1;
                                 $qbn= mysqli_query($con, "select *from tbl_request where Userid='$uid'");
                                 while ($rrt=  mysqli_fetch_array($qbn))
                                 {
                                 ?>
                                       <tr>
                                           <td><?php echo $i;?></td>
                                           <td><?php echo $rrt['Title'];?></td>
                                      <td><?php echo $rrt['Request'];?></td>
                                      <td><?php echo $rrt['Status'];?></td>
                                   </tr>
                                   <?php
                                   $i++;
                                 }
                                ?>
                                   </table>
                                </div>
                                </div>
                                
                             
                                
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