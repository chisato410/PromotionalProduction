<?php get_header(); ?>

<body class="contactPage">
    <?php wp_body_open(); ?>
    <?php get_header('nav'); ?>

    <main class="main" id="thanks">
        <section class="thanks">
            <div class="thanks__inner">
                <div class="thanks__body">
                    <h2 class="thanks__title">
                        ありがとう！
                    </h2><!-- /.thanks__title -->
                    <div class="thanks__text">
                        <p>お問い合わせありがとうございます。</p>
                        <p>お送りいただきました内容を確認の上、担当者より折り返しご連絡します。</p>
                        <p>お急ぎの場合はお電話にてご連絡ください。</p>
                    </div><!-- /.thanks__text -->
                    <a href="<?php echo home_url('/'); ?>" class="btn">最初のページへ戻る</a>
                </div><!-- /.thanks__body -->
            </div><!-- /.thanks__inner -->
        </section><!-- /.thanks -->
    </main><!-- /.main -->

    <?php get_footer() ?>