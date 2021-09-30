<section id="meet-team">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown">Polling</h2>
        </div>

        <div class="row">
            <?php
            foreach ($polling as $pol) :
            ?>
                <div class="col-sm-12   col-md-12">
                    <input type="hidden" value="<?= $pol['pol_id']; ?>">
                    <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="">
                            <h3><?= $pol['pol_title']; ?></h3>
                        </div>
                        <p><?= $pol['pol_ket']; ?></p>
                        <a class="btn btn-primary" href="<?= base_url('Polling/soal') ?>">Jawab</a>
                    </div>
                </div>
            <?php
            endforeach;
            ?>
            <!-- <div class="col-sm-12   col-md-12">
                <div class="team-member wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <div class="">
                        <h3>Judul Polling</h3>
                    </div>
                    <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                    <a class="btn btn-primary" href="<?= base_url('Polling/soal') ?>">Jawab</a>
                </div>
            </div> -->
        </div>
</section>