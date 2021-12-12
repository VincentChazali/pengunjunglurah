<section class="section section-bg" id="call-to-action" style="background-image: url(assets/img/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>Galeri</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <div id="gallery" class="section wb">
    <div class="container">
        <!-- <div class="gallery-menu row">
            <div class="col-md-12">
                <div class="button-group filter-button-group text-center">
                    <button class="active" data-filter="*">All</button>
                    <button data-filter=".gal_a">Meeting</button>
                    <button data-filter=".gal_b">Event</button>
                    <button data-filter=".gal_c">Economic</button>
                    <button data-filter=".gal_d">Education</button>
                </div>
            </div>
        </div> -->

<!--<div class="gallery-list row">
            <?php
            foreach ($galeri as $gal) :
            ?>
                <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_b">
                    <div class="gallery-single fix">
                        <img src="<?= base_url('assets/img/galeri/') . $gal['gal_gambar'] ?>" class="img-responsive" alt="Image">
                        <div class="img-overlay">
                            <a href="<?= base_url('assets/img/galeri/') . $gal['gal_gambar'] ?>" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius">
                                <h3><?= $gal['hal_title']; ?></h3>
                                <span><?= $gal['gal_date']; ?></span>
                                <p><?= $gal['gal_ket']; ?></p>
                            </a>
                        </div>
                    </div>
                </div>
            <?php
            endforeach;
            ?>

             <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
                <div class="gallery-single fix">
                    <img src="<?= base_url('assets/') ?>uploads/gallery_img-03.jpg" class="img-responsive" alt="Image">
                    <div class="img-overlay">
                        <a href="<?= base_url('assets/') ?>uploads/gallery_img-03.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-grid gal_b gal_a">
                <div class="gallery-single fix">
                    <img src="<?= base_url('assets/') ?>uploads/gallery_img-04.jpg" class="img-responsive" alt="Image">
                    <div class="img-overlay">
                        <a href="<?= base_url('assets/') ?>uploads/gallery_img-04.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-grid gal_a gal_c">
                <div class="gallery-single fix">
                    <img src="<?= base_url('assets/') ?>uploads/gallery_img-05.jpg" class="img-responsive" alt="Image">
                    <div class="img-overlay">
                        <a href="<?= base_url('assets/') ?>uploads/gallery_img-05.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 gallery-grid gal_c gal_d">
                <div class="gallery-single fix">
                    <img src="<?= base_url('assets/') ?>uploads/gallery_img-06.jpg" class="img-responsive" alt="Image">
                    <div class="img-overlay">
                        <a href="<?= base_url('assets/') ?>uploads/gallery_img-06.jpg" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                    </div>
                </div>
            </div> 
        </div>-->



<div id="media" data-scroll-index="5" class="section wb">
    <div class="container">
        <div class="container mt-4">
            <div class="row">
                <?php
                foreach ($galeri as $us) :
                ?>
                    <div class="col-md-3 col-sm-5">
                        <div class="our-team">
                            <div class="pic">
                                <img src="<?= base_url('assets/img/galeri/') . $us['gal_gambar'] ?>" width="300" height="300">
                            </div>
                            <div class="team-content">
                                <h3 class="title"><?= $us['gal_title']; ?></h3>
                                <span>Tanggal : <?= $us['gal_date']; ?></span>
                                <p><?= $us['gal_jns']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5 col-md-offset-7">
            <?= $links; ?>
        </div>
    </div>
</div>