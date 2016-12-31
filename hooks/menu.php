<?php
/**
* hooks/menu.php
* All functions related to customizing menus.
*/

/**
 * Setup a customized menu for the given menu theme-location
 *
 * @param menu theme location
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_setup_customized_menu' ) ) :

    function nateserk_tinycup_setup_customized_menu($theme_location) {
        $locations = get_nav_menu_locations();
        if ( !empty($locations) ) {
            $menu_items = wp_get_nav_menu_items($locations[$theme_location]);
            if ( $menu_items ) {
                $max = count($menu_items);
                $div_space = 1;
                $extra_space = 0;
                if ( $max < 5 ) {
                  $div_space = ceil( 12/$max );
                } else {
                  $extra_space = 12 - $max;
                }

                foreach ($menu_items as $item) {
                  // fill-in extra space
                  if ($extra_space > 0) {
                    echo '<div class="col-xs-0 col-md-1"></div>';
                    --$extra_space;
                  }

                  echo '<div class="menu-item col-md-'.$div_space .'"><a href="'.$item->url .'">' .$item->title .'</a></div>';
                }//foreach
            }//if
        }
    }

endif;
add_action( 'nateserk_tinycup_action_setup_menu', 'nateserk_tinycup_setup_customized_menu', 0 );
