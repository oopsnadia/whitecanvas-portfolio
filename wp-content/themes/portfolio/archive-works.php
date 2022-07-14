<?php get_header(); ?>

<!-- Works -->
<section class="work-section work-section--two">
    <h1 class="work-section__title--two">Works</h1>
    <div class="work-section__cards">

        <?php if (have_posts()) :
            while (have_posts()) {
                the_post();
                $categorie = get_field('categorie');
                get_template_part('template-parts/components/component', 'work');
            }
        else : ?>
            <h5>Nothing found...</h5>
        <?php endif; ?>
    </div>
</section>
<!-- End Works -->

<?php get_footer(); ?>