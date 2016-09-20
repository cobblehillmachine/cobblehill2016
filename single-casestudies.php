<?php get_header() ?>
<div class="case-study-page flex wrap">

	<div class="full-width-text-on-color center section" style="background-color:<?php the_field('full_width_text_with_color_background_color') ?>" data-order="<?php the_field('full_width_text_with_color_order') ?>">
		<h3 class="h2 skinny-cont"><?php the_field('full_width_text_with_color_text') ?></h3>
	</div>

	<div class="side-by-side-images center flex stretch" style="height: 300px" data-order="<?php the_field('side_by_side_images_order') ?>">
		<div class="half section background-image" style="background-image:url(<?php the_field('side_by_side_images_image_1') ?>)"></div>
		<div class="half section background-image" style="background-image:url(<?php the_field('side_by_side_images_image_2') ?>)"></div>
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

	<div class="full_width_stacked_content_and_image section" data-order="<?php the_field('full_width_stacked_content_and_image_order') ?>" style="background-color:<?php the_field('full_width_stacked_content_and_image_background_color') ?>">
		<div class="skinny-cont section notop">
			<?php the_field('full_width_stacked_content_and_image_content') ?>
		</div>
		<div class="image-wrapper skinny-cont">
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








</div>

<?php get_footer() ?>