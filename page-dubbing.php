<?php get_header(); ?>

<body>
    <?php wp_body_open(); ?>
    <?php get_header('nav'); ?>

    <main class="main" id="dubbing">
        <section class="mv hero">
            <div class="mv__img">
                <img src="<?php echo get_theme_file_uri('/image/vhs2.gif'); ?>" alt="">
            </div><!-- /.mv__img -->
            <div class="mv__intro">
                <div class="mv__inner">
                    <h2 class="mv__title">
                        ダビング
                    </h2><!-- /.mv__title -->
                    <div class="mv__text">
                        <p>面倒なダビング作業は当店にお任せください。
                            <br>ビデオテープが再生出来なくなる前に、大切な思い出の映像をDVDにダビングして保存しませんか？
                            <br>懐かしい8ミリフィルムからのDVD作成、カセットテープからのCD作成も可能です。
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
                $table = get_field('dubbing_table');
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

        <section class="price price--dubbing">
            <div class="price__inner">
                <h3 class="price__title">
                    VHS等ダビング料金
                </h3><!-- /.price__title -->

                <?php
                $table = get_field('vhs_table');
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

        <section class="point">
            <div class="point__inner">
                <h3 class="point__title">
                    注意点
                </h3><!-- /.point__title -->

                <ol class="point__list">
                    <li class="point__item">
                        <span>01</span>
                        <div class="point__text">
                            <p>料金は分数に応じます。</p>
                            <p>まとめることも出来ますので、店頭かお問い合わせフォームにてお問い合わせください。</p>
                        </div><!-- /.point__text -->
                    </li><!-- /.point__item -->
                    <li class="point__item">
                        <span>02</span>
                        <div class="point__text">
                            <p>Hi8テープは外注になります。</p>
                        </div><!-- /.point__text -->
                    </li><!-- /.point__item -->
                    <li class="point__item">
                        <span>03</span>
                        <div class="point__text">
                            <p>劣化による破損は責任を負いかねますので、ご了承ください。</p>
                        </div><!-- /.point__text -->
                </ol><!-- /.point__list -->
                <a href="<?php echo home_url('/#service'); ?>" class="btn btn--service">サービス一覧へ戻る</a><!-- /.btn -->
            </div><!-- /.point__inner -->
        </section><!-- /.point -->
    </main><!-- /.main -->

    <?php get_footer() ?>