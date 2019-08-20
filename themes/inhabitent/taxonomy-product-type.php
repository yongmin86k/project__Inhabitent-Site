<?php
/**
 * The template for displaying taxonomy pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<h1><?php single_term_title();?></h1>
				<?php echo term_description();?>
			</header><!-- .page-header -->
			
			<section class="custom-loop">
			
				<!-- Start loop for products -->
				<?php if ( have_posts() ) : ?>
					<div class="loop-type-products">		
						<?php while ( have_posts() ) : the_post(); ?>
							<div class="loop-item-container">
								<a href="<?= get_permalink(); ?>">
									<div class="product-image" style="	background : url(<?php echo get_the_post_thumbnail_url();?>);
									background-size: cover;
									background-position: center; 
									background-repeat: no-repeat;
								">
									</div>
								</a>
								<div class="product-information">
									<p class="product-name">
										<?php the_title();?>
									</p>
									<p class="seperator-dots">&nbsp;<p>
									<p class="product-price">
										<?php echo '$'.CFS() -> get( 'product_price' ); ?>
									</p>
								</div>
							</div>
						<?php endwhile; ?>
						<?php wp_reset_postdata(); ?>
					</div>
				<!-- End loop for products -->

				<?php else : ?>
					<h2>Nothing found!</h2>
				<?php endif; ?>

			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
