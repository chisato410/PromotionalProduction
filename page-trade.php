<?php get_header() ?>

<body>
    <?php wp_body_open(); ?>
    <?php get_header('nav') ?>

    <main class="main" id="trade">
        <section class="mv hero">
            <picture class="mv__img">
                <source type="image/trade2.webp" srcset="<?php echo get_theme_file_uri('./image/trade2.webp'); ?>" alt="">
                <img src="<?php echo get_theme_file_uri('./image/trade2.gif'); ?>" alt="">
            </picture><!-- /.mv__img -->
            <div class="mv__intro">
                <div class="mv__inner">
                    <h2 class="mv__title">
                        カメラの買取り・下取り
                    </h2><!-- /.mv__title -->
                    <div class="mv__text">
                        <p>自宅に眠っているカメラ、レンズはありませんか？
                            <br>カメラ買取＆下取りサービスで、お手持ちのカメラを高価買取致します。
                            <br>ぜひ一度査定させてください。
                        </p>
                    </div><!-- /.mv__text -->
                </div><!-- /.mv__inner -->
            </div><!-- /.mv__intro -->
        </section><!-- /.mv -->

        <section class="trade">
            <div class="trade__inner">
                <article class="trade__group">
                    <div class="trade__about">
                        <h3 class="trade__title">
                            カメラの買取りとは？
                        </h3><!-- /.trade__title -->
                        <div class="trade__text">
                            <p>使わなくなったカメラやレンズを専門業者や店舗に買い取ってもらい、その代金を受け取る方法です。とくにデジタルカメラや一眼レフ、ミラーレスカメラなどは中古市場で需要が高く、思わぬ高値がつくこともあります。<em>所有カメラ・デジカメを手放したい、処分したい場合には買取りがオススメです。</em></p>
                        </div><!-- /.trade__text -->
                    </div><!-- /.trade__about -->

                    <picture class="trade__flow">
                        <source type="image/webp" srcset="<?php echo get_theme_file_uri('./image/tradeAbout1.webp'); ?>" alt="お客様の売却に対して、買取り金額をお渡しします。">
                        <img src="<?php echo get_theme_file_uri('./image/tradeAbout1.jpg'); ?>" alt="お客様の売却に対して、買取り金額をお渡しします。">
                    </picture><!-- /.trade__flow -->
                </article><!-- /.trade__group -->
            </div><!-- /.trade__inner -->
        </section><!-- /.trade -->

        <section class="trade">
            <div class="trade__inner">

                <article class="trade__group trade__group--in">
                    <div class="trade__about">
                        <h3 class="trade__title">
                            カメラの下取りとは？
                        </h3><!-- /.trade__title -->
                        <div class="trade__text">
                            <p>カメラの下取りとは、新しいカメラを購入する際に、今使っているカメラをお店に引き渡して、その分の金額を購入代金から値引きしてもらう方法です。購入と同時に下取りを行うため手続きが簡単で、<em>下取り金額がそのまま新しいカメラの購入費用から差し引かれるので、買い替えをしたい場合におすすめです。</em></p>
                        </div><!-- /.trade__text -->
                    </div><!-- /.trade__about -->

                    <picture class="trade__flow">
                        <source type="image/webp" srcset="<?php echo get_theme_file_uri('./image/tradeAbout2.webp'); ?>" alt="お客様の売却に対して、買取り金額をお渡しします。">
                        <img src="<?php echo get_theme_file_uri('./image/tradeAbout2.jpg'); ?>" alt="お客様の売却に対して、買取り金額をお渡しします。">
                    </picture><!-- /.trade__flow -->
                </article><!-- /.trade__group -->
                <a href="<?php echo home_url('/#service'); ?>" class="btn btn--service">サービス一覧へ戻る</a><!-- /.btn -->
            </div><!-- /.trade__inner -->
        </section><!-- /.trade -->
    </main>

    <?php get_footer() ?>