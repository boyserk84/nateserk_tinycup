<?php
/**
 * Main include functions ( to support child theme )
 *
 * @param string $file_path, path from the theme
 * @return string full path of file inside theme
 *
 */
if( !function_exists('nateserk_tinycup_file_directory') ){

    function nateserk_tinycup_file_directory( $file_path ){
        if( file_exists( trailingslashit( get_stylesheet_directory() ) . $file_path) ) {
            return trailingslashit( get_stylesheet_directory() ) . $file_path;
        }
        else{
            return trailingslashit( get_template_directory() ) . $file_path;
        }
    }
}


/**
 *  Default Theme Options
 *
 * @param null
 * @return array $acmephoto_default_theme_options
 *
 */
if ( !function_exists('nateserk_tinycup_get_default_theme_options') ) :
    function nateserk_tinycup_get_default_theme_options() {

        $default_theme_options = array(
            /*header options*/
            'natekserk_tinycup-header-logo'          => '',
            'natekserk_tinycup-facebook-url'         => '',
            'natekserk_tinycup-twitter-url'          => '',
            'natekserk_tinycup-instagram-url'        => '',
            'natekserk_tinycup-google-plus-url'      => '',
            'natekserk_tinycup-tumblr-url'           => '',
            'natekserk_tinycup-snapchat-url'         => '',
            'natekserk_tinycup-enable-social'        => true,

            /**related post options*/
            'nateserk_tinycup-enable-related-posts' => true,
            'nateserk_tinycup-related-posts-type'=>'tags',
            'nateserk_tinycup-related-posts-per-page'=> 4,

            /** Index page */
            'nateserk_tinycup-show-thumbnail-type'=> '',
        );

        return apply_filters( 'natekserk_tinycup_default_theme_options', $default_theme_options );
    }
endif;

/**
 *  Get theme options
 *
 *
 * @param null
 * @return array nateserk_theme_options
 *
 */
if ( !function_exists('nateserk_tinycup_get_theme_options') ) :

    function nateserk_tinycup_get_theme_options() {
        $natekserk_tinycup_default_theme_options = nateserk_tinycup_get_default_theme_options();
        $nateserk_tinycup_get_theme_options = get_theme_mod( 'nateserk_tinycup_theme_options' );
        if( is_array( $nateserk_tinycup_get_theme_options ) ){
            return array_merge( $natekserk_tinycup_default_theme_options ,$nateserk_tinycup_get_theme_options );
        }
        else{
            return $natekserk_tinycup_default_theme_options;
        }
    }
endif;

/** Load 'Hooks' */
$nateserk_tinycup_header_file_path = nateserk_tinycup_file_directory('hooks/header.php');
require $nateserk_tinycup_header_file_path;

$nateserk_tinycup_social_links_file_path = nateserk_tinycup_file_directory('hooks/social-links.php');
require $nateserk_tinycup_social_links_file_path;

$nateserk_tinycup_related_posts_file_path = nateserk_tinycup_file_directory('hooks/related-posts.php');
require $nateserk_tinycup_related_posts_file_path;
