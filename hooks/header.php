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


/**
 * Show the left header composition
 * 
* @param null
* @return html tag
 */
if ( ! function_exists( 'nateserk_tinycup_set_site_header_left_composition' ) ) :

  function nateserk_tinycup_set_site_header_left_composition() {
      $options = nateserk_tinycup_get_theme_options();
      if ( $options['nateserk_tinycup-header-composition-option'] == 'left' && !empty($options['nateserk_tinycup-header-composition-option']) ) :
        ?>
			<div class="col-xs-12 col-md-12 site-branding" id="left_logo_composition">
				<div class="row">
					<div class="container-fluid">
					<div class="col-xs-12 col-md-4 nav-align-v-center" style="float:none;">
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php
							// show title or logo
							do_action('nateserk_tinycup_action_site_header_title');
						?>
						</a></h1>
						<?php

							$description = get_bloginfo( 'description', 'display' );
							if ( $description || is_customize_preview() ) : ?>
								<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
							<?php
							endif;
						?>
					</div><!-- -->
					<div class="col-xs-12 col-md-7 nav-align-v-center" style="float:none;">
								<nav class="navbar" role="navigation">
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
									<i class="fa fa-bars fa-3x" aria-hidden="true"></i>
									</button>
								</div><!--navbar-header-->
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse navbar-ex1-collapse">
									<h1 class="site-title">
										<?php do_action('nateserk_tinycup_action_setup_menu', 'menu-header'); ?>
									</h1>
								</div><!-- navbar-ex1-collapse -->
								</nav><!--navbar-->
							
					</div>
					</div><!--container-fluid-->
				</div>
			</div><!-- left logo composition -->

        <?php
      endif;
  }

endif;
add_action( 'nateserk_tinycup_set_site_header_left_composition', 'nateserk_tinycup_set_site_header_left_composition', 0 );

/**
 * Show the center/default header composition
 * 
* @param null
* @return html tag
 */
if ( ! function_exists( 'nateserk_tinycup_set_site_header_center_composition' ) ) :

  function nateserk_tinycup_set_site_header_center_composition() {
      $options = nateserk_tinycup_get_theme_options();
      if ( $options['nateserk_tinycup-header-composition-option'] == 'center' || empty($options['nateserk_tinycup-header-composition-option']) ) :
        ?>
        <div class="col-xs-12 col-md-12 site-branding" id="default_logo_composition">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php
              // show title or logo
              do_action('nateserk_tinycup_action_site_header_title');
            ?>
            </a></h1>
            <?php

            $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
              <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            <?php
            endif;
            ?>
			  </div><!-- .site-branding --> <!-- default logo composition -->
        <?php
      endif;
  }

endif;
add_action( 'nateserk_tinycup_set_site_header_center_composition', 'nateserk_tinycup_set_site_header_center_composition', 0 );

/**
 * Show the right header composition
 * 
* @param null
* @return html tag
 */
if ( ! function_exists( 'nateserk_tinycup_set_site_header_right_composition' ) ) :

  function nateserk_tinycup_set_site_header_right_composition() {
      $options = nateserk_tinycup_get_theme_options();
      if ( $options['nateserk_tinycup-header-composition-option'] == 'right' || !empty($options['nateserk_tinycup-header-composition-option']) ) :
        ?>
        <div class="col-xs-12 col-md-12 site-branding" id="right_logo_composition">
          <div class="row">
            <div class="container-fluid">
            
            <div class="col-xs-12 col-md-7 nav-align-v-center" style="float:none;">
                
                  <nav class="navbar" role="navigation">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <i class="fa fa-bars fa-3x" aria-hidden="true"></i>
                    </button>
                  </div><!--navbar-header-->
                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <h1 class="site-title">
                      <?php do_action('nateserk_tinycup_action_setup_menu', 'menu-header'); ?>
                    </h1>
                  </div><!-- navbar-ex1-collapse -->
                  </nav><!--navbar-->
                
            </div>

            <div class="col-xs-12 col-md-4 nav-align-v-center" style="float:none;">
              <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
              <?php
                // show title or logo
                do_action('nateserk_tinycup_action_site_header_title');
              ?>
              </a></h1>
              <?php

                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) : ?>
                  <p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
                <?php
                endif;
              ?>
            </div>

            </div><!--container-fluid-->
          </div>
			  </div><!-- .site-branding --> <!-- Right logo composition -->
        <?php
      endif;
  }

endif;
add_action( 'nateserk_tinycup_set_site_header_right_composition', 'nateserk_tinycup_set_site_header_right_composition', 0 );



/**
* Add Google Analytics Tag to <HEAD> section. 
* Update: 2020/12/20 
*
* @param null
* @return null
*/
if ( ! function_exists( 'nateserk_tinycup_set_google_analytic_tag_header' ) ) :

  function nateserk_tinycup_set_google_analytic_tag_header() {
      $options = nateserk_tinycup_get_theme_options();
      $gTrackingId = $options['nateserk_tinycup-g-analytic-tracking-id'];

      if ( !empty($gTrackingId) ) : ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $gTrackingId; ?>"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', '<?php echo $gTrackingId; ?>');
        </script>
      <?php
      endif;
  }

endif;
add_action( 'nateserk_tinycup_action_set_google_analytic_tag_header', 'nateserk_tinycup_set_google_analytic_tag_header', 0 );
