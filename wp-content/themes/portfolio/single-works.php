<?php

$category = get_field('category');

get_header(); 
?>


<!-- Breadcrumb -->
<?php if (!is_home()): ?>
      <div class="breadcrumb">
        <?php get_breadcrumb(); ?>
      </div>
<?php endif; ?>
<!-- End Breadcrumb -->

    <!-- Header -->
    <header class="single-work__header">
        <div class="card card--sw">
            <div class="card__info card--info-e">
                <h2 class="card__title card--title-sw"><?php the_title(); ?></h2>
                <div class="card__pill-and-category">
                <span class="pill"><?php echo get_the_date('Y'); ?></span>
                <span class="card__tag card--tag-sw"><?php echo $category; ?></span>
                </div>
                <div class="card__text card--text-sw"><?php the_excerpt(); ?></div>
            </div>
        </div>
    </header>
    <!-- End Header-->

<!-- single work body -->
<section class="single-work">
    <div>
        <?php the_content(); ?>
    </div>
<!-- end single work body -->

<?php get_footer(); ?>