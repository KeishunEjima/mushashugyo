<section id="news" class="l-news">
    <div class="l-news_container">
        <?php
            $args = [
                'sec-title' => 'NEWS',
                'sec-slug' => '最新情報'
            ];
            get_template_part('partials/sec', 'title' , $args );
        ?>
        <?php 
        $args = array(
            'post_type' => 'news',  //取得するカスタム投稿タイプの種類
            'posts_per_page' => 3,   //１ページの表示件数
            'paged' => $paged
        );
        $the_query = new WP_Query($args);  //新しいメインクエリの作成
        ?>
        <div class="l-news_inner news_inner">
            <ul class="l-news_list news_list">
                <?php
                if($the_query->have_posts()):
                    while ($the_query->have_posts()):
                        $the_query->the_post();
                ?>
                    <li class="l-news_items news_items">
                        <a href="<?php the_permalink();?>" class="link" >
                            <div class="l-news_table news_table">
                                <time class="l-news_date news_date"><?php echo get_the_date('Y.m.d'); ?></time> 
                                <p class="l-news_title news_title">
                                    <?php the_title() ?>
                                </p>
                            </div>
                        </a>
                    </li>
                <?php endwhile;else: ?>
                    <p>記事はありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </ul>
        </div>
    <?php
    get_template_part('partials/btn' );
    ?>
    </div>
</section>