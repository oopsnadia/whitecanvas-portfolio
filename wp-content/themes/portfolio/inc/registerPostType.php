<?php

function registerPostType()
{
  register_post_type('works', array(
    'labels' => array(
      'name' => 'Works',
      'singular_name' => 'Work'
    ),
    'public' => true,
    'has_archive' => true,
    'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
    'menu_icon' => 'dashicons-editor-paste-word',
    'rewrite' => array(
      'slug' => 'works',
      'with_front' => false
    )
  ));

  register_post_type('skills', array(
    'labels' => array(
      'name' => 'Skills',
      'singular_name' => 'Skill'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title', 'thumbnail'),
    'menu_icon' => 'dashicons-superhero'
  ));

  register_post_type('languages', array(
    'labels' => array(
      'name' => 'Languages',
      'singular_name' => 'Language'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title', 'thumbnail'),
    'menu_icon' => 'dashicons-translation'
  ));

  register_post_type('education', array(
    'labels' => array(
      'name' => 'Education',
      'singular_name' => 'Education'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title', 'editor'),
    'menu_icon' => 'dashicons-welcome-learn-more'
  ));

  register_post_type('experience', array(
    'labels' => array(
      'name' => 'Experience',
      'singular_name' => 'Experience'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title', 'editor'),
    'menu_icon' => 'dashicons-businesswoman'
  ));

  register_post_type('logo', array(
    'labels' => array(
      'name' => 'Logo Name',
      'singular_name' => 'Logo',
      'add_new' => __('Add new logo name'),
      'edit_item' => 'Enter Your Name or Brand'
    ),
    'public' => true,
    'has_archive' => false,
    'publicly_queryable' => false,
    'supports' => array('title'),
    'menu_icon' => 'dashicons-businesswoman'
  ));
}

add_action('init', 'registerPostType');
