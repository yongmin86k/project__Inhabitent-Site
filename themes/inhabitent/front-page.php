<?php
/**
 * The main template file.
 *
 * @package Inhabitent_Theme
 * Template Name: Font-page
 */

get_header('front-page'); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>
			
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<!-- Featured image as the background image with the logo -->
						<?php if ( has_post_thumbnail() ) : ?>
							<div class="hero-image-front-page" style="					
								background :
									linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), 
									url(<?php echo get_the_post_thumbnail_url();?>);
								background-size: cover;
								background-position: center; 
								background-attachment: fixed;
								background-repeat: no-repeat;
							">
								<img src="<?php echo get_template_directory_uri().'/images/logos/inhabitent-logo-full.svg' ?>" alt="site-logo">
							</div>
						<?php endif; ?>

						<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta">
							<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
						</div><!-- .entry-meta -->
						<?php endif; ?>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_excerpt();  ?>
					</div><!-- .entry-content -->
				</article><!-- #post-## -->

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		<!-- Start loop for shop stuff -->
		<section class="custom-loop">
			<h2 class="post-title">Shop Stuff</h2>
			<div class="loop-type-product-type">
				<?php 
					$list_texonomy = array(
						'taxonomy' => 'product-type',
						'hide_empty' => true,
					);
					$terms = get_terms( $list_texonomy );
				?>
				<?php foreach ( $terms as $term ) : 
						$icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';
						$p_type_name = $term->name;
						$p_type_description = $term->description;
						$p_type_url = get_term_link($term);
				?>
				<div class="loop-item-container">
					<img class="product-type-icon" src="<?=$icon?>" alt="<?=$p_type_name;?>"/>
					<p class="product-type-description"><?=$p_type_description;?></p>
					<a href="<?=$p_type_url?>">
						<button class="product-type-btn"><?=$p_type_name?> Stuff</button>
					</a>
				</div>
				<?php endforeach ?>
			</div>
		</section>
		<!-- End loop for shop stuff -->

		<!-- Start loop for journals -->
		<section class="custom-loop">
			<?php 
				$list_journals = array(
					'post_type' => 'post',
					'orderby' => array(
						'date' => 'DESC',
					),
					'posts_per_page' => 3,
				);
				$journals = get_posts($list_journals);
			?>
			
			<h2 class="post-title">Inhabitent Journal</h2>

			<div class="loop-type-journals">			
				<?php foreach ( $journals as $journal ) : 
					setup_postdata( $journal );
					$post_item_date = strtotime( substr($journal -> post_date, 0, 10) );
					$post_item_comment = $journal -> comment_count;
					$post_item_title = $journal -> post_title;
					$post_item_uri = $journal -> guid;
				?>

					<div class="loop-item-container">
						<div class="journal-type-image">
							<?= get_the_post_thumbnail($journal -> ID);?>	
						</div>
						<div class="journal-content">
							<p class="journal-type-meta">
								<?= Date('j F Y', $post_item_date) ?> / <?= $post_item_comment ?> Comments
							</p>
							<h3 class="journal-type-title">
								<a href="<?= $post_item_uri ?>">
									<?= $post_item_title ?>
								</a>
							</h3>
							<a href="<?= $post_item_uri ?>">
								<button class="journal-type-button">Read entry</button>
							</a>
						</div>
					</div>

				<?php endforeach; ?> 
				<?php wp_reset_postdata(); ?>
			</div>
		</section>
		<!-- End loop for journals -->

		<!-- Start loop for adventures -->
		<section class="custom-loop">
			<?php
				$list_adventures = array(
					'post_type' => 'adventure',
					'post_per_page' => 4,
					'order' => 'ASC',
				);
				$adventures = get_posts($list_adventures);
			?>
			
			<h2 class="post-title">Latest Adventures</h2>
			<div class="loop-type-adventures">	
				<?php foreach($adventures as $adv):
					setup_postdata( $adv );
					$post_item_title = $adv -> post_title;
					$post_item_uri = $adv -> guid;
				?>
					<div class="loop-item-container">
						<div class="adventure-type-image" style="
								background :
									linear-gradient( to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100% ), 
									url(<?php echo get_the_post_thumbnail_url($adv -> ID);?>);
								background-size: cover;
								background-position: center; 
								background-repeat: no-repeat;
							">
						</div>
						<div class="adventure-type-title">
							<a href="<?= $post_item_uri?>">
								<h3><?=$post_item_title?></h3>
							</a>
							<a href="<?= $post_item_uri?>">
								<button type="button">Read more</button>
							</a>
						</div>
					</div>
				<?php endforeach ?>
				<?php wp_reset_postdata(); ?>
			</div>
			<!-- End loop for adventures -->
			<a href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">
				<button class="button-adventures" type="button">More adventures</button>
			</a>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
