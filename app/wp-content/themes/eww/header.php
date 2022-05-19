<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo("charset") ?>">
        <meta name="description" content="">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">      
        <?php wp_head(); ?>
    </head>
    <body>       
    <div id="back__preloader">
        <div id="back__circle_loader"></div>
        <div class="back__loader_logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/preload.png" alt="Preload">
        </div>
    </div>        

        <!--================= Header Section Start Here =================-->
        <header id="back-header" class="back-header">
            <div class="menu-part">
                <div class="container">
                    <!--================= Start Back Menu =================-->
                    <div class="back-main-menu">
                        <nav>
                            <!--================= Menu Toggle btn =================-->
                            <div class="menu-toggle">
                                <div class="logo">
                                    <a href="index.html" class="logo-text">
                                    <?php
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                    ?>
                                    <?php 
                                        if (has_custom_logo()) {
                                            echo '<img src="'.esc_url( $logo[0] ).'" alt="'.get_bloginfo( 'name' ).'" width="100">';
                                        } else {
                                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                                        }
                                    ?>
                                    </a>
                                </div>
                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!--================= Menu Structure =================--> 
                            <div class="back-inner-menus">
                                <?php 
                                    wp_nav_menu([
                                        'menu_id' => 'nav-toggle',
                                        "menu" => "main-menu",
                                        "menu_class" => "back-menus back-sub-shadow",
                                        "container" => "ul",
                                        'add_li_class' => 'mega-inner',
                                    ]);
                                ?>
                                <!-- <ul id="backmenu" class="back-menus back-sub-shadow">
                                    <li class="mega-inner"> <a href="#">Home</a></li>
                                </ul> -->
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <div class="back-wrapper">
            <div class="back-wrapper-inner language-school-page">