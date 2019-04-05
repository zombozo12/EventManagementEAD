<!DOCTYPE html>
<html lang="en">
<?php
include '../model.php';

require 'vendor/autoload.php';

use ead\model;

$initDb = model\model::initDatabase();

include 'core/header.php';

$evt_id = 0;

if (!isset($_GET['id'])) {
    header('location: ./');
}

$evt_id = $_GET['id'];
if (!$initDb->getEventDetail($evt_id)) {
    header('location: ./');
}

foreach ($initDb->getEventDetail($evt_id) as $events) {
    ?>
    <section id="ed-background" style="height: 400px !important; ">
        <div class="container">
            <div class="table">
                <div class="header-text">
                    <div class="row">
                        <div class="col-md-12 text-center">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section section-padded">
        <div class="container">
            <div class="row text-center title">
                <h2><?php echo $events['evt_nama']; ?></h2>
            </div>
            <fieldset>
                <hr>
                <table style="width: 800px;" class="centered">
                    <tr>
                        <td colspan="1"><label style="font-size: 18px">Tanggal</label><br>
                            <p><?php echo date('l, F Y', $events['evt_tanggal']) .
                                    PHP_EOL . date('H:i:s', $events['evt_tanggal']); ?>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <label style="font-size: 18px">Kuota: <?php echo $events['evt_kuota']; ?></label>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="4">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5"><label style="font-size: 18px">Deskripsi</label></td>
                    </tr>
                    <tr>
                        <td colspan="6"><p><?php echo $events['evt_deskripsi']; ?></p></td>
                    </tr>
                    <tr>
                        <td colspan="7">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="8"><label style="font-size: 18px">Pembicara</label></td>
                    </tr>
                    <tr>

                        <?php
                        foreach ($initDb->getEventHosts($evt_id) as $eventHost) {
                            echo '
                        <td>
                            <img src="' . $eventHost['hst_pic'] . '" height="240px" alt="Team Image" class="avatar">
                            <div class="title">
                                <h6>' . $eventHost['hst_name'] . '</h6>
                                <p class="muted regular">Jabatan</p>
                            </div>
                        </td>';
                        }
                        ?>
                    </tr>
                    <tr>
                        <td align="center">
                            <?php
                            if ($sessionManager->isRegistered()) {
                                echo '<a href="#" data-toggle="modal" data-target="#modal3"
                                           class="btn btn-blue">Ikut Event</a>';
                            } else {
                                echo '<a href="#" data-toggle="modal" data-target="#modal4"
                                           class="btn btn-blue">Daftar</a>';
                            }
                            ?>
                        </td>
                    </tr>
                </table>
                <hr>
            </fieldset>
        </div>
    </section>
    <?php
}
?>
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
                <input type="password" class="form-control form-white" name="inConfirmPassword"
                       placeholder="Confirm Password">
                <button type="submit" class="btn btn-submit" name="btnRegister">Create an account</button>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <h3 class="white">Join Now</h3>
            <form action="" method="post" class="popup-form">
                <h5 class="white">Berapa banyak orang yang hadir bersama mu?</h5>
                <input type="number" min="1" max="5" class="form-control form-white" name="inJumlah" placeholder="1-5">
                <button class="btn btn-submit" name="btnJoin">Join Event</button>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content modal-popup">
            <a href="#" class="close-link"><i class="icon_close_alt2"></i></a>
            <h3 class="white">Register</h3>
            <form action="" method="post" class="popup-form">
                <input type="text" class="form-control form-white" name="inFullname" placeholder="Fullname">
                <input type="email" class="form-control form-white" name="inEmail" placeholder="Email">
                <input type="tel" min="10" max="13" class="form-control form-white" name="inPhonenum" placeholder="No. Handphone">
                <button type="submit" class="btn btn-submit" name="btnJoinManual">Daftarkan Sekarang</button>
            </form>
        </div>
    </div>
</div>

<footer>
    <div id="hhh" class="container">
        <div class="row">
            <div class="col-sm-6 text-center-mobile">
                <h3 class="white">About Us</h3><br>
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

    if (array_key_exists('message', $login)) {
        echo '<script>alert("' . $login['message'] . '")</script>';
    }

    if (is_array($login)) {
        echo '<script>alert("' . $login[0] . '")</script>';
    }

    if (empty($login)) {
        echo '<script>alert("Login Failed")</script>';
    }

    $sessionManager->register(60);
    $sessionManager->set('current_user', $login[0]);

}

if (isset($_POST['btnRegister'])) {
    $fullname = $_POST['inFullname'];
    $username = $_POST['inUsername'];
    $email = $_POST['inEmail'];
    $password = $_POST['inPassword'];
    $cpassword = $_POST['inConfirmPassword'];

    $register = $initDb->register($fullname, $email, $username, $password, $cpassword);

    if (array_key_exists('message', $register)) {
        echo '<script>alert("' . $register['message'] . '")</script>';
    }

    if ($fullname < 4) {
        echo '<script>alert("Nama Terlalu pendek")</script>';
    }

    if ($register) {
        echo '<script>alert("Register Success")</script>';
        return;
    }
    echo '<script>alert("Register Failed")</script>';
}

if (isset($_POST['btnNewsletter'])) {
    $email = $_POST['inEmail'];

    $newsletter = $initDb->newsletter($email);

    if (is_array($newsletter)) {
        echo '<script>alert("' . $newsletter["message"] . '")</script>';
    }

    if ($newsletter) {
        echo '<script>alert("Thank you")</script>';
        return;
    }
}

if (isset($_POST['btnJoin'])) {
    $jumlah = $_POST['inJumlah'];
    if (!isset($jumlah)) {
        echo '<script>alert("Masukan jumlah")</script>';
        return;
    }

    if ($initDb->pendaftaranEventAuto($sessionManager->get('current_user'), $evt_id, $jumlah)) {
        echo '<script>alert("Thank you")</script>';
        return;
    }

    echo '<script>alert("Gagal mendaftarkan ke event")</script>';
}

if(isset($_POST['btnJoinManual'])){
    if(!isset($_POST['inFullname'])){
        echo '<script>alert("Nama harus diisi")</script>';
        return;
    }

    if(!isset($_POST['inEmail'])){
        echo '<script>alert("Email harus diisi")</script>';
        return;
    }

    if(!isset($_POST['inPhonenum'])){
        echo '<script>alert("No. Handphone harus diisi")</script>';
        return;
    }

    if($initDb->pendaftaranEventManual($evt_id, $_POST['inFullname'], $_POST['inEmail'], $_POST['inPhonenum'])){
        echo '<script>alert("Thank you")</script>';
        return;
    }
    echo '<script>alert("Gagal mendaftarkan ke event")</script>';
}
?>
</html>
