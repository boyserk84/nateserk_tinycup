<?php
/**
* home-modal-dialog-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-home-modal-dialog';

$TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-toggle]';
$TOGGLE_KEY = 'nateserk_tinycup-home-modal-dialog-toggle';

/* Section Header: Home Modal Dialog */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 23,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Home Modal Dialog', 'nateserk_tinycup' ),
) );

/* Enable/Disable Modal Dialog*/
$wp_customize->add_setting( $TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_KEY],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $TOGGLE_ID, array(
    'label'		=> __( 'Show the home modal dialog.', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('(i.e. marketing, advertising, MOTD, warning, update status)'),
    'settings'  => $TOGGLE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 15
) );

$TITLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-title]';
$TITLE_KEY = 'nateserk_tinycup-home-modal-dialog-title';
/* Title */
$wp_customize->add_setting( $TITLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TITLE_KEY]
) );
$wp_customize->add_control( $TITLE_ID, array(
    'label'		=> __( 'Title', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'settings'  => $TITLE_ID,
    'description'=> __('Headline or title text'),
    'type'	  	=> 'text',
    'priority'  => 16
) );

$BODY_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-body]';
$BODY_KEY = 'nateserk_tinycup-home-modal-dialog-body';
/* Body */
$wp_customize->add_setting( $BODY_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$BODY_KEY]
) );
$wp_customize->add_control( $BODY_ID, array(
    'label'		=> __( 'Body', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Description or content of the dialog.'),
    'settings'  => $BODY_ID,
    'type'	  	=> 'textarea',
    'priority'  => 17
) );

// Primary button text
$BTN_PRIMARY_TXT_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-btn-primary-text]';
$BTN_PRIMARY_TXT_KEY = 'nateserk_tinycup-home-modal-dialog-btn-primary-text';
$wp_customize->add_setting( $BTN_PRIMARY_TXT_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$BTN_PRIMARY_TXT_KEY]
) );
$wp_customize->add_control( $BTN_PRIMARY_TXT_ID, array(
    'label'		=> __( 'Primary Button Text', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Text on the primary button'),
    'settings'  => $BTN_PRIMARY_TXT_ID,
    'type'	  	=> 'text',
    'priority'  => 20
) );

// Primary button URL
$BTN_PRIMARY_URL_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-btn-primary-url]';
$BTN_PRIMARY_URL_KEY = 'nateserk_tinycup-home-modal-dialog-btn-primary-url';
$wp_customize->add_setting( $BTN_PRIMARY_URL_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$BTN_PRIMARY_URL_KEY]
) );
$wp_customize->add_control( $BTN_PRIMARY_URL_ID, array(
    'label'		=> __( 'Primary Button URL', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Redirect URL for the primary button if the button action is set to \'redirect\'.'),
    'settings'  => $BTN_PRIMARY_URL_ID,
    'type'	  	=> 'url',
    'priority'  => 19
) );


// Primary button action
$BTN_PRIMARY_ACTION_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-btn-primary-action]';
$BTN_PRIMARY_ACTION_KEY = 'nateserk_tinycup-home-modal-dialog-btn-primary-action';
$wp_customize->add_setting( $BTN_PRIMARY_ACTION_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$BTN_PRIMARY_ACTION_KEY]
) );
$wp_customize->add_control( $BTN_PRIMARY_ACTION_ID, array(
    'label'		=> __( 'Primary Button Action', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Primary Button Action'),
    'settings'  => $BTN_PRIMARY_ACTION_ID,
    'type'	  	=> 'radio',
    'choices'   => array('dismiss'=>'dismiss', 'redirect'=>'redirect'),
    'priority'  => 18
) );

// Secondary button text
$BTN_SEC_TXT_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-btn-secondary-text]';
$BTN_SEC_TXT_KEY = 'nateserk_tinycup-home-modal-dialog-btn-secondary-text';
$wp_customize->add_setting( $BTN_SEC_TXT_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$BTN_SEC_TXT_KEY]
) );
$wp_customize->add_control( $BTN_SEC_TXT_ID, array(
    'label'		=> __( 'Secondary Button Text', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Text on the secondary button'),
    'settings'  => $BTN_SEC_TXT_ID,
    'type'	  	=> 'text',
    'priority'  => 23
) );
// Secondary button URL
$BTN_SEC_URL_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-btn-secondary-url]';
$BTN_SEC_URL_KEY = 'nateserk_tinycup-home-modal-dialog-btn-secondary-url';
$wp_customize->add_setting( $BTN_SEC_URL_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$BTN_SEC_URL_KEY]
) );
$wp_customize->add_control( $BTN_SEC_URL_ID, array(
    'label'		=> __( 'Secondary Button URL', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Redirect URL for the secondary button if the button action is set to \'redirect\'.'),
    'settings'  => $BTN_SEC_URL_ID,
    'type'	  	=> 'url',
    'priority'  => 22
) );

// Secondary button action
$BTN_SEC_ACTION_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-home-modal-dialog-btn-secondary-action]';
$BTN_SEC_ACTION_KEY = 'nateserk_tinycup-home-modal-dialog-btn-secondary-action';
$wp_customize->add_setting( $BTN_SEC_ACTION_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$BTN_SEC_ACTION_KEY]
) );
$wp_customize->add_control( $BTN_SEC_ACTION_ID, array(
    'label'		=> __( 'Secondary Button Action', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Secondary Button Action'),
    'settings'  => $BTN_SEC_ACTION_ID,
    'type'	  	=> 'radio',
    'choices'   => array('dismiss'=>'dismiss', 'redirect'=>'redirect'),
    'priority'  => 21
) );
