<section class="section section-bg" id="call-to-action" style="background-image: url(../assets/images/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>Tempat Ibadah</h2>
                </div>
            </div>
        </div>
    </div>
</section>
</br>
<div class="container">
    <div class="row">
        <?php
        foreach ($ibadah as $ibdah) :
        ?>
            <div class="col-sm-4 col-xs-6 team-column col-md-3">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="team-img">
                        <img class="img-responsive" src="<?= base_url('assets/images/sarana/') . $ibdah['spr_gambar'] ?>" alt="">
                    </div>
                    <div class="team-info">
                        <h3><?= $ibdah['spr_name']; ?></h3>
                        <p><?= $ibadah['spr_kondisi']; ?></p>
                        <p><?= $ibadah['spr_lokasi']; ?></p>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                </div>
            </div>
        <?php
        endforeach;
        ?>
    </div>
</div>

<!-- <div class="col-sm-4 col-xs-6 team-column col-md-3">
    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="200ms">
        <div class="team-img">
            <img class="img-responsive" src="<?= base_url('assets/') ?>images/team/03.jpg" alt="">
        </div>
        <div class="team-info">
            <h3>Pahlwan</h3>
        </div>
        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>

    </div>
</div>
<div class="col-sm-4 col-xs-6 team-column col-md-3">
    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="300ms">
        <div class="team-img">
            <img class="img-responsive" src="<?= base_url('assets/') ?>images/team/04.jpg" alt="">
        </div>
        <div class="team-info">
            <h3>Nasir uddin</h3>
        </div>
        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>

    </div>
</div>

<div class="col-sm-4 col-xs-6 team-column col-md-3">
    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
        <div class="team-img">
            <img class="img-responsive" src="<?= base_url('assets/') ?>images/team/01.jpg" alt="">
        </div>
        <div class="team-info">
            <h3>Bin Burhan</h3>
        </div>
        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>

    </div>

</div> -->