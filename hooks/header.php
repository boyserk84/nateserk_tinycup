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
