<?php
/**
 * Function Template
 *
 * @package Catherine
 */


//Define a constant for get_template_directory to be use on catherine theme
if ( ! defined( 'CATHERINE_DIR_PATH' ) ){
	define( 'CATHERINE_DIR_PATH', untrailingslashit( get_template_directory() ) );
}
//Define a constant for get_template_directory_uri to be use on catherine theme
if ( ! defined( 'CATHERINE_DIR_URI' ) ){
	define( 'CATHERINE_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

//include all the classes inside the autoloader.php
require_once CATHERINE_DIR_PATH . '/inc/helpers/autoloader.php';

//calling the get_instance method from the singleton
function catherine_get_theme_instance(){
	\CATHERINE_THEME\Inc\CATHERINE_THEME::get_instance();	
}

catherine_get_theme_instance();


function catherine_enqueue_scripts(){



}

add_action( 'wp_enqueue_scripts', 'catherine_enqueue_scripts' );

?>

