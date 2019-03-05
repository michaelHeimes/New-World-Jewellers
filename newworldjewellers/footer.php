<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newworldjewellers
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		
		<div id="footer-social-wrap">
			<div id="footer-social">
				<a href="https://www.facebook.com/search/top/?q=new%20world%20jewellers%20by%20justin%20bortz" target="_blank"><i class="fab fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/new_world_jewellers/" target="_blank"><i class="fab fa-instagram"></i></a>
			</div>
		</div>
		
		<nav id="footer-nav">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-2',
					'menu_id'        => 'footer-menu',
				) );
			?>
		</nav>
		
		<div id="site-info-wrap">
			<div class="site-info">
				<p>Copyright <i class="far fa-copyright"></i> 2018 New World Jewellers | Site By <a href="https://portfolio.cairndigitalmedia.com/" target="_blank">Cairn</a></p>
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
