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
            'nateserk_tinycup-header-logo'          => '',
            'nateserk_tinycup-facebook-url'         => '',
            'nateserk_tinycup-twitter-url'          => '',
            'nateserk_tinycup-instagram-url'        => '',
            'nateserk_tinycup-google-plus-url'      => '',
            'nateserk_tinycup-tumblr-url'           => '',
            'nateserk_tinycup-snapchat-url'         => '',
            'nateserk_tinycup-github-url'           => '',
            'nateserk_tinycup-reddit-url'           => '',
            'nateserk_tinycup-youtube-url'          => '',
            'nateserk_tinycup-enable-social'        => true,

            /**related post options*/
            'nateserk_tinycup-enable-related-posts' => true,
            'nateserk_tinycup-related-posts-type'=>'tags',
            'nateserk_tinycup-related-posts-per-page'=> 4,

            /** Logo header image */
            'nateserk_tinycup-show-header-logo' => false,
            'nateserk_tinycup-header-logo-media-url'=> '',

            /** Index page */
            'nateserk_tinycup-tb-div'=> 'thumbnail',

            /** Copyright option */
            'nateserk_tinycup-copyright-name' => '',

            /** Home Modal dialog option */
            'nateserk_tinycup-home-modal-dialog-toggle' => false,
            'nateserk_tinycup-home-modal-dialog-title'=> 'Modal Title',
            'nateserk_tinycup-home-modal-dialog-body'=> 'Body Content',
            'nateserk_tinycup-home-modal-dialog-btn-primary-action'=> 'dismiss',
            'nateserk_tinycup-home-modal-dialog-btn-primary-text'=> 'Ok',
            'nateserk_tinycup-home-modal-dialog-btn-primary-url'=> '',
            'nateserk_tinycup-home-modal-dialog-btn-secondary-text'=> 'Go Search',
            'nateserk_tinycup-home-modal-dialog-btn-secondary-action'=> 'redirect',
            'nateserk_tinycup-home-modal-dialog-btn-secondary-url'=> 'http://www.google.com',
            'nateserk_tinycup-home-modal-dialog-dismiss-outside-allow'=> true,

            /** Link colors **/
            'nateserk_tinycup-custom-link-color'=>'',
            'nateserk_tinycup-custom-link-hover-color'=>'',
            'nateserk_tinycup-custom-link-visited-color'=>'',

            /** Google Analytics */
            'nateserk_tinycup-g-analytic-tracking-id'=>'',

            /** How to show theme logo at the footer*/
            'nateserk_tinycup-show-engine-option'=>'text',
            'nateserk_tinycup-toggle-footer-option'=> true,

            'nateserk_tinycup-show-per-row'=>4,

            /** Show header composition */
            'nateserk_tinycup-header-composition-option'=>'center',

            'nateserk_tinycup-theme-gallery-toggle'=>false,

            /** Facebook App Id */
            'nateserk_tinycup-fbapp_Id'=>'',
            'nateserk_tinycup-fbapp_social_comment_enable'=>false,
            'nateserk_tinycup-fbapp_social_comment_numposts'=>5,
            'nateserk_tinycup_fbapp_social_like_enable'=>false,
            'nateserk_tinycup_fbapp_social_like_layout'=>'button_count',
            'nateserk_tinycup_fbapp_social_like_include_share'=> true,

            /** Development mode - if set to true, fetching all scripts and styles locally instead of fetching from CDN.*/
            'nateserk_tinycup_development_mode'=> false
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

$nateserk_tinycup_footer_file_path = nateserk_tinycup_file_directory('hooks/footer.php');
require $nateserk_tinycup_footer_file_path;

$nateserk_tinycup_footer_file_path = nateserk_tinycup_file_directory('hooks/menu.php');
require $nateserk_tinycup_footer_file_path;

$nateserk_tinycup_comment_form_file_path = nateserk_tinycup_file_directory('hooks/comment-form.php');
require $nateserk_tinycup_comment_form_file_path;

$nateserk_tinycup_social_links_file_path = nateserk_tinycup_file_directory('hooks/social-links.php');
require $nateserk_tinycup_social_links_file_path;

$nateserk_tinycup_related_posts_file_path = nateserk_tinycup_file_directory('hooks/related-posts.php');
require $nateserk_tinycup_related_posts_file_path;

$nateserk_tinycup_plugins_file_path = nateserk_tinycup_file_directory('hooks/plugins.php');
require $nateserk_tinycup_plugins_file_path;
