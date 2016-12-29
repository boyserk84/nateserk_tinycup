<?php
/**
* related-posts-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-related-posts-options';
$TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-enable-related-posts]';
$TOGGLE_KEY = 'nateserk_tinycup-enable-related-posts';

/* Section Header: Related posts options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Recommended Posts Options', 'nateserk_tinycup' ),
) );

/* Enable/Disable Related posts Options*/
$wp_customize->add_setting( $TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_KEY],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $TOGGLE_ID, array(
    'label'		=> __( 'Enable Recommended Posts', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Showing related posts in each post.'),
    'settings'  => $TOGGLE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 15
) );


$TYPE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-related-posts-type]';
$TYPE_KEY = 'nateserk_tinycup-related-posts-type';

/* Type of Related posts */
$wp_customize->add_setting( $TYPE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TYPE_KEY],
    //'sanitize_callback' => 'esc_url_raw', // TODO: Need to sanitize input
) );
$wp_customize->add_control( $TYPE_ID, array(
    'label'		=> __( 'Recommended By', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => $TYPE_ID,
    'type'	  	=> 'radio',
    'choices'   => array('category'=>'category', 'tags'=>'tags'),
    'priority'  => 16
) );

$QTY_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-related-posts-per-page]';
$QTY_KEY = 'nateserk_tinycup-related-posts-per-page';

/* Quantity to show per page */
$wp_customize->add_setting( $QTY_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$QTY_KEY],
    //'sanitize_callback' => 'esc_url_raw', // TODO: need to sanitize input
) );
$wp_customize->add_control( $QTY_ID, array(
    'label'		=> __( 'Show Per Page ', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => $QTY_ID,
    'type'	  	=> 'text',
    'priority'  => 17
) );
