<footer class="footer">
    <div class="footer__inner">
        <div class="footer__item">
            <div class="footer__info">
                <div class="footer__logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img src="<?php echo get_theme_file_uri('./image/footer-logo.svg'); ?>" alt="みゆきカメラ">
                    </a>
                </div><!-- /.footer__logo -->
                <p>〒496-0801<br class="SP">愛知県津島市藤浪町4-35-1</p>
                <p>TEL 0567-26-0287</p>
                <p>定休日 木曜日・第四日曜日</p>
                <div class="footer__sns">
                    <a href="https://www.instagram.com/miyukicamera1973/?hl=ja"><img src="<?php echo get_theme_file_uri('./image/Instagram_logo.svg'); ?>" alt="Instagramへのリンク"></a>
                    <a href="https://www.facebook.com/camera.miyuki/?locale=ja_JP"><img src="<?php echo get_theme_file_uri('./image/Facebook_Logo.svg'); ?>" alt="facebookへのリンク"></a>
                </div><!-- /.footer__sns -->
                <div class="footer__contact footer__contact--pc">
                    <a class="footer__btn" href="<?php echo home_url('/contact/'); ?>"><span class="footer__balloon">分からないことがある…</span>お問い合わせする</a>
                </div>
                <div class="footer__contact footer__contact--sp">
                    <a class="footer__btn" href="<?php echo home_url('/contact/'); ?>">
                        <img src="<?php echo get_theme_file_uri('./image/mail.svg'); ?>" alt="お問い合わせ">
                    </a>
                </div>

            </div><!-- /.footer__info -->

            <div class="footer__nav">
                <nav class="nav">
                    <div class="nav__group">
                        <ul class="nav__list">
                            <li class="nav__category"><a href="<?php echo home_url('/'); ?>">トップページ</a></li><!-- /.nav__category -->
                            <li class="nav__item"><a href="<?php echo home_url('/about/'); ?>">店舗について</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/#service'); ?>">サービス</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/gallery/'); ?>">ギャラリーについて</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/#access'); ?>">アクセス</a></li><!-- /.nav__item -->
                        </ul><!-- /.nav__list -->
                    </div><!-- /.nav__group -->

                    <div class="nav__group">
                        <ul class="nav__list">
                            <li class="nav__category"><a href="<?php echo home_url('/about/'); ?>">店舗について</a></li><!-- /.nav__category -->
                            <li class="nav__item"><a href="<?php echo home_url('/about/#content'); ?>">私たちの想い</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/about/#staff'); ?>">スタッフ紹介</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/about/#info'); ?>">店舗情報</a></li><!-- /.nav__item -->
                        </ul><!-- /.nav__list -->
                    </div><!-- /.nav__group -->

                    <div class="nav__group">
                        <ul class="nav__list">
                            <li class="nav__category"><a href="<?php echo home_url('/#service'); ?>">サービス</a></li><!-- /.nav__category -->
                            <li class="nav__item"><a href="<?php echo home_url('/photo/'); ?>">撮影サービス</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/contest/'); ?>">コンテストサポート</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/trade/'); ?>">カメラの買取り・下取り</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/dubbing/'); ?>">ダビングサービス</a></li><!-- /.nav__item -->
                        </ul><!-- /.nav__list -->
                    </div><!-- /.nav__group -->

                    <div class="nav__group">
                        <ul class="nav__list">
                            <li class="nav__category"><a href="<?php echo home_url('/gallery/'); ?>">開催中のイベント</a></li><!-- /.nav__category -->
                            <li class="nav__item"><a href="<?php echo home_url('/gallery/#now'); ?>">今月のギャラリー</a></li><!-- /.nav__item -->
                            <li class="nav__item"><a href="<?php echo home_url('/gallery/#past'); ?>">過去のギャラリー</a></li><!-- /.nav__item -->
                        </ul><!-- /.nav__list -->
                    </div><!-- /.nav__group -->
                </nav><!-- /.nav -->
            </div><!-- /.footer__nav -->
        </div><!-- /.footer__item -->
    </div><!-- /.footer__inner -->
</footer><!-- /.footer -->
<script src="<?php echo get_theme_file_uri('./script.js'); ?>"></script>
<?php wp_footer(); ?>
</body>

</html>