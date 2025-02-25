<header class="header">
    <div class="header__inner">
        <a href="<?php echo home_url('/'); ?>">
            <h1 class="header__logo">
                <img src="<?php echo get_theme_file_uri('./image/logo.svg'); ?>" alt="みゆきカメラ" width="200px" height="110px">
            </h1><!-- /.header__logo -->
        </a>

        <div class="header__nav ">
            <nav class="nav nav--hidden">

                <ul class="nav__list">
                    <li class="nav__item nav__top"><a href="<?php echo home_url('/'); ?>" class="<?php is_front_page() ? print "current" : "" ?>">ホーム</a></li><!-- /.nav__item -->

                    <li class="nav__item parent nav__top"><a href="<?php echo home_url('/about/'); ?>" class="<?php if (is_page('about')) {
                                                                                                                    echo "current";
                                                                                                                } ?>">店舗について</a>
                        <ul class="nav__sub">
                            <li class="nav__item"><a href="<?php echo home_url('/about/#content'); ?>">私たちの想い</a></li>
                            <li class="nav__item"><a href="<?php echo home_url('/about/#staff'); ?>">スタッフ紹介</a></li>
                            <li class="nav__item"><a href="<?php echo home_url('/about/#info'); ?>">店舗情報</a></li>
                        </ul><!-- /.nav__sub -->
                    </li><!-- /.nav__item -->

                    <li class="nav__item parent nav__top"><a href="<?php echo home_url('/#service'); ?>">サービス</a>
                        <ul class="nav__sub">
                            <li class="nav__item"><a href="<?php echo home_url('/photo/'); ?>" class="<?php if (is_page('photo')) {
                                                                                                            echo "current";
                                                                                                        } ?>">撮影サービス</a></li>
                            <li class="nav__item"><a href="<?php echo home_url('/contest/'); ?>" class="<?php if (is_page('contest')) {
                                                                                                            echo "current";
                                                                                                        } ?>">コンテストサポート</a></li>
                            <li class="nav__item"><a href="<?php echo home_url('/trade/'); ?>" class="<?php if (is_page('trade')) {
                                                                                                            echo "current";
                                                                                                        } ?>">カメラの買取り・下取り</a></li>
                            <li class="nav__item"><a href="<?php echo home_url('/dubbing/'); ?>" class="<?php if (is_page('dubbing')) {
                                                                                                            echo "current";
                                                                                                        } ?>">ダビングサービス</a></li>
                        </ul><!--/.nav__sub -->
                    </li><!-- /.nav__item -->

                    <li class="nav__item parent nav__top"><a href="<?php echo home_url('/gallery/'); ?>">開催中のイベント</a>
                        <ul class="nav__sub">
                            <li class="nav__item"><a href="<?php echo home_url('/gallery/#now'); ?>">今月のギャラリー</a></li>
                            <li class="nav__item"><a href="<?php echo home_url('/gallery/#past'); ?>">過去のギャラリー</a></li>
                        </ul><!--/.nav__sub -->
                    </li><!-- /.nav__item -->

                    <li class="nav__item nav__top"><a href="<?php echo home_url('/#access'); ?>">アクセス</a></li><!-- /.nav__item -->
                </ul><!-- /.nav__list -->
            </nav><!-- /.nav -->
            <button class="header__menu">メニュー</button><!-- /.menu -->
        </div><!-- /.header__nav -->
    </div><!-- /.header__inner -->
</header><!-- /.header -->