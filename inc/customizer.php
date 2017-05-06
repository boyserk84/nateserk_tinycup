<?php
/**
 * nateserk-tinycup Theme Customizer
 *
 * @package nateserk-tinycup
 */
 require get_template_directory() .'/inc/init.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nateserk_tinycup_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

  /* Retrieve 'options' parameters */
  $options = nateserk_tinycup_get_theme_options();

	/* Retrieve 'defaults' options*/
	$defaults = nateserk_tinycup_get_default_theme_options();

  /** Load input sanitizer functions */
  $sanitize_func_file_path = nateserk_tinycup_file_directory('inc/sanitize-functions.php');
  require $sanitize_func_file_path;

	/** Social Media Options */
	$social_options_file_path = nateserk_tinycup_file_directory('inc/options/social-options.php');
	require $social_options_file_path;

  /** Related-posts options */
  $related_posts_options_file_path = nateserk_tinycup_file_directory('inc/options/related-posts-options.php');
	require $related_posts_options_file_path;

  /** header-logo options */
  $header_logo_file_path = nateserk_tinycup_file_directory('inc/options/header-logo-options.php');
	require $header_logo_file_path;

  /** copyright-optionsright options */
  $copyright_options_file_path = nateserk_tinycup_file_directory('inc/options/copyright-options.php');
	require $copyright_options_file_path;

  /** thumbnail options */
  $tb_options_file_path = nateserk_tinycup_file_directory('inc/options/thumbnail-options.php');
	require $tb_options_file_path;

  /** Home Modal dialog options */
  $home_modal_options_file_path = nateserk_tinycup_file_directory('inc/options/home-modal-dialog-options.php');
	require $home_modal_options_file_path;

  /** Custom links color options */
  $link_color_options_file_path = nateserk_tinycup_file_directory('inc/options/custom-links-color-options.php');
	require $link_color_options_file_path;

  /** Misc options */
  $misc_options_file_path = nateserk_tinycup_file_directory('inc/options/misc-options.php');
  require $misc_options_file_path;

  /** External plugins options */
  $plugins_options_file_path = nateserk_tinycup_file_directory('inc/options/plugins-options.php');
  require $plugins_options_file_path;

}
add_action( 'customize_register', 'nateserk_tinycup_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nateserk_tinycup_customize_preview_js() {
	wp_enqueue_script( 'nateserk_tinycup_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'nateserk_tinycup_customize_preview_js' );


/**
* Customize and override the existing gallery short code and styling.
*/
function nateserk_tinycup_customize_gallery_shortcode( $output = '', $atts, $instance ) {
	$return = $output; // fallback

  $options = nateserk_tinycup_get_theme_options();
  // Override only if user enables it via a customizable UI menu.
  if ($options['nateserk_tinycup-theme-gallery-toggle'] == true ) {
    $idsList = explode(',', $atts["ids"]);
    $count = count($idsList);
    $totalCol = isset($atts["columns"])?((int) $atts["columns"]):$count;
    $size = $atts["size"];
    $link = isset($atts["link"])?false:true;  // false - link to attachment file, true link to attachment page
    $col = 1; // how many columns per row

    if ($count <= $totalCol) {
      $col = floor( 12/$count );
    } else {
      $col = floor( 12/$totalCol );
    }

    $className = "col-md-" .$col;

    $my_result = '';
  	// retrieve content of your own gallery function
  	foreach($idsList as $id) {
      $my_result = $my_result ."<div class=\"col-xs-12 ".$className ."\">" .wp_get_attachment_link($id, $size, $link) ."</div>";
    }

  	if( !empty( $my_result ) ) {
  		$return = "<div class=\"col-xs-12 col-md-12\">" .$my_result ."</div>";
  	}
  }

	return $return;
}
add_filter( 'post_gallery', 'nateserk_tinycup_customize_gallery_shortcode', 10, 3 );
