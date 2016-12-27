<?php
/**
* social-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-header-social';

/* Section Header: Social options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Social Options', 'nateserk_tinycup' ),
) );

/* Enable/Disable Social Options*/
$wp_customize->add_setting( 'nateserk_tinycup_theme_options[nateserk_tinycup-enable-social]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['nateserk_tinycup-enable-social'],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( 'nateserk_tinycup_theme_options[nateserk_tinycup-enable-social]', array(
    'label'		=> __( 'Enable social', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Showing or hiding social media links.'),
    'settings'  => 'nateserk_tinycup_theme_options[nateserk_tinycup-enable-social]',
    'type'	  	=> 'checkbox',
    'priority'  => 30
) );


/* Facebook URL */
$wp_customize->add_setting( 'nateserk_tinycup_theme_options[nateserk_tinycup-facebook-url]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['nateserk_tinycup-facebook-url'],
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( 'nateserk_tinycup_theme_options[nateserk_tinycup-facebook-url]', array(
    'label'		=> __( 'Facebook url', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => 'nateserk_tinycup_theme_options[nateserk_tinycup-facebook-url]',
    'type'	  	=> 'url',
    'priority'  => 20
) );
