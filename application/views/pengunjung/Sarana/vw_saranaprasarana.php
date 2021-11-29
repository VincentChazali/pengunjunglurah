<section class="section section-bg" id="call-to-action" style="background-image: url(assets/img/rumbai.jpeg)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col">
                <div class="cta-content">
                    <h2>Sarana dan Prasarana</h2>
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
                            foreach ($sarana as $srn) :
                            ?>
                                <div class="kode_news_list">
                                    <figure>
                                        <img src="<?= base_url('assets/img/sarana/') . $sklh['spr_gambar'] ?>" alt="News List Image">
                                    </figure>
                                    <div class="kode_news_list_des">
                                        <span><?= $srn['jenis']; ?></span>
                                        <h6> <a href="news-detail.html"> <?= $sklh['spr_name']; ?> </a> </h6>
                                        <!-- <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p> -->
                                    </div>
                                </div>
                            <?php
                            endforeach;
                            ?>
                            <!-- <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-02.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>Sekolah</span>
                                    <h6> <a href="news-detail.html"> SMAN 03 RUMBAI </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-03.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>Rumah Sakit</span>
                                    <h6> <a href="news-detail.html"> RS Rumbai </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-04.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>Tempat Ibadah</span>
                                    <h6> <a href="news-detail.html">Masjid Arafah </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-05.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>Rumah Sakit</span>
                                    <h6> <a href="news-detail.html">RS Rumbai 2.0 </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-06.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>Tempat Ibadah</span>
                                    <h6> <a href="news-detail.html"> HKBP Rumbai Bukit </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-07.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>Sekolah</span>
                                    <h6> <a href="news-detail.html"> SDN 01 RUMBAI </a> </h6>
                                    <div class="kode_author">by <a href="#"> Admin</a>- 14-10-2015</div>
                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident Duis aute irure dolor in reprehenderit velit esse cillum occaecat proide.</p>
                                </div>
                            </div>

                            <div class="kode_news_list">
                                <figure>
                                    <img src="extra-images/news-list-08.jpg" alt="News List Image">
                                </figure>
                                <div class="kode_news_list_des">
                                    <span>Tempat Ibadah</span>
                                    <h6> <a href="news-detail.html">Vihara Sasana Loka</a> </h6>
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
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
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

                        <div class="col-md-4">

                            <div class="kode_aside_cat kode_aside">
                                <h5>Categories</h5>
                                <ul>
                                    <li><a href="<?= base_url('SaranaPrasarana/sekolah') ?>">Sekolah</a></li>
                                    <li><a href="<?= base_url('SaranaPrasarana/kesehatan') ?>">Rumah Sakit</a></li>
                                    <li><a href="<?= base_url('SaranaPrasarana/tempatibadah') ?>">Tempat Ibadah</a></li>
                                </ul>
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