 <?php
/**
 * Template Name: Custom
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newworldjewellers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


			<div class="centered centered-intro">			
						<p class="pre-title"><?php the_field('pre-title');?></p>
						<p class="new-title"><?php the_field('title');?></p>
						<p class="post-title"><?php the_field('post-title');?></p>
								<?php the_content();?>
						<?php the_field('woocommerce_shortcode');?>
				<?php
				while ( have_posts() ) : the_post();
	
					get_template_part( 'template-parts/content', 'page' );
	
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
	
				endwhile; // End of the loop.
				?>
			</div>
			
			<div id="custom-piece-masonry" class="wrap-1400">
				<?php echo do_shortcode('[ajax_load_more id="3897027785" container_type="div" post_type="custom_piece" posts_per_page="4" transition="masonry" images_loaded="true" button_label="See More" button_loading_label="Loading..."]');?>
			</div>

			
			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
