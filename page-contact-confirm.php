<?php get_header(); ?>

<body class="contactPage">
    <?php wp_body_open(); ?>
    <?php get_header('nav'); ?>

    <main class="main" id="confirm">
        <section class="cnf">
            <div class="cnf__inner">
                <h2 class="cnf__title">
                    お問い合わせ内容の確認
                </h2><!-- /.cnf__title -->
                <div class="cnf__text">
                    <p>まだ送信されていません！</p>
                </div><!-- /.cnf__text -->

                <?php echo do_shortcode('[contact-form-7 id="d2aa672" title="お問い合わせ(確認画面)"]'); ?>
            </div><!-- /.cnf__inner -->
        </section><!-- /.cnf -->

    </main><!-- /.main -->

    <?php get_footer() ?>
