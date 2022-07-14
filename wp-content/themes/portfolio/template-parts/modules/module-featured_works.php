<?php
$featuredWorksTitle = get_field('featured_works_section');

$args_works = array(
    'post_type' => 'works',
    'posts_per_page' => 3
);

$works = new WP_Query($args_works);

?>

<!-- Featured Works -->
<section class="work-section">
    <h5 class="work-section__title"><?php echo esc_html($featuredWorksTitle); ?></h5>
    <div class="work-section__cards">
        <?php
        if ($works->have_posts()) {
            while ($works->have_posts()) {
                $works->the_post();
                get_template_part('template-parts/components/component', 'work');
            }
            wp_reset_postdata();
        } ?>
    </div>
</section>
<!-- End Featured Works -->