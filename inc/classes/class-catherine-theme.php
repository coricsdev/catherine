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

 	protected function __construct(){
 		
 		//load other class.

 		Assets::get_instance();

 		$this->setup_hooks();
 	}

 	protected function setup_hooks() {
 		/** 
		 * Actions go here...
 		 **/
 	}

}