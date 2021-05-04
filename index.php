<?php
/**
 * Index Template
 *
 * @package catherine
 */
 get_header();
?>

<div id="primary">
	<main id="main" class="site-main mt-5" role="main">
			<?php 
			if ( have_posts() ) : ?>
				<div class="container">
						<?php 
						//check if this is the blog page and not the front page
							if ( is_home() && ! is_front_page() ) { ?>
								<header class="mb-5">
									<h1 class="page-title screen-reader-text">
										<?php single_post_title(); ?>
									</h1>
								</header>
						<?php } ?>
						
						<div class="row">
							<?php 
							$index = 0;
							$no_of_columns = 3;

							// Case: index = 0
							//Start the loop
							while ( have_posts() )  : the_post();
								if ( 0 === $index % $no_of_columns ) { ?>
									<!-- 3 columns for desktop tablet and mobile -->
									<div class="col-lg-4 col-md-6 col-sm-12">
							<?php } 

							get_template_part( 'template-parts/content' );

							$index++; // Case: index + 1	
								if ( 0 !== $index && 0 === $index % $no_of_columns ) { ?>
									</div>
							<?php }
							endwhile;
							?>
						</div>
				</div>
				<?php 
					else:  //Run if there are no posts available
						get_template_part( 'template-parts/content-none' );
			endif;
				catherine_pagination();
			?>
	</main>
</div>

<?php get_footer(); ?>
 