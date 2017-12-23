<?php
/**
 * nateserk-tinycup functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package nateserk-tinycup
 */

if ( ! function_exists( 'nateserk_tinycup_setup' ) ) :
	// Add initializer specific for the theme.
	$nateserk_tintycup_file_directory_init_file_path = trailingslashit( get_template_directory() ).'inc/init.php';
	require $nateserk_tintycup_file_directory_init_file_path;

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nateserk_tinycup_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nateserk-tinycup, use a find and replace
	 * to change 'nateserk_tinycup' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'nateserk_tinycup', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-header' => esc_html__( 'Primary', 'nateserk_tinycup' ),
		'menu-footer'=> esc_html__( 'Footer', 'nateserk_tinycup')
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nateserk_tinycup_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'nateserk_tinycup_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nateserk_tinycup_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nateserk_tinycup_content_width', 640 );
}
add_action( 'after_setup_theme', 'nateserk_tinycup_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nateserk_tinycup_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer', 'nateserk_tinycup' ),
		'id'            => 'sidebar-footer',
		'description'   => esc_html__( 'Add widgets here.', 'nateserk_tinycup' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Header', 'nateserk_tinycup' ),
		'id'            => 'sidebar-header',
		'description'   => esc_html__( 'Add widgets here.', 'nateserk_tinycup' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'nateserk_tinycup_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function nateserk_tinycup_scripts() {
	/*google font */
	wp_enqueue_style( 'nateserk_tinycup-googleapis', esc_url_raw("https://fonts.googleapis.com/css?family=Fjalla+One"), array(), '1.0.0' , 'screen');

	wp_enqueue_style( 'nateserk_tinycup-style', get_stylesheet_uri(), array(), '1.0.3' );

	/*Font-Awesome-master*/
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/library/font-awesome/css/font-awesome.min.css', array(), '4.7.0' );

	/*********************************************
  /** Footer loading scripts and stylesheets
	*/

	wp_enqueue_script( 'nateserk_tinycup-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'nateserk_tinycup-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/** Jquery */
	wp_enqueue_script('nateserk_tinycup-jquery', "https://code.jquery.com/jquery-3.1.1.min.js", array(), '3.1.1', true);

	/** JS Cookie */
	wp_enqueue_script( 'nateserk_tinycup-js-cookie', get_template_directory_uri() . '/assets/library/js-cookie/js.cookie.min.js', array(), '2.1.3', true );

	/** Theme Main JS script*/
	wp_enqueue_script( 'nateserk_tinycup-main_js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'nateserk_tinycup_scripts' );


/**
* Create a modal dialog button
*
* @param text             Text displayed on the button.
* @param url              URL to redirect if 'redirect' pressAction is specified,
* @param pressAction      by default it is dismissed when click. (option dismiss | redirect )
*/
if ( !function_exists('nateserk_tinycup_create_modal_dialog_button') ) :
  function nateserk_tinycup_create_modal_dialog_button($text, $url ,$pressAction) {
    if ( $pressAction == 'redirect' ) : ?>
        <a id="modal_btn_redirect" class="btn btn-default" href="<?php echo $url; ?>" role="button"><?php echo $text; ?></a>
    <?php
    else : ?>
        <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo $text; ?></button>
    <?php
    endif;
  }
endif;


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Customizable shortcodes.
 */
require get_template_directory() . '/inc/shortcodes.php';
