<section class="section details">
        <!-- details background -->
        <div class="details__bg" data-bg="img/home/home__bg.jpg"></div>
        <!-- end details background -->

        <!-- details content -->
        <div class="container">
            <div class="row">
                <!-- title -->
                <div class="col-12">
                    <h1 class="details__title"><?= $film['judul']; ?></h1>
                </div>
                <!-- end title -->

                <!-- content -->
                <div class="col-12 col-xl-6">
                    <div class="card card--details">
                        <div class="row">
                            <!-- card cover -->
                            <div class="col-12 col-sm-4 col-md-4 col-lg-3 col-xl-5">
                                <div class="card__cover">
                                    <img src="<?= $film['poster']; ?>" alt="">
                                </div>
                            </div>
                            <!-- end card cover -->

                            <!-- card content -->
                            <div class="col-12 col-sm-8 col-md-8 col-lg-9 col-xl-7">
                                <div class="card__content">
                                    <div class="card__wrap">
                                        <span class="card__rate"><i class="icon ion-ios-star"></i>8.4</span>

                                        <ul class="card__list">
                                            <li>HD</li>
                                            <li>16+</li>
                                        </ul>
                                    </div>

                                    <ul class="card__meta">
                                        <li><span>Genre:</span> <a href="#"><?= $film['genre']; ?></a></li>
                                        <li><span>Release year:</span> <?= $film['tahun_rilis']; ?></li>
                                        <li><span>Running time:</span> <?= $film['durasi']; ?> min</li>
                                        <li><span>Country:</span> <a href="#"><?= $film['negara']; ?></a> </li>
                                    </ul>

                                    <div class="card__description card__description--details">
                                        <?= $film['sinopsis']; ?>
                                    </div>
                                </div>
                            </div>
                            <!-- end card content -->
                        </div>
                    </div>
                </div>
                <!-- end content -->

                <!-- player -->
                <div class="col-12 col-xl-6">
                    <iframe width="450" height="300" src="<?= $film['trailer']; ?>"></iframe>
                </div>
                <!-- end player -->

                <div class="col-12">
                    <div class="details__wrap">
                        <!-- availables -->
                        <div class="details__devices">
                            <span class="details__devices-title">Available on devices:</span>
                            <ul class="details__devices-list">
                                <li><i class="icon ion-logo-apple"></i><span>IOS</span></li>
                                <li><i class="icon ion-logo-android"></i><span>Android</span></li>
                                <li><i class="icon ion-logo-windows"></i><span>Windows</span></li>
                                <li><i class="icon ion-md-tv"></i><span>Smart TV</span></li>
                            </ul>
                        </div>
                        <!-- end availables -->

                        <!-- share -->
                        <div class="details__share">
                            <span class="details__share-title">Share with friends:</span>

                            <ul class="details__share-list">
                                <li class="facebook"><a href="#"><i class="icon ion-logo-facebook"></i></a></li>
                                <li class="instagram"><a href="#"><i class="icon ion-logo-instagram"></i></a></li>
                                <li class="twitter"><a href="#"><i class="icon ion-logo-twitter"></i></a></li>
                                <li class="vk"><a href="#"><i class="icon ion-logo-vk"></i></a></li>
                            </ul>
                        </div>
                        <!-- end share -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end details content -->
    </section>