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

/* Google Analytic tracking Id*/
$wp_customize->add_setting( $G_TRACKING_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$G_TRACKING_KEY],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( $G_TRACKING_ID, array(
    'label'		=> __( 'Google Analytic Tracking Id.', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Your Google Analytic Track Id. This is can be found under \'Tracking Code\'. '),
    'settings'  => $G_TRACKING_ID,
    'type'	  	=> 'text',
    'priority'  => 14
) );

$POWER_BY_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-show-engine-option]';
$POWER_BY_KEY = 'nateserk_tinycup-show-engine-option';

/* How to display a theme logo*/
$wp_customize->add_setting( $POWER_BY_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$POWER_BY_KEY],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $POWER_BY_ID, array(
    'label'		=> __( 'Show Theme Trademark', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('How do you want our theme logo to show up at the footer?.'),
    'settings'  => $POWER_BY_ID,
    'type'	  	=> 'select',
    'choices'   => array('text'=>'text', 'logo'=>'logo'),
    'priority'  => 15
) );
