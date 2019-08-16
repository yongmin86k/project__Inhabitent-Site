<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 * Template Name: Full-width
 */

get_header('full-width'); ?>
	<?php if ( have_posts() && has_post_thumbnail() ): ?>
		<div class="full-width-image" style="
			width: 100vw; height: 100vh;
			background :
				linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), 
				url(<?php echo get_the_post_thumbnail_url();?>);
			background-size: cover;
			background-position: center; 
			background-attachment: fixed;
			background-repeat: no-repeat;
		">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</div>
	<?php endif ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="entry-content">
					<?php the_content(); ?>
					<?php
						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
