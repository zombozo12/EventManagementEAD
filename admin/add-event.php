<!DOCTYPE html>
<html>
<head>
    <?php include('include/head.php'); ?>
</head>
<body>
<?php include('include/header.php'); ?>
<?php include('include/sidebar.php'); ?>
<?php
    include '../model.php';

    use ead\model;
    $initDb = model\model::initDatabase();
?>

<div class="main-container">
    <div class="pd-ltr-20 customscroll customscroll-10-p height-100-p xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Form</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Events</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- Default Basic Forms Start -->
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <div class="clearfix">
                    <div class="pull-left">
                        <h4 class="text-blue">Tambah Event</h4>
                    </div>
                </div>
                <form action="" method="post">
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Nama Event</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="inFullname" placeholder="Masukan nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input" class="col-sm-12 col-md-2 col-form-label">Waktu dan
                            tanggal</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control datetimepicker" placeholder="Waktu dan tanggal" name="inTanggal" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kuota</label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" placeholder="100" name="inKuota" type="number"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label>Upload Poster</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input">
                            <label class="custom-file-label">Choose file</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Kategori</label>
                        <div class="col-sm-12 col-md-10">
                            <select class="custom-select col-12" name="inKategori">
                                <option selected="">Choose...</option>
                                <option value="1">Pengabdian Masyarakat</option>
                                <option value="2">Seminar</option>
                                <option value="3">Pelatihan</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-datetime-local-input"
                               class="col-sm-12 col-md-2 col-form-label">Deskripsi</label>
                        <textarea class="form-control" name="inDeskripsi"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary" name="btnTambahEvent">Submit</button>
                </form>
            </div>
        </div>
        <?php
            if(isset($_POST['btnTambahEvent'])){
                $nama = $_POST['inFullname'];
                $waktu = strtotime($_POST['inTanggal']);
                $kuota = $_POST['inKuota'];
                $kategori = $_POST['inKategori'];
                $deskripsi = $_POST['inDeskripsi'];
                if($initDb->addEvent($nama, $deskripsi, $waktu, " ", $kuota, $kategori)){
                    echo '<script>alert("Success")</script>';
                }else{
                    echo '<script>alert("Gagal menambahkan event")</script>';
                }
            }
        ?>
        <?php include('include/footer.php'); ?>
    </div>
</div>
<?php include('include/script.php'); ?>
</body>
</html>