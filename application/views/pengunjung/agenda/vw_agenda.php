<section class="section section-bg" id="call-to-action" style="background-image: url(assets/img/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>Agenda</h2>
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
                foreach ($Agenda as $ag) :
                ?>


                    <!-- <div class="event_dit">
                            <img class="img-responsive mx-auto d-block" src="<?= base_url('assets/img/agenda/') . 'default.png' ?>" width="200" height="200">
                            <h4><?= $ag['ag_name']; ?></h4>
                            <ul>
                                <li style="font-weight: bold; color: Black;"><i class="fa fa-calendar"></i> <?= $ag['ag_date']; ?></li>
                            </ul>
                            <p><?= $ag['ag_ket']; ?></p>
                        </div> -->

                    <div class="col-md-3 col-sm-5">
                        <div class="our-team">
                            <div class="pic">
                                <i class="fa fa-calendar fa-5x"></i>
                            </div>
                            <div class="team-content">
                                <h4 class="title" style="font-weight: bold;"><a href="<?= base_url('Agenda/detailagenda/') . $ag['ag_id'] ?>"><?= word_limiter($ag['ag_name'], 5) ?></h4>

                                <span>Tanggal : <?= $ag['ag_date']; ?></span>
                                <p><?= word_limiter($ag['ag_ket'], 5) ?> <a style="font-weight: bold;" href="<?= base_url('Agenda/detailagenda/') . $ag['ag_id'] ?>"> Read More </a></p>
                            </div>
                        </div>
                    </div>
                <?php
                endforeach;
                ?>

            </div><!-- end row -->
            <div class="row">
                <div class="col-md-3 col-md-offset-5">

                    <?= $links; ?>

                </div>
            </div>
        </div><!-- end container -->
    </div><!-- end section -->