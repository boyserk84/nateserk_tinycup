<?php
/**
* thumbnail-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-thumbnail-div-options';

$TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-tb-div]';
$TOGGLE_KEY = 'nateserk_tinycup-tb-div';

/* Section Header: Thumbnail */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 23,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Thumbnail and Gallery', 'nateserk_tinycup' ),
) );

/* Thumbnail styling options */
$wp_customize->add_setting( $TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_KEY],
    //'sanitize_callback' => 'esc_url_raw', // TODO: Need to sanitize input
) );
$wp_customize->add_control( $TOGGLE_ID, array(
    'label'		=> __( 'Show article thumbnails as', 'nateserk_tinycup' ),
    'description' => __('Determine how to display each article thumbnail/feature image on index and related section.'),
    'section'   => $SECTION_NAME,
    'settings'  => $TOGGLE_ID,
    'type'	  	=> 'radio',
    'choices'   => array('thumbnail'=>'Thumbnail', 'circle'=>'Circle', 'rounded'=>'Rounded'),
    'priority'  => 16
) );


$GALLERY_TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-theme-gallery-toggle]';
$GALLERY_TOGGLE_KEY = 'nateserk_tinycup-theme-gallery-toggle';

/* Toggle theme gallery or using default wordpress */
$wp_customize->add_setting( $GALLERY_TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$GALLERY_TOGGLE_KEY],
    //'sanitize_callback' => 'esc_url_raw', // TODO: Need to sanitize input
) );
$wp_customize->add_control( $GALLERY_TOGGLE_ID, array(
    'label'		=> __( 'Using Theme Gallery Style', 'nateserk_tinycup' ),
    'description' => __('Override default wordpress gallery Style with the theme style.'),
    'section'   => $SECTION_NAME,
    'settings'  => $GALLERY_TOGGLE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 17
) );
