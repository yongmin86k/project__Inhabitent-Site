<?php
/**
 * The template for displaying all single posts.
 *
 * @package Inhabitent_Theme
 */

get_header('adventure'); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">

				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

				<div class="entry-meta">
					<?php red_starter_posted_by(); ?>
				</div><!-- .entry-meta -->
			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				<?php red_starter_entry_footer(); ?>
			</footer><!-- .entry-footer -->
			<div class="wrap-buttons">
				<?php get_template_part( 'template-parts/content', 'buttons' ); ?>
			</div>
		</article><!-- #post-## -->

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
