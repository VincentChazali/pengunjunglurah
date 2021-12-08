<!-- <section id="contact">
    <div id="google-map" style="height:800px" data-latitude="52.365629" data-longitude="4.871331"></div>
    <div class="container-wrapper">
        <div class="container">

            <div class="row">
                <div class="col-md-12  col-sm-6 ">

                    <div class="contact-form">
                        <h3>Pengaduan</h3>
                        <form id="main-contact-form" name="contact-form" method="post" enctype="multipart/form-data" action="">

                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" class="form-control" placeholder="Masukkan NIK" required>
                                <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Gambar Pengaduan</label>
                                <input type="file" name="gambar" class="form-control" placeholder="Gambar" required>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Tipe</label>
                                </br>
                                <select name="tipe" id="tipe">
                                    <option value="1">1</option>
                                    <option value="2">1</option>
                                    <option value="3">1</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Subject Pengaduan</label>
                                <input type="text" name="judul" class="form-control" placeholder="Judul" required>
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                <?= form_error('message', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>

                    </div>
                    <div>
                        <a class="btn btn-primary" href="<?= base_url('Pengaduan') ?>">Kembali</a>
                    </div>
                </div>

            </div>

        </div>

        </br>
    </div>

</section> -->
<section class="section section-bg" id="call-to-action" style="background-image: url(../assets/img/rumbai.jpeg)">
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

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="contact_form">
                <?= $this->session->flashdata('msg'); ?>
                <form action="<?= base_url(); ?>Pengaduan/CheckNIK" method="post"> 
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control" placeholder="NIK">
                            </div>
                            <div class=" col-lg-6 col-md-6 col-sm-6 col-xs-12" style="margin-top: 3.5%;">
                                <button type="submit" id="submit" class="btn btn-light btn-radius btn-brd grd1">Kirim</button>
                            </div>
                        </div>
                    </form>
            </div>
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container -->