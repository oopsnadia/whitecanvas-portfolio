<?php
$education = array(
  'post_type' => 'education',
);

$education = new  WP_Query($education);
?>


<?php
if ($education->have_posts()) :
  while ($education->have_posts()) :
    $education->the_post();
    $from = get_field('from');
    $to = get_field('to');
?>

    <div class="card card--e">
      <div class="card__info card--info-e">
        <h4 class="card__title"> <?php the_title(); ?></h4>
        <div class="card__date"> <?php echo $from ?> <span> | </span> <?php echo $to ?> </div>
        <div class="card__text card--text-e"> <?php the_content(); ?> </div>
      </div>
    </div>

  <?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php endif; ?>