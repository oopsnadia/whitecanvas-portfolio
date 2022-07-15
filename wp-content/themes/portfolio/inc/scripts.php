<?php

function scripts()
{

  //Eliminamos estilos que no se usan
  wp_dequeue_style('wp-block-library');

  //Agregamos estilos
  wp_enqueue_style('theme-styles', get_theme_file_uri('/assets/styles.css'), null, @filemtime(get_template_directory() . 'assets/styles.css'));
  wp_enqueue_style('google-fonts', "//fonts.googleapis.com/css2?family=Heebo:wght@400;800&family=Montserrat:wght@300;400;700;800;900&family=Zilla+Slab:wght@400;500;600&display=swap", array(), null);
  wp_enqueue_style('font-awesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), null);
}

add_action('wp_enqueue_scripts', 'scripts');

/********************************************************/

function addStyleToSingle()
{
  if (is_single('post')) {
    wp_enqueue_style('theme-styles', get_theme_file_uri('/assets/styles.css'), null, @filemtime(get_template_directory() . 'assets/styles.css'));
    wp_enqueue_style('google-fonts', "//fonts.googleapis.com/css2?family=Heebo:wght@400;800&family=Montserrat:wght@300;400;700;800;900&family=Zilla+Slab:wght@400;500;600&display=swap", array(), null);
    wp_enqueue_style('font-awesome', "//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css", array(), null);
  }
}

add_action('wp_print_scripts', 'addStyleToSingle');
