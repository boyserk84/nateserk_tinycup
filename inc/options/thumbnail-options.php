<?php
/**
* thumbnail-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-thumbnail-div-options';

$TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-tb-div]';
$TOGGLE_KEY = 'nateserk_tinycup-tb-div';

/* Section Header: Related posts options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 23,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Articles Thumbnail', 'nateserk_tinycup' ),
) );

/* Type of Related posts */
$wp_customize->add_setting( $TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TYPE_KEY],
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
