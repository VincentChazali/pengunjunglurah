
<section class="section section-bg" id="call-to-action" style="background-image: url(../assets/images/rumbai.jpeg)">
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
                <?= $this->session->flashdata('note'); ?>
                    <form action="<?= base_url(); ?>Pengaduan/CheckNIK" method="post"> 
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>NIK</label>
                                <input type="text" name="nik" id="nik" class="form-control" disabled value="<?=$nik;?>">
                            </div>
                            <!-- <div class="col align-self-center">
                                <button type="submit" id="submit" class="btn btn-light btn-radius btn-brd grd1">Kirim</button>
                            </div> -->
                        </div>
                    </form>
                    <?php
                        if($valid == true){
                    ?>
                <form  class="row" action="<?= base_url(); ?>Pengaduan/tambah"  method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Judul Pengaduan</label>
                                <input type="text" name="judul" id="judul" class="form-control" placeholder="Judul Pengaduan">
                                
                                <?= form_error('judul', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Kategori</label>
                                <select name="tp" id="tp" class="selectpicker form-control" data-style="btn-white">
                                    <?php
                                        foreach ($tipe as $tp) :
                                    ?>
                                        <option value="<?= $tp['tp_id']; ?>"><?= $tp['tp_ket']; ?></option>
                                    <?php
                                        endforeach;
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <label>Gambar Pengaduan</label>
                                <input type="file" name="gambar" id="gambar" class="form-control" placeholder="Gambar Pengaduan">
                                
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label>Keterangan</label>
                                <textarea class="form-control" name="keterangan" id="Keterangan" rows="7" placeholder="Keterangan"></textarea>
                                
                                <?= form_error('keterangan', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 text-center">
                                <button id="submit" type="submit" class="btn btn-light btn-radius btn-brd grd1">Kirim </button>
                            </div>
                        </div>
                </form>
                <?php
                        }
                ?>
        </div><!-- end col -->
    </div><!-- end row -->
</div><!-- end container -->