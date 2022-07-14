<?php get_header(); ?>

<div class="single">
    <article>
        <?= get_the_date('M Y'); ?>
        <h1> <?php the_title(); ?> </h1>
        <div> <?php the_content(); ?> </div>
        <?php the_post_thumbnail(); ?>
        
    </article>
</div>

<?php get_footer(); ?>