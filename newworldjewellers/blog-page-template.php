<?php
/**
 * Template Name: Blog Page
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
		
		<?php
		  // set up or arguments for our custom query
		  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
		  $query_args = array(
		    'post_type' => 'post',
		    'posts_per_page' => 7,
		    'paged' => $paged
		  );
		  		$classes = array(
					'post-preview',
					'wow',
					'slideInUp',
				);
		  // create a new instance of WP_Query
		  $the_query = new WP_Query( $query_args );
		?>
		
		<?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); // run the loop ?>
			<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
				<div class="post-preview-title-wrap centered"><h2 class="centered"><?php the_title();?></h2></div>
				<div class="post-preview-text-wrap post-preview-half">
					<?php the_excerpt(); ?>
					<div class="centered post-preview-more-link"><a class="centered all-link" href="<?php the_permalink()?>">Read More</a></div>	
				</div>
				<div class="post-preview-img-wrap post-preview-half"><?php the_post_thumbnail();?></div>
						
			</article>
		<?php endwhile; ?>
		<?php endif;?>
		

			<nav id="archive-navigation">
			    <div id="pod-nav-previous" class="blog-nav-link wow slideInLeft">
			      <?php echo get_next_posts_link( '<i class="fa fa-angle-double-left" aria-hidden="true"></i>Older', $the_query->max_num_pages ); // display older posts link ?>
			    </div>
			    <div id="pod-nav-next" class="blog-nav-link wow slideInRight">
			      <?php echo get_previous_posts_link( '<i class="fa fa-angle-double-right" aria-hidden="true"></i>Newer' ); // display newer posts link ?>
			    </div>
			</nav>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
