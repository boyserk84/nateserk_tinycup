<?php
/**
* custom-links-color-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-custom-links-color-options';

$LINK_MAIN_COLOR_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-custom-link-color]';
$LINK_MAIN_COLOR_KEY = 'nateserk_tinycup-custom-link-color';

/* Section Header: Custom links color options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 24,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description' => __('Default to the theme color if leave blank. All values must be hex-value (i.e. #4286f4).'),
    'title'          => __( 'Customize Links Color', 'nateserk_tinycup' ),
) );

/** Setting for main link color */
$wp_customize->add_setting( $LINK_MAIN_COLOR_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$LINK_MAIN_COLOR_KEY],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( $LINK_MAIN_COLOR_ID, array(
    'label'		=> __( 'Normal links color', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Color for a hyperlink for your website.'),
    'settings'  => $LINK_MAIN_COLOR_ID,
    'type'	  	=> 'text',
    'priority'  => 15
) );

$LINK_HOVER_COLOR_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-custom-link-hover-color]';
$LINK_HOVER_COLOR_KEY = 'nateserk_tinycup-custom-link-hover-color';
/** Setting for hover link color */
$wp_customize->add_setting( $LINK_HOVER_COLOR_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$LINK_HOVER_COLOR_KEY],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( $LINK_HOVER_COLOR_ID, array(
    'label'		=> __( 'Hover links color', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Color for a \'hovered\' hyperlink for your website (aka css \'a:hover\').'),
    'settings'  => $LINK_HOVER_COLOR_ID,
    'type'	  	=> 'text',
    'priority'  => 16
) );

$LINK_VISITED_COLOR_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-custom-link-visited-color]';
$LINK_VISITED_COLOR_KEY = 'nateserk_tinycup-custom-link-visited-color';
/** Setting for visited link color */
$wp_customize->add_setting( $LINK_VISITED_COLOR_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$LINK_VISITED_COLOR_KEY],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( $LINK_VISITED_COLOR_ID, array(
    'label'		=> __( 'Visited links color', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Color for a \'visited\' hyperlink for your website (aka css \'a:visited\').'),
    'settings'  => $LINK_VISITED_COLOR_ID,
    'type'	  	=> 'text',
    'priority'  => 17
) );
