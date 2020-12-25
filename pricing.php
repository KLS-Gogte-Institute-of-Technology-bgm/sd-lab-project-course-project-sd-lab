<?php
			session_start();


			require "conn.php";
			$p=$_SESSION['usrname'];

			if ($p==true) {
				$query="SELECT * FROM signup WHERE email='$p'";
				$data=mysqli_query($conn,$query);
				$result=mysqli_fetch_assoc($data);
			}else {
				header('location:index.php');
			}
 ?>
<!DOCTYPE HTML>
<!--
	Traveler by freehtml5.co
	Twitter: http://twitter.com/fh5co
	URL: http://freehtml5.co
-->
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agriax &mdash; Free Website Template, Free HTML5 Template by FreeHTML5.co</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">


	<!-- <div class="page-inner"> -->
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">AGRIAX <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="home.php">Home</a></li>
						<li><a href="destination.php">Export</a></li>
						<li><a href="import.php">Import</a></li>
						<li class="active"><a href="pricing.php">Pricing</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="logout.php">Logout</a></li>

					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/img_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Plans for Everyone</h1>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header>

	<div class="gtco-section border-bottom">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Choose The Best Plan For You</h2>
					<p>Join over 1 Million of users. </p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">Starter</h2>
						<div class="price"><sup class="currency">₹</sup>7<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>10 Exports</li>
							<li>20 Imports</li>
							<li>Live Tracking</li>
							<li>SMS Alert</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box">
						<h2 class="pricing-plan">Regular</h2>
						<div class="price"><sup class="currency">₹</sup>19<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>15 Imports</li>
							<li>40 Exports</li>
							<li>Live Tracking</li>
							<li>SMS Alert</li>
						</ul>
						<a href="#" class="btn btn-default btn-sm">Get started</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="price-box popular">
						<div class="popular-text">Popular</div>
						<h2 class="pricing-plan">Plus</h2>
						<div class="price"><sup class="currency">₹</sup>79<small>/mo</small></div>
						<p>Basic customer support for small business</p>
						<hr>
						<ul class="pricing-info">
							<li>Unlimitted Imports</li>
							<li>100 Exports</li>
							<li>Live Tracking</li>
							<li>SMS Alert</li>
						</ul>
						<a href="#" class="btn btn-primary btn-sm">Get started</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Frequently Ask Questions</h2>
					<p>Most questions are tried to answer here have a look.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<ul class="fh5co-faq-list">
						<li class="animate-box">
							<h2>What is Agriax?</h2>
							<p>Import Export Portal for Agriculture Products.</p>
						</li>
						<li class="animate-box">
							<h2>What language are available?</h2>
							<p>Only English as of now. we are working on other languages.</p>
						</li>
						<li class="animate-box">
							<h2>I have technical problem, who do I email?</h2>
							<p>you can contact/message us from contacts page.</p>
						</li>
						<li class="animate-box">
							<h2>Can I have a username that is already taken?</h2>
							<p>No, since every needs to be distinguished.</p>
						</li>
						<li class="animate-box">
							<h2>How do I use Agriax features?</h2>
							<p>You can Export products and Import.</p>
						</li>
						<li class="animate-box">
							<h2>Is Agriax free??</h2>
							<p>You can create free account but for Import and Export Service charges are applicable(including GST).</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new templates.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

		<footer id="gtco-footer" role="contentinfo">
			<div class="gtco-container">
				<div class="row row-p	b-md">

					<div class="col-md-4">
						<div class="gtco-widget">
							<h3>About Us</h3>
							<p>Import Export portal for agricultural products for Software Design Labrotory KLS Gogte Institute of Technology</p>
						</div>
					</div>

					<div class="col-md-2 col-md-push-1">
						<div class="gtco-widget">
							<h3>Export Destination</h3>
							<ul class="gtco-footer-links">
								<li><a href="#">European Union</a></li>
								<li><a href="#">China</a></li>
								<li><a href="#">Asean</a></li>
								<li><a href="#">North America</a></li>
								<li><a href="#">Arab League</a></li>
								<li><a href="#">South America</a></li>
								<li><a href="#">African union</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-2 col-md-push-1">
						<div class="gtco-widget">
							<h3>Registered Offices</h3>
							<ul class="gtco-footer-links">
								<li><a href="#">Vishakapatnam(Head-Quarters)</a></li>
								<li><a href="#">Marseille Fos Port -EU</a></li>
								<li><a href="#">Dubai-AL</a></li>
								<li><a href="#">Singapore-ASEAN</a></li>
								<li><a href="#">Shanghai-China</a></li>
								<li><a href="#">Hong Kong-HK</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md-3 col-md-push-1">
						<div class="gtco-widget">
							<h3>Get In Touch</h3>
							<ul class="gtco-quick-contact">
								<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
								<li><a href="#"><i class="icon-mail2"></i> info@git.edu</a></li>
								<li><a href="#"><i class="icon-chat"></i> Live Chat</a></li>
							</ul>
						</div>
					</div>

				</div>

				<div class="row copyright">
					<div class="col-md-12">
						<p class="pull-left">
							<small class="block">&copy; 2020 Agriax. All Rights Reserved.</small>
							<small class="block">Designed by <a href="#" target="_blank">SDLAB</a></small>
						</p>
						<p class="pull-right">
							<ul class="gtco-social-icons pull-right">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>

	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
