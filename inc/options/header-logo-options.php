<?php
/**
* header-logo-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-header-logo-options';

$TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-show-header-logo]';
$TOGGLE_KEY = 'nateserk_tinycup-show-header-logo';

/* Section Header: Related posts options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 21,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Header Logo', 'nateserk_tinycup' ),
) );

/* Enable/Disable Related posts Options*/
$wp_customize->add_setting( $TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_KEY],
    'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $TOGGLE_ID, array(
    'label'		=> __( 'Show header logo', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Show a header logo instead of the site title.'),
    'settings'  => $TOGGLE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 15
) );


$TYPE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-header-logo-media-url]';
$TYPE_KEY = 'nateserk_tinycup-header-logo-media-url';

/* Image to show */
$wp_customize->add_setting( $TYPE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TYPE_KEY]//,
    //'sanitize_callback' => 'esc_url_raw'
) );

$wp_customize->add_control(
  new WP_Customize_Image_Control(
      $wp_customize,
      $TYPE_ID,
      array(
        'label'=> __('Image of site logo','nateserk_tinycup'),
        'section'=> $SECTION_NAME,
        'settings'=> $TYPE_ID,
        'mime_type'=> 'image',
        'priority'=> 16
      )
  )
);
