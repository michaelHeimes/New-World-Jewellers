 <?php
/**
 * Template Name: Collections
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
		


<!--
			<div id="collections-wrap">
				<?php if( have_rows('collections') ):?>
					<?php while ( have_rows('collections') ) : the_row();?>
						<?php if( have_rows('single_collection') ):?>
							<?php while ( have_rows('single_collection') ) : the_row();?>
								<section class="single_collection">
									<div class="single_collection-inner wrap-1400">
										<p class="pre-title">The</p>
										<h2><?php the_sub_field('collection_name');?></h2>
										<p class="post-title">Series</p>
										<div class="collection_intro wrap-1000"><?php the_sub_field('collection_intro');?></div>
										<?php the_sub_field('woocommerce_shortcode');?>
									</div>
								</section>
							
							
							<?php endwhile;?>
						<?php endif;?>						
					<?php endwhile;?>
				<?php endif;?>	
			</div>	
-->
			
			<div id="home-our-collections-intro-wrap">
				<div id="our-collections"></div>
				<div id="home-our-collections-wrap-intro" class="centered">
							<p class="pre-title">Our</p>
							<h2 class="home-title-w-pre">Collections</h2>
							<div class="wrap-1000"><?php the_field('our_collections_copy');?></div>		
				</div>
			</div>			
			
			
			
			<?php

			$args = array(
			    'post_type'      => 'page',
			    'posts_per_page' => -1,
			    'order'          => 'ASC',
			    'orderby'        => 'menu_order',
			    'post_parent__in' => array( 33 ),
			    'meta_query' => array(
		            array(
		                'key' => '_wp_page_template',
		                'value' => 'single-collection-page-template.php',
		            )
		        )
			 );
			
			$collectionQuery = new WP_Query( $args );
			
			if ( $collectionQuery->have_posts() ) : ?>
			
			    <?php while ( $collectionQuery->have_posts() ) : $collectionQuery->the_post(); $counter++?>
				    
				    <?php if ($counter % 2 == 0):?>
			
						   <div class="home-single-collection" id="colelction-page-id-<?php echo $post->ID;?>">

						   		<?php
									$imgID = get_field('collection_image_high_res', $post->ID);
									$imgSize = "collections_image"; // (thumbnail, medium, large, full or custom size)
									$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID) ): ?>
									<div class="hsc-img-wrap hsc-img-low-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
								<?php endif; ?>
								
							   <?php
									$imgID2 = get_field('collection_image_high_res', $post->ID);
									$imgSize2 = "collections_image-2x"; // (thumbnail, medium, large, full or custom size)
									$imgArr2 = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID2) ): ?>
									<div class="hsc-img-wrap hsc-img-high-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr2[0]; ?> );"></div>
								<?php endif; ?>
							   	
							   	
							   	
							   <div class="hsc-card">
								    <div class="hsc-card-inner hsc-card-inner-right">
									    <p class="pre-title"><?php the_field('pre_name', $post->ID);?></p>
									   <h3><?php the_field('name', $post->ID);?></h3>
									   <p class="post-title"><?php the_field('post_name', $post->ID);?></p>
									   <div class="hsc-card-copy"><?php the_field('copy', $post->ID);?></div>
									   <div class="hsc-img-low-res mobile-hsc-img">
											<?php 
											$image3 = get_field('collection_image_high_res', $post->ID);
											$size3 = 'collections_image';
											if( $image3 ) {
											echo wp_get_attachment_image( $image3, $size3 );
											}
											?>
									   </div>									   
									   <div class="hsc-img-high-res mobile-hsc-img">
											<?php 
											$image4 = get_field('collection_image_high_res', $post->ID);
											$size4 = 'collections_image-2x';
											if( $image4 ) {
											echo wp_get_attachment_image( $image4, $size4 );
											}
											?>
									   </div>
									   
									   <a href="<?php echo get_permalink($post->ID)?>">Shop This Collection</a>
								    </div>
							   </div>
						   </div>	
						   
						   
					<?php else:?>

						   <div class="home-single-collection" id="colelction-page-id-<?php echo $post->ID;?>">
						
							   <div class="hsc-card">
								    <div class="hsc-card-inner hsc-card-inner-left">
									    <p class="pre-title"><?php the_field('pre_name', $post->ID);?></p>
									   <h3><?php the_field('name', $post->ID);?></h3>
									   <p class="post-title"><?php the_field('post_name', $post->ID);?></p>
									   <div class="hsc-card-copy"><?php the_field('copy', $post->ID);?></div>
									   <div class="hsc-img-high-res mobile-hsc-img">
											<?php 
											$image3 = get_field('collection_image_high_res', $post->ID);
											$size3 = 'collections_image';
											if( $image3 ) {
											echo wp_get_attachment_image( $image3, $size3 );
											}
											?>
									   </div>									   
									   <div class="hsc-img-high-res mobile-hsc-img">
											<?php 
											$image4 = get_field('collection_image_high_res', $post->ID);
											$size4 = 'collections_image-2x';
											if( $image4 ) {
											echo wp_get_attachment_image( $image4, $size4 );
											}
											?>
									   </div>
									   <a href="<?php echo get_permalink($post->ID)?>">Shop This Collection</a>
								    </div>
							   </div>
						   		<?php
									$imgID = get_field('collection_image_high_res', $post->ID);
									$imgSize = "collections_image";
									$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID) ): ?>
									<div class="hsc-img-wrap hsc-img-low-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
								<?php endif; ?>
								
							   <?php
									$imgID2 = get_field('collection_image_high_res', $post->ID);
									$imgSize2 = "collections_image-2x";
									$imgArr2 = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID2) ): ?>
									<div class="hsc-img-wrap hsc-img-high-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr2[0]; ?> );"></div>
								<?php endif; ?>
						   </div>
						   				        
					<?php endif;?>	

			    <?php endwhile; ?>
			
			<?php endif; wp_reset_postdata(); ?>
			
			
			
			
			
			
<!--
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
									    <p class="pre-title"><?php the_sub_field('pre_name');?></p>
									   <h3><?php the_sub_field('name');?></h3>
									   <p class="post-title"><?php the_sub_field('post_name');?></p>
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
									   
									   <a href="<?php the_sub_field('link_to_collection');?>">Shop This Collection</a>
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
									    <p class="pre-title"><?php the_sub_field('pre_name');?></p>
									   <h3><?php the_sub_field('name');?></h3>
									   <p class="post-title"><?php the_sub_field('post_name');?></p>
									   <div class="hsc-card-copy"><?php the_sub_field('copy');?></div>
									   <div class="hsc-img-high-res mobile-hsc-img">
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
									   <a href="<?php the_sub_field('link_to_collection');?>">Shop This Collection</a>
								    </div>
							   </div>
						   		<?php
									$imgID = get_sub_field('collection_image_high_res');
									$imgSize = "collections_image";
									$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID) ): ?>
									<div class="hsc-img-wrap hsc-img-low-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
								<?php endif; ?>
								
							   <?php
									$imgID2 = get_sub_field('collection_image_high_res');
									$imgSize2 = "collections_image-2x";
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
-->



<?php
get_footer();


