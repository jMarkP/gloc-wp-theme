<?php
/**
 * gloc_2022 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gloc_2022
 */

if ( ! defined( 'GLOC_2022_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'GLOC_2022_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function gloc_2022_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on gloc_2022, use a find and replace
		* to change 'gloc-2022' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'gloc-2022', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'gloc-2022' ),
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
			'gloc_2022_custom_background_args',
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
add_action( 'after_setup_theme', 'gloc_2022_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function gloc_2022_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gloc_2022_content_width', 640 );
}
add_action( 'after_setup_theme', 'gloc_2022_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function gloc_2022_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'gloc-2022' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add widgets to the page footer here.', 'gloc-2022' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'gloc_2022_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function gloc_2022_scripts() {
	wp_enqueue_style( 'gloc-2022-style', get_stylesheet_uri(), array(), GLOC_2022_VERSION );
	wp_style_add_data( 'gloc-2022-style', 'rtl', 'replace' );

	wp_enqueue_script( 'gloc-2022-navigation', get_template_directory_uri() . '/js/navigation.js', array(), GLOC_2022_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gloc_2022_scripts' );

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
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}



function add_hero_controls($wp_customize) {
	$wp_customize->add_section('hero', array(
		'title' => 'Hero section',
		'description' => 'Add hero image to your website',
		'capability' => 'edit_theme_options'
	));

	$wp_customize->add_setting('hero-image', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero-image', array(
		'section' => 'hero',
		'label' => 'Hero image'
	)));
}
add_action('customize_register', 'add_hero_controls');


function add_upcoming_show_controls($wp_customize) {
	$wp_customize->add_section('upcoming-show', array(
		'title' => 'Upcoming show',
		'description' => 'Add details about any upcoming show',
		'capability' => 'edit_theme_options'
	));

	// Is enabled?
	$wp_customize->add_setting('upcoming-show-enabled', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'upcoming-show-enabled', array(
			'label'    => 'Enable upcoming show ads',
			'description' => 'Is there an upcoming show we are currently selling tickets for?', 
			'section'  => 'upcoming-show',
			'settings' => 'upcoming-show-enabled',
			'type'     => 'checkbox',
		)));

	// Show name
	$wp_customize->add_setting('upcoming-show-name', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'upcoming-show-name', array(
		'label'    => 'Show name',
		'description' => 'The name of the show, e.g. "The Sorcerer"', 
		'section'  => 'upcoming-show',
		'settings' => 'upcoming-show-name',
		'type'     => 'input',
	)));

	// Show dates
	$wp_customize->add_setting( 'upcoming-show-start-date', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'gloc_2022_sanitize_date',
	) );
	
	$wp_customize->add_control( 'upcoming-show-start-date', array(
		'type' => 'date',
		'section' => 'upcoming-show', // Add a default or your own section
		'label' => 'Start date',
		'description' => 'When is the opening night of the show',
		'input_attrs' => array(
			'placeholder' => __( 'dd/mm/yyyy' ),
		),
	));
	$wp_customize->add_setting( 'upcoming-show-end-date', array(
		'capability' => 'edit_theme_options',
		'sanitize_callback' => 'gloc_2022_sanitize_date',
	) );
	
	$wp_customize->add_control( 'upcoming-show-end-date', array(
		'type' => 'date',
		'section' => 'upcoming-show', // Add a default or your own section
		'label' => 'End date',
		'description' => 'When is the last night of the show',
		'input_attrs' => array(
			'placeholder' => __( 'dd/mm/yyyy' ),
		),
	));

	// Banner
	$wp_customize->add_setting('upcoming-show-banner', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));

	$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'upcoming-show-banner', array(
		'section' => 'upcoming-show',
		'label' => 'Upcoming show banner',
		'description' => 'Add a banner, size 1200x200px'
	)));

	// Link to TicketSource
	$wp_customize->add_setting('upcoming-show-ticket-link', array(
		'type' => 'theme_mod',
		'capability' => 'edit_theme_options',
	));
	$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'upcoming-show-ticket-link', array(
		'label'    => 'Link to tickets',
		'description' => 'URL to buy tickets. Should be a link to the TicketSource page for the show, not the general GLOC TicketSource page', 
		'section'  => 'upcoming-show',
		'settings' => 'upcoming-show-ticket-link',
		'type'     => 'input',
	)));


}
add_action('customize_register', 'add_upcoming_show_controls');

function gloc_2022_sanitize_date( $input ) {
	$date = new DateTime( $input );
	return $date->format('d-m-Y');
}

function the_hero_style() {
	$linear_gradient = 'linear-gradient(180deg, rgba(0, 0, 0, 1.0) 0%, rgba(0, 0, 0, 0.7) 30%, rgba(0, 0, 0, 0.0) 80%)'; 
  $url = get_theme_mod('hero-image');
  ?>
<style>
.hero {
  <?php if ($url !='') {
    ?>background-image: <?php echo $linear_gradient ?>, url("<?php echo $url ?>");
    <?php
  }

  else {
    ?>background-image: <?php echo $linear_gradient ?>;
  }

  <?php
}

?>
}
</style>
<?php
}

function the_ticket_link() {
	$link = get_theme_mod('upcoming-show-ticket-link');
	if ($link != '') {
		echo $link;
	} else {
		// Default link
		echo 'https://www.ticketsource.co.uk/grosvenorlightopera';
	}
}

function buy_tickets_text() {
	$show_name = get_theme_mod('upcoming-show-name');
	if ($show_name != '') {
		echo 'Buy tickets to ' . $show_name . '!';
	} else {
		// Default link
		echo 'Buy tickets!';
	}
}