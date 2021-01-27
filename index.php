<?php
          session_start();
          require "conn.php";

          if(isset($_POST['submit'])){
            $usr=$_POST['username'];
            $pwd=$_POST['password'];

            $query="SELECT * FROM signup WHERE email='$usr' && password='$pwd'";
            $data=mysqli_query($conn,$query);
            $n=mysqli_num_rows($data);
            if($n==1){
              $_SESSION['usrname']=$usr;
              header('location:home.php');
            }else {
              echo "failed";
            }

          }
?>


<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Agriax &mdash; We import and export aggriculture products</title>
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
					<div id="gtco-logo"><a href="index.html">Agriax <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="destination.php">Export</a></li>
						<li><a href="import.php">Import</a></li>
						<li><a href="pricing.php">Pricing</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</div>
			</div>

		</div>
	</nav>

	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/img_2.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">


					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Planing to import or export your products to some major countries? </h1>
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">

									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Login</h3>


											<form class="" action="" method="post">

												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Username</label>
														<input type="email" name="username" id="email" class="form-control">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Password</label>
														<input type="password" name="password" id="p" class="form-control">
													</div>
												</div>

												<!-- <div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Country</label>
														<select name="#" id="activities" class="form-control">
															<option value="">India</option>
															<option value="">France </option>
															<option value="">USA</option>
															<option value="">Singapore</option>
														</select>
													</div>
												</div> -->

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" name="submit" class="btn btn-primary btn-block" value="Submit">
													</div>
												</div>


                        <p>No Account! <a href="reg.php">Register Now</a></p>

											</form>
										</div>


									</div>
								</div>
							</div>
						</div>
					</div>


				</div>
			</div>
		</div>
	</header>


	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Destination and products</h2>
					<p>Come have a look at some of our common places around the globe from where we import products and to where we export them! .</p>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/honey_image.jpg" class="fh5co-card-item image-popup">
						<figure>
							<!--<div class="overlay"><i class="ti-plus"></i></div> -->
							<img src="images/honey_image.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>USA</h2>
							<p>Products cover these following categories:Cereals,Honey,cofee,tea etc!</p>
							<p><span class="btn btn-primary">Export/Import now!</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/vegetables_image.jpg" class="fh5co-card-item image-popup">
						<figure>
							<!--<div class="overlay"><i class="ti-plus"></i></div> -->
							<img src="images/vegetables_image.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Seoul, South Korea</h2>
							<p>Products cover these following categories:apple,bamboo </p>
							<p><span class="btn btn-primary">Export/Import now!</span></p>
						</div>
					</a>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/cofee_image.jpg" class="fh5co-card-item image-popup">
						<figure>
						<!--	<div class="overlay"><i class="ti-plus"></i></div>  -->
							<img src="images/cofee_image.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Paris, France</h2>
							<p>Products cover these following categories:xyz,xyz,xyz</p>
							<p><span class="btn btn-primary">Export/Import now!</span></p>
						</div>
					</a>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/nuts_image.jpg" class="fh5co-card-item image-popup">
						<figure>
						<!--	<div class="overlay"><i class="ti-plus"></i></div>  -->
							<img src="images/nuts_image.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sydney, Australia</h2>
							<p>Products cover these following categories:xyz,xyz,xyz</p>
							<p><span class="btn btn-primary">Export/Import now!</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/wheat_image.jpg" class="fh5co-card-item image-popup">
						<figure>
					<!--		<div class="overlay"><i class="ti-plus"></i></div>   -->
							<img src="images/wheat_image.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Greece, Europe</h2>
							<p>Products cover these following categories:xyz,xyz,xyz</p>
							<p><span class="btn btn-primary">Export/Import now!</span></p>
						</div>
					</a>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<a href="images/fruit_image.jpg" class="fh5co-card-item image-popup">
						<figure>
					<!--		<div class="overlay"><i class="ti-plus"></i></div>  -->
							<img src="images/fruit_image.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Spain, Europe</h2>
							<p>Products cover these following categories:xyz,xyz,xyz</p>
							<p><span class="btn btn-primary">BoExport/Importok now!</span></p>
						</div>
					</a>
				</div>

			</div>
		</div>
	</div>

	<!--<div id="gtco-features">                 Start of feature
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>How It Works</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>1</i>
						</span>
						<h3>Lorem ipsum dolor sit amet</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>2</i>
						</span>
						<h3>Consectetur adipisicing elit</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i>3</i>
						</span>
						<h3>Dignissimos asperiores vitae</h3>
						<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
					</div>
				</div>


			</div>
		</div>
	</div>                                                     end of feature    -->


	<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/agri-image3.jpg)"  >
		<div class="overlay"></div>
		<div class="gtco-container text-center">
			<div class="display-t">
				<div class="display-tc">
					<h1>We have high quality services that you will surely love!</h1>
				</div>
			</div>
		</div>
	</div>

	  <div id="gtco-counter" class="gtco-section">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
					<h2>Our Success</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row">

				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="7" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Continents</span>

					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="97" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Countries</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12402" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Exporters</span>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
					<div class="feature-center">
						<span class="counter js-counter" data-from="0" data-to="12202" data-speed="5000" data-refresh-interval="50">1</span>
						<span class="counter-label">Happy Customer</span>

					</div>
				</div>

			</div>
		</div>
	</div>



	<div id="gtco-subscribe" style="background-image: url(images/agri-image5.jpg)">     <!-- Start of subscribtion part -->
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Register now to stay in touch with us.</p>
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
	</div>                 <!-- End of subscription part -->



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
