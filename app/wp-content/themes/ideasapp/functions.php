<?php
require ("constants.php");
require (THEME_PATH."/inc/customizer.php");
require (THEME_PATH."/inc/shortcodes.php");
require (THEME_PATH."/cpt/postTypes.php");
require (THEME_PATH."/metabox/portafolioInfo.php");
require (THEME_PATH."/metabox/portafolioGallery.php");

/** add css and scripts to theme */
add_action("wp_enqueue_scripts", function() {
  wp_enqueue_style("bootstrap", PATH_THEME."/assets/css/bootstrap.min.css");
  wp_enqueue_style("slick", PATH_THEME."/assets/css/slick.css");
  wp_enqueue_style("magnific-popup", PATH_THEME."/assets/css/magnific-popup.css");
  wp_enqueue_style("carousel", PATH_THEME."/assets/css/owl.carousel.min.css");
  wp_enqueue_style("owltheme", PATH_THEME."/assets/css/owl.theme.default.min.css");
  wp_enqueue_style("animate", PATH_THEME."/assets/css/animate.css");
  wp_enqueue_style("flaticon", PATH_THEME."/assets/font/flaticon.css");
  wp_enqueue_style("fontawesome", PATH_THEME."/assets/css/fontawesome.min.css");
  wp_enqueue_style("reset", PATH_THEME."/assets/css/reset.css");
  wp_enqueue_style("style", PATH_THEME."/assets/css/style.css");
  wp_enqueue_style("responsive", PATH_THEME."/assets/css/responsive.css");

  wp_enqueue_script("jquery-page", PATH_THEME."/assets/js/jquery-3.3.1.min.js");
  wp_enqueue_script("bootstrap", PATH_THEME."/assets/js/bootstrap.min.js");
  wp_enqueue_script("carousel", PATH_THEME."/assets/js/owl.carousel.min.js");
  wp_enqueue_script("wow", PATH_THEME."/assets/js/wow.min.js");
  wp_enqueue_script("smoothscroll", PATH_THEME."/assets/js/smoothscroll.js");
  wp_enqueue_script("slick", PATH_THEME."/assets/js/slick.min.js");
  // wp_enqueue_script("typed", PATH_THEME."/assets/js/typed.min.js");
  wp_enqueue_script("magnify", PATH_THEME."/assets/js/magnify-popup.js");
  wp_enqueue_script("images-loded", PATH_THEME."/assets/js/images-loded.min.js");
  wp_enqueue_script("parallax", PATH_THEME."/assets/js/parallax.min.js");
  wp_enqueue_script("TweenMax", PATH_THEME."/assets/js/TweenMax.min.js");
  wp_enqueue_script("isotope", PATH_THEME."/assets/js/isotope.min.js");
  wp_enqueue_script("html5shiv", PATH_THEME."/assets/js/html5shiv.js");
  wp_enqueue_script("popper", PATH_THEME."/assets/js/popper.min.js");
  wp_enqueue_script("respond", PATH_THEME."/assets/js/respond.min.js");
  wp_enqueue_script("prettify", PATH_THEME."/assets/js/prettify.js");
  wp_enqueue_script("waypoints", PATH_THEME."/assets/js/jquery.waypoints.min.js");
  wp_enqueue_script("contact", PATH_THEME."/assets/js/contact.js");
  wp_enqueue_script("custom1", PATH_THEME."/assets/js/custom.js");
  wp_enqueue_script("custom2", PATH_THEME."/assets/js/custom-2.js");
});


// Add logo to theme
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


// Register main menu
add_action("after_setup_theme", function () {
    register_nav_menus([
      "main-menu" => "Menu principal",
      "main-responsive" => "Menu responsive",
      "footer-menu" => "Footer menu",
    ]);
});

// Add class to a tag menu
add_filter('wp_nav_menu', function ($ulclass) {
   return preg_replace('/<a /', '<a class="nav-link"', $ulclass);
});

// Add active menu
add_filter('nav_menu_css_class' , function ($classes, $item) {
  if (in_array('current_page_item', $classes) ){
    $classes[] = 'active ';
  }

  return $classes;
} , 10 , 2);