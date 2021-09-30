<section class="section section-bg" id="call-to-action" style="background-image: url(assets/images/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>Berita</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="issues" class="section wb">
    <div class="container">
        <!--Content Wrap Start-->
        <div class="kode_content">

            <!--News List Wrap Start-->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 kode_news_colmn_list">
                            <?php
                            foreach ($berita as $brt) :
                            ?>
                                <div class="kode_news_list">
                                    <figure>
                                        <img src="<?= base_url('assets/images/berita/') . $brt['brt_gambar'] ?>" alt="image">
                                    </figure>
                                    <div style="margin-top: -23%" class="kode_news_list_des">
                                        <h6> <a href="<?= base_url('Berita/detailberita/') . $brt['brt_id'] ?>"> <?= $brt['brt_judul']; ?> </a> </h6>
                                        <div class="kode_author"><?= $brt['brt_tgl']; ?></div>
                                        <p><?= word_limiter($brt['brt_isi'], 30) ?></p>
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>

                            <!--<div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-03.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>protest</span>
                                    <h6> <a href="news-detail.html"> Raise your Voice for the Human Rights </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-04.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>protest</span>
                                    <h6> <a href="news-detail.html">Speak softly and carry a big stick </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-05.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>protest</span>
                                    <h6> <a href="news-detail.html">Power Shifts And Geopolitics </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-06.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>protest</span>
                                    <h6> <a href="news-detail.html"> World Economy lurches towards recovery </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-07.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>protest</span>
                                    <h6> <a href="news-detail.html"> We are on way for Long March </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-08.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>protest</span>
                                    <h6> <a href="news-detail.html">Republicans explain their Vision</a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div> -->
                            <div class="clearfix clear"></div>
                            <div class="row">
                                <div class="col-md-5 col-md-offset-7">
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


                    </div>
                </div>
            </section>
            <!--News List Wrap End-->

        </div>
        <!--Content Wrap End-->
    </div>
</div>