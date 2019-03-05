<?php
/**
 * Template Name: Contact
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

	<div id="primary" class="content-area wrap-1400">
		<main id="main" class="site-main">
			
			<div class="centered centered-intro">
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
			
			<div id="contact-page-add-phone-wrap">
				<a href="<?php the_field('google_maps_link');?>
" target="_blank"><?php the_field('address');?></a>
				<a href="tel:<?php the_field('phone_number');?>"><?php the_field('phone_number');?></a>
			</div>
			
			<?php echo do_shortcode('[contact-form-7 id="264" title="Contact Page"]');?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
