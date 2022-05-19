<?php
add_action( 'init', function () {
    $supports = array(
        'title', // post title
        'thumbnail', // featured images
    );

    $args = array(
        'supports' => $supports,
        'query_var' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'labels' => array(
        'name' => __( 'Teachers' ),
        'singular_name' => __( 'Teacher' ),
        ),
        'public' => true,
        'rewrite' => array('slug' => 'teachers'),
        'menu_icon' => 'dashicons-id-alt',
    );

    register_post_type( 'teachers', $args);

    $supports = array(
        'title', // post title
        'thumbnail', // featured images
        'excerpt'
    );

    $args = array(
        'supports' => $supports,
        'query_var' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'labels' => array(
        'name' => __( 'Banners' ),
        'singular_name' => __( 'Banner' )
        ),
        'public' => true,
        'rewrite' => array('slug' => 'banners'),
        'menu_icon' => 'dashicons-format-gallery', 
    );

    register_post_type( 'banners', $args);

    $supports = array(
        'title', // post title
        'thumbnail', // featured images
        'excerpt',
        'editor'
    );

    $args = array(
        'supports' => $supports,
        'query_var' => true,
        'has_archive' => true,
        'hierarchical' => false,
        'labels' => array(
        'name' => __( 'partners' ),
        'singular_name' => __( 'partner' )
        ),
        'public' => true,
        'rewrite' => array('slug' => 'partners'),
        'menu_icon' => 'dashicons-megaphone', 
        'show_in_rest' => true,
    );

    register_post_type('partners', $args);
});