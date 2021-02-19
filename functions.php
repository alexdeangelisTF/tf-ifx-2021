<?php
// Register Menus
function register_menus() {
	register_nav_menu('main-menu',__( 'Main Menu' ));
	register_nav_menu('main-menu-right',__( 'Main Menu - Right' ));
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
	/*Basic Styles*/
	wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), '1.0.0' );
	/*IFX 2021 Styles*/
	wp_enqueue_style( 'ifx-2021-styles', get_stylesheet_directory_uri() . '/css/ifx-2021.css', array(), '1.0.0' );
	/*Bootstrap JS*/
	wp_enqueue_script('bootstrap-js-bundle', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);
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