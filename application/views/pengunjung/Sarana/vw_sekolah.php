<section class="section section-bg" id="call-to-action" style="background-image: url(../assets/img/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>Pendidikan</h2>
                </div>
            </div>
        </div>
    </div>
</section>
</br>
<div class="container">

    <div class="row">
        <?php
        foreach ($sekolah as $sklh) :
        ?>
            <div class="col-sm-4 col-xs-6 team-column col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="team-img">
                        <img class="img-responsive" src="<?= base_url('assets/img/sarana/') . $sklh['spr_gambar'] ?>" alt="">
                    </div>
                    <div class="team-info">
                        <h3><?= $sklh['spr_name']; ?></h3>
                        <p><?= $sklh['spr_kondisi']; ?></p>
                        <p><?= $sklh['spr_lokasi']; ?></p>
                    </div>
                    <!-- <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p> -->

                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>


