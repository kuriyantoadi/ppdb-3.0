<!DOCTYPE html>
<html lang="en">

<head>
  <title>Form Pendaftaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery-latest.js"></script>
  <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery.tablesorter.min.js"></script>



  <link href="<?= base_url() ?>assets/datepicker/css/bootstrap.min.css" rel="stylesheet">

  <!-- Include library Bootstrap Datepicker -->
  <link href="<?= base_url() ?>assets/datepicker/libraries/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

</head>

<body>

  <div class="container">

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <center><img style="margin-top: 25px;" src="<?= base_url() ?>assets/images/logo-banten.png" />
        </div>
        <div class="col-md-6">
          <center>
            <h2 style="margin-top:  25px;"><b>SMK Negeri 1 Kragilan</b></h2>
          </center>
          <center>
            <h4><b>Formulir Pendaftaran</b></h4>
          </center>
          <center>
            <h4><b>Calon Peserta Didik Baru</b></h4>
          </center>
          <center>
            <h5><b>Tahun Pelajaran 2022/2023</b></h4>
          </center>
          <center>
            <h4><b>Program Studi Teknik Komputer dan Jaringan</b></h4>
          </center><br>
          <!-- font ganti jenis -->
        </div>
        <div class="col-md-3">
          <center><img style="margin-bottom:  80px; margin-top:  25px;" class="img-fluid" src="<?= base_url() ?>assets/images/logo-smkn1.png" />
        </div>
      </div>
    </div>

    <?php
    // include '../../alert.php'
    ?>

    <!-- <form class="form-horizontal" action="update-siswa.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()"> -->
      <!-- <form class="form-horizontal" action="daftar_up.php" name="input" method="POST" enctype="multipart/form-data" onSubmit="return validasi()"> -->

      <form class="form-horizontal">
        <?= form_open_multipart('Daftar/daftar_siswa_up'); ?>

      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Tanggal Pendaftaran :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="tgl_pendfataran" value="<?php echo date('d-m-Y'); ?>" required readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kompetensi Keahlian :</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" name="kompetensi_keahlian" value="Teknik Komputer dan Jaringan" readonly>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Kompetensi Keahlian Ke-2 :</label>
        <div class="col-sm-6">
          <select class="form-control" name="kompetensi_keahlian_2">
            <option value="">Pilih</option>
            <option value="tidak memilih">Hanya 1 Kompetensi Keahlian</option>
            <option value="Akuntansi dan Keuangan Lembaga">Akuntansi dan Keuangan Lembaga</option>
            <option value="Otomatisasi dan Tata Kelola Perkantoran">Otomatisasi dan Tata Kelola Perkantoran</option>
            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
            <option value="Teknik Kendaraan Ringan Otomotif">Teknik Kendaraan Ringan Otomotif</option>
            <!-- <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan Jaringan</option> -->
            <option value="Teknik Pemesinan">Teknik Pemesinan</option>
          </select>
        </div>
      </div>
<!-- potong -->
