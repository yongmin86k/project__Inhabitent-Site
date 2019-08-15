<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

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
				<?php get_template_part( 'template-parts/content' ); ?>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>

		<!-- Start loop for shop stuff -->
		<h2 class="post-title">Shop Stuff</h2>
		<?php 
			$list_texonomy = array(
				'taxonomy' => 'product-type',
				'hide_empty' => true,
			);
			$terms = get_terms( $list_texonomy );
			
			foreach ( $terms as $term ){
				$icon = get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg';
				
				var_dump( file_exists( get_template_directory() . '/images/product-type-icons/' . $term->slug . '.svg' ) );
                // var_dump( $icon );
                  
                echo '<img src="' . $icon . '" />';
				echo $term->name;
				echo '<br>';
				echo $term->description;
				
				echo '<br>';
			}
		?>
		<!-- End loop for shop stuff -->

		<!-- Start loop for journals -->
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

		<div class="post-container">			
			<?php foreach ( $journals as $journal ) : 
				setup_postdata( $journal );
				$post_item_date = $journal -> post_date;
				$post_item_comment = $journal -> comment_count;
				$post_item_title = $journal -> post_title;
				$post_item_uri = $journal -> guid;
			?>

			  	<div class="post-items">
					<div class="post-item-image">
						<?= get_the_post_thumbnail($journal -> ID);?>	
					</div>
					<div class="post_item_meta">
						<?= $post_item_date ?> / <?= $post_item_comment ?>
					</div>
					<div class="post-item-title">
						<a href="<?= $post_item_uri ?>">
							<?= $post_item_title ?>
						</a>
					</div>
					<a href="<?= $post_item_uri ?>">
						<button class="post-item-button">Read entry</button>
					</a>
				</div>

			<?php endforeach; ?> 
			<?php wp_reset_postdata(); ?>
		</div>
		<!-- End loop for journals -->

		<!-- Start loop for adventures -->
		<?php
			$list_adventures = array(
				'post_type' => 'adventure',
				'post_per_page' => 4,
				'order' => 'ASC',
			);
			$adventures = get_posts($list_adventures);
		?>
		
		<h2 class="post-title">Latest Adventures</h2>
		<div class="post-container-type-grid">	
			<?php foreach($adventures as $adv):
				setup_postdata( $adv );
				$post_item_title = $adv -> post_title;
				$post_item_uri = $adv -> guid;
			?>
				
				<div class="post-items">
					<?= get_the_post_thumbnail($adv -> ID);?>	
				</div>
				<div class="post-title">
					<a href="<?= $post_item_uri?>">
						<h2><?=$post_item_title?></h2>
					</a>
					<a href="<?= $post_item_uri?>">
						<button>Read more</button>
					</a>
				</div>
			<?php endforeach ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<!-- End loop for adventures -->
		<a href="<?php echo get_post_type_archive_link( 'adventure' ); ?>">
			<button>More adventures</button>
		</a>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
