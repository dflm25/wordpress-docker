<!DOCTYPE html>
<html <?php language_attributes(); ?> style="scroll-behavior: smooth;">
  <head>
    <meta charset="<?php bloginfo("charset") ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="agency, ajax, clean, creative, free, " />
    <meta name="keywords" content="" />
    <meta name="viewport" content="initial-scale=1, maximum-scale=1" />
    <!-- Title-->
    <?php wp_head(); ?>
  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="65">
    <!-- preloader area Start-->
    <!-- <div id="preloader">
      <div id="status">
        <div class="sk-folding-cube">
          <div class="sk-cube1 sk-cube"></div>
          <div class="sk-cube2 sk-cube"></div>
          <div class="sk-cube4 sk-cube"></div>
          <div class="sk-cube3 sk-cube"></div>
        </div>
      </div>
    </div> -->
    <!-- preloader area end-->
    <!-- Header area Start-->

    <?php
      $custom_logo_id = get_theme_mod( 'custom_logo' );
      $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    ?>
    <header id="heder-two">
      <nav class="navbar navbar-expand-lg fixed-top navber-two-area">
        <div class="container">
          <a class="navbar-brand" href="<?php echo home_url(); ?>">
          <?php 
            if ( has_custom_logo() ) {
                echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
          ?>
          </a>
          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarContent"
            aria-controls="navbarContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarContent">
             <?php 
                wp_nav_menu([
                  'menu_id' => 'nav-toggle',
                  "menu" => "main-menu",
                  "menu_class" => "navbar-nav ml-auto",
                  "container" => "ul",
                  'add_li_class'  => 'nav-item',
                ]);
            ?>
            <!-- <ul class="navbar-nav ml-auto" id="nav-toggle">
              <li class="nav-item dropdown">
                <a class="nav-link active" href="#banner-2"
                  >Home <span class="sr-only">(current)</span>
                  <i class="fas fa-angle-down"></i
                ></a>
                <div class="dropdown-content">
                  <a href="index.html">Home 01</a>
                  <a href="index-2.html">Home 02</a>
                  <a href="index-3.html">Home 03</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#about-2">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#Service-two">Service</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#portfolio-two">Portfolio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link " href="#blog-area-two"
                  >Blog <i class="fas fa-angle-down"></i
                ></a>
                <div class="dropdown-content">
                  <a href="blog.html">Blog Grid</a>
                  <a href="blog-single.html">Blog-Single</a>
                  <a href="404.html">Error Page</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="#footer-two">Contact</a>
              </li>
              <li class="nav-item">
                <a class="btn-2 side-btn side-btn-2" href="#footer-two"
                  >HIRE ME</a
                >
              </li>
            </ul> -->
          </div>
        </div>
      </nav>
    </header>