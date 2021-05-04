<?php
/**
 * Single Post Template
 *
 * @package catherine
 */
 get_header();
?>

<div id="primary">
	<main id="main" class="site-main mt-5" role="main">
		<div class="container">
			<div class="row">
				<!-- Single Post Content -->
				<div class="col-lg-8 col-md-8 col-sm=12">
					<?php 
						if ( have_posts() ) : ?>
							<div class="post-wrap">
									<?php 
									//check if this is the blog page and not the front page
										if ( is_home() && ! is_front_page() ) { ?>
											<header class="mb-5">
												<h1 class="page-title screen-reader-text">
													<?php single_post_title(); ?>
												</h1>
											</header>
									<?php } 
										while ( have_posts() )  : the_post();
											get_template_part( 'template-parts/content' );
										endwhile;
										?>
							</div>
						<!-- Pagination Section -->
						<div class="prev-link"><?php previous_post_link(); ?></div>
						<div class="next-link"><?php next_post_link();  ?></div>
						<?php 
						//Run if there are no posts available
							else: 

								get_template_part( 'template-parts/content-none' );

						endif;
						?>				
				</div>
				<!-- Side Bar Content -->
				<div class="col-lg-4 col-md-4 col-sm-12">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>


	</main>
</div>

<?php get_footer(); ?>
 