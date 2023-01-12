<div class="l-sec-title-main">
    <div class="l-sec-title-main__text sec-title-main__text">
        <p class="l-sec-title-main__title sec-title-main__title"><?= $args['sec-title'] ?></p>
        <div class="l-sec-title-main__slug">
            <p class="sec-title-main__intro"><?= $args['sec-intro'] ?></p>
            <p class="sec-title-main__top"><?= $args['sec-top'] ?>
            <p class="sec-title-main__bottom"><?= $args['sec-bottom'] ?></p>
        </div>
    </div>
    <div class="l-sec-title-main__image sec-title-main__image">
        <picture>
            <img src="<?= esc_url(get_theme_file_uri('/dist/assets/image/'.$args['visual'])); ?>" >
        </picture>
    </div>
</div>