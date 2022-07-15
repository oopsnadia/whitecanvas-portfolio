<?php

function themeSupport()
{

    //Seteo carpeta de lenguaje
    load_theme_textdomain('portfolio', get_template_directory(), '/lang');

    //Seteo de thumbnails (featured image)
    add_theme_support('post-thumbnails');

    //Soporte para etiqueta <title> dentro de <head>	
    add_theme_support('title-tag');

    //Seteo de locations para menus dinamicos
    register_nav_menus(
        array(
            'main-menu' => 'Primary Menu'
        )
    );
}
add_action('after_setup_theme', 'themeSupport');




require 'inc/breadcrumb.php';
require 'inc/scripts.php';
require 'inc/registerPostType.php';
