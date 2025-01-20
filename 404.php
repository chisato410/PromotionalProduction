<?php get_header() ?>

<body id="error">
    <?php wp_body_open(); ?>
    <?php get_header('nav') ?>

    <main class="main">
        <section class="error">
            <div class="error__inner">
                <h2 class="error__title">
                    ご指定のページが見つかりません。
                </h2><!-- /.error__title -->
                <div class="error__text">
                    <p>申し訳ございません。</p>
                    <p>お客様のお探しのページが見つかりませんでした。</p>
                    <p>ページが削除されたか、入力されたURLが間違っている可能性があります。</p>
                    <a href="<?php echo home_url('/'); ?>" class="btn">トップページへ戻る</a><!-- /.btn -->
                </div><!-- /.error__text -->
            </div><!-- /.error__inner -->
        </section><!-- /.error -->
    </main><!-- /.main -->

    <?php get_footer() ?>