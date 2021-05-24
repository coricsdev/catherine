<?php
/**
 * Theme Functions.
 *
 * @package CATHERINE
 */


if ( ! defined( 'CATHERINE_DIR_PATH' ) ) {
	define( 'CATHERINE_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'CATHERINE_DIR_URI' ) ) {
	define( 'CATHERINE_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

if ( ! defined( 'CATHERINE_BUILD_URI' ) ) {
	define( 'CATHERINE_BUILD_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build' );
}

if ( ! defined( 'CATHERINE_BUILD_PATH' ) ) {
	define( 'CATHERINE_BUILD_PATH', untrailingslashit( get_template_directory() ) . '/assets/build' );
}

if ( ! defined( 'CATHERINE_BUILD_JS_URI' ) ) {
	define( 'CATHERINE_BUILD_JS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/js' );
}

if ( ! defined( 'CATHERINE_BUILD_JS_DIR_PATH' ) ) {
	define( 'CATHERINE_BUILD_JS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/js' );
}

if ( ! defined( 'CATHERINE_BUILD_IMG_URI' ) ) {
	define( 'CATHERINE_BUILD_IMG_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/src/img' );
}

if ( ! defined( 'CATHERINE_BUILD_CSS_URI' ) ) {
	define( 'CATHERINE_BUILD_CSS_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/css' );
}

if ( ! defined( 'CATHERINE_BUILD_CSS_DIR_PATH' ) ) {
	define( 'CATHERINE_BUILD_CSS_DIR_PATH', untrailingslashit( get_template_directory() ) . '/assets/build/css' );
}

if ( ! defined( 'CATHERINE_BUILD_LIB_URI' ) ) {
	define( 'CATHERINE_BUILD_LIB_URI', untrailingslashit( get_template_directory_uri() ) . '/assets/build/library' );
}

require_once CATHERINE_DIR_PATH . '/inc/helpers/autoloader.php';
require_once CATHERINE_DIR_PATH . '/inc/helpers/template-tags.php';

function CATHERINE_get_theme_instance() {
	\CATHERINE_THEME\Inc\CATHERINE_THEME::get_instance();
}

CATHERINE_get_theme_instance();
