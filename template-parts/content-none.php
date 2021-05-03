<?php
/**
 * Displaying a Message if there's an empty post 
 *
 * @package catherine
 */
?>

<section class="no-result not-found">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'No Post Found', 'catherine' ); ?></h1>
	</header>

	<div class="page-content">
		<?php 
			if ( is_home() && current_user_can( 'publish_posts' ) ) { ?>
				<p>
					<?php printf(
							wp_kses( 
								 __( 'Ready to publish your first post? <a href="%s">Get Started here</a>', 'catherine' ),
								 [
								 	'a' => [

								 			'href' => []
								 	]
								 ]
							),
							esc_url( admin_url( 'post-new.php' ) )
					) ?>
				</p> 
		 	<?php } elseif ( is_search() ) { ?>
		 		<p><?php esc_html_e( 'Sorry but nothing matched your search item. Please try again with some different keywords', 'catherine' ); ?></p>
			 		<?php get_search_form(); 
			 		} else { ?>
		 				<p>
		 					<?php esc_html_e( 'We cannot find what you are looking for. Perhaps search can help.', 'catherine' ); ?>
		 				</p>
				 		<?php  get_search_form();		
					  } ?>
	</div>
</section>