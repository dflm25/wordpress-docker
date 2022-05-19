<?php
require ("constants.php");

require (THEME_PATH."/inc/customizer.php");
require (THEME_PATH."/cpt/index.php");
require (THEME_PATH."/metabox/teachers.php");
require (THEME_PATH."/metabox/banners.php");

// Add features tu wordpress theme
add_action("after_setup_theme", function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo',
    array(
        "width" => 214,
        "height" => 29,
        "flex-width" => true,
        "flex-height" => true,
        'header-text' => array( 'navbar-brand' ),
    ));
});

add_action("after_setup_theme", function () {
    register_nav_menus([
      "main-menu" => "Menu principal",
      "main-responsive" => "Menu responsive",
      "footer-menu" => "Footer menu",
    ]);
});

/** add css and scripts to theme */
add_action("wp_enqueue_scripts", function() {
    wp_enqueue_style("bootstrap", PATH_THEME."/assets/css/bootstrap.min.css");
    wp_enqueue_style("back-menus", PATH_THEME."/assets/css/back-menus.css");               
    wp_enqueue_style("animate", PATH_THEME."/assets/css/animate.css");
    wp_enqueue_style("carousel", PATH_THEME."/assets/css/owl.carousel.css");        
    wp_enqueue_style("elegant-icon", PATH_THEME."/assets/fonts/elegant-icon.css");
    wp_enqueue_style("magnific-popup", PATH_THEME."/assets/css/magnific-popup.css");
    wp_enqueue_style("animations", PATH_THEME."/assets/css/back-animations.css"); 
    wp_enqueue_style("style-page", PATH_THEME."/assets/css/style.css");
    wp_enqueue_style("back-spacing", PATH_THEME."/assets/css/back-spacing.css");
    wp_enqueue_style("responsive", PATH_THEME."/assets/css/responsive.css");

    wp_enqueue_script("jquery-page", PATH_THEME."/assets/js/jquery.min.js");
    wp_enqueue_script("modernizr", PATH_THEME."/assets/js/modernizr-2.8.3.min.js");
    wp_enqueue_script("bootstrap", PATH_THEME."/assets/js/bootstrap.min.js");
    wp_enqueue_script("carousel", PATH_THEME."/assets/js/owl.carousel.min.js");
    wp_enqueue_script("magnific", PATH_THEME."/assets/js/jquery.magnific-popup.min.js");
    wp_enqueue_script("counterup", PATH_THEME."/assets/js/jquery.counterup.min.js");
    wp_enqueue_script("waypoints", PATH_THEME."/assets/js/assets/js/waypoints.min.js");
    wp_enqueue_script("wow", PATH_THEME."/assets/js/assets/js/wow.min.js");
    wp_enqueue_script("isotope", PATH_THEME."/assets/js/isotope.pkgd.min.js");
    wp_enqueue_script("imagesloaded", PATH_THEME."/assets/js/imagesloaded.pkgd.min.js");
    wp_enqueue_script("back-menus", PATH_THEME."/assets/js/back-menus.js");
    wp_enqueue_script("plugins", PATH_THEME."/assets/js/plugins.js");
    wp_enqueue_script("main", PATH_THEME."/assets/js/main.js");
});