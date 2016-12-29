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
    'priority'  => 15
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
    'priority'  => 16
) );

/* Twitter URL */
$wp_customize->add_setting( 'nateserk_tinycup_theme_options[nateserk_tinycup-twitter-url]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['nateserk_tinycup-twitter-url'],
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( 'nateserk_tinycup_theme_options[nateserk_tinycup-twitter-url]', array(
    'label'		=> __( 'Twitter url', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => 'nateserk_tinycup_theme_options[nateserk_tinycup-twitter-url]',
    'type'	  	=> 'url',
    'priority'  => 17
) );

/* Instagram URL */
$wp_customize->add_setting( 'nateserk_tinycup_theme_options[nateserk_tinycup-instagram-url]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['nateserk_tinycup-instagram-url'],
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( 'nateserk_tinycup_theme_options[nateserk_tinycup-instagram-url]', array(
    'label'		=> __( 'Instagram url', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => 'nateserk_tinycup_theme_options[nateserk_tinycup-instagram-url]',
    'type'	  	=> 'url',
    'priority'  => 18
) );

/* Google Plus URL */
$wp_customize->add_setting( 'nateserk_tinycup_theme_options[nateserk_tinycup-google-plus-url]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['nateserk_tinycup-google-plus-url'],
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( 'nateserk_tinycup_theme_options[nateserk_tinycup-google-plus-url]', array(
    'label'		=> __( 'Google+ url', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => 'nateserk_tinycup_theme_options[nateserk_tinycup-google-plus-url]',
    'type'	  	=> 'url',
    'priority'  => 19
) );

/* Tumblr URL */
$wp_customize->add_setting( 'nateserk_tinycup_theme_options[nateserk_tinycup-tumblr-url]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['nateserk_tinycup-tumblr-url'],
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( 'nateserk_tinycup_theme_options[nateserk_tinycup-tumblr-url]', array(
    'label'		=> __( 'Tumblr url', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => 'nateserk_tinycup_theme_options[nateserk_tinycup-tumblr-url]',
    'type'	  	=> 'url',
    'priority'  => 20
) );

/* Snapchat URL */
$wp_customize->add_setting( 'nateserk_tinycup_theme_options[nateserk_tinycup-snapchat-url]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['nateserk_tinycup-snapchat-url'],
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( 'nateserk_tinycup_theme_options[nateserk_tinycup-snapchat-url]', array(
    'label'		=> __( 'Snapchat url', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => 'nateserk_tinycup_theme_options[nateserk_tinycup-snapchat-url]',
    'type'	  	=> 'url',
    'priority'  => 21
) );

/* Twitch URL */
$wp_customize->add_setting( 'nateserk_tinycup_theme_options[nateserk_tinycup-twitch-url]', array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults['nateserk_tinycup-twitch-url'],
    'sanitize_callback' => 'esc_url_raw',
) );
$wp_customize->add_control( 'nateserk_tinycup_theme_options[nateserk_tinycup-twitch-url]', array(
    'label'		=> __( 'Twitch url', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => 'nateserk_tinycup_theme_options[nateserk_tinycup-twitch-url]',
    'type'	  	=> 'url',
    'priority'  => 22
) );
