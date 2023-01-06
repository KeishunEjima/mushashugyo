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
                    <div class="l-header_icon header_icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
    
            </div>
        </div> 
        <!-- タブレットサイズ時のメニュー -->
        <nav class="l-drawer_menu drawer_menu">
            <div class="l-drawer_menu-inner drawer_menu-inner">
                <ul class="l-drawer_menu-list drawer_menu-list">
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">自走式エンジンとは？</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">プログラム概要</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">講師紹介</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">ミッション</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">参加者の声</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">保護者の方へ</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">自治体教育機関の方へ</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a class="link" href="#">友達紹介キャンペーン</a></li>
                </ul>
                <ul class="l-heade_menu-sublist drawer_menu-sublist">
                    <li class="l-drawer_menu-item drawer_menu-item"><a href="#">コラム</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a href="#">ニュース</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a href="#">よくある質問</a></li>
                    <li class="l-drawer_menu-item drawer_menu-item"><a href="#">お問い合わせ</a></li>
                </ul>
                <div class="l-drawer_close">
                    <a class="l-btn btn" href="#">
                        ClOSE
                    </a>
                </div>
            </div>
        </nav>
    </header>