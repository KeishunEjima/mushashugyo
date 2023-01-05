<?php get_header(); ?>

    <main class="main-contents wrapper">
        <div id="fv" class="l-fv fv">
            <div class="l-fv_contain">
                <div class="l-fv_bg fv_bg swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <picture>
                                <source src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-1.webp')); ?>" type="image/webp">
                                <img src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-1.jpg')); ?>" alt="">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-2.webp')); ?>" type="image/webp">
                                <img src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-2.jpg')); ?>" alt="">
                            </picture>
                        </div>
                        <div class="swiper-slide">
                            <picture>
                                <source src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-3.webp')); ?>" type="image/webp">
                                <img src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-3.jpg')); ?>" alt="">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="l-fv_contents">
                    <div class="l-fv_sentence fv_sentence">
                        <p class="l-fv_text fv_text">
                        今が変わる<br>
                        将来が変わる<br> 
                        きみの変態を支援。
                        </p>
                    </div>
                    <div class="l-fv_banner fv_banner">
                        <img src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-point-1.svg')); ?>" class="l-fv_point fv_point" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-point-2.svg')); ?>" class="l-fv_point fv_point" alt="">
                        <img src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/fv-point-3.svg')); ?>" class="l-fv_point fv_point" alt="">
                    </div>
                </div>
                <div class="l-fv_block fv_block -yellow">
                </div>
                <div class="l-fv_block fv_block -white">
                </div>
            </div>
        </div>
        <?php 
        get_template_part('partials/sec', 'news');
        ?>
    </main>

<?php get_footer(); ?>