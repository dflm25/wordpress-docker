<?php

/** Add customize inputs to theme */
add_action('customize_register', function ( $wp_customize ) {

  $wp_customize->add_panel('landing_panel', [
    'title' => 'Landing Page',
    'priority' => 600,
    'capability' => 'edit_theme_options',
    // 'theme_supports' => '', // Rarely needed
    'description' => 'Landing options',
  ]);

  $wp_customize->add_section('landing_page_home', [
    'title' => "Home section",
    'description' => __( 'Home section customizer'),
    'panel' => 'landing_panel',
  ]);

  /** Basic informaction */
  $wp_customize->add_setting('my_name', [
    'default' => __( 'Academia')
  ]);

  /** Social networks */
  $wp_customize->add_setting('landing_facebook', [
    'default' => __( '@facebook')
  ]);

  $wp_customize->add_control('landing_facebook', array(
    'label' => "Facebook",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('landing_twitter', [
    'default' => __( '@twitter')
  ]);

  $wp_customize->add_control('landing_twitter', array(
    'label' => "Twitter",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('landing_linkedin', [
    'default' => __( '@linkedin')
  ]);

  $wp_customize->add_control('landing_linkedin', array(
    'label' => "Linkedin",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('landing_instagram', [
    'default' => __( '@linkedin')
  ]);

  $wp_customize->add_control('landing_instagram', array(
    'label' => "Instagram",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('landing_phone', [
    'default' => __( '+57')
  ]);

  $wp_customize->add_control('landing_phone', array(
    'label' => "Phone",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('landing_email', [
    'default' => __( 'example@dominio.com')
  ]);

  $wp_customize->add_control('landing_email', array(
    'label' => "Phone",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('landing_address', [
    'default' => __( '')
  ]);

  $wp_customize->add_control('landing_address', array(
    'label' => "Addres",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('landing_intro', [
    'default' => __( '')
  ]);

  $wp_customize->add_control('landing_intro', array(
    'type' => 'textarea',
    'label' => "Intro footer",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('landing_banner', [
    // 'default' => __( '+57')
  ]);

  $wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'banner',
        array(
            'label'      => __( 'Upload a banner (1920 * 400)', 'theme_name' ),
            'section'    => 'landing_page_home',
            'settings'   => 'landing_banner',
            'context'    => 'your_setting_context'
        )
  ));

  $wp_customize->add_setting('landing_photo', [
    // 'default' => __( '+57')
  ]);
  
  $wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'photo',
        array(
            'label'      => __( 'Intro Photo (499 * 550)', 'theme_name' ),
            'section'    => 'landing_page_home',
            'settings'   => 'landing_photo',
            'context'    => 'your_setting_context'
        )
  ));
});