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
			</header><!-- .page-header -->

			<div class="product-texonomies">
				<ul>
					<?php 
						$list_texonomy = array(
							'taxonomy' => 'product-type',
							'hide_empty' => true,
							'order' => 'ASC',
						);
						$terms = get_terms( $list_texonomy );
					?>

					<?php foreach ( $terms as $term ): ?>
						<li>
							<a href="<?= get_term_link($term); ?>">
								<?= $term -> name; ?>
							</a>
						</li>
					<?php endforeach; ?>
					<?php wp_reset_postdata(); ?>
				</ul>
			</div>

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
			<?php if ( $products->have_posts() ) : ?>
				<?php while ( $products->have_posts() ) : $products->the_post(); ?>
					<?php 
						echo get_the_post_thumbnail();
						
						the_title();
						echo '$'.CFS() -> get( 'product_price' ); 
						echo '<br>' ;
						echo get_permalink();
						echo '<br>' ;
						
					?>		
				<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<h2>Nothing found!</h2>
			<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
