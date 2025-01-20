<?php get_header() ?>

<body id="galleryPage">
    <?php wp_body_open(); ?>
    <?php get_header('nav') ?>
    <main class="main">
        <div class="galleryPage__inner">
            <?php
            // WP_Queryの設定
            $args = array(
                'post_type'      => 'galleryList', // 投稿タイプ
                'posts_per_page' => 7,      // 表示する投稿数
                'orderby'        => 'date', // 並び順（最新記事）
                'order'          => 'DESC', // 降順
            );
            $query = new WP_Query($args);
            $loopcount = 0;
            // ループ開始
            if ($query->have_posts()) :
                while ($query->have_posts()) : $query->the_post();
                    $loopcount++; ?>
                    <?php if ($loopcount == 1): ?>
                        <section class="now" id="now">
                            <div class="now__inner">
                                <h2 class="now__title">
                                    今月のギャラリー
                                </h2><!-- /.now__title -->
                                <div class="now__contents">
                                    <!-- アイキャッチ画像 -->
                                    <div class="now__thumbnail">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('full');
                                        } else {
                                            echo '<img src="' . get_template_directory_uri() . './image/gallery.jpg" alt="">';
                                        }
                                        ?>
                                    </div><!-- /.now__thumbnail -->
                                </div><!-- /.now__contents -->
                            </div><!-- /.now__inner -->
                        </section><!-- /.now -->
                        <section class="past" id="past">
                            <div class="past__inner">
                                <h2 class="past__title">
                                    過去のギャラリー
                                </h2><!-- /.past__title -->
                                <div class="past__list">
                                <?php else: ?>
                                    <?php
                                    if (has_post_thumbnail()) {
                                        the_post_thumbnail('full');
                                    } else {
                                        echo '<img src="' . get_template_directory_uri() . './image/gallery.jpg" alt="">';
                                    }
                                    ?>
                                <?php endif; ?>
                            <?php endwhile;
                        wp_reset_postdata(); // クエリリセット
                    else : ?>
                            <p>記事が見つかりませんでした。</p>
                        <?php endif; ?>
                                </div><!-- /.past__list -->
                            </div><!-- /.past__inner -->
                        </section><!-- /.past -->
                        <a href="<?php echo home_url(); ?>" class="btn">トップページへ戻る</a><!-- /.btn -->
                    </div><!-- /.gallery__inner -->
    </main><!-- /.main -->

    <?php get_footer() ?>