<head>
    <style>
        .zoom-effect:hover {
            -webkit-transform: scale(1.8);
            transform: scale(1.8);
        }
    </style>
</head>
<section id="portofolio">
    <div class="container">
        <?php
        foreach ($agenda as $ag) :
        ?>
            <div class="col-sm-4">
                <div class="zoom-effect">
                    <img class="img-responsive mx-auto d-block" src="<?= base_url('assets/img/agenda/')  . 'default.png' ?>" width="200" height="200">
                </div>
            </div>
            <div class="col-sm-12 wow fadeInRight">
                <h3 class="column-title"><?= $ag['ag_name']; ?></h3>
                <span><?= $ag['ag_date']; ?></span>
                <p><?= $ag['ag_ket'] ?></p>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="<?= base_url('Agenda') ?>">Kembali</a>
    </div>
</section>