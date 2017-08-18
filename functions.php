<?php
/**
 * tranquilwp functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package tranquilwp
 */

if ( ! function_exists( 'tranquilwp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function tranquilwp_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on tranquilwp, use a find and replace
		 * to change 'tranquilwp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'tranquilwp', get_template_directory() . '/languages' );

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

		// Register Custom Navigation Walker
    require_once('wp_bootstrap_navwalker.php');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'tranquilwp' ),
			'menu-2' => esc_html__( 'Footer', 'tranquilwp' ),
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
		add_theme_support( 'custom-background', apply_filters( 'tranquilwp_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'tranquilwp_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tranquilwp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tranquilwp_content_width', 640 );
}
add_action( 'after_setup_theme', 'tranquilwp_content_width', 0 );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tranquilwp_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'tranquilwp' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'tranquilwp' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'tranquilwp_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function tranquilwp_scripts() {
	// Bootstrap CSS
	wp_enqueue_style( 'bootstrap-core', get_template_directory_uri() . '/css/bootstrap.min.css' );

	// Main CSS
	wp_enqueue_style( 'tranquilwp-style', get_template_directory_uri() . '/style.css' );

	wp_enqueue_script( 'tranquilwp-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'tranquilwp-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	/* Add JS- Name, src, dependancies i.e bs requires jquery, */
	/* lastly in_footer = true - this adds script in footer with wp_footer tag  */
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tranquilwp_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function featureText() {
  if ( is_front_page() ) {
    the_field('feature_text');
    // is_home = When the main blog page is being displayed.

  } elseif ( is_home() || is_single() ) {
      _e('Tranquil Spa Official Blog', 'tranquilwp');

  } elseif ( is_archive() ) {

      _e( 'Tranquil Spa Official Blog', 'tranquilwp' );
      _e('<br>');

         // Add the category or tag name
         single_term_title(__('Browsing: ', 'tranquilwp'));

        // Add the month and year of archive
        if ( is_month() ) {
            $monthNum = get_query_var('monthnum');
            // mktime(hour,minute,second,month,day,year,is_dst);
            $month = date("F", mktime(0, 0, 0, $monthNum));
            $year = get_query_var('year');
            echo 'Posts from ' . $month .' '.$year;
        }

  } elseif ( is_page_template('page-news.php')
            || is_page_template('page-about.php')
            || is_page_template('page-contact.php') )  {

      bloginfo('name');
      _e('<br>');
      the_title();

  } elseif ( is_404() ) {
      _e( 'Whoops, were a little lost', 'tranquilwp' );

      // add else as fall back if other than above
  } elseif ( is_search() ) {
      _e('Tranquil Spa Official Blog', 'tranquilwp');
      _e('<br>');

      // using printf not echo because the sting has formatting %s
      printf( __( 'Search Results for: %s', 'tranquilwp'), get_search_query() );

  } else {
     _e('FULLY RESPONSIVE PREMIUM SPA THEME FOR WORDPRESS', 'tranquilwp');
  }
}


$args = array(
  // 'width'         => 980,
  // 'height'        => 60,
  'default-image' => get_template_directory_uri() . '/images/lakebg.jpg',
  // allow site owner to upload images
  'uploads'       => true,
);
add_theme_support( 'custom-header', $args );


function new_excerpt_more( $more ) {
  return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

	register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar_blog',
    'before_widget' => '<div class="sidebar-module">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
