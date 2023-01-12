<section id="cta" class="l-cta">
    <div class="l-cta__block cta__block --yellow">
    </div>
    <div class="l-cta__block cta__block --white">
    </div>
    <div class="l-cta__contain cta__contain">
        <div class="l-cta__inner">
            <?php if(isset($args['headerText']) && $args['headerText'] === true): ?>
                <div class="l-cta__header cta__header">
                    <p class="l-cta__header-text cta__header-text">２週間のビジネスプログラムで人生を切り開く</p>
                </div>
            <?php endif; ?>
            <div class="l-cta__ballon-wrapper">
                <div class="l-cta__ballon-wrapper-item">
                    <picture >
                        <source 
                        srcset="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/cta-balloon-left-sp.svg')); ?>"  
                        media="(max-width: 786px)"
                        >
                        <img src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/cta-balloon-left.svg')); ?>" >
                    </picture>
                </div>
                <div class="l-cta__ballon-wrapper-item"> 
                    <picture>
                        <source 
                        srcset="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/cta-balloon-right-sp.svg')); ?>"  
                        media="(max-width: 786px)"
                        >
                        <img src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/cta-balloon-right.svg')); ?>" >
                    </picture>
                </div>
            </div>
            <div class="l-cta__btn cta__btn l-btn btn">
                <a class="link" href="#">
                    <img class="l-cta__btn-text" src="<?php echo esc_url(get_theme_file_uri('/dist/assets/image/cta-btn-text.svg')); ?>" >
                </a>
            </div>
            <div class="l-cta__footer cta__footer">
                <p>学部・学年・経験不要</p>
            </div>
        </div>
    </div>
</section>