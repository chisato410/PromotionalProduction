<?php get_header() ?>

<body class="contactPage">
    <?php wp_body_open(); ?>
    <?php get_header('nav') ?>

    <main class="main" id="contact">
        <section class="contact">
            <div class="contact__inner">
                <h2 id="contact__title" class="contact__title">
                    お問い合わせフォーム
                </h2>

                <?php echo do_shortcode('[contact-form-7 id="34bb442" title="お問い合わせ"]'); ?>

            </div><!-- /.contact__inner -->
        </section><!-- /.contact -->
    </main><!-- /.main -->

    <?php get_footer(); ?>
    <?php wp_footer(); ?>