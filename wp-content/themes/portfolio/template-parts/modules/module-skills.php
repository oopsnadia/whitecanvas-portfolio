   <?php

    $skillsSectionTitle = get_field('skills_section_title');

    ?>

   <!-- Skills Section -->
   <section class="skills-section">
     <h3 class="skills-section__title"> <?php echo esc_html($skillsSectionTitle); ?></h3>
     <div class="skills-section__cards">

       <?php get_template_part('template-parts/components/component', 'skills'); ?>
       <?php get_template_part('template-parts/components/component', 'languages'); ?>

     </div>
   </section>
   <!-- End Skills Section -->