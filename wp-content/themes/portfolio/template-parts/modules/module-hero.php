 <?php
    $heroTitle = get_field('hero_title');
    $copy = get_field('copy');
    $buttonTitle = get_field('button_title');
    $buttonFile = get_field('button_file');
    $image = get_field('image');
    ?>

 <!--     Hero -->
 <section class="hero">
     <div class="hero__text-box">
         <h1 class="hero__title"><?php echo esc_html($heroTitle); ?></h1>
         <div class="hero__description"><?php echo esc_html($copy); ?></div>
         <a href="<?php echo esc_url($buttonFile); ?>" class="button" download><?php echo esc_html($buttonTitle); ?></a>
     </div>
     <div class='hero__imagebox'>
         <div class="hero__image">
             <?php echo wp_get_attachment_image($image, array('415.96', '280.24')); ?>
         </div>
     </div>
     </div>
 </section>
 <!-- End Hero-->