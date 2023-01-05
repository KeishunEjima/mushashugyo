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

    <header id="header" class="l-header header">
        <div class="l-header_inner header_inner">
            <h1 class="l-header_logo header_logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="l-header_image header_image" src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/header-logo.svg')); ?>" alt=<?php bloginfo('name'); ?>>
                </a>
            </h1>
            <nav class="l-header_navi header_navi">
                <ul class="l-header_list header_list">
                    <li class="l-header_item header_item"><a href="#">自走式エンジンとは？</a></li>
                    <li class="l-header_item header_item"><a href="#">プログラム概要</a></li>
                    <li class="l-header_item header_item"><a href="#">講師紹介</a></li>
                    <li class="l-header_item header_item"><a class="init" href="#">ミッション</a></li>
                    <li class="l-header_item header_item"><a href="#">参加者の声</a></li>
                    <li class="l-header_item header_item"><a href="#">保護者の方へ</a></li>
                </ul>
            </nav>
        </div>
    </header>