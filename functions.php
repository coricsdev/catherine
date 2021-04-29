<?php
/**
 * Function Template
 *
 * @package Catherine
 */


//Define a constant for the autoloader path
if ( ! defined( 'CATHERINE_DIR_PATH' ) ){
	define( 'CATHERINE_DIR_PATH', untrailingslashit( get_template_directory_uri() ) );
}

//include all the classes inside the autoloader.php
require_once CATHERINE_DIR_PATH . '/inc/helpers/autoloader.php';

//calling the get_instance method from the singleton
function catherine_get_theme_instance(){
	\CATHERINE_THEME\Inc\CATHERINE_THEME::get_instance();	
}

catherine_get_theme_instance();

function catherine_enqueue_scripts(){

	//Register Styles
	wp_register_style( 'style-css', get_stylesheet_uri(), [], filemtime( get_template_directory() . '/style.css'), 'all' );
	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/assets/src/library/css/bootstrap.min.css' , [], false , 'all' );
	
	//Register Scripts
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js',  [], filemtime( get_template_directory() . '/assets/main.js'), true );
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/assets/src/library/js/bootstrap.min.js' , [ 'jquery' ], false, true );
	
	//Enqueue Styles
	wp_enqueue_script( 'style-css' );
	wp_enqueue_style( 'bootstrap-css' );

	//Enqueue Scripts
	wp_enqueue_script( 'main-js' );
	wp_enqueue_script( 'bootstrap-js' );
}

add_action( 'wp_enqueue_scripts', 'catherine_enqueue_scripts' );

?>

