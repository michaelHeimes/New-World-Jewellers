<?php
/**
 * Template Name: About
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
						<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			
			<div id="business-intro-wrap">
				<div id="biw-l" class="biw"></div>
				<div id="biw-r" class="biw"></div>
				<div id="biw-l2" class="biw"></div>
				<div id="biw-r2" class="biw"></div>
				<div id="business-intro" class="centered centered-intro">
					<div id="intro-wedge"></div>

						<p class="pre-title">About</p>
						<h2 class="home-title-w-pre">New Word Jewelers</h2>
						<div><?php the_field('business_intro_copy');?></div>
						<div class="square">
							<div class="square-line square-line-tl"></div>
							<div class="square-line square-line-tr"></div>
							<div class="square-line square-line-bl"></div>
							<div class="square-line square-line-br"></div>
						</div>		
				</div>
			</div>
			
			<div id="home-our-collections-intro-wrap">
				<div id="home-our-collections-wrap-intro" class="centered">
							<p class="pre-title">Our</p>
							<h2 class="home-title-w-pre">Location</h2>
							<div class="wrap-1000"><?php the_field('our_collections_copy');?></div>		
				</div>
				<div class="wrap-1400">
					<div id="location-gallery-wrap">
						<div class="address_hours">
							<div id="address_hours-inner">
								<div id="contact-address"><?php the_field('address');?></div>
								<div><?php the_field('hours');?></div>
							</div>
						</div>
						<div id="shop-gallery-wrap">
							<?php the_field('shop_gallery');?>
						</div>
					</div>
				</div>
			</div>			
			
			<?php if( have_rows('collections') ):?>
			<div id="home-collections-wrap">
				<?php while ( have_rows('collections') ) : the_row();?>
				
				<?php if( get_row_index() % 2 == 0 ):?>
				
					<?php if( have_rows('single_collection') ):?>
						<?php while ( have_rows('single_collection') ) : the_row();?>
						
							   
						   <div class="home-single-collection">
						   		<?php
									$imgID = get_sub_field('collection_image_high_res');
									$imgSize = "collections_image"; // (thumbnail, medium, large, full or custom size)
									$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID) ): ?>
									<div class="hsc-img-wrap hsc-img-low-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
								<?php endif; ?>
								
							   <?php
									$imgID2 = get_sub_field('collection_image_high_res');
									$imgSize2 = "collections_image-2x"; // (thumbnail, medium, large, full or custom size)
									$imgArr2 = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID2) ): ?>
									<div class="hsc-img-wrap hsc-img-high-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr2[0]; ?> );"></div>
								<?php endif; ?>
							   <div class="hsc-card">
								    <div class="hsc-card-inner hsc-card-inner-right">
									   <h3><?php the_sub_field('name');?></h3>
									   <div class="hsc-card-copy"><?php the_sub_field('copy');?></div>
									   <div class="hsc-img-low-res mobile-hsc-img">
											<?php 
											$image3 = get_sub_field('collection_image_high_res');
											$size3 = 'collections_image';
											if( $image3 ) {
											echo wp_get_attachment_image( $image3, $size3 );
											}
											?>
									   </div>									   
									   <div class="hsc-img-high-res mobile-hsc-img">
											<?php 
											$image4 = get_sub_field('collection_image_high_res');
											$size4 = 'collections_image-2x';
											if( $image4 ) {
											echo wp_get_attachment_image( $image4, $size4 );
											}
											?>
									   </div>
								    </div>
							   </div>
						   </div>	   
						<?php endwhile;?>
					<?php endif;?>	
										        
				<?php else:?>
					<?php if( have_rows('single_collection') ):?>
						<?php while ( have_rows('single_collection') ) : the_row();?>
						   <div class="home-single-collection">
						
							   <div class="hsc-card">
								    <div class="hsc-card-inner hsc-card-inner-left">
									   <h3><?php the_sub_field('name');?></h3>
									   <div class="hsc-card-copy"><?php the_sub_field('copy');?></div>
									   	<div class="hsc-img-low-res mobile-hsc-img">
											<?php 
											$image3 = get_sub_field('collection_image_high_res');
											$size3 = 'collections_image';
											if( $image3 ) {
											echo wp_get_attachment_image( $image3, $size3 );
											}
											?>
									   </div>									   
									   <div class="hsc-img-high-res mobile-hsc-img">
											<?php 
											$image4 = get_sub_field('collection_image_high_res');
											$size4 = 'collections_image-2x';
											if( $image4 ) {
											echo wp_get_attachment_image( $image4, $size4 );
											}
											?>
									   </div>
								    </div>
							   </div>
						   		<?php
									$imgID = get_sub_field('collection_image_high_res');
									$imgSize = "collections_image"; // (thumbnail, medium, large, full or custom size)
									$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID) ): ?>
									<div class="hsc-img-wrap hsc-img-low-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
								<?php endif; ?>
								
							   <?php
									$imgID2 = get_sub_field('collection_image_high_res');
									$imgSize2 = "collections_image-2x"; // (thumbnail, medium, large, full or custom size)
									$imgArr2 = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID2) ): ?>
									<div class="hsc-img-wrap hsc-img-high-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr2[0]; ?> );"></div>
								<?php endif; ?>
						   </div>					        
						<?php endwhile;?>
					<?php endif;?>	
				<?php endif;?>					
				<?php endwhile;?>
			</div>
			<?php endif;?>
			
<?php if( have_rows('info_cards') ):?>
	<div id="info_cards_wrap" class="wrap-1400 centered">
		<?php while ( have_rows('info_cards') ) : the_row();?>	
			<?php if( have_rows('single_info_card') ):?>
				<?php while ( have_rows('single_info_card') ) : the_row();?>	
				<div class="single_info_card">
					<h3><?php the_sub_field('card_title');?></h3>
					<?php the_sub_field('card_copy');?>
				</div>
				<?php endwhile;?>
			<?php endif;?>				
		<?php endwhile;?>
	</div>
<?php endif;?>			



			

			
			
		<div class="all-link-wrap">
			<a class="all-link" href="/collections">Shop Collections</a>
		</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
