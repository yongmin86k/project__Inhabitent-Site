<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<header class="page-header">
				<h1>Shop Stuff</h1>
				<div class="list-product-texonomies">
					<ul>
						<!-- Start loop for product type -->
						<?php 
							$list_texonomy = array(
								'taxonomy' => 'product-type',
								'hide_empty' => true,
								'order' => 'ASC',
							);
							$terms = get_terms( $list_texonomy );
						?>

						<?php foreach ( $terms as $term ): ?>
							<li class="list-product">
								<a href="<?= get_term_link($term); ?>">
									<?= $term -> name; ?>
								</a>
							</li>
						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>
						<!-- End loop for product type -->
					</ul>
				</div>
			</header><!-- .page-header -->

			<section class="custom-loop">
				<?php
					$list_products = array( 
						'post_type' => 'product', 
						'orderby' => array(
							'title' => 'ASC',
						),
						'posts_per_page' => -1,
					);
					$products = new WP_Query( $list_products );
				?>
				
				<!-- Start loop for products -->
				<?php if ( $products->have_posts() ) : ?>
					<div class="loop-type-products">		
						<?php while ( $products->have_posts() ) : $products->the_post(); ?>

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
