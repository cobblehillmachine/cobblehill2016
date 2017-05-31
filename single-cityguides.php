<?php get_header() ?>

<?php $topics = array('eat', 'drink','shop','explore','stay') ?>
<?php $i = 0; ?>


<div class="hero city-guide-hero" style="background-image:url(<?php the_field('hero_image') ?>)">
	<div class="content half absolute white">
		<h1><?php the_field('intro_headline') ?></h1>
		<?php the_field('intro_text') ?>
		<ul class="flex wrap">
		<?php foreach ($topics as $topic) { ?>
			<li><a class="smooth-scroll" href="#<?php echo $topic ?>"><img src="<?php the_field($topic.'_icon'); ?>" style="width: 25%;vertical-align: middle;padding: 5%;"/><?php echo $topic ?></a></li>
		<?php } ?>
		</ul>
	</div>
</div>

<?php foreach ($topics as $topic) { ?>


	<?php if (have_rows($topic)) : ?>
		<div class="city-guide" id="<?php echo $topic ?>">
			<div class="flex stretch wrap">
				<?php if ($i % 2 == 0) { ?>
					<div class="half background" style="background-image:url(<?php the_field($topic.'_photo') ?>)"></div>
				<?php } else { ?>
					<div class="half mobile background" style="background-image:url(<?php the_field($topic.'_photo') ?>)"></div>
				<?php } ?>
				
				<div class="half section">
					<h2><?php echo $topic ?></h2>
					<?php while( have_rows($topic) ): the_row(); ?>
						<div class="location">
							<?php get_template_part('content', 'city-guide') ?>
						</div>
					<?php endwhile; ?>
				</div>
				<?php if ($i % 2 != 0) { ?>
					<div class="half background" style="background-image:url(<?php the_field($topic.'_photo') ?>)"></div>
				<?php } ?>
			</div>
		</div>
	<?php endif; ?>

	<?php $i++; ?>
<?php } ?>







<?php get_footer() ?>