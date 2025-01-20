<?php get_header() ?>

<body>
    <?php wp_body_open(); ?>
    <?php get_header('nav') ?>

    <main class="main" id="about">
        <section class="content hero" id="content">
            <div class="content__inner">
                <article class="content__item">
                    <picture class="content__img">
                        <source type="image/webp" srcset="<?php echo get_theme_file_uri('./image/aboutImg.webp'); ?>" alt="">
                        <img src="<?php echo get_theme_file_uri('./image/aboutImg.jpg'); ?>" alt="">
                    </picture><!-- /.content__img -->
                    <div class="content__text">
                        <p>写真展やSNSで作品を共有</p>
                        <p>コンテストやメディア応募で腕試し</p>
                        <p>子供やペット、大切な瞬間を写真に</p>
                        <p>写真教室で新たな仲間との出会い</p>
                        <p class="content__catch">写真は人生を彩る<br class="sp">一生の趣味。</p><!-- /.content__catch -->
                        <p class="content__catch">今この瞬間を切り取る、<br class="sp">写真を始めてみませんか？</p><!-- /.content__catch -->
                    </div><!-- /.content__text -->
                </article><!-- /.content__item -->
            </div><!-- /.content__inner -->
        </section><!-- /.content -->

        <section class="staff" id="staff">
            <div class="staff__inner">
                <h2 class="staff__title">
                    スタッフ紹介
                </h2><!-- /.staff__title -->
                <div class="staff__list ">
                    <article class="staff__item unit ">
                        <picture class="unit__img ">
                            <source class="staff__img staff__img--yoshiki" srcset="image/staff_yoshiki.webp" type="<?php echo get_theme_file_uri('./image/staff_yoshiki.jpg'); ?>">
                            <img class="staff__img staff__img--yoshiki" src="<?php echo get_theme_file_uri('./image/staff_yoshiki.jpg'); ?>" alt="">
                        </picture><!-- /.unit__img -->
                        <h4 class="unit__title">
                            店長　yoshiki
                        </h4><!-- /.unit__title -->
                        <div class="unit__text">
                            <p>休みの日もスナップ写真、
                                <br>ネイチャー写真の撮影に出掛けます。
                                <br>富士フォトコンテスト入賞経験あります。
                                <br>プリント担当のカメラマンです。
                            </p>
                        </div><!-- /.unit__text -->
                    </article><!-- /.staff__item /.unit-->

                    <article class="staff__item unit ">
                        <picture class="unit__img">
                            <source class="staff__img staff__img--maki" srcset="image/staff_maki.webp" type="<?php echo get_theme_file_uri('./image/staff_maki.jpg'); ?>">
                            <img class="staff__img staff__img--maki" src="<?php echo get_theme_file_uri('./image/staff_maki.jpg'); ?>" alt="">
                        </picture><!-- /.unit__img -->
                        <h4 class="unit__title">
                            maki
                        </h4><!-- /.unit__title -->
                        <div class="unit__text">
                            <p>Photoshopで写真の加工ができます。
                                <br>オリジナルの年賀状を作成しております。
                                <br>SNSを常時更新中です！
                                <br>年賀状とSNSを担当しています。
                            </p>
                        </div><!-- /.unit__text -->
                    </article><!-- /.staff__item /.unit-->

                    <article class="staff__item unit">
                        <picture class="unit__img">
                            <source class="staff__img staff__img--mariko" srcset="image/staff_mariko.webp" type="<?php echo get_theme_file_uri('./image/staff_mariko.jpg'); ?>">
                            <img class="staff__img staff__img--mariko" src="<?php echo get_theme_file_uri('./image/staff_mariko.jpg'); ?>" alt="">
                        </picture><!-- /.unit__img -->
                        <h4 class="unit__title">
                            mariko
                        </h4><!-- /.unit__title -->
                        <div class="unit__text">
                            <p>写真屋で50年以上の経験を積んでいるベテランです。
                                <br>なんでもお任せください！
                                <br>カメラの販売とエンディングフォトを担当しています。
                            </p>
                        </div><!-- /.unit__text -->
                    </article><!-- /.staff__item /.unit-->


                </div><!-- /.staff__list -->
            </div><!-- /.staff__inner -->
        </section><!-- /.staff -->

        <section class="info" id="info">
            <div class="info__inner">
                <h2 class="info__title">
                    店舗情報
                </h2><!-- /.info__title -->

                <div class="info__body">
                    <div class="info__text">
                        <dl class="info__item">
                            <dt class="info__label">店舗名称</dt><!-- /.info__label -->
                            <dd class="info__contents">（有）みゆきカメラ</dd><!-- /.info__contents -->
                        </dl><!-- /.info__item -->

                        <dl class="info__item">
                            <dt class="info__label">住所</dt><!-- /.info__label -->
                            <dd class="info__contents">〒496-0801 <br>愛知県津島市藤浪町4-35-1
                            </dd><!-- /.info__contents -->
                        </dl><!-- /.info__item -->

                        <dl class="info__item">
                            <dt class="info__label">電話番号</dt><!-- /.info__label -->
                            <dd class="info__contents">0567-26-0287</dd><!-- /.info__contents -->
                        </dl><!-- /.info__item -->

                        <dl class="info__item">
                            <dt class="info__label">FAX</dt><!-- /.info__label -->
                            <dd class="info__contents">0567-26-4902</dd><!-- /.info__contents -->
                        </dl><!-- /.info__item -->

                        <dl class="info__item">
                            <dt class="info__label">Mail</dt><!-- /.info__label -->
                            <dd class="info__contents">c_miyuki@clovernet.ne.jp</dd><!-- /.info__contents -->
                        </dl><!-- /.info__item -->

                        <dl class="info__item">
                            <dt class="info__label">営業時間</dt><!-- /.info__label -->
                            <dd class="info__contents">午前9:00 〜 午後6:00</dd><!-- /.info__contents -->
                        </dl><!-- /.info__item -->

                        <dl class="info__item">
                            <dt class="info__label">定休日</dt><!-- /.info__label -->
                            <dd class="info__contents">木曜日・第四日曜日</dd><!-- /.info__contents -->
                        </dl><!-- /.info__item -->
                    </div><!-- /.info__text -->

                    <picture class="info__img">
                        <source type="image/webp" srcset="<?php echo get_theme_file_uri('./image/info.webp'); ?>" alt="">
                        <img src="<?php echo get_theme_file_uri('./image/info.jpg'); ?>" alt="">
                    </picture><!-- /.info__img -->
                </div><!-- /.info__body -->
                <a href="<?php echo home_url(); ?>" class="btn">トップページへ戻る</a><!-- /.btn -->
            </div><!-- /.info__inner -->
        </section><!-- /.info -->
    </main><!-- /.main -->

    <?php get_footer() ?>