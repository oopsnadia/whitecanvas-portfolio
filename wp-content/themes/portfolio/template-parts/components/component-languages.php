<?php

$args_languages = array(
  'post_type' => 'languages',
  'posts_per_page' => 5,
);

$lang = new  WP_Query($args_languages);
?>


<?php if ($lang->have_posts()) : ?>

  <div class="box">
    <h3 class="box__title">Languages</h3>
    <div class="box__inner-container">

      <?php while ($lang->have_posts()) :
        $lang->the_post();
        $range = get_field('skill_lang_level');
      ?>

        <div class="box__list-of-skills">
          <div class="box__list-of-skills--logo"> <?php the_post_thumbnail(); ?></div>
          <div class="box__list-of-skills--name"> <?php the_title(); ?> </div>
          <div class="box__dot-group">

            <?php

            switch ($range) {
              case 1:
                echo '
                  <span class="dot"></span>
                  <span class="dot dot--grey"></span>
                  <span class="dot dot--grey"></span>
                  <span class="dot dot--grey"></span>
                  <span class="dot dot--grey"></span>';
                break;
                break;

              case 2:
                echo '
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot dot--grey"></span>
                  <span class="dot dot--grey"></span>
                  <span class="dot dot--grey"></span>';
                break;

              case 3:
                echo '
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot "></span>
                  <span class="dot dot--grey"></span>
                  <span class="dot dot--grey"></span>';
                break;

              case 4:
                echo '
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot dot--grey"></span>';
                break;

              case 5:
                echo '
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot"></span>
                  <span class="dot dot--grey"></span>';
                break;
            }
            ?>


          </div>
        </div>

      <?php endwhile; ?>

      <? wp_reset_postdata(); ?>

    <?php endif; ?>