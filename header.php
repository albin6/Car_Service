<section class="w3l-top-header-content">
		<div class="hny-top-menu">
			<div class="container">
				<div class="row">
					<ul class="accounts col-sm-8">
						<li class="top_li"><span class="fa fa-clock-o"></span> <a href="#">Monday - Friday: 10:00 -
								18:00</a>
						</li>
						<li class="top_li mr-lg-0"><span class="fa fa-envelope-o"></span> <a
								href="#" class="mail"> mail@carservicecenter.com</a>

						</li>
						<li class="top_li"><span class="fa fa-phone"></span> <a href="tel:+142 5897555">+142
								9015897555</a>
						</li>

					</ul>
					<ul class="social-top col-sm-4">
						<li><a href="#"><span class="fa fa-facebook"></span></a></li>
						<li><a href="#"><span class="fa fa-instagram"></span></a> </li>
						<li><a href="#"><span class="fa fa-twitter"></span></a></li>
						<li><a href="#"><span class="fa fa-vimeo"></span></a> </li>
						<li>
							<a href="#">
								<span class="fa fa-linkedin"></span>
							</a>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</section>
	<!--//top-header-content-->
	<header class="w3l-header-nav">
		<!--/nav-->
		<nav class="navbar navbar-expand-lg navbar-light fill px-lg-0 py-0 px-3">
			<div class="container"> 
				<h1><a class="navbar-brand" href="index.php">Car Service <span>Center</span></a></h1>
				<!-- if logo is image enable this   
						<a class="navbar-brand" href="#index.html">
							<img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
						</a> -->
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
					data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
					aria-label="Toggle navigation">
					<!-- <span class="navbar-toggler-icon"></span> -->
					<span class="fa icon-expand fa-bars"></span>
					<span class="fa icon-close fa-times"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link" href="index.php">Home</a>
						</li>
						
                                                <?php 
                                                if(isset($_SESSION['user']))
                                                {
                                                ?>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="profile.php">Profile</a>
						</li>
                                                 <li class="nav-item">
                                                     <a class="nav-link" href="complaint.php">Complaint</a>
						</li>
                                                 <li class="nav-item">
                                                     <a class="nav-link" href="feedback.php">Feedback</a>
						</li>
                                                <li class="nav-item">
                                                <a class="nav-link" href="products.php">Products</a>
						</li>
                                                     <li class="nav-item">
                                                         <a class="nav-link" href="send_request.php">Request</a>
						</li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="requset_status.php">Status</a>
						</li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="logout.php">Logout</a>
						</li>
                                                <?php 
                                                }
                                                else
                                                {
                                                ?>
                                                <li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">Services</a>
						</li>
						<li class="nav-item">
                                                    <a  class="ml-lg-3 mt-lg-0 mt-3 book btn btn-secondary btn-style" href="reg.php">Public</a>
						</li>
                                              
                                                <?php 
                                                }
                                                ?>
					</ul>
                                
				</div>
			</div>
		</nav>
		<!--//nav-->
	</header>
        