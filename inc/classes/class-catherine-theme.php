<?php
/**
 * Bootstraps the Theme
 *
 * @package Catherine
 */
namespace CATHERINE_THEME\Inc;

use CATHERINE_THEME\Inc\Traits\Singleton;

class CATHERINE_THEME{
 	use Singleton;	

 	protected function __construct() {
 		
 		//Load other class.

 		Assets::get_instance();
 		Menus::get_instance();
 		
 		$this->setup_hooks();
 	}

 	protected function setup_hooks() {
 		/** 
		 * Actions go here...
 		 **/

 		//Add Theme Support 
 		add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );
 	}

 	public function setup_theme() {

 		//Add Title Tag support 
 		add_theme_support( 'title-tag' );
 		//Add Custom logos support
 		add_theme_support( 'custom-logo', [
 			'header-text'  => [ 'site-title', 'site-description' ],
 			'height'       => 100,
 			'width'  	   => 400,
 			'flex-height'  => true,
 			'flex-width'   => true,
 		] );
 		//Add Custom Background support
 		add_theme_support( 'custom-background', [
 			'default-color'  => '#fff',
 			'default-image'  => '',
 			'default-repeat' => 'no-repeat',
 		] );
 		//Add a Featured image in post
 		add_theme_support( 'post-thumbnails' );
 		//Register Image size
 		add_image_size( 'featured-thumbnail', 350, 233, true );
 		//Add selective refresh support for widgets and add an ability of not having to refresh the entire preview window
 		add_theme_support( 'customize-selective-refresh-widgets' );
 		//Add rss feed links to the head
 		add_theme_support( 'automatic-feed-links' );
 		//Add html5 markup to output valid html5
 		add_theme_support(
 			'html5',
 			[
 				'search-form',
 				'comment-form',
 				'comment-list',
 				'gallery',
 				'caption',
 				'script',
 				'style',
 			]
 		);
 		// Add a custom stylesheet file for editor i.e editor-file.css
 		add_editor_style(); 
 		// Add support for WP Block Style (Gutenberg)
 		add_theme_support( 'wp-block-styles' );
 		// Add image block to define if it is wide or full alignment by adding it to the wrapper i.e alight left, right, full width etc
 		add_theme_support( 'align-wide' );
 		//Set maximum allowed width to any content
 		global $content_width;
 		if ( ! isset( $content_width ) ) {
 			$content_width = 1240;
 		}

 	}
}