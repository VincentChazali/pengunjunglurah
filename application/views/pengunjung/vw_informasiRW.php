<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>List RW</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="media" data-scroll-index="5" class="section wb">
    <div class="container">
        <div class="container mt-4">
            <div class="row">
                <?php
                foreach ($rw as $r) :
                ?>
                    <div class="col-md-3 col-sm-5">
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?= base_url('assets/images/rw/') . $r['rw_foto']; ?>" width="100" height="100">
                            </div>
                            <div class="team-content">
                                <h3 class="title"><?= $r['rw_nama']; ?></h3>
                                <p class="post"><?= $r['alamat']; ?></p>
                                <p class="post">
                                    <?php
                                        $thnawal= date_format(date_create($r['tgl_jabat']),"Y");
                                        $thnakhir= date_format(date_create($r['tgl_akhir']),"Y");
                                        $periode=$thnakhir-$thnawal;
                                        echo $periode, " Tahun";
                                    ?>
                                </p>
                                <a href="<?= base_url(); ?>InformasiRW/RT/<?= $r['rw_id']; ?>" class="btn btn-light btn-radius btn-brd grd1">List RT</a>
                            </div>
                            <br>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
                <!-- <div class="col-md-3 col-sm-5">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('assets/') ?>images/team/02.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Siti</h3>
                            <p class="post">Ketua RW 02</p>
                            <p class="post">Ketua RW 02</p>
                            <p class="post">Ketua RW 02</p>
                            <p class="post">Ketua RW 02</p>
                            <a href="<?= base_url('InformasiRW/RT') ?>" class="btn btn-light btn-radius btn-brd grd1">List RT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('assets/') ?>images/team/03.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Robin</h3>
                            <span class="post">Ketua RW 03</span><br>
                            <a href="<?= base_url('InformasiRW/RT') ?>" class="btn btn-light btn-radius btn-brd grd1">List RT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('assets/') ?>images/team/04.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Dodi</h3>
                            <span class="post">Ketua RW 04</span><br>
                            <a href="<?= base_url('InformasiRW/RT') ?>" class="btn btn-light btn-radius btn-brd grd1">List RT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('assets/') ?>images/team/01.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Bambang</h3>
                            <span class="post">Ketua RW 01</span><br>
                            <a href="<?= base_url('InformasiRW/RT') ?>" class="btn btn-light btn-radius btn-brd grd1">List RT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('assets/') ?>images/team/02.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Siti</h3>
                            <span class="post">Ketua RW 02</span><br>
                            <a href="<?= base_url('InformasiRW/RT') ?>" class="btn btn-light btn-radius btn-brd grd1">List RT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('assets/') ?>images/team/03.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Robin</h3>
                            <span class="post">Ketua RW 03</span><br>
                            <a href="<?= base_url('InformasiRW/RT') ?>" class="btn btn-light btn-radius btn-brd grd1">List RT</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-5">
                    <div class="our-team">
                        <div class="pic">
                            <img src="<?= base_url('assets/') ?>images/team/04.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Dodi</h3>
                            <span class="post">Ketua RW 04</span><br>
                            <a href="<?= base_url('InformasiRW/RT') ?>" class="btn btn-light btn-radius btn-brd grd1">List RT</a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="clearfix clear"></div>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-7">
                                    <?= $links; ?>
                                </div>
                            </div>
    </div>
</div>