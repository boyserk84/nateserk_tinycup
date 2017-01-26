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

}
add_action( 'customize_register', 'nateserk_tinycup_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nateserk_tinycup_customize_preview_js() {
	wp_enqueue_script( 'nateserk_tinycup_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'nateserk_tinycup_customize_preview_js' );
