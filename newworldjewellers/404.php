<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package newworldjewellers
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<section class="error-404 not-found wrap-1000">
				<header class="page-header">
					<h1 class="page-title">Oops! You've landed on a page that doesn't exist.</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p id="back-to-shop">You can head back to the <a href="/shop-all">SHOP,</a></p>

<!--
					<?php
						get_search_form();

						the_widget( 'WP_Widget_Recent_Posts' );
					?>
-->
<p id="head-to-prod-cats">or head straight to these product categories:</p>
<ul>
<?php

  $taxonomy     = 'product_cat';
  $orderby      = 'name';  
  $show_count   = 0;      // 1 for yes, 0 for no
  $pad_counts   = 0;      // 1 for yes, 0 for no
  $hierarchical = 1;      // 1 for yes, 0 for no  
  $title        = '';  
  $empty        = 1;

  $args = array(
         'taxonomy'     => $taxonomy,
         'orderby'      => $orderby,
         'show_count'   => $show_count,
         'pad_counts'   => $pad_counts,
         'hierarchical' => $hierarchical,
         'title_li'     => $title,
         'hide_empty'   => $empty
  );
 $all_categories = get_categories( $args );
 foreach ($all_categories as $cat) {
    if($cat->category_parent == 0) {
        $category_id = $cat->term_id;       
        echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';


    }       
}
?>
</ul>

<p id="error-contact">And of course you can <a href="/contact">contact</a> us if you need any assistance!</p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
