<div class="single_custom_piece">
	<div class="scp-img-wrap">
		<?php 
		$image = get_field('image');
		$size = 'custom-mosaic-thumb'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
		?>
	</div>
	<div class="scp-img-wrap-2x">
		<?php 
		$image = get_field('image');
		$size = 'custom-mosaic-thumb-2x'; // (thumbnail, medium, large, full or custom size)
		if( $image ) {
			echo wp_get_attachment_image( $image, $size );
		}
		?>
	</div>
	<div class="scp-text-wrap">
		<h2><?php echo the_title();?></h2>
		<p><?php the_field('copy_for_custom_page');?></p>
		<?php if (get_field('will_this_have_a_blog_post')):?>
		<div class="scp-read-more-link-wrap">
			<a class="scp-read-more-link" href="<?php echo the_permalink();?>">Read More</a>
		</div>
		<?php endif;?>
	</div>
</div>