<?php
			session_start();
 ?>

<!DOCTYPE HTML>
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
	<nav class="gtco-nav" style="background-color: #000000;" role="navigation">
		<div class="gtco-container">

			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">AGRIAX <em>.</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
            <li class="active"><a href="home.php">Home</a></li>
						<li><a href="destination.php">Export</a></li>
						<li><a href="import.php">Import</a></li>
						<li><a href="pricing.php">Pricing</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="logout.php">Logout</a></li>

					</ul>
				</div>
			</div>

		</div>
	</nav>

	<!-- <header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" style="background-image: url(images/import.jpg)">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-center">
					<div class="row row-mt-15em">

						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">

							<?php
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
							<h1>Welcome, <?php echo $result['name']; ?></h1>
							<h1>Import Here</h1>
						</div>

					</div>

				</div>
			</div>
		</div>
	</header> -->


  <div class="gtco-section border-bottom">
    <div class="gtco-container">
      <div class="row">
        <div class="col-md-12">
          <div class="col-md-6 animate-box">
          <h2>Services</h2>
          <h3>Choose below</h3>

          <a href="destination.php">
            <div class="form-group btn btn-primary" style="width:400px; color:#4ed9d9;">
              <h3 style="color:#ffffff;">Export</h3>
            </div>
          </a>

          <a href="import.php">
            <div class="form-group btn btn-primary" style="width:400px;margin-top:20px;">
              <h3 style="color:#ffffff;">Import</h3>
            </div>
          </a>
          <a href="pricing.php">
            <div class="form-group btn btn-primary" style="width:400px;margin-top:20px;">
              <h3 style="color:#ffffff;">Pricing</h3>
            </div>
          </a>
          <a href="contact.php">
            <div class="form-group btn btn-primary" style="width:400px;margin-top:20px;">
              <h3 style="color:#ffffff;">Contact</h3>
            </div>
          </a>

        </div>


        <div class="col-md-5 col-md-push-1 animate-box">

          <div class="gtco-contact-info">
            <?php

                    $name=$result['name'];
                    $email=$result['email'];
                    $country=$result['country'];
                    $pan=$result['pan'];
                    $eic=$result['eic'];
            ?>

            <h2>Profile</h2>
            <h3>Name: <?php echo $name; ?></h3>
            <h3>Email Address: <?php echo $email; ?></h3>
            <h3>Country: <?php echo $country; ?> <img style="width:30px;height:30px;"src="images/<?php echo $country.".png"; ?>"/></h3>
            <h3>Pan: <?php echo $pan; ?></h3>
            <h3>EIC: <?php echo $eic; ?></h3>

          </div>


        </div>
        </div>
      </div>
    </div>
  </div>


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
