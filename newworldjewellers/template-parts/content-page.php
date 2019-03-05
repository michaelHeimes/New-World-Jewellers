<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package newworldjewellers
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if(is_page_template('collections-page-template.php')):?>
		<p class="pre-title">Our</p>
		<?php endif;?>
		
		<?php if(!is_page_template('blog-page-template.php') && !is_page_template('contact-page-template.php') && !is_page_template('guide-page-template.php') && !is_cart() && !is_checkout()):?>
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php endif;?>
	</header><!-- .entry-header -->

<!-- 	<?php newworldjewellers_post_thumbnail(); ?> -->
	
	<div class="entry-content">
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'newworldjewellers' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Edit <span class="screen-reader-text">%s</span>', 'newworldjewellers' ),
							array(
								'span' => array(
									'class' => array(),
								),
							)
						),
						get_the_title()
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
