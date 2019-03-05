 <?php
/**
 * Template Name: Shop
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
		

			<div id="collections-wrap">			
				<?php if( have_rows('collections') ):?>
					<?php while ( have_rows('collections') ) : the_row();?>
						<?php
						$post_object = get_sub_field('single_collection');
						if( $post_object ): 
						$post = $post_object;
						setup_postdata( $post ); 
						?>
						<?php endif;?>	
							<section class="single_collection">
								<div class="single_collection-inner wrap-1400">
									<p class="pre-title"><?php the_field('pre-title');?></p>
									<p class="new-title"><?php the_field('title');?></p>
									<p class="post-title"><?php the_field('post-title');?></p>
									<div class="collection_intro wrap-1000">
										<?php the_content();?>
									</div>
									<?php the_field('woocommerce_shortcode');?>
								</div>
							</section>
					<?php endwhile;?>
				<?php endif;?>	
			</div>	

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();


