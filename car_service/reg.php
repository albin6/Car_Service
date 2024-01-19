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
	<section class="w3l-contact-main">
		<div class="contact-infhny py-5">
			<div class="container py-lg-5">
				<div class="grid contact-grids row">
					
					<div class="col-lg-6 contacts12-main">
						<form action="" method="post" class="signin-form">
							<div class="input-grids">
                                                            <input type="text" name="name" placeholder="Full name" required="" class="contact-input" />
								<input type="email" name="email" placeholder="Your email" required="" class="contact-input" />
								<input type="text" name="place" placeholder="Place" required="" class="contact-input" />
								<input type="number" name="phone" id="cnumber" required="" onchange="validate_card()" placeholder="Phone number" class="contact-input" />
                                                                 <script>
                                            function validate_card()
                                            {
                                            var val=document.getElementById('cnumber').value;
                                            if(val.length<10)
                                            {
                                            alert('Must Enter 10 digit');
                                            }
                                            else if(val.length>10)
                                            {
                                            alert('Must Enter 10 digit');
                                            }
                                            }
                                        </script>
                                                                <input type="text" name="pswd" placeholder="Password" required="" class="contact-input" />
                                                                
							</div>
							<div>
								<textarea name="address" placeholder="Type your Address here" required=""></textarea>
							</div>
							<div class="text-right">
                                                            <input type="submit" name="sub" class="btn submit" value="Register">
							</div>
						</form>
                                            <?php 
                                            if(isset($_POST['sub']))
                                            {
                                                $name=$_POST['name'];
                                                $email=$_POST['email'];
                                                $place=$_POST['place'];
                                                $phone=$_POST['phone'];
                                                $address=$_POST['address'];
                                                 $pswd=$_POST['pswd'];
                                                $qry=  mysqli_query($con, "insert into tbl_reg(Name,Email,Phno,Address,Place,Password,Status) values('$name','$email','$phone','$address','$place','$pswd','Pending')");
                                                echo '<script>alert("Register Successfully...After Admin verification you can enter into our website...");</script>';
                                            }
                                            ?>
					</div>
	<div class="col-lg-6 contacts12-main">
						<form action="" method="post" class="signin-form">
							<div class="input-grids">
								<input type="email" name="email" placeholder="Username" class="contact-input" />
                                                                <input type="password" name="pswd" placeholder="Password" class="contact-input" />
							</div>
							
							<div class="text-right">
                                                            <input type="submit" name="login" class="btn submit" value="Login">
							</div>
						</form>
                                            <?php 
                                            if(isset($_POST['login']))
                                            {
                                            
                                                $email=$_POST['email'];
                                                $pswd=$_POST['pswd'];
                                              //  echo "select *from tbl_reg where Email='$email' and Password='$pswd' and Status='Approve'";
                                                $qry=  mysqli_query($con, "select *from tbl_reg where Email='$email' and Password='$pswd' and Status='Approve'");
                                                $row=  mysqli_fetch_array($qry);
                                                $n1=  mysqli_num_rows($qry);
                                                if($n1>=1)
                                                {
                                                    $_SESSION['user']=$row;
                                                    header("location:index.php");
                                                }
                                                else {
                                                    echo '<script>alert("Invalid Username and Password...!");</script>';
                                                        }
                                                
                                            }
                                            ?>
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