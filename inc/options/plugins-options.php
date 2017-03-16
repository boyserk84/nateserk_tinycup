<?php
/**
* plugins-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-external_plugins';

/** Facebook App Id */
$FB_APP_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-fbapp_Id]';
$FB_APP_KEY = 'nateserk_tinycup-fbapp_Id';

/* Section Header: Miscellaneous options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 26,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'External Plugins', 'nateserk_tinycup' ),
) );

/* Facebook App Id*/
$wp_customize->add_setting( $FB_APP_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$FB_APP_KEY],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( $FB_APP_ID, array(
    'label'		=> __( 'Facebook App Id.', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Your Facebook App Id.'),
    'settings'  => $FB_APP_ID,
    'type'	  	=> 'text',
    'priority'  => 16
) );

/** Toggle on/off FB Social comment */
$TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-fbapp_social_comment_enable]';
$TYPE_KEY = 'nateserk_tinycup-fbapp_social_comment_enable';

/* Toggle FB Social comment */
$wp_customize->add_setting( $TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TYPE_KEY],
    //'sanitize_callback' => 'esc_url_raw', // TODO: Need to sanitize input
) );
$wp_customize->add_control( $TOGGLE_ID, array(
    'label'		=> __( 'Use FB Social Comment Plugin', 'nateserk_tinycup' ),
    'description' => __('Replace Wordpress comment section with FB social comment plugin.'),
    'section'   => $SECTION_NAME,
    'settings'  => $TOGGLE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 17
) );

/** How many posts to show FB Comments */
$FBAPP_NUM_POSTS_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-fbapp_social_comment_numposts]';
$FBAPP_NUM_POSTS_KEY = 'nateserk_tinycup-fbapp_social_comment_numposts';
$wp_customize->add_setting( $FBAPP_NUM_POSTS_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$FBAPP_NUM_POSTS_KEY],
    'sanitize_callback' => 'nateserk_tinycup_sanitize_number'
) );

$wp_customize->add_control( $FBAPP_NUM_POSTS_ID, array(
    'label'		=> __( 'How many comments to show?', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Number of FB comments to show per post/page.'),
    'settings'  => $FBAPP_NUM_POSTS_ID,
    'type'	  	=> 'text',
    'priority'  => 18
) );

/** Show FB Like Options */
$FBAPP_LIKE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup_fbapp_social_like_enable]';
$FBAPP_LIKE_KEY = 'nateserk_tinycup_fbapp_social_like_enable';
$wp_customize->add_setting( $FBAPP_LIKE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$FBAPP_LIKE_KEY]
) );

$wp_customize->add_control( $FBAPP_LIKE_ID, array(
    'label'		=> __( 'Enable Facebook Like.', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Show Facebook Like on each post.'),
    'settings'  => $FBAPP_LIKE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 19
) );

/** Show Share Options */
$FBAPP_LIKE_SHARE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup_fbapp_social_like_include_share]';
$FBAPP_LIKE_SHARE_KEY = 'nateserk_tinycup_fbapp_social_like_include_share';
$wp_customize->add_setting( $FBAPP_LIKE_SHARE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$FBAPP_LIKE_SHARE_KEY]
) );

$wp_customize->add_control( $FBAPP_LIKE_SHARE_ID, array(
    'label'		=> __( 'Enable Facebook Share.', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __("Show Facebook share on each post. NOTE: 'Facebook Like' must be enabled."),
    'settings'  => $FBAPP_LIKE_SHARE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 20
) );


/** Show FB Social Like Layout Options */
$FBAPP_LIKE_SHARE_LAYOUT_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup_fbapp_social_like_layout]';
$FBAPP_LIKE_SHARE_LAYOUT_KEY = 'nateserk_tinycup_fbapp_social_like_layout';
$wp_customize->add_setting( $FBAPP_LIKE_SHARE_LAYOUT_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$FBAPP_LIKE_SHARE_LAYOUT_KEY]
) );

$wp_customize->add_control( $FBAPP_LIKE_SHARE_LAYOUT_ID, array(
    'label'		=> __( 'Facebook Like Button Layout', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __("Layout for Like and Share Buttons."),
    'settings'  => $FBAPP_LIKE_SHARE_LAYOUT_ID,
    'type'	  	=> 'select',
    'choices'   => array('button_count'=>'button_count', 'box_count'=>'box_count','standard'=>'standard', 'button'=>'button'),
    'priority'  => 21
) );
