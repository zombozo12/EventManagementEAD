<!DOCTYPE html>
<html lang="en">

<?php
    include '../model.php';

    require 'vendor/autoload.php';
    use ead\model;

    $initDb = model\model::initDatabase();

    include 'core/header.php';
?>


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
				<h2 class="margin-top white">Pelatihan</h2>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">
          <div class="pricing">
            <div class="box-main active" data-img="img/coding.jpg">
              <h4 class="white">EVENT 1</h4>
              <br></br>
							<h6 class="white regular light"> Hari/Tanggal : Jumat, 5 April 2019 </h6>
              <h6 class="white regular light"> Jam : 18.00 - 21.00 WIT </h6>
              <h6 class="white regular light"> Tempat : Gedung B Telkom University </h6>
              <h6 class="white regular light"> CP : Wiguna </h6>
              <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Daftar</a>
              <i class="info-icon icon_question"></i>
            </div>
            <div class="box-second active text-center">
              <h4 class="white">DESKRIPSI</h4>
              <p class="white" font-size: 18px>Prodase Talk adalah kalimat yang kalimat dimana semua kalimat disini tidak berguna akan diisikan deskripsi tentang event yang diinginkan sesuai sudah di input</p>
            </div>
            <div class="box-third active">
              <h4 class="white">PEMBICARA</h4>
              <<br></br>
              <img src="img/team/wiguna.png" alt="Team Image" class="avatar">
              <h5 class="white regular light" text-center>Wiguna Ramadhan</h5>
              <br></br>
              <img src="img/team/wiguna.png" alt="Team Image" class="avatar">
              <h5 class="white regular light" text-center>Wiguna Ramadhan</h5>
            </div>
          </div>

					<div class="pricing">
						<div class="box-main" data-img="img/coding.jpg">
							<h4 class="white">Event 1</h4>
              <br></br>
							<h6 class="white regular light"> Hari/Tanggal : Jumat, 5 April 2019 </h6>
              <h6 class="white regular light"> Jam : 18.00 - 21.00 WIT </h6>
              <h6 class="white regular light"> Tempat : Gedung B Telkom University </h6>
              <h6 class="white regular light"> CP : Wiguna </h6>
							<a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Daftar</a>
							<i class="info-icon icon_question"></i>
						</div>
						<div class="box-second">
							<h4 class="white">Deskripsi</h4>
							<p class="white" font-size: 18px>Prodase Talk adalah kalimat yang kalimat dimana semua kalimat disini tidak berguna akan diisikan deskripsi tentang event yang diinginkan sesuai sudah di input</p>
						</div>
						<div class="box-third active">
              <h4 class="white">PEMBICARA</h4>
              <br></br>
              <img src="img/team/wiguna.png" alt="Team Image" class="avatar">
              <h5 class="white regular light" text-center>Wiguna Ramadhan</h5>
						</div>
          </div>

					</div>
				</div>
			</div>
		</div>
	</section>


  <section id="pricing1" class="section">
		<div class="container">
			<div class="row title text-left">
				<h2 class="margin-top white">Seminar</h2>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">

          <div class="pricing1">
            <div class="box-main active" data-img="img/seminar.jpg">
              <h4 class="white">EVENT 1</h4>
              <br></br>
							<h6 class="white regular light"> Hari/Tanggal : Jumat, 5 April 2019 </h6>
              <h6 class="white regular light"> Jam : 18.00 - 21.00 WIT </h6>
              <h6 class="white regular light"> Tempat : Gedung B Telkom University </h6>
              <h6 class="white regular light"> CP : Wiguna </h6>
              <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Daftar</a>
              <i class="info-icon icon_question"></i>
            </div>
            <div class="box-second active text-center">
              <h4 class="white">DESKRIPSI</h4>
              <p class="white" font-size: 18px>Prodase Talk adalah kalimat yang kalimat dimana semua kalimat disini tidak berguna akan diisikan deskripsi tentang event yang diinginkan sesuai sudah di input</p>
            </div>
            <div class="box-third active">
              <h4 class="white">PEMBICARA</h4>
              <br></br>
              <img src="img/team/wiguna.png" alt="Team Image" class="avatar">
              <h5 class="white regular light" text-center>Wiguna Ramadhan</h5>
            </div>
          </div>

					</div>
				</div>
			</div>
		</div>
	</section>


  <section id="pricing2" class="section">
		<div class="container">
			<div class="row title text-left">
				<h2 class="margin-top white">Pengabdian Masyarakat</h2>
			</div>
			<div class="row no-margin">
				<div class="col-md-7 no-padding col-md-offset-5 pricings text-center">

          <div class="pricing2">
            <div class="box-main active" data-img="img/coding.jpg">
              <h4 class="white">EVENT 1</h4>
              <br></br>
							<h6 class="white regular light"> Hari/Tanggal : Jumat, 5 April 2019 </h6>
              <h6 class="white regular light"> Jam : 18.00 - 21.00 WIT </h6>
              <h6 class="white regular light"> Tempat : Gedung B Telkom University </h6>
              <h6 class="white regular light"> CP : Wiguna </h6>
              <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-white-fill">Daftar</a>
              <i class="info-icon icon_question"></i>
            </div>
            <div class="box-second active text-center">
              <h4 class="white">DESKRIPSI</h4>
              <p class="white" font-size: 18px>Prodase Talk adalah kalimat yang kalimat dimana semua kalimat disini tidak berguna akan diisikan deskripsi tentang event yang diinginkan sesuai sudah di input</p>
            </div>
            <div class="box-third active">
              <h4 class="white">PEMBICARA</h4>
              <br></br>
              <img src="img/team/wiguna.png" alt="Team Image" class="avatar">
              <h5 class="white regular light" text-center>Wiguna Ramadhan</h5>
              <br></br>
              <img src="img/team/wiguna.png" alt="Team Image" class="avatar">
              <h5 class="white regular light" text-center>Wiguna Ramadhan</h5>
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
    <div class="modal fade" id="modal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content modal-popup">
                <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
                <h3 class="white">Register</h3>
                <form action="" method="post" class="popup-form">
                    <input type="text" class="form-control form-white" name="inFullname" placeholder="Fullname">
                    <input type="text" class="form-control form-white" name="inUsername" placeholder="Username">
                    <input type="email" class="form-control form-white" name="inEmail" placeholder="Email">
                    <input type="password" class="form-control form-white" name="inPassword" placeholder="Password">
                    <input type="password" class="form-control form-white" name="inConfirmPassword" placeholder="Confirm Password">
                    <button type="submit" class="btn btn-submit" name="btnRegister">Create an account</button>
                </form>
            </div>
        </div>
    </div>
	<footer>
		<div id="hhh" class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">About Us</h3>
          <br></br>
					<p class="light regular light-white">Kelompok 4 adalah kelompok Rekruitasi EAD Laboratory 2019 yang dibuat untuk melakukan tahap project pembuatan web. Kelompok 4 terdiri dari mahasiswa dan mahasiswi Telkom University yang berada di Jurusan Sistem Informasi, Fakultas Rekayasa Industri. Kami membuat website ini bertujuan untuk menambah pengalaman dan pengetahuan dalam pembuatan web ini<p>
					<a href="#" class="btn btn-blue ripple trial-button">Start Free Trial</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 id="ha" class="white text-center">Join us for Newsletter<span class="open-blink"></span></h3>
					<form action="" method="post" class="popup-form">
						<input type="email" class="form-control form-white" name="inEmail" placeholder="Email">
						<button type="submit" class="btn btn-submit" name="btnNewsletter">Subscribe</button>
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
            echo '<script>alert("'. $login[0] .'")</script>';
        }

        if(empty($login)){
            echo '<script>alert("Login Failed")</script>';
        }

        $sessionManager->register(60);
        $sessionManager->set('current_user', $login[0]);

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

    if(isset($_POST['btnNewsletter'])){
        $email = $_POST['inEmail'];

        $newsletter = $initDb->newsletter($email);

        if(is_array($newsletter)){
            echo '<script>alert("'. $newsletter["message"] .'")</script>';
        }

        if($newsletter){
            echo '<script>alert("Thank you")</script>';
            return;
        }
    }
?>
</html>
