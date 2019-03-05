 <?php
/**
 * Template Name: Single Collection
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
				<?php
				while ( have_posts() ) : the_post();
	
					get_template_part( 'template-parts/content', 'page' );
	
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
	
				endwhile; // End of the loop.
				?>			</div>
			<div id="single-collection-wrap" class="wrap-1400">
				<?php the_field('woocommerce_shortcode');?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


