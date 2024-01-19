<?php 
ob_start();
include './db.php';
$uid=$_SESSION['user']['Id'];

$id=$_GET['id'];
$qvb=  mysqli_query($con, "select *from products where Id='$id'");
$r=  mysqli_fetch_array($qvb);
$price=$r['Price'];
$qnt=$r['Quantity'];
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
        <script>
            function multiply()
            {
                var p=document.getElementById('p').value;
                var q=document.getElementById('q').value;
                var t1=p*q;
               
               document.getElementById('t').value=t1;
               
            }
        </script>
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
					       <form action="" method="post" class="creditly-card-form agileinfo_form">
                                       <section class="creditly-wrapper wthree, w3_agileits_wrapper">
                                          <div class="credit-card-wrapper">
                                             <div class="first-row form-group">
                                                 <div class="controls">
                                                   <label class="control-label">Price</label>
                                                   <input class="billing-address-name form-control" type="text" id="p" name="price" value="<?php echo $price;?>" readonly="" />
                                                </div>
                                                      <div class="controls">
                                                   <label class="control-label">Quantity</label>
                                                   <input class="billing-address-name form-control" type="text" name="quantity" value="" id="q" onkeyup="multiply();"  />
                                                </div>
                                                 <div class="controls">
                                                   <label class="control-label">Total</label>
                                                   <input class="billing-address-name form-control" type="text" name="total" id="t" value="" readonly="" />
                                                </div>
                                                <div class="controls">
                                                   <label class="control-label">Name on Card</label>
                                                   <input class="billing-address-name form-control" type="text" name="name" placeholder="E.g : John Smith">
                                                </div>
                                                <div class="w3_agileits_card_number_grids">
                                                   <div class="w3_agileits_card_number_grid_left">
                                                      <div class="controls">
                                                         <label class="control-label">Card Number</label>
                                                         <input class="number credit-card-number form-control"  type="text" name="num"   placeholder="&#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149; &#149;&#149;&#149;&#149;">
                                                      </div>
                                                   </div>
                                                   <div class="w3_agileits_card_number_grid_right">
                                                      <div class="controls">
                                                         <label class="control-label">CVV</label>
                                                         <input class="security-code form-control" Â· inputmode="numeric" type="text" name="security-code" placeholder="&#149;&#149;&#149;">
                                                      </div>
                                                   </div>
                                                   <div class="clear"> </div>
                                                </div>
                                                <div class="controls">
                                                   <label class="control-label">Expiration Date</label>
                                                   <input class="expiration-month-and-year form-control" type="text" name="exp" placeholder="MM / YY">
                                                </div>
                                             </div>
                                              <input type="hidden" name="hid" value="<?php echo $p;?>"/>
                                              <input type="submit" name="s1" value="Make A Payment"/>
<!--                                              <button type="submit" name="sub" class="submit"><span>Make a payment </span></button>-->
                                          </div>
                                       </section>
                                    </form>
                                     <?php 
                                     if(isset($_POST['s1']))
                                     {
                                         $hid=$_POST['hid'];
                                         $cardnam=$_POST['name'];
                                          
                                           $quantity=$_POST['quantity'];
                                            $total=$_POST['total'];
                                            
                                              $number=$_POST['num'];
                                           $security=$_POST['security-code'];
                                           $exp=$_POST['exp'];
                                           if($qnt>=$quantity)
                                           {
                                        $qpp=  mysqli_query($con,"insert into payment(Uid,Pid,Price,Quatity,Total,cardname,Cardno,Cvv,Expirydate)values('$uid','$id','$price','$quantity','$total','$cardnam','$number','$security','$exp')");  
                                    $qtyy=$qnt-$quantity;
                                        $qjj=  mysqli_query($con, "update products set Quantity='$qtyy' where Id='$id'");
                                      echo '<script>alert("Payment transferred successfully...");window.location.href="products.php";</script>';
                                           }
                                           else
                                           {
                                               echo '<script>alert("Invalid Entry Of Quantity.Please Check Available quantity...");window.location.href="products.php"</script>'; 
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