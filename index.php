<?php get_header() ?>

<body>
    <?php wp_body_open(); ?>
    <?php get_header('nav') ?>
    <main class="main" id="top">
        <section id="hero" class="hero">
            <div class="hero__inner">
                <h2 class="hero__text">
                    <p>カメラは専門店で...</p>
                    <p>みゆきカメラ</p>
                </h2><!-- /.hero__text -->
            </div><!-- /.hero__inner -->
        </section><!-- /#hero -->

        <section id="about" class="about">
            <div class="about__inner">
                <div class="about__body">
                    <h2 class="about__title">
                        店舗について
                    </h2><!-- /.about__title -->
                    <div class="about__text">
                        <span>1973年9月に創業の愛知県津島市にある写真店です。</span>
                        <span>2階にはギャラリーを併設し、写真愛好家の集いの場を提供しています。</span>
                        <span>写真コンテストにも力を入れていて、入賞者も多数いらっしゃいます。</span>
                        <span>写真やカメラの事など、お気軽にご相談ください。</span>
                    </div><!-- /.about__text -->
                    <a href="<?php echo home_url('/about/'); ?>" class="btn about__btn">店舗について詳しく見る</a><!-- /.btn -->
                </div><!-- /.about__body -->
            </div><!-- /.about__inner -->
        </section><!-- /#about -->

        <section id="service" class="service">
            <div class="service__inner">
                <h2 class="service__title">
                    サービス一覧
                </h2><!-- /.service__title -->

                <div class="service__list">

                    <a href="<?php echo home_url('/photo/'); ?>" class="service__link card" id="photo">
                            <dl class="card__item">
                                <dt class="card__img">
                                    <picture>
                                        <source type="image/camera.webp" srcset="<?php echo get_theme_file_uri('./image/camera.webp'); ?>">
                                        <img src="<?php echo get_theme_file_uri('./image/camera.gif'); ?>" alt="" width="100%" height="auto">
                                    </picture>
                                </dt><!-- /.card__img -->
                                <dd class="card__text">
                                    <h3>証明写真</h3>
                                </dd><!-- /.card__text -->
                            </dl><!-- /.card__item -->
                    </a>

                    <a href="<?php echo home_url('/contest/'); ?>" class="service__link card" id="contest">
                        <dl class="card__item">
                            <dt class="card__img">
                                <picture>
                                    <source type="image/contest.webp" srcset="<?php echo get_theme_file_uri('./image/contest.webp'); ?>">
                                    <img src="<?php echo get_theme_file_uri('./image/contest.gif'); ?>" alt="" width="100%" height="auto">
                                </picture>
                            </dt><!-- /.card__img -->
                            <dd class="card__text">
                                <h3>コンテスト</h3>
                            </dd><!-- /.card__text -->
                        </dl><!-- /.card__item -->
                    </a>

                    <a href="<?php echo home_url('/trade/'); ?>" class="service__link card" id="trade">
                        <dl class="card__item">
                            <dt class="card__img">
                                <picture>
                                    <source type="image/trade.webp" srcset="<?php echo get_theme_file_uri('./image/trade.webp'); ?>">
                                    <img src="<?php echo get_theme_file_uri('./image/trade.gif'); ?>" alt="" width="100%" height="auto">
                                </picture>
                            </dt><!-- /.card__img -->
                            <dd class="card__text">
                                <h3>買取り・下取り</h3>
                            </dd><!-- /.card__text -->
                        </dl><!-- /.card__item -->
                    </a>

                    <a href="<?php echo home_url('/dubbing/'); ?>" class="service__link card" id="dubbing">
                        <dl class="card__item">
                            <dt class="card__img">
                                <picture>
                                    <source type="image/vhs.webp" srcset="<?php echo get_theme_file_uri('./image/vhs.webp'); ?>">
                                    <img src="<?php echo get_theme_file_uri('./image/vhs.gif'); ?>" alt="" width="100%" height="auto">
                                </picture>
                            </dt><!-- /.card__img -->
                            <dd class="card__text">
                                <h3>ダビング</h3>
                            </dd><!-- /.card__text -->
                        </dl><!-- /.card__item -->
                    </a>
                </div><!-- /.service__list -->
            </div><!-- /.service__inner -->
        </section><!-- /#service -->

        <section id="gallery" class="gallery">
            <div class="gallery__inner">
                <h2 class="gallery__title">
                    開催中のイベント
                </h2><!-- /.gallery__title -->
                <div class="gallery__body">
                    <picture class="gallery__img">
                        <source type="image/gallery.webp" srcset="<?php echo get_theme_file_uri('./image/gallery.webp'); ?>">
                        <img src="<?php echo get_theme_file_uri('./image/gallery.webp'); ?>" alt="" width="500px" height="330px">
                    </picture><!-- /.gallery__img -->
                    <div class="gallery__text">
                        <p>店舗の2階にギャラリーがあります。
                            <br>美しい風景や繊細な人物写真、個性的な作品など、さまざまな写真を展示しています。日常の何気ない一瞬や、壮大な景色を切り取った写真に、きっと心が動かされるはずです。ぜひお越しください。
                        </p>
                        <a class="btn" href="<?php echo home_url('/gallery/'); ?>">ギャラリーについて詳しく見る</a>
                    </div><!-- /.gallery__text -->
                </div><!-- /.gallery__body -->
            </div><!-- /.gallery__inner -->
        </section><!-- /#gallery -->

        <section id="contact" class="contact">
            <div class="contact__inner">
                <h2 class="contact__title">
                    ご不明な点があればお気軽にお問い合わせください！
                </h2><!-- /.contact__title -->
                <div class="contact__text">
                    <p>サービスについての詳細やご相談、アクセス方法など気になることがございましたらお気軽にお問い合わせください。</p>
                    <p>スタッフが丁寧にお答えいたします。電話からもお問い合わせ可能です。</p>
                </div><!-- /.contact__text -->
                <div class="contact__link">
                    <a href="<?php echo home_url('/contact/'); ?>" class="btn">お問い合わせページはこちらから</a><!-- /.btn -->
                    <a href="tel:0567-26-0287" class="btn btn--tel"><i class="fa-solid fa-phone"></i>0567-26-0287</a>
                </div><!-- /.contact__link -->
            </div><!-- /.contact__inner -->
        </section><!-- /#contact -->

        <section id="access" class="access">
            <div class="access__inner">
                <h2 class="access__title">
                    アクセス
                </h2><!-- /.access__title -->
                <div class="access__body">
                    <div class="access__text">
                        <p>◆電車でお越しの場合<br>名鉄津島線「津島」駅から徒歩5分<br>※津島市文化会館前にございます。</p>
                        <p>◆お車でお越しの場合<br>駐車場3台分あります。お気をつけてお越しください。</p>
                    </div><!-- /.access__text -->
                    <div class="access__map">
                        <div class="access__heigh">
                            <iframe title="googleMap"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13043.864314051401!2d136.729062!3d35.182398!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x600398c1d1cafecb%3A0xaa359fed07d21bc3!2z44G_44KG44GN44Kr44Oh44Op!5e0!3m2!1sja!2sjp!4v1732841902978!5m2!1sja!2sjp"
                                width="1170" height="880" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div><!-- /.access__heigh -->
                    </div><!-- /.access__map -->
                </div><!-- /.access__body -->
            </div><!-- /.access__inner -->
        </section><!-- /#access -->
    </main><!-- /.main -->

    <?php get_footer() ?>