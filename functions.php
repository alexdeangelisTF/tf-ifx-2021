<?php
// Register Menus
function register_menus() {
	register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_menus' );


// Enqueue CSS & JS
function your_scripts() {
	/*Google Fonts*/
	wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700' );
	/*Bootstrap 4*/
	wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
	/*Font Awesome*/
	wp_enqueue_style( 'font-awesome', 'https://use.fontawesome.com/releases/v5.4.1/css/all.css' );
	/*My Styles*/
	wp_enqueue_style( 'styles', get_stylesheet_uri(), array(), '1.0.0' );
	/*Bootstrap JS*/
	wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), null, true);
	/*Bootstrap Popper JS*/
	wp_enqueue_script('bootstrap-popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', array('jquery'), null, true);
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