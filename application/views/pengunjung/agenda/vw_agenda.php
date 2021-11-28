<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/rumbai.jpeg)">
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

<div id="event" class="section wb">
    <div class="container">
        <div class="row">

            <?php
            foreach ($Agenda as $ag) :
            ?>
                <div class="col-md-12">
                    <div class="participate-wrap">


                        <div class="event_dit">
                            <h4><?= $ag['ag_name']; ?></h4>
                            <ul>
                                <li style="font-weight: bold; color: Black;"><i class="fa fa-calendar"></i> <?= $ag['ag_date']; ?></li>
                                <!-- <li> <a href="#"> <i class="fa fa-clock-o"></i> 7:00 PM to 9:00 PM </a> </li>
                                <li> <a href="#"> <i class="fa fa-map-marker"></i> NY City, USA </a> </li> -->
                            </ul>
                            <p><?= $ag['ag_ket']; ?></p>
                        </div>
                    </div><!-- end participate -->
                </div><!-- end col -->
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