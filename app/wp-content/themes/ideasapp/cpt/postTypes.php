<?php

add_action( 'init', function () {
  $supports = array(
    'title', // post title
    'thumbnail', // featured images
    'excerpt', // post excerpt
    'custom-fields', // custom fields
  );

  $args = array(
    'supports' => $supports,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'labels' => array(
    'name' => __( 'services' ),
      'singular_name' => __( 'Services' )
    ),
    'public' => true,
    'rewrite' => array('slug' => 'services')
  );

  register_post_type( 'services', $args);


  $supports = array(
    'title', // post title
    'thumbnail', // featured images
    // 'excerpt', // post excerpt
    // 'custom-fields', // custom fields
    'editor',
  );

  $args = array(
    'supports' => $supports,
    'query_var' => true,
    'has_archive' => true,
    'hierarchical' => false,
    'labels' => array(
    'name' => __( 'portafolio' ),
      'singular_name' => __( 'Portafolios' )
    ),
    'public' => true,
    'rewrite' => array('slug' => 'portafolio')
  );

  register_post_type( 'portafolio', $args);
});