<?php

/*
* Template Name: About
*/

$experience = get_field('first_section');
$education = get_field('second_section');

get_header(); ?>


<!--About-->
<section class="about">
    <h1 class="about__title"> <?php the_title(); ?> </h1>
    <div class="about__description"> <?php the_content(); ?> </div>
</section>
<!-- End About-->

<!-- Experience -->
<section class="experience">
    <h5 class="experience__title"> <?php echo esc_html($experience); ?></h5>
    <div class="card__container">
        <?php if (have_posts()) :
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/modules/module', 'experience');
            }
        else : ?>
            <h5>Nothing found...</h5>
        <?php endif; ?>
    </div>
</section>
<!-- End Experience -->

<!-- Education -->
<section class="education">
    <h5 class="education__title"><?php echo esc_html($education); ?></h5>
    <div class="card__container">
        <?php if (have_posts()) :
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/modules/module', 'education');
            }
        else : ?>
            <h5>Nothing found...</h5>
        <?php endif; ?>
    </div>
</section>
<!-- End Education -->

<?php get_footer(); ?>