<?php get_header() ?>

<div class="hero" style="padding:5%;">
	<div class="center">
		<?php the_post_thumbnail() ?>
	</div>
</div>
<div class="server-subHeader">
	<h2><?php the_field('intro_headline') ?></h2>
	<?php the_field('intro_text') ?>
</div>
<?php if (have_rows('service', 9)) : ?>
	<?php while( have_rows('service', 9) ): the_row(); ?>
		<div class="service flex stretch">
			<div class="background-image" style="background-image:url(<?php the_sub_field('image') ?>)"></div>
			<div class="content">
				<h2><?php the_sub_field('name') ?></h2>
				<?php the_sub_field('description') ?>
				<div class="two-columns">
					<?php the_sub_field('list_of_services') ?>
				</div>
			</div>
		</div>
	<?php endwhile; ?>
<?php endif; ?>


<?php get_footer() ?>