<section class="section section-bg" id="call-to-action" style="background-image: url(../assets/images/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>List RT</h2>
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
                foreach ($rt as $r) :
                ?>
                    <div class="col-md-3 col-sm-5">
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?= base_url('assets/images/penduduk/') . $r['rw_foto'] ?>">
                            </div>
                            <div class="team-content">
                                <h3 class="title"><?= $r['rt_nama']; ?></h3>
                                <p class="post"><?= $r['alamat']; ?></p>
                                <p class="post"><?= $r['periode']; ?></p>
                            </div>
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
                            <span class="post">Ketua RT 02</span>
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
                            <span class="post">Ketua RT 03</span>
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
                            <span class="post">Ketua RT 04</span>
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
                            <span class="post">Ketua RT 01</span>
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
                            <span class="post">Ketua RT 02</span>
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
                            <span class="post">Ketua RT 03</span>
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
                            <span class="post">Ketua RT 04</span>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3 col-md-offset-5">
            <ul class="pagination pagination-lg">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <?php
                if ($links == null) {
                ?>
                    <li class="page-item"><a class="page-link">1</a></li>
                <?php
                } else {
                ?>
                    <li class="page-item"><a class="page-link"><?php echo $links; ?></a></li>
                <?php
                }
                ?>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>