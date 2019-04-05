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


<section id="team" class="section gray-bg">
    <div class="container">
        <div class="row title text-center">
            <h2 class="margin-top">Event List</h2>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('img/team/team-cover1.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">Kuota</h3>
                            <h5 class="light light-white">50 / 100</h5>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Prodase Talk</h4>
                        <h5 class="muted regular">5 April 2019</h5>
                        <p class="muted regular" style="font-size:16px;">Prodase Talk adalah event yang dibentuk dimana
                            Prodase berbagi pengalaman ya liat kalimatnya kan panjang kek gini gun gk bisa sama
                            jadinya</p>
                    </div>
                    <button data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill">Join Now</button>
                </div>
            </div>

            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('img/team/team-cover2.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">Kuota</h3>
                            <h5 class="light light-white">20 / 35</h5>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Priority</h4>
                        <h5 class="muted regular">6 April 2019</h5>
                        <p class="muted regular" style="font-size:16px;">Prodase Talk adalah event yang dibentuk dimana
                            Prodase berbagi pengalaman</p>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Join Now</a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="team text-center">
                    <div class="cover" style="background:url('img/team/team-cover3.jpg'); background-size:cover;">
                        <div class="overlay text-center">
                            <h3 class="white">Kuota</h3>
                            <h5 class="light light-white">30 / 30</h5>
                        </div>
                    </div>
                    <div class="title">
                        <h4>Pelatihan</h4>
                        <h5 class="muted regular">7 April 2019</h5>
                        <p class="muted regular" style="font-size:16px;">Prodase Talk adalah event yang dibentuk dimana
                            Prodase berbagi pengalaman</p>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue-fill ripple">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div id="hhh" class="container">
        <div class="row">
            <div class="col-sm-6 text-center-mobile">
                <h3 class="white">About Us</h3>
                <br></br>
                <p class="light regular light-white">Kelompok 4 adalah kelompok Rekruitasi EAD Laboratory 2019 yang
                    dibuat untuk melakukan tahap project pembuatan web. Kelompok 4 terdiri dari mahasiswa dan mahasiswi
                    Telkom University yang berada di Jurusan Sistem Informasi, Fakultas Rekayasa Industri. Kami membuat
                    website ini bertujuan untuk menambah pengalaman dan pengetahuan dalam pembuatan web ini
                <p>
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
if (isset($_POST['btnLogin'])) {
    $email = $_POST['inEmail'];
    $password = $_POST['inPassword'];

    $login = $initDb->login($email, $password);

    if (is_array($login)) {
        echo '<script>alert("' . $login["message"] . '")</script>';
        return;
    }

    if ($login) {
        echo '<script>alert("Login Success")</script>';
        return;
    }
    echo '<script>alert("Login Failed")</script>';
}

if (isset($_POST['btnRegister'])) {
    $username = $_POST['inUsername'];
    $email = $_POST['inEmail'];
    $password = $_POST['inPassword'];
    $cpassword = $_POST['inConfirmPassword'];

    $register = $initDb->register($email, $username, $password, $cpassword);

    if (is_array($register)) {
        echo '<script>alert("' . $register["message"] . '")</script>';
        return;
    }

    if ($register) {
        echo '<script>alert("Register Success")</script>';
        return;
    }
    echo '<script>alert("Register Failed")</script>';
}
?>
</html>
