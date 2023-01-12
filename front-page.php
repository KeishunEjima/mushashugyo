<?php get_header(); ?>

    <main class="main-contents">
        <?php
            get_template_part('partials/fv');
        ?>
        <?php
            get_template_part('partials/cta', null, ['headerText' => true]);
        ?>
        <?php
            get_template_part('partials/whats');
        ?> 
        <?php
            get_template_part('partials/news');
        ?> 

    </main>

<?php get_footer(); ?>