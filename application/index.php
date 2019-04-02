<!DOCTYPE html>
<html lang="en">

<?php
    include '../model.php';
    use ead\model;

    $initDb = model\model::initDatabase();
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Event Management EAD</title>
	<meta name="description" content="Cardio is a free one page template made exclusively for Codrops by Luka Cvetinovic" />
	<meta name="keywords" content="html template, css, free, one page, gym, fitness, web design" />
	<meta name="author" content="Luka Cvetinovic for Codrops" />
	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/cardio.css">
</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#intro">Home</a></li>
					<li><a href="#pricing">Event</a></li>
					<li><a href="#yyy">About Us</a></li>
					<li><a href="#hhh">Sign Up</a></li>
					<li><a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue">Sign In</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">"Gambar Lab EAD"</h3>
							<h1 class="white typed">Event EAD Laboratory</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>



	<section id="pricing" class="section">
		<div class="container">
			<div class="row title text-left">
				<h2 class="margin-top white">Event</h2>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
					<div class="pricing">
						<div class="box-main active" data-img="img/pricing1.jpg">
							<h4 class="white">EVENT 1</h4>
							<h4 class="white regular light"> Quotes </h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Daftar</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second active text-left">
							<h4 class="white">Deskripsi</h4>
							<p class="white">Deskripsi Event 1</p>
						</div>
						<div class="box-third active">
							<img src="img/team/team3.jpg" alt="Team Image" class="avatar">
						</div>
					</div>
					<div class="pricing">
						<div class="box-main" data-img="img/pricing2.jpg">
							<h4 class="white">Event 2</h4>
							<h4 class="white regular light"> Quotes </h4>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Daftar</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<h4 class="white">Deskripsi</h4>
							<p class="white">Deskripsi Event 1</p>
						</div>
						<div class="box-third active">
							<ul class="white-list text-left">
								<li>One Personal Trainer</li>
								<li>Big gym space for training</li>
								<li>Free tools &amp; props</li>
								<li>Free locker</li>
								<li>Free before / after shower</li>
							</ul>
						</div>
						<div class="pricing">
							<div class="box-main" data-img="img/pricing2.jpg">
								<h4 class="white">Event 3</h4>
								<h4 class="white regular light"> Quotes</h4>
								<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Daftar</a>
								<i class="info-icon icon_question"></i>
							</div>
							<div class="box-second">
								<h4 class="white">Deskripsi</h4>
								<p class="white">Deskripsi Event 1</p>
							</div>
							<div class="box-third active">
								<ul class="white-list text-left">
									<li>One Personal Trainer</li>
									<li>Big gym space for training</li>
									<li>Free tools &amp; props</li>
									<li>Free locker</li>
									<li>Free before / after shower</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section section-padded blue-bg">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<i class="icon fa fa-cloud"></i>
							<h4 class="white light">About Us</h4>
							<h4 class="light-white light">Deskripsi About Us</h4>
						</div>
						<div class="item text-center">
							<a href="https://www.instagram.com/ead.fse/?hl=en"><i class="icon fa fa-instagram"></i>
								<h4 class="white light">Instagram</h4>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
				<h3 class="white">Sign In</h3>
				<form action="" method="post" class="popup-form">
					<input type="email" name="inEmail" class="form-control form-white" placeholder="Email">
					<input type="Password" name="inPassword" class="form-control form-white" placeholder="Password">
					<button type="submit" name="btnLogin" class="btn btn-submit">Sign In</button>
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div id="hhh" class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<!--<h3 class="white">Reserve a Free Trial Class!</h3>
					<h5 class="light regular light-white">Shape your body and improve your health.</h5>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>-->
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 id="ha" class="white text-center">Sign Up <span class="open-blink"></span></h3>
					<form action="" method="post" class="popup-form">
						<!--<input type="text" class="form-control form-white" name="inFullname" placeholder="Fullname">-->
						<input type="text" class="form-control form-white" name="inUsername" placeholder="Username">
						<input type="email" class="form-control form-white" name="inEmail" placeholder="Email">
						<input type="password" class="form-control form-white" name="inPassword" placeholder="Password">
						<input type="password" class="form-control form-white" name="inConfirmPassword" placeholder="Confirm Password">
						<button type="submit" class="btn btn-submit" name="btnRegister">Sign Up</button>
					</form>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>&copy; 2019 All Rights Reserved. Powered by Kelompok 4</p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="#"><i class="icon fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="icon fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="icon fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>
<?php
    if(isset($_POST['btnLogin'])){
        $email    = $_POST['inEmail'];
        $password = $_POST['inPassword'];

        $login = $initDb->login($email, $password);

        if(is_array($login)){
            echo '<script>alert("'. $login["message"] .'")</script>';
            return;
        }

        if($login){
            echo '<script>alert("Login Success")</script>';
            return;
        }
        echo '<script>alert("Login Failed")</script>';
    }

    if(isset($_POST['btnRegister'])){
        $username  = $_POST['inUsername'];
        $email     = $_POST['inEmail'];
        $password  = $_POST['inPassword'];
        $cpassword = $_POST['inConfirmPassword'];

        $register = $initDb->register($email, $username, $password, $cpassword);

        if(is_array($register)){
            echo '<script>alert("'. $register["message"] .'")</script>';
            return;
        }

        if($register){
            echo '<script>alert("Register Success")</script>';
            return;
        }
        echo '<script>alert("Register Failed")</script>';
    }
?>
</html>
