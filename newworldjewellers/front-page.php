<?php
/**
 * The template for displaying Home Page
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
			
			<div id="business-intro-wrap">
				<div id="biw-l" class="biw"></div>
				<div id="biw-r" class="biw"></div>
				<div id="biw-l2" class="biw"></div>
				<div id="biw-r2" class="biw"></div>
				<div id="business-intro" class="centered centered-intro">
					<div id="intro-wedge"></div>

						<p class="pre-title">Welcome To</p>
						<h2 class="home-title-w-pre"><?php the_field('business_name');?></h2>
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
							<h2 class="home-title-w-pre">Collections</h2>
							<div class="wrap-1000"><?php the_field('our_collections_copy', '33');?></div>		
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
			<?php if( have_rows('collections', '33') ):?>
			<div id="home-collections-wrap">
				<?php while ( have_rows('collections', '33') ) : the_row();?>
				
				<?php if( get_row_index() % 2 == 0 ):?>
				
					<?php if( have_rows('single_collection', '33') ):?>
						<?php while ( have_rows('single_collection', '33') ) : the_row();?>
						
							   
						   <div class="home-single-collection">
						   		<?php
									$imgID = get_sub_field('collection_image_high_res', '33');
									$imgSize = "collections_image"; // (thumbnail, medium, large, full or custom size)
									$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID) ): ?>
									<div class="hsc-img-wrap hsc-img-low-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
								<?php endif; ?>
								
							   <?php
									$imgID2 = get_sub_field('collection_image_high_res', '33');
									$imgSize2 = "collections_image-2x"; // (thumbnail, medium, large, full or custom size)
									$imgArr2 = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID2) ): ?>
									<div class="hsc-img-wrap hsc-img-high-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr2[0]; ?> );"></div>
								<?php endif; ?>
							   <div class="hsc-card">
								    <div class="hsc-card-inner hsc-card-inner-right">
									    <p class="pre-title"><?php the_sub_field('pre_name', '33');?></p>
									   <h3><?php the_sub_field('name', '33');?></h3>
									   <p class="post-title"><?php the_sub_field('post_name', '33');?></p>
									   <div class="hsc-card-copy"><?php the_sub_field('copy', '33');?></div>
									   <div class="hsc-img-low-res mobile-hsc-img">
											<?php 
											$image3 = get_sub_field('collection_image_high_res', '33');
											$size3 = 'collections_image';
											if( $image3 ) {
											echo wp_get_attachment_image( $image3, $size3 );
											}
											?>
									   </div>									   
									   <div class="hsc-img-high-res mobile-hsc-img">
											<?php 
											$image4 = get_sub_field('collection_image_high_res', '33');
											$size4 = 'collections_image-2x';
											if( $image4 ) {
											echo wp_get_attachment_image( $image4, $size4 );
											}
											?>
									   </div>
									   <a href="<?php the_sub_field('link_to_collection', '33');?>">Shop This Collection</a>
								    </div>
							   </div>
						   </div>	   
						<?php endwhile;?>
					<?php endif;?>	
										        
				<?php else:?>
					<?php if( have_rows('single_collection', '33') ):?>
						<?php while ( have_rows('single_collection', '33') ) : the_row();?>
						   <div class="home-single-collection">
						
							   <div class="hsc-card">
								    <div class="hsc-card-inner hsc-card-inner-left">
									    <p class="pre-title"><?php the_sub_field('pre_name', '33');?></p>
									   <h3><?php the_sub_field('name', '33');?></h3>
									   <p class="post-title"><?php the_sub_field('post_name', '33');?></p>
									   <div class="hsc-card-copy"><?php the_sub_field('copy', '33');?></div>
									   <div class="hsc-img-low-res mobile-hsc-img">
											<?php 
											$image3 = get_sub_field('collection_image_high_res', '33');
											$size3 = 'collections_image';
											if( $image3 ) {
											echo wp_get_attachment_image( $image3, $size3 );
											}
											?>
									   </div>									   
									   <div class="hsc-img-high-res mobile-hsc-img">
											<?php 
											$image4 = get_sub_field('collection_image_high_res', '33');
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
									$imgID = get_sub_field('collection_image_high_res', '33');
									$imgSize = "collections_image"; // (thumbnail, medium, large, full or custom size)
									$imgArr = wp_get_attachment_image_src( $imgID, $imgSize );
								?>
								<?php 
								if( !empty($imgID) ): ?>
									<div class="hsc-img-wrap hsc-img-low-res desktop-hsc-img" style="background-image: url(<?php echo $imgArr[0]; ?> );"></div>
								<?php endif; ?>
								
							   <?php
									$imgID2 = get_sub_field('collection_image_high_res', '33');
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
-->
				<div class="all-link-wrap">
					<a class="all-link" href="/collections">Shop Collections</a>
				</div>
			</div>
			<?php endif;?>
			
			<div id="custom-wrap">
				<div id="custom" class="centered-intro">
					<div class="square">
						<div class="square-line square-line-tl"></div>
						<div class="square-line square-line-tr"></div>
						<div class="square-line square-line-bl"></div>
						<div class="square-line square-line-br"></div>
					</div>	
					<h2>Custom</h2>
					<div><?php the_field('custom_copy');?></div>
				</div>
				
				<div class="custom-skew-wrap">
					<div class="csw-l">
						<div id="custom_sketch_low_res_image">
							<?php 
							$image5 = get_field('custom_sketch_high_res_image');
							$size5 = 'collections_image';
							if( $image5 ) {
							echo wp_get_attachment_image( $image5, $size5 );
							}
							?>
						</div>
						<div id="custom_sketch_high_res_image">
							<?php 
							$image6 = get_field('custom_sketch_high_res_image');
							$size6 = 'collections_image-2x';
							if( $image6 ) {
							echo wp_get_attachment_image( $image6, $size6 );
							}
							?>
						</div>						
						
					</div>
					<div class="csw-r">
						<div id="custom_piece_low_res_image">
							<?php 
							$image7 = get_field('custom_piece_high_res_image');
							$size7 = 'collections_image';
							if( $image7 ) {
							echo wp_get_attachment_image( $image7, $size7 );
							}
							?>
						</div>
						<div id="custom_piece_high_res_image">
							<?php 
							$image8 = get_field('custom_piece_high_res_image');
							$size8 = 'collections_image-2x';
							if( $image8 ) {
							echo wp_get_attachment_image( $image8, $size8 );
							}
							?>
						</div>					
					</div>
				</div>

			</div>
			
				<div class="all-link-wrap">
					<a class="all-link" href="/custom">Learn More About<br>Custom Pieces</a>
				</div>
			
			
			
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
