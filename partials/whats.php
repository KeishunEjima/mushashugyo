<section id="whats" class="l-whats">
    <div class="wrapper">
        <div class="l-whats__inner whats__inner">
            <?php
                $args = [
                    'sec-title' => 'WHAT\'S',
                    'sec-intro' => 'リアルビジネス挑戦で圧倒的成長',
                    'sec-top' => '短期集中・超実践型',
                    'sec-bottom' => 'ビジネスプログラム',
                    'visual' => 'whats-visual.webp'
                ];
                get_template_part('partials/secTitle', 'main' , $args );
            ?>
            <div class="l-whats__youtube">
                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/jfKfPfyJRdk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>