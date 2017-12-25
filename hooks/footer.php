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
        $options = nateserk_tinycup_get_theme_options();
        $gTrackingId = $options['nateserk_tinycup-g-analytic-tracking-id'];

        if ( nateserk_tinycup_is_in_development_mode() === false ) {
          // Fetching from CDN instead
        ?>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <?php
        }
          if ( !empty($gTrackingId) ) : ?>
        <!-- Google Anayltics -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', '<?php echo $gTrackingId; ?>', 'auto');
          ga('send', 'pageview');

        </script>
        <?php
        endif;
    }

endif;
add_action( 'nateserk_tinycup_action_after_footer', 'nateserk_tinycup_set_external_scripts', 0 );

/**
 * Set copyright text
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_set_copyright_text' ) ) :

    function nateserk_tinycup_set_copyright_text() {
        $options = nateserk_tinycup_get_theme_options();
        if ( !empty($options['nateserk_tinycup-copyright-name'] ) ){
        ?>
          <p><?php printf( esc_html__( 'Copyright &copy; '.date("Y") .' %1$s. All rights reserved.', 'nateserk_tinycup' ), '<a href="'.get_site_url() .'" rel="designer">'.$options['nateserk_tinycup-copyright-name'] .'</a>' ); ?></p>
        <?php
        }
    }

endif;
add_action( 'nateserk_tinycup_action_copyright', 'nateserk_tinycup_set_copyright_text', 0 );

/**
 * Display a theme logo or text
 *
 * @param null
 * @return null
 *
 */
if ( ! function_exists( 'nateserk_tinycup_show_theme_logo' ) ) :
    function nateserk_tinycup_show_theme_logo() {
      $options = nateserk_tinycup_get_theme_options();
      if ( $options['nateserk_tinycup-show-engine-option'] == 'text') :
        // show full text ?>
      <p><?php printf( esc_html__( 'Design and Powered By: %1$s.', 'nateserk_tinycup' ), '<a href="https://automattic.com/" rel="designer">NateSerk TinyCup</a>' ); ?></p>
      <?php else :
        // show logo ?>
      <p>Powered By<br/><a href="https://automattic.com/" rel="designer"><i class="fa fa-coffee fa-3x" aria-hidden="true"></i><br/><span style="font-size:small;">TinyCup Theme</span></a></p>
      <?php
      endif;
    }

endif;
add_action( 'nateserk_tinycup_action_show_theme_logo', 'nateserk_tinycup_show_theme_logo', 0 );
