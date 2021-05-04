<?php
/**
 * Register the theme sidebars
 *
 * @package Catherine
 */

namespace CATHERINE_THEME\Inc;

use CATHERINE_THEME\Inc\Traits\Singleton;

class Sidebars {
	use Singleton;

	 protected function __construct(){
 		//load other class.
 		$this->setup_hooks();
 	}

 	protected function setup_hooks() {
 		/** 
		 * Actions go here...
 		 **/
 		add_action( 'widgets_init', [ $this, 'register_sidebars'] );

 	}

 	public function register_sidebars() {
 		//Sidebar 1
 		register_sidebar( [
	        'name'          => __( 'Sidebar', 'catherine' ),
	        'id'            => 'sidebar-1',
	        'description'   => __( 'Main Sidebar', 'catherine' ),
	        'before_widget' => '<div id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h3 class="widget-title">',
	        'after_title'   => '</h3>',
   	 	] );
 		//Sidebar 2
   	 	register_sidebar( [
	        'name'          => __( 'Footer ', 'catherine' ),
	        'id'            => 'sidebar-2',
	        'description'   => __( 'Footer Sidebar', 'catherine' ),
	        'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
	        'after_widget'  => '</div>',
	        'before_title'  => '<h3 class="widget-title">',
	        'after_title'   => '</h3>',
   	 	] );
 	}
}