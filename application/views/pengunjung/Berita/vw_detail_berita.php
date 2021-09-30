<section id="portofolio">
    <div class="container">
        <?php
        foreach ($berita as $brt) :
        ?>
            <div class="col-sm-4">
                <img class="img-responsive " src="<?= base_url('assets/images/berita/') . $brt['brt_gambar'] ?>">
            </div>
            <div class="col-sm-12 wow fadeInRight">
                <h3 class="column-title"><?= $brt['brt_judul']; ?></h3>
                <span><?= $brt['brt_tgl']; ?></span>
                <p><?= $brt['brt_isi'] ?></p>
            </div>
        <?php
        endforeach;
        ?>
    </div>
    <div class="text-center">
        <a class="btn btn-primary" href="<?= base_url('Berita') ?>">Kembali</a>
    </div>
</section>