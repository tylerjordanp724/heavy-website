<?php
/**
 * heavy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package heavy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'heavy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function heavy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on heavy, use a find and replace
		 * to change 'heavy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'heavy', get_template_directory() . '/languages' );

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
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'heavy' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'heavy_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'heavy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function heavy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'heavy_content_width', 640 );
}
add_action( 'after_setup_theme', 'heavy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function heavy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'heavy' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'heavy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'heavy_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function heavy_assets() {
	// styles
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css', array(), '4.1.3','all');

	wp_enqueue_style( 'styles', get_template_directory_uri().'/css/styles.css',array(), '1.0.0','all' );

	// scripts
	wp_deregister_script('jquery');
	
	wp_enqueue_script('jquery', "https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js", array(), false, true);
	wp_enqueue_script('video', "https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video.min.js", array(), false, true);
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array(), '1.0.0', true );
	
	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array(), null, true );

	// comments
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'heavy_assets' );


function bg_color() {
	global $bg_color;
 	$bg_color = get_sub_field('background_color');
    if(!empty($bg_color)) {
        echo 'style="background-color:'.$bg_color.';"';
    }
}

function header_classes() {
	$header_color;
	$header_theme = get_field('header_theme');
	$strings = array('header');
	
	if(is_front_page() || is_page()) { 
		$header_theme = get_field('header_theme');
		$header_color = 'header--'.$header_theme.''; 
		array_push($strings, $header_color);
	}

	if(is_home()) {
		array_push($strings, 'header--blog');
	}

	echo 'class="'.implode(' ', $strings).'"';
}

// Register Custom Post Type
function heavy_case_studies() {

	$labels = array(
		'name'                  => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Case Study', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Case Studies', 'text_domain' ),
		'name_admin_bar'        => __( 'Case Studies', 'text_domain' ),
		'archives'              => __( 'Case Study Archives', 'text_domain' ),
		'attributes'            => __( 'Case Study Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Case Study:', 'text_domain' ),
		'all_items'             => __( 'All Case Studies', 'text_domain' ),
		'add_new_item'          => __( 'Add New Case Study', 'text_domain' ),
		'add_new'               => __( 'Add New Case Study', 'text_domain' ),
		'new_item'              => __( 'New Case Study', 'text_domain' ),
		'edit_item'             => __( 'Edit Case Study', 'text_domain' ),
		'update_item'           => __( 'Update Case Study', 'text_domain' ),
		'view_item'             => __( 'View Case Study', 'text_domain' ),
		'view_items'            => __( 'View Case Studies', 'text_domain' ),
		'search_items'          => __( 'Search Case Studies', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
		'items_list'            => __( 'Case Studies', 'text_domain' ),
		'items_list_navigation' => __( 'Case Studies', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Case Studies', 'text_domain' ),
	);
	$rewrite = array(
		'slug'                  => 'work',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Case Study', 'text_domain' ),
		'description'           => __( 'Heavy case studies', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'page-attributes', 'post-formats' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'show_in_rest'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'work',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'case_study', $args );

}
add_action( 'init', 'heavy_case_studies', 0 );

if( function_exists('acf_add_options_page') )
{
    acf_add_options_page(array(
        'page_title'    => 'Case Study Index',
        'menu_title'    => 'Case Study Index',
        'menu_slug'     => 'options_work',
        'capability'    => 'edit_posts',
        'parent_slug'   => 'edit.php?post_type=case_study',
        'position'      => false,
        'icon_url'      => 'dashicons-portfolio',
        'redirect'      => false,
    ));
}


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

