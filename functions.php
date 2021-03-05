<?php
// Register Menus
function register_menus() {
	register_nav_menu('main-menu',__( 'Main Menu' ));
	register_nav_menu('main-menu-right',__( 'Main Menu - Right' ));
	register_nav_menu('menu-footer-company',__( 'Footer - Company' ));
	register_nav_menu('menu-footer-solutions',__( 'Footer - Solutions' ));
	register_nav_menu('menu-footer-markets',__( 'Footer - Markets' ));
	register_nav_menu('menu-footer-legal',__( 'Footer - Legal' ));
}
add_action( 'init', 'register_menus' );


// Enqueue CSS & JS
function your_scripts() {
	/*Google Fonts*/
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700' );
	/*Bootstrap 4*/
	wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css' );
	/*Font Awesome*/
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.15.2/css/all.css' );
	/*GlideJS CSS Core*/
	wp_enqueue_style( 'glidejs-css-core', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.core.min.css' );
	/*GlideJS CSS Theme*/
	wp_enqueue_style( 'glidejs-css-theme', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/css/glide.theme.min.css' );
	/*Basic Styles*/
	wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), '1.0.0' );
	/*IFX 2021 Styles*/
	wp_enqueue_style( 'ifx-2021-styles', get_stylesheet_directory_uri() . '/css/ifx-2021.css', array(), '1.0.19' );
	/*Bootstrap JS*/
	wp_enqueue_script('bootstrap-js-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
	/*GlideJS*/
	wp_enqueue_script('glidejs', 'https://cdnjs.cloudflare.com/ajax/libs/Glide.js/3.4.1/glide.min.js', array(), null, false);
	/* IFX 2021 JS */
  wp_enqueue_script('ifx-2021-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), null, true);
}
add_action( 'wp_enqueue_scripts', 'your_scripts' );


// Create options settings page
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

/*
 * Let WordPress manage the document title.
 * By adding theme support, we declare that this theme does not use a
 * hard-coded <title> tag in the document head, and expect WordPress to
 * provide it for us.
 */
add_theme_support( 'title-tag' );

// Post Thumbnails support
add_theme_support( 'post-thumbnails' );

// Kernl Updater
require 'kernl-update-checker/kernl-update-checker.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://kernl.us/api/v1/theme-updates/602eab062ab8c7578a7080a3/',
    __FILE__,
    'tf-ifx-2021'
);

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/includes/header/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

// WP Query Numeric Pagination
function wp_query_pagination( $custom_query ) {
	$total_pages = $custom_query->max_num_pages;
	$big = 999999999; // need an unlikely integer
	if ($total_pages > 1){
		$current_page = max(1, get_query_var('paged'));
		echo paginate_links(array(
			'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
			'format' => '?paged=%#%',
			'current' => $current_page,
			'total' => $total_pages,
		));
	}
}