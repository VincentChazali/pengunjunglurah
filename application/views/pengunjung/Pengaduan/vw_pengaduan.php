<head>
    <link href="<?php echo base_url('assets2/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets2/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<section class="section section-bg" id="call-to-action" style="background-image: url(assets/img/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>Pengaduan</h2>
                </div>
            </div>
        </div>
    </div>
</section>
</br>
<div class="container-fluid">
    <div class="feature-box-1">
        <div class="row">
            <?= $this->session->flashdata('notes'); ?>
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead style="font-weight: bold;">
                                <tr style="font-weight: bold;background-color: gray; color:white;">
                                    <?php $i = 1; ?>
                                    <td>No</td>
                                    <td>Judul</td>
                                    <td>Isi</td>
                                    <td>Tanggapan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($pengaduan as $us) : ?>
                                    <tr style="color: black; ">
                                        <td><?= $i ?></td>
                                        <td><?= $us['pgdn_judul'] ?></td>
                                        <td><?= $us['pgdn_isi'] ?></td>
                                        <td><?= $us['tanggapan'] ?></td>

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--Content Wrap End-->
        </div>
    </div>
</div>


<!-- <div id="donate" data-scroll-index="7" class="section db">
    <div class="container">
        <div class="section-title text-center">
            <h3>Pengaduan</h3>
            <p class="lead">Quisque eget nisl id nulla sagittis auctor quis id. Aliquam quis vehicula enim, non aliquam risus.<br> Sed a tellus quis mi rhoncus dignissim.</p>
        </div> end title 

        <div class="row">
            <div class="col-md-12">
                <div class="contact_form">
                    <div id="message"></div>
                    <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                        <fieldset class="row-fluid">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>NIK</label>
                                <input type="text" name="first_name" id="first_name" class="form-control" placeholder="NIK">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Judul Pengaduan</label>
                                <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Judul Pengaduan">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Kategori</label>
                                <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                    <option value="12">Kategori Pengaduan</option>
                                    <option value="Political Parties">Political Parties</option>
                                    <option value="For Politician">For Politician</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Gambar Pengaduan</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Gambar Pengaduan">
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="comments" id="comments" rows="7" placeholder="Keterangan"></textarea>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                                <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1">Kirim</button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->