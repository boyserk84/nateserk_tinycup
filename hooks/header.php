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
        ?>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <?php
    }

endif;
add_action( 'nateserk_tinycup_action_in_header', 'nateserk_tinycup_set_external_stylesheets', 0 );
