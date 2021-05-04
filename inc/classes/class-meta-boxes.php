<?php
/**
 * Register Meta Boxes
 *
 * @package Catherine
 */

namespace CATHERINE_THEME\Inc;

use CATHERINE_THEME\Inc\Traits\Singleton;

class Meta_Boxes {
	use Singleton;

	 protected function __construct(){
 		//load other class.
 		$this->setup_hooks();
 	}

 	protected function setup_hooks() {
 		/** 
		 * Actions go here...
 		 **/

 		//Register add_meta_boxes hook
 		add_action( 'add_meta_boxes', [ $this, 'add_custom_meta_box' ] );
 		//Register save meta_boxes hook
 		add_action( 'save_post', [ $this, 'save_post_meta_data'] );
 	}
 	//Add Meta box for post
 	public function add_custom_meta_box( $post ){
		
		$screens = [ 'post' ];
		foreach ( $screens as $screen ) {
		        add_meta_box(
		            'hide_page_title',                 			// Unique ID
		            __( 'Hide page title', 'catherine' ),       // Box title
		            [ $this, 'custom_meta_box_html' ],  	    // Content callback
		            $screen,									// Post type
		            'side'                                   	// Content
		        );
		 }
 	}

 	//Add custom meta box to hide page / post title
 	public function custom_meta_box_html( $post ) {

 		$value = get_post_meta( $post->ID, '_hide_page_title', true );
    	//Create a nonce for verification
    	wp_nonce_field( plugin_basename( __FILE__ ), 'hide_title_meta_box_nonce_name' );
    	?>
	    <label for="catherine-field">
	    	<?php esc_html_e( 'Hide the page title?', 'catherine' ); ?>
	    </label>
	    <select name="catherine_hide_title_field" id="catherine-field" class="postbox">
		        <option value="">
		        	<?php esc_html_e( 'Select', 'catherine' ); ?>	        	
		        </option>
		        <option value="yes" <?php selected( $value, 'yes' ); ?>>
		        	<?php esc_html_e( 'Yes', 'catherine' ); ?>	
		        </option>
		        <option value="no" <?php selected( $value, 'no' ); ?>>
		        	<?php esc_html_e( 'No', 'catherine' ); ?>
		        </option>
	    </select>
     <?php
	}

	public function save_post_meta_data( $post_id ) {
			//When the post is saved or updated, we get $_POST available
			//Check if the current user is authorize
			if ( current_user_can( 'edit_post', $post_id ) ) {
				return;
			} 
			//Check if the nonce value we receivede is the same we created
			if ( ! isset( $_POST[ 'hide_title_meta_box_nonce_name' ] ) ||
				! wp_verify_nonce( $_POST[ 'hide_title_meta_box_nonce' ], plugin_basename( __FILE__ ) )
			) {
				return;
			}

			if ( array_key_exists( 'catherine_hide_title_field', $_POST ) ) {
	        update_post_meta(
	            $post_id,
	            '_hide_page_title',
	            $_POST['catherine_hide_title_field']
	        );
    	}
	}
}