<?php
/**
* copyright-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-copyright-options';

$TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-copyright-name]';
$TOGGLE_KEY = 'nateserk_tinycup-copyright-name';

/* Section Header: Related posts options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 22,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Copyright Text', 'nateserk_tinycup' ),
) );

/* Enable/Disable Related posts Options*/
$wp_customize->add_setting( $TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_KEY],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $TOGGLE_ID, array(
    'label'		=> __( 'Copyright Owner', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Your name or company name as a part of copyright statement'),
    'settings'  => $TOGGLE_ID,
    'type'	  	=> 'text',
    'priority'  => 15
) );
