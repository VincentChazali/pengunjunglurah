<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>Lurah Rumbai</title>

    <!-- Site Icons -->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= base_url('assets/') ?>images/icon.png">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>style.css">
    <!-- Colors CSS -->

    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/custom.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="politics_version">

    <header class="header header_style_01">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= base_url('Home') ?>"><img src="<?= base_url('assets/') ?>images/logos/logo.png" width="210px" ; height="46px" ; alt="image"></a>
                </div>

                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="scroll"><a href="<?= base_url('Home') ?>">Home</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Profil <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url('Profil/vm') ?>">Visi Misi</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Profil/tf') ?>">Tugas dan Fungsi</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Profil/sa') ?>">Struktur Anggota</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Profil/kg') ?>">Kondisi Geografis</a></li>
                            </ul>
                        <li>
                        <li class="scroll"><a href="<?= base_url('Agenda') ?>">Agenda</a></li>
                        <li class="scroll "><a href="<?= base_url('Berita') ?>">Berita</a></li>
                        <li class="scroll"><a href="<?= base_url('InformasiRW') ?>">RT/RW</a></li>
                        <li class="scroll"><a href="<?= base_url('Galeri') ?>">Galeri</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sarana dan Prasarana<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url('SaranaPrasarana/sekolah') ?>">Pendidikan</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('SaranaPrasarana/kesehatan') ?>">Layanan Kesehatan</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('SaranaPrasarana/tempatibadah') ?>">Tempat Ibadah</a></li>
                            </ul>
                        <li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengaduan<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="<?= base_url('Pengaduan') ?>">List Pengaduan</a></li>
                                <li><a class="dropdown-item" href="<?= base_url('Pengaduan/cek') ?>">Tambah pengaduan</a></li>
                            </ul>
                        <li>
                        <!-- <li class="scroll"><a href="<?= base_url('Polling') ?>">Polling</a></li> -->
                    </ul>
                </div>
            </div>
            <!--/.container-->
        </nav>
        <!--/nav-->
    </header>