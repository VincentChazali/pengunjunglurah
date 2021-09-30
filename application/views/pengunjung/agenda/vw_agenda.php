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
            <div class="col-md-12">
                <?php
                foreach ($Agenda as $ag) :
                ?>
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
    </div><!-- end container -->
</div><!-- end section -->