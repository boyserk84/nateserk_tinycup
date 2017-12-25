<?php
/**
* hooks/header.php
* All functions that need to be called or triggered within the header.
*/

/**
 * Setting global variables for all theme options db saved values
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_set_global' ) ) :

    function nateserk_tinycup_set_global() {
        /*Getting saved values start*/
        $nateserk_tinycup_saved_theme_options = nateserk_tinycup_get_theme_options();
        $GLOBALS['nateserk_tinycup_customizer_all_values'] = $nateserk_tinycup_saved_theme_options;
        /*Getting saved values end*/
    }

endif;
add_action( 'nateserk_tinycup_action_before_head', 'nateserk_tinycup_set_global', 0 );

/**
 * Load external stylesheets
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_set_external_stylesheets' ) ) :

    function nateserk_tinycup_set_external_stylesheets() {
        $options = nateserk_tinycup_get_theme_options();

        if ( nateserk_tinycup_is_in_development_mode() === false ) {
          // Fetching from CDN instead
        ?>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <?php
        }
          // Customized style CSS (override for custom-links-color-options)
        ?>
        <style type="text/css">
          <?php
          if (!empty($options['nateserk_tinycup-custom-link-color'])) : ?>
            a {
              color:<?php echo $options['nateserk_tinycup-custom-link-color']; ?>;
            }
          <?php
          endif;
          if (!empty($options['nateserk_tinycup-custom-link-hover-color'])) : ?>
            a:hover {
              color:<?php echo $options['nateserk_tinycup-custom-link-hover-color']; ?>;
            }
          <?php
          endif;
          if (!empty($options['nateserk_tinycup-custom-link-visited-color'])) : ?>
            a:visited {
              color:<?php echo $options['nateserk_tinycup-custom-link-visited-color']; ?>;
            }
          <?php
          endif;?>
        </style><!--override CSS stylesheet-->
        <?php
    }

endif;
add_action( 'nateserk_tinycup_action_in_header', 'nateserk_tinycup_set_external_stylesheets', 0 );

/**
* Show the site's logo or text title
*
* @param null
* @return null
*/
if ( ! function_exists( 'nateserk_tinycup_set_site_header_title' ) ) :

    function nateserk_tinycup_set_site_header_title() {
        $options = nateserk_tinycup_get_theme_options();
        if ( $options['nateserk_tinycup-show-header-logo'] && !empty($options['nateserk_tinycup-header-logo-media-url']) ) :
          ?>
          <img src="<?php echo $options['nateserk_tinycup-header-logo-media-url']; ?>" title='<?php bloginfo('name'); ?>' />
          <?php
        else:
          bloginfo( 'name' );
        endif;
    }

endif;
add_action( 'nateserk_tinycup_action_site_header_title', 'nateserk_tinycup_set_site_header_title', 0 );
