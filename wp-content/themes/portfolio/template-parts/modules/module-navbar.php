<?php

$args_logo = array(
    'post_type' => 'logo',
);

$logo = new  WP_Query($args_logo);
?>

<!-- Navbar -->
<nav class="navbar">
    <div class="navbar__logo">
        <a href="/">
            <div class="navbar__logo--name">

                <?php if ($logo->have_posts()) :
                    while ($logo->have_posts()) :
                        $logo->the_post();
                        $logoName = get_field('logo'); ?>
                        <span>
                            <?php
                            echo the_title($logoName); ?>
                        </span>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif;
                ?>

                <span class="navbar__logo--here">Here</span><span class="navbar__logo--period">.</span>
            </div>
        </a>
    </div>

    <div class="navbar__menu">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-menu'
            )
        )
        ?>
    </div>
</nav>
<!--End Navbar-->