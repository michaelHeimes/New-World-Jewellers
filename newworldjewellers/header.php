<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package newworldjewellers
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
<script>
  FontAwesomeConfig = { searchPseudoElements: true };
</script>
<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'newworldjewellers' ); ?></a>
	


	<header id="masthead" class="site-header">
		
		<?php if( !is_404() && !is_account_page() && !is_woocommerce() && !is_cart() && !is_checkout() && !is_page_template('shop-page-template.php') && !is_page_template('blog-page-template.php') && !is_page_template('contact-page-template.php') && !is_page_template('guide-page-template.php') && !is_single() ):?>

				<?php
					$imgID1 = get_field('header_background_image');
					$imgSize1 = "header-bg"; // (thumbnail, medium, large, full or custom size)
					$imgArr1 = wp_get_attachment_image_src( $imgID1, $imgSize1 );
					// url = $image[0];
					// width = $image[1];
					// height = $image[2];
				?>

				<?php
					$imgID2 = get_field('header_background_image');
					$imgSize2 = "header-bg-2x"; // (thumbnail, medium, large, full or custom size)
					$imgArr2 = wp_get_attachment_image_src( $imgID2, $imgSize2 );
					// url = $image[0];
					// width = $image[1];
					// height = $image[2];
				?>
				
				<div class="header_bg header_bg_low_res" style="background-image: url(<?php echo $imgArr1[0]; ?> );background-repeat: no-repeat;background-position: center center; background-size:cover;"></div>				
				
				<div class="header_bg header_bg_high_res" style="background-image: url(<?php echo $imgArr2[0]; ?> );background-repeat: no-repeat;background-position: center center; background-size:cover;"></div>





		<?php endif;?>
		
		
		<div class="site-branding">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<?php else : ?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<div class="main-nav-inner">
				<div id="main-nav-left">
					<a id="header-logo-link" href="<?php echo get_site_url();?>"><img id="header_logo" src="<?php the_field('header_logo', 'option');?>"/></a>
					<a href="https://www.facebook.com/search/top/?q=new%20world%20jewellers%20by%20justin%20bortz" target="_blank"><i class="fab fa-facebook-f"></i></a>
					<a href="https://www.instagram.com/new_world_jewellers/" target="_blank"><i class="fab fa-instagram"></i></a>
				</div>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
				?>
			</div>
<button id="mmenu-button"><a href="#mmenu">
	<i class="fa fa-bars"></i>
</a></button>
		</nav><!-- #site-navigation -->
		
		<?php if(is_woocommerce() && !is_product()):?>
		    <h1 class="woocommerce-products-header__title page-title">
		      <?php woocommerce_page_title(); ?>
		    </h1>
		<?php endif;?>
		
		<?php
		if ( is_singular() && !is_woocommerce()  ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		elseif (!is_archive() && !is_woocommerce()) :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
		?>
    
   	</header><!-- #masthead -->

	<div id="content" class="site-content">
