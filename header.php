<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/favicon.svg')); ?>" type="image/svg+xml">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header id="header" class="l-header header js-target-elem">
        <div class="l-header_inner header_inner">
            <h1 class="l-header_logo header_logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="l-header_image header_image" src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/header-logo.svg')); ?>" alt=<?php bloginfo('name'); ?>>
                </a>
            </h1>
            
            <!-- フルスクリーン時のナビゲージョン -->
            <nav class="l-header_navi header_navi full-screen">
                <ul class="l-header_list header_list">
                    <li class="l-header_item header_item"><a href="#">自走式エンジンとは？</a></li>
                    <li class="l-header_item header_item"><a href="#">プログラム概要</a></li>
                    <li class="l-header_item header_item"><a href="#">講師紹介</a></li>
                    <li class="l-header_item header_item"><a class="init" href="#">ミッション</a></li>
                    <li class="l-header_item header_item"><a href="#">参加者の声</a></li>
                    <li class="l-header_item header_item"><a href="#">保護者の方へ</a></li>
                </ul>
            </nav>

            <div class="medium-screen">
                <!-- タブレットサイズ時のメニューボタン -->
                <div class="l-header_menu-btn header_menu-btn js-menu-btn">
                    <div class="l-header_menu-btn-icon header_menu-btn-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
    
            </div>
        </div> 
        <!-- タブレットサイズ時のメニュー -->
        <nav class="l-drawer_menu drawer_menu ">
            <div class="l-drawer_menu-inner drawer_menu-inner">
                <ul class="l-drawer_menu-list drawer_menu-list">
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">自走式エンジンとは？</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">プログラム概要</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">講師紹介</a></li>
                    <li class="l-drawer_menu-item -has-sub-menu js-accordion-title">
                        <div class="drawer_menu-item">
                            <a class="link" href="#">ミッション</a>
                        </div>
                        <div class="l-drawer_sub-menu accordion__container">
                            <ul class="l-drawer_sub-menu-list drawer_sub-menu-list ">
                                <li class="l-drawer_sub-menu-item drawer_sub-menu-item"><a class="link" href="#">海外ビジネス<span>武者修行プログラム</span></a></li>
                                <li class="l-drawer_sub-menu-item drawer_sub-menu-item"><a class="link" href="#">地方創生<span>イノベーション武者修行プログラム</span></a></li>
                                <li class="l-drawer_sub-menu-item drawer_sub-menu-item"><a class="link -disable" href="#">オフライン<span>武者修行プログラム</span></a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">参加者の声</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">保護者の方へ</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link -disable" href="#">自治体教育機関の方へ</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">友達紹介キャンペーン</a></li>
                </ul>
                <ul class="l-drawer_menu-sub-list drawer_menu-sub-list">
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">コラム</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">ニュース</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">よくある質問</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">お問い合わせ</a></li>
                </ul>
                <div class="l-drawer_close drawer_close js-close-btn">
                    <div class="l-drawer_close-btn drawer_close-btn">
                        <p class="l-drawer_close-text drawer_close-text link">
                            CLOSE
                        </p>
                        <span class="l-drawer_close-icon drawer_close-icon"></span>
                        <span class="l-drawer_close-icon drawer_close-icon"></span>
                    </div>
                </div>
            </div>
        </nav>
    </header>