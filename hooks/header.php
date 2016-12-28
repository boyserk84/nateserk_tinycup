<?php

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
 * Setting global variables for all theme options db saved values
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_set_stylesheets' ) ) :

    function nateserk_tinycup_set_stylesheets() {
        ?>
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/f50e37704c.js"></script>

        <?php
    }

endif;
add_action( 'nateserk_tinycup_action_in_header', 'nateserk_tinycup_set_stylesheets', 0 );
