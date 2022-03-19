<?php
/**
 * Event Listing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Event_Listing
 */

if ( ! function_exists( 'event_listing_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function event_listing_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Event Listing, use a find and replace
		 * to change 'event-listing' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'event-listing' );

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
			'menu-1' => esc_html__( 'Primary', 'event-listing' ),

            'social-menu' => esc_html__('Social Menu', 'event-listing'),
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
		add_theme_support( 'custom-background', apply_filters( 'event_listing_custom_background_args', array(
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
			'height'      => 300,
			'width'       => 200,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for default block styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for default block styles.
		add_theme_support( 'editor-style' );

		/*
		 * Add support custom font sizes.
		 *
		 * Add the line below to disable the custom color picker in the editor.
		 * add_theme_support( 'disable-custom-font-sizes' );
		 */
		add_theme_support(
			'editor-font-sizes',
			array(
				array(
					'name'      => __( 'Small', 'event-listing' ),
					'shortName' => __( 'S', 'event-listing' ),
					'size'      => 16,
					'slug'      => 'small',
				),
				array(
					'name'      => __( 'Medium', 'event-listing' ),
					'shortName' => __( 'M', 'event-listing' ),
					'size'      => 25,
					'slug'      => 'medium',
				),
				array(
					'name'      => __( 'Large', 'event-listing' ),
					'shortName' => __( 'L', 'event-listing' ),
					'size'      => 31,
					'slug'      => 'large',
				),
				array(
					'name'      => __( 'Larger', 'event-listing' ),
					'shortName' => __( 'XL', 'event-listing' ),
					'size'      => 39,
					'slug'      => 'larger',
				),
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'event_listing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function event_listing_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'event_listing_content_width', 640 );
}
add_action( 'after_setup_theme', 'event_listing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function event_listing_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'event-listing' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'event-listing' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Front Page Widgets', 'event-listing' ),
		'id'            => 'event-listing-front-page',
		'description'   => esc_html__( 'Add widgets here.', 'event-listing' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s"><div class="container">',
		'after_widget'  => '</div></section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'event-listing' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'event-listing' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'event-listing' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'event-listing' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 3', 'event-listing' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'event-listing' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => esc_html__( 'Footer 4', 'event-listing' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', 'event-listing' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'event_listing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function event_listing_scripts() {
 
 	/*font  */
	global $event_listing_theme_options;

	if(empty($event_listing_theme_options))
		return;

	$event_listing_name_font_url   = esc_attr( $event_listing_theme_options['event-listing-font-family-url'] );

	$h1_font = esc_attr( $event_listing_theme_options['event-listing-h1-font-family-url'] );
	$h2_font = esc_attr( $event_listing_theme_options['event-listing-h2-font-family-url'] );
	$h3_font = esc_attr( $event_listing_theme_options['event-listing-h3-font-family-url'] );
	$h4_font = esc_attr( $event_listing_theme_options['event-listing-h4-font-family-url'] );
	$h5_font = esc_attr( $event_listing_theme_options['event-listing-h5-font-family-url'] );
	$h6_font = esc_attr( $event_listing_theme_options['event-listing-h6-font-family-url'] );

	$event_listing_google_fonts_enqueue = array( $event_listing_name_font_url, $h1_font, $h2_font, $h3_font, $h4_font, $h5_font, $h6_font );	
    $event_listing_google_fonts_enqueue_uniques = array_unique($event_listing_google_fonts_enqueue);
    foreach( $event_listing_google_fonts_enqueue_uniques as $event_listing_google_fonts_enqueue_unique ){
        wp_enqueue_style( $event_listing_google_fonts_enqueue_unique, '//fonts.googleapis.com/css?family='.$event_listing_google_fonts_enqueue_unique );
    }
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/vendor/fontawesome/css/font-awesome.min.css' );

    wp_enqueue_style('slick-css', get_template_directory_uri() . '/assets/vendor/slick/slick.css');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/assets/vendor/slick/slick-theme.css');   

	wp_enqueue_style( 'event-listing-style', get_stylesheet_uri() );

    wp_style_add_data( 'event-listing-style', 'rtl', 'replace' );

	wp_enqueue_script('slick', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', array('jquery'), '20151217', true);
    wp_enqueue_script( 'event-listing-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), '20161215', true );

	wp_enqueue_script( 'event-listing-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'event-listing-theme-custom', get_template_directory_uri() . '/assets/js/theme-custom.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'event_listing_scripts',99 );

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

/**
 * Customizer custom functions.
 */
require get_template_directory() . '/inc/functions/custom-functions.php';

/**
 * dynamic css
 */
require get_template_directory() . '/inc/functions/dynamic-css.php';

/**
 * TGM Library
 */
require get_template_directory() . '/inc/functions/tgm-library.php';

/**
 * Load Schema Microdata
 */
require get_template_directory() . '/inc/functions/microdata.php';


/**
 * Load widgets
 */
require get_template_directory() . '/inc/widgets/recent-featured-posts.php';
require get_template_directory() . '/inc/widgets/call-to-action.php';
