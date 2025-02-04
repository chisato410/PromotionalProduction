<?php get_header(); ?>

<body>
    <?php wp_body_open(); ?>
    <?php get_header('nav'); ?>

    <main class="main" id="contest">
        <section class="mv hero">
            <div class="mv__img">
                <img src="<?php echo get_theme_file_uri('./image/contest2.gif'); ?>" alt="" width="400px" height="400px">
            </div><!-- /.mv__img -->
            <div class="mv__intro">
                <div class="mv__inner">
                    <h2 class="mv__title">
                        コンテストサポート
                    </h2><!-- /.mv__title -->
                    <div class="mv__text">
                        <p>みゆきカメラでは、写真コンテストのサポートを行っています。
                            <br>撮影やトリミングの相談、応募までお手伝いします！
                            <br>コンテスト入賞経験のあるスタッフもおります。
                            <br>お気軽にご相談ください！
                        </p>
                    </div><!-- /.mv__text -->
                </div><!-- /.mv__inner -->
            </div><!-- /.mv__intro -->
        </section><!-- /.mv -->

        <section class="contest">
            <div class="contest__inner">
                <h3 class="contest__title">
                    募集中のコンテスト
                </h3><!-- /.contest__title -->
                <article class="contest__item">
                    <?php
                    $args = array(
                        'post_type' => 'contest_list',
                    );

                    $the_query = new WP_Query($args);
                    ?>
                    <?php if ($the_query->have_posts()): ?>
                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <div class="contest__img">
                                <?php
                                if (has_post_thumbnail()):
                                    the_post_thumbnail('thumbnail');
                                else:
                                ?>
                                    <img src="<?php echo get_theme_file_uri('./image/contestSample.jpg'); ?>" alt="" width="455px" height="455px">
                                <?php
                                endif;
                                ?>
                            </div>

                            <div class="contest__info">
                                <h4 class="contest__title"><?php the_title(); ?></h4>
                                <div class="contest__description"><?php the_content(); ?></div>
                            <?php endwhile; ?>
                        <?php else: ?>
                            <p>募集中のコンテストはありません。</p>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>
                            </div><!-- /.contest__info -->
                </article><!-- /.contest___item -->
                <a href="<?php echo home_url('/#service'); ?>" class="btn btn--service">サービス一覧へ戻る</a><!-- /.btn -->
            </div><!-- /.contest__inner -->
        </section><!-- /.contest -->
    </main><!-- /.main -->

    <?php get_footer() ?>