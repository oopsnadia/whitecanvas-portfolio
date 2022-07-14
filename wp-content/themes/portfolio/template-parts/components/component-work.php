<?php

$category = get_field('category');


?>

<div class="card card--vertical">
    <div class="card__img-container">
        <div class="card__img"> <?php the_post_thumbnail(); ?></div>
    </div>
    <div class="card__info">
        <h4 class="card__title"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h4>
        <div class="card__pill-and-category">
        <span class="pill"> <?php echo get_the_date('Y'); ?></span>
        <span class="card__tag"> <?php echo esc_html($category); ?></span>
        </div>
        <div class="card__text"> <?php the_excerpt(); ?></div>
    </div>
</div>