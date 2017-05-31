<?php get_header() ?>

<?php $hero_video = get_field('video_file_name'); ?>
<div class="case-study-page fullpage-section case-study-hero" <?php if (!$hero_video) { ?> style="background-image:url(<?php the_field('hero_image') ?>)" <?php } ?>>

		
		<?php if ($hero_video) { ?>
			<div class="videoWrapper">
				<video data-keepplaying  data-autoplay autoplay="true" loop="true" preload="auto" muted="true">
				  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/<?php the_field('video_file_name') ?>.mp4" type="video/mp4">
				  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/<?php the_field('video_file_name') ?>.ogv" type="video/ogv">
				  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/<?php the_field('video_file_name') ?>.webm" type="video/webm">
						<!--[if IE]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->
				</video>
			</div>
		<?php } ?>
		<?php $white_text = get_field('hero_white_text') ?>
		<div class="absolute hero <?php if ($white_text) { ?> white <?php } ?>">
			<?php the_field('hero_content') ?>
		</div>

</div>
<div class="fullpage-section case-study-page">
	<div class="flex main wrap">
		<?php $background_image = get_field("full_width_text_with_color_background_image");
		$black_text = get_field('full_width_text_with_color_black_text');
		if ($background_image) { ?>
			<div class="full-width-text-on-color center section <?php if ($black_text) { ?> black <?php } ?>" style="background-image:url(<?php echo $background_image ?>)" data-order="<?php the_field('full_width_text_with_color_order') ?>">
		<?php } else { ?>
			<div class="full-width-text-on-color center section <?php if ($black_text) { ?> black <?php } ?>" style="background-color:<?php the_field('full_width_text_with_color_background_color') ?>" data-order="<?php the_field('full_width_text_with_color_order') ?>">
		<?php } ?>
		
			<?php the_field('full_width_text_with_color_text') ?>
		</div>

		<div class="side-by-side-images center flex stretch" data-order="<?php the_field('side_by_side_images_order') ?>">
			<div class="half"><img src="<?php the_field('side_by_side_images_image_1') ?>"></div>
			<div class="half"><img src="<?php the_field('side_by_side_images_image_2') ?>"></div>
		</div>

		<div class="two_thirds_images_with_content" data-order="<?php the_field('two_thirds_images_with_content_order') ?>">
			<div class="flex between">
				<div class="big-picture">
					<img src="<?php the_field('two_thirds_images_with_content_large_image') ?>">
				</div>
				<div class="small-picture">
					<img src="<?php the_field('two_thirds_images_with_content_small_image') ?>">
				</div>
			</div>
			<div class="content">
				<?php the_field('two_thirds_images_with_content_content') ?>
			</div>
		</div>

		<div class="collage_with_content" data-order="<?php the_field('collage_with_content_order') ?>">
			<div class="flex stretch">
				<div class="half section">
					<?php the_field('collage_with_content_content') ?>
				</div>
				<div class="half background-image" style="background-image:url(<?php the_field('collage_with_content_adjacent_image') ?>)"></div>
			</div>
				
			<?php if (have_rows('collage_with_content_row_of_images')) : ?>
				<div class="flex wrap">
				<?php while( have_rows('collage_with_content_row_of_images') ): the_row(); ?>
					<img src="<?php the_sub_field('image') ?>">
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
		<?php $white_text = get_field('full_width_stacked_content_and_image_white_text') ?>
		<div class="full_width_stacked_content_and_image section <?php if ($white_text) { ?> white <?php } ?>" data-order="<?php the_field('full_width_stacked_content_and_image_order') ?>" style="background-color:<?php the_field('full_width_stacked_content_and_image_background_color') ?>">
			<div class="skinny-cont section notop" style="padding-top: 30px;">
				<?php the_field('full_width_stacked_content_and_image_content') ?>
			</div>
			<div class="image-wrapper mid-cont">
				<img src="<?php the_field('full_width_stacked_content_and_image_image') ?>">
			</div>
			
		</div>

		<div class="icons section" data-order="<?php the_field('icons_order') ?>">
			<div class="flex">
				<?php while( have_rows('icons') ): the_row(); ?>
					<div class="half center">
						<img src="<?php the_sub_field('icon') ?>">
						<h3><?php the_sub_field('text') ?></h3>
					</div>
				<?php endwhile; ?>
			</div>
			
		</div>
		
		<?php $full_width_image = get_field('full_width_image');
		if ($full_width_image) { ?>
		<div class="" data-order="<?php the_field('full_width_image_or_video_order') ?>">
			<img src="<?php echo $full_width_image ?>">
		</div>
		<?php } ?>
	</div>
</div>


<?php get_footer() ?>