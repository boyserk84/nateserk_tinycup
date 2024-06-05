<?php
/**
* site-settings-options.php
*/

$SECTION_NAME = 'nateserk_tinycup-site-settings-options';

/* Section Header: Related posts options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 20,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'title'          => __( 'Site Setting', 'nateserk_tinycup' ),
) );

$TOGGLE_LOGO_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-show-header-logo]';
$TOGGLE_LOGO_KEY = 'nateserk_tinycup-show-header-logo';

/* Enable/Disable Header Logo Options*/
$wp_customize->add_setting( $TOGGLE_LOGO_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_LOGO_KEY],
    'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $TOGGLE_LOGO_ID, array(
    'label'		=> __( 'Show header logo', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Show a header logo instead of the site title.'),
    'settings'  => $TOGGLE_LOGO_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 8
) );


$TYPE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-header-logo-media-url]';
$TYPE_KEY = 'nateserk_tinycup-header-logo-media-url';

/* Image to show */
$wp_customize->add_setting( $TYPE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TYPE_KEY]//,
    //'sanitize_callback' => 'esc_url_raw'
) );

$wp_customize->add_control(
  new WP_Customize_Image_Control(
      $wp_customize,
      $TYPE_ID,
      array(
        'label'=> __('Image of site logo','nateserk_tinycup'),
        'section'=> $SECTION_NAME,
        'settings'=> $TYPE_ID,
        'mime_type'=> 'image',
        'priority'=> 9
      )
  )
);

$SHOW_PER_ROW_BY_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-show-per-row]';
$SHOW_PER_ROW_BY_KEY = 'nateserk_tinycup-show-per-row';

/* How to display a theme logo*/
$wp_customize->add_setting( $SHOW_PER_ROW_BY_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$SHOW_PER_ROW_BY_KEY],
    'sanitize_callback' => 'nateserk_tinycup_sanitize_number'
) );

$wp_customize->add_control( $SHOW_PER_ROW_BY_ID, array(
    'label'		=> __( 'Posts Per Row', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('How many items/posts showing per row in the listing?.'),
    'settings'  => $SHOW_PER_ROW_BY_ID,
    'type'	  	=> 'select',
    'choices'   => array('4'=>4, '3'=>3, '2'=>2, '1'=>1),
    'priority'  => 10
) );

$TOGGLE_TB_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-tb-div]';
$TOGGLE_TB_KEY = 'nateserk_tinycup-tb-div';

/* Thumbnail styling options */
$wp_customize->add_setting( $TOGGLE_TB_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_TB_KEY],
    //'sanitize_callback' => 'esc_url_raw', // TODO: Need to sanitize input
) );
$wp_customize->add_control( $TOGGLE_TB_ID, array(
    'label'		=> __( 'Show article thumbnails as', 'nateserk_tinycup' ),
    'description' => __('Determine how to display each article thumbnail/feature image on index and related section.'),
    'section'   => $SECTION_NAME,
    'settings'  => $TOGGLE_TB_ID,
    'type'	  	=> 'radio',
    'choices'   => array('thumbnail'=>'Thumbnail', 'circle'=>'Circle', 'rounded'=>'Rounded'),
    'priority'  => 11
) );


$GALLERY_TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-theme-gallery-toggle]';
$GALLERY_TOGGLE_KEY = 'nateserk_tinycup-theme-gallery-toggle';

/* Toggle theme gallery or using default wordpress */
$wp_customize->add_setting( $GALLERY_TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$GALLERY_TOGGLE_KEY],
    //'sanitize_callback' => 'esc_url_raw', // TODO: Need to sanitize input
) );
$wp_customize->add_control( $GALLERY_TOGGLE_ID, array(
    'label'		=> __( 'Using Theme Gallery Style', 'nateserk_tinycup' ),
    'description' => __('Override default wordpress gallery Style with the theme style.'),
    'section'   => $SECTION_NAME,
    'settings'  => $GALLERY_TOGGLE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 12
) );

$TOGGLE_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-copyright-name]';
$TOGGLE_KEY = 'nateserk_tinycup-copyright-name';

/* Enable/Disable Copyright text Options*/
$wp_customize->add_setting( $TOGGLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_KEY],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( $TOGGLE_ID, array(
    'label'		=> __( 'Footer Copyright Owner', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Your name or company name as a part of copyright statement in the footer.'),
    'settings'  => $TOGGLE_ID,
    'type'	  	=> 'text',
    'priority'  => 13
) );


/** Google Analytic */
$G_TRACKING_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-g-analytic-tracking-id]';
$G_TRACKING_KEY = 'nateserk_tinycup-g-analytic-tracking-id';

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
    'label'		=> __( 'Theme Trademark', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('How do you want our theme logo to show up at the footer?.'),
    'settings'  => $POWER_BY_ID,
    'type'	  	=> 'select',
    'choices'   => array('text'=>'text', 'logo'=>'logo'),
    'priority'  => 20
) );

$TOGGLE_POWER_BY_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-toggle-footer-option]';
$TOGGLE_POWER_KEY = 'HEADER_COMPOST_ID';

/* Whether to display a footer logo or not */
$wp_customize->add_setting( $TOGGLE_POWER_BY_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_POWER_KEY],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $TOGGLE_POWER_BY_ID, array(
    'label'		=> __( 'Enable Trademark Footer', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Toggle on/off our footer theme logo/text'),
    'settings'  => $TOGGLE_POWER_BY_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 21
) );


$HEADER_COMPOST_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-header-composition-option]';
$HEADER_COMPOST_KEY = 'nateserk_tinycup-header-composition-option';

/* Show the header composition option */
$wp_customize->add_setting( $HEADER_COMPOST_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$HEADER_COMPOST_KEY],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$wp_customize->add_control( $HEADER_COMPOST_ID, array(
    'label'		=> __( 'Header Composition', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Where the logo is located'),
    'settings'  => $HEADER_COMPOST_ID,
    'type'	  	=> 'select',
    'choices'   => array('center'=>'Center Logo (Default)', 'left'=>'Left Logo', 'right'=>'Right Logo'),
    'priority'  => 22
) );


$DISPLAY_CATEGORY_LISTING_ID = 'nateserk_tinycup_theme_options[nateserk_tinycup-display-category-listing-option]';
$DISPLAY_CATEGORY_LISTING_KEY = 'nateserk_tinycup-display-category-listing-option';

/* Displayed category option */
$wp_customize->add_setting( $DISPLAY_CATEGORY_LISTING_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$DISPLAY_CATEGORY_LISTING_KEY],
    //'sanitize_callback' => 'nateserk_tinycup_sanitize_checkbox',
) );

$cateogries_array = get_categories();
$cat_choices = array('all' => 'All Categories');
foreach ( $cateogries_array as $category) {
    $cat_choices[$category->term_id] = $category->name ." ( cat_id=" .$category->term_id .")";
}

$wp_customize->add_control( $DISPLAY_CATEGORY_LISTING_ID, array(
    'label'		=> __( 'Listing Posts on Homepage', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Displayed posts from the selected category'),
    'settings'  => $DISPLAY_CATEGORY_LISTING_ID,
    'type'	  	=> 'select',
    'choices'   => $cat_choices,
    'priority'  => 23
) );

