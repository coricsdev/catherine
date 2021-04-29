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
 		$this->set_hooks();
 	}

 	protected function set_hooks() {
 		//actions and filters will remain
 	}
}