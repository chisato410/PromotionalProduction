<?php get_header(); ?>

<body>
    <?php wp_body_open(); ?>
    <?php get_header('nav'); ?>

    <main class="main" id="photo">
        <section class="mv hero">
            <div class="mv__img">
                <img src="<?php echo get_theme_file_uri('./image/camera2.gif'); ?>" alt="">
            </div><!-- /.mv__img -->
            <div class="mv__intro">
                <div class="mv__inner">
                    <h2 class="mv__title">
                        証明写真
                    </h2><!-- /.mv__title -->
                    <div class="mv__text">
                        <p>第一印象を決める大事な証明写真はぜひプロにお任せください！
                            <br>今だからこそ残せる特別な一枚、エンディングフォトの撮影も可能です。
                            <br>お客様のご希望に寄り添い、丁寧に対応いたします。
                            <br>お気軽にお申し付けください。
                        </p>
                    </div><!-- /.mv__text -->
                </div><!-- /.mv__inner -->
            </div><!-- /.mv__intro -->
        </section><!-- /.mv -->

        <section class="price">
            <div class="price__inner">
                <h3 class="price__title">
                    基本料金
                </h3><!-- /.price__title -->

                <?php
                $table = get_field('price_table');
                if (! empty($table)) {
                    echo '<div class="table"><table border="0">';
                    if (! empty($table['caption'])) {
                        echo '<caption>' . $table['caption'] . '</caption>';
                    }
                    if (! empty($table['header'])) {
                        echo '<thead class="table__kinds">';
                        echo '<tr class="table__item">';
                        foreach ($table['header'] as $th) {
                            echo '<th class="table__kinds">';
                            echo $th['c'];
                            echo '</th>';
                        }
                        echo '</tr>';
                        echo '</thead>';
                    }
                    echo '<tbody class="table__contents">';
                    foreach ($table['body'] as $tr) {
                        echo '<tr class="table__item">';
                        foreach ($tr as $td) {
                            echo '<td class="table__contents">';
                            echo $td['c'];
                            echo '</td>';
                        }
                        echo '</tr>';
                    }
                    echo '</tbody>';
                    echo '</table></div>';
                }
                ?>
            </div><!-- /.price__inner -->
        </section><!-- /.price -->

        <section class="set">
            <div class="set__inner">
                <h3 class="set__title">
                    セット料金
                </h3><!-- /.set__title -->
                <div class="set__list">
                    <article class="set__item unit">
                        <div class="unit__img">
                            <img src="<?php echo get_theme_file_uri('./image/job.jpg'); ?>" alt="">
                        </div><!-- /.unit__img -->
                        <h4 class="unit__title">
                            就職活動セット
                        </h4><!-- /.unit__title -->
                        <div class="unit__text">
                            <p>証明写真6枚、焼き増し用データCD、WEBエントリー用データのセットです。
                                <br>予約不要、最短10分でお渡しできます。
                                <br>通常より1500円ほどお得なのでオススメです。
                                <br>就職活動にいかがですか？
                            </p>
                        </div><!-- /.unit__text -->
                        <div class="unit__price">
                            <p><?php echo get_field('job_hunting'); ?>円</p>
                        </div><!-- /.unit__price -->
                    </article><!-- /.set__item /.unit-->
                    <article class="set__item unit">
                        <div class="unit__img">
                            <img src="<?php echo get_theme_file_uri('./image/visa.jpg'); ?>" alt="">
                        </div><!-- /.unit__img -->
                        <h4 class="unit__title">
                            ビザ申請用写真
                        </h4><!-- /.unit__title -->
                        <div class="unit__text">
                            <p>中国・アメリカビザ申請用データ承ります。
                                <br>サイズを加工して、申請ができるデータを作成します。
                                <br>お気軽にお申し付けください。
                            </p>
                        </div><!-- /.unit__text -->
                        <div class="unit__price">
                            <p><?php echo get_field('visa'); ?>円</p>
                        </div><!-- /.unit__price -->
                    </article><!-- /.set__item /.unit-->
                </div><!-- /.set__list -->
            </div><!-- /.set__inner -->
        </section><!-- /.set -->

        <section class="option">
            <div class="option__inner">
                <h3 class="option__title">
                    オプション料金
                </h3><!-- /.option__title -->

                <div class="option__list">
                    <article class="option__item unit">
                        <div class="unit__img">
                            <img src="<?php echo get_theme_file_uri('./image/option1.jpg'); ?>" alt="">
                        </div><!-- /.unit__img -->
                        <h4 class="unit__title">
                            美肌加工
                        </h4><!-- /.unit__title -->
                        <div class="unit__text">
                            <p>美肌に仕上げることができます。
                                <br>より好印象なお写真に仕上げることができますので、お気軽にご相談ください。
                            </p>
                        </div><!-- /.unit__text -->
                        <div class="unit__price">
                            <p><?php echo get_field('clean'); ?>円</p>
                        </div><!-- /.unit__price -->
                    </article><!-- /.option__item /.unit-->
                    <article class="option__item unit">
                        <div class="unit__img">
                            <img src="<?php echo get_theme_file_uri('./image/hair.jpg'); ?>" alt="">
                        </div><!-- /.unit__img -->
                        <h4 class="unit__title">
                            髪色変更
                        </h4><!-- /.unit__title -->
                        <div class="unit__text">
                            <p>就職活動、受験写真等で髪色を変えたい方におすすめです。
                                <br>翌日仕上げになります。
                            </p>
                        </div><!-- /.unit__text -->
                        <div class="unit__price">
                            <p><?php echo get_field('hair'); ?>円</p>
                        </div><!-- /.unit__price -->
                    </article><!-- /.option__item /.unit-->
                </div><!-- /.option__list -->
            </div><!-- /.option__inner -->
        </section><!-- /.option -->

        <section class="point">
            <div class="point__inner">
                <h3 class="point__title">
                    注意点
                </h3><!-- /.point__title -->

                <ol class="point__list">
                    <li class="point__item">
                        <span>01</span>
                        <div class="point__text">
                            <p>基本的に予約は不要です。</p>
                            <p>当日に撮影、10分ほどでお渡しできます。</p>
                        </div><!-- /.point__text -->
                    </li><!-- /.point__item -->
                    <li class="point__item">
                        <span>02</span>
                        <div class="point__text">
                            <p>パスポート用の写真を撮影のお客様、いくつか注意点がございますので下記をご覧ください。</p>
                            <p>＊前髪は目元がはっきりでるようにお願いします。</p>
                            <p>＊横の髪の毛は顔にかからないようにしてください。</p>
                            <p>＊リボン・カチューシャ・ヘアピン等ははずしてください。</p>
                            <p>＊つけまつげ・カラーコンタクト・ピアスははずしてください。</p>
                        </div><!-- /.point__text -->
                    </li><!-- /.point__item -->
                    <li class="point__item">
                        <span>03</span>
                        <div class="point__text">
                            <p>当店は証明写真のスペースが狭いですが、その代わり満足いくまでお撮り直し可能です。</p>
                            <p>撮影後モニターで確認し、遠慮なくお伝えください。</p>
                        </div><!-- /.point__text -->
                    </li><!-- /.point__item -->
                    <li class="point__item">
                        <span>04</span>
                        <div class="point__text">
                            <p>エンディングフォトのみ予約が必要です。</p>
                            <p>お気をつけください。</p>
                        </div><!-- /.point__text -->
                    </li><!-- /.point__item -->

                </ol><!-- /.point__list -->

                <a href="<?php echo home_url('/#service'); ?>" class="btn btn--service">サービス一覧へ戻る</a><!-- /.btn -->
            </div><!-- /.point__inner -->
        </section><!-- /.point -->
    </main><!-- /.main -->

    <?php get_footer() ?>