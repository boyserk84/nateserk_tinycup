<?php
/**
* misc-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-misc';

/** Google Analytic */
$G_TRACKING_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-g-analytic-tracking-id]';
$G_TRACKING_KEY = 'nateserk_tinycup-g-analytic-tracking-id';

/* Section Header: Miscellaneous options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Miscellaneous', 'nateserk_tinycup' ),
) );

/* Enable/Disable Modal Dialog*/
$wp_customize->add_setting( $G_TRACKING_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$G_TRACKING_KEY],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $G_TRACKING_ID, array(
    'label'		=> __( 'Google Analytic Tracking Id.', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Your Google Analytic Track Id. This is can be found under \'Tracking Code\'. '),
    'settings'  => $G_TRACKING_ID,
    'type'	  	=> 'text',
    'priority'  => 14
) );
