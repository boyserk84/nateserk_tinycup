<?php
/**
* hooks/footer.php
* All functions that need to be called or triggered within the footer.
*/


/**
 * Load external stylesheets and scripts
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_set_external_scripts' ) ) :

    function nateserk_tinycup_set_external_scripts() {
        ?>
        <!-- Jquery -->
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <?php
    }

endif;
add_action( 'nateserk_tinycup_action_after_footer', 'nateserk_tinycup_set_external_scripts', 0 );
