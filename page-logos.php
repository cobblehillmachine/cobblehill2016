<?php get_header() ?>

<div class="section center">
	<h2 class="title"><?php the_title() ?></h2>
</div>


<?php if (have_rows('logos')) : ?>
	<div class="wrap flex stretch wide-cont logos between">
		<?php while( have_rows('logos') ): the_row(); ?>
			
			<div class="half logo"><img src="<?php the_sub_field('logo') ?>"></div>
			
		<?php endwhile; ?>
	</div>
<?php endif; ?>


<?php get_footer() ?>