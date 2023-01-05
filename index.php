<?php get_header(); ?>

    <div class="wrapper">
        <h1 class="page-title"><?php the_archive_title(); ?></h1>
    </div>

    <?php get_header(); ?>

    <main class="main-contents wrapper">
        <?php
        $sec_title = "こんにちは"; 
        $sec_slug = "こんばんは";
        include("partials/sec-title.php")
        ?>
        <section class="sec_news">
            <div class="sec_head">
                新着情報
            </div>
            <?php 
            $args = array(
                'post_type' => 'news',  //取得するカスタム投稿タイプの種類
                'post_per_page' => 5,   //１ページの表示件数
                'paged' => $paged
            );
            $the_query = new WP_Query($args);  //新しいメインクエリの作成
            ?>
            <?php if($the_query->have_posts()):while ($the_query->have_posts()):$the_query->the_post(); ?>
                <ul>
                    <li>
                        <div class="date"><?php echo get_the_date(); ?></div>
                        <div class="title"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></div>
                    </li>
                </ul>
            <?php endwhile;else: ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
            <div class="to_list"><a href="<?php bloginfo('url');?>">新着情報一覧</a></div>
        </section>


        <div class="post-list">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article class="post-item">
            <a href="<?php echo esc_url(get_permalink()); ?>">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail('medium'); ?>
                <?php else: ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('/images/ph.png')); ?>" alt="" class="wp-post-image">
                <?php endif; ?>
            </a>
            <header class="post-header">
                <h2 class="post-title">
                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                </h2>
                <time class="post-date" datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php the_date(); ?></time>
            </header>
            <?php the_category(); ?>
        </article>
            <?php endwhile; else : ?>
                <p>記事はありません。</p>
            <?php endif; ?>
        </div>

        <div class="nav-links">
            <?php posts_nav_link(' ', 'NEXT', 'PREV'); ?>
        </div>
    </main>

<?php get_footer(); ?>