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
    'default' => __( 'JHON DOE')
  ]);

  $wp_customize->add_control('my_name', array(
    'label' => "Your name",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

  $wp_customize->add_setting('my_position', [
    'default' => __( 'Developer')
  ]);

  $wp_customize->add_control('my_position', array(
    'label' => "Your position",
    'priority' => 10,
    'section' => 'landing_page_home',
  ));

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

  $wp_customize->add_setting('landing_phone', [
    'default' => __( '+57')
  ]);

  $wp_customize->add_control('landing_phone', array(
    'label' => "Phone",
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
            'label'      => __( 'Upload a banner (1920 * 950)', 'theme_name' ),
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
            'label'      => __( 'Upload a banner (421 * 611)', 'theme_name' ),
            'section'    => 'landing_page_home',
            'settings'   => 'landing_photo',
            'context'    => 'your_setting_context'
        )
  ));
});