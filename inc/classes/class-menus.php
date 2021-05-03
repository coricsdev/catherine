<?php
/**
 * Register Menus
 *
 * @package Catherine
 */

namespace CATHERINE_THEME\Inc;

use CATHERINE_THEME\Inc\Traits\Singleton;

class Menus {

	use Singleton;

	protected function __construct(){
 		//load other class.
 		$this->setup_hooks();
 	}

 	protected function setup_hooks() {
 		/** 
		 * Actions go here...
 		 **/
 		add_action( 'init', [ $this, 'register_menus' ] );
 	}
 	//register menu for the theme
 	public function register_menus(){
 		register_nav_menus(
 			[
	 			'catherine-header-menu' => esc_html__( 'Header Menu', 'catherine' ),
	 			'catherine-footer-menu' => esc_html__( 'Footer Menu', 'catherine' ),
 			]);
 	}

 	/**
	 * Get the menu id by menu location.
	 *
	 * @param string $location
	 *
	 * @return integer
	 */

 	public function get_menu_id ( $location ) {
 		//Get all the locations
 		$locations = get_nav_menu_locations();

 		// Get object id by location.
		$menu_id = ! empty($locations[$location]) ? $locations[$location] : '';

 		return ! empty( $menu_id ) ? $menu_id : '';
 	}

 	/**
	 * Get all child menus that has given parent menu id.
	 *
	 * @param array   $menu_array Menu array.
	 * @param integer $parent_id Parent menu id.
	 *
	 * @return array Child menu array.
	 */

 	public function get_child_menu_items( $menu_array, $parent_id ){
 		//create method for child menu
 		$child_menus = [];

 		if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {
			 
			 foreach ( $menu_array as $menu ) {
			 	//check if this is a parent id of the menu
				 	if ( intval( $menu->menu_item_parent ) === $parent_id ) {
				 		array_push( $child_menus, $menu );
				 	}
			 }

 		}

 		return $child_menus;
 	}

}