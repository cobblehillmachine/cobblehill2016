<?php get_header(); the_post(); ?>
<div class="section center mid-cont">
	<h1>City Guides</h1>
	<p><?php the_content() ?></p>
</div>
<div class="flex stretch city-guide-archive">
	<?php $cityguides = new WP_query(array('post_type' => 'City Guides')); ?>
	<?php while ( $cityguides->have_posts() ) : $cityguides->the_post();?>
			
		<a href="<?php the_permalink() ?>" class="half-with-space center <?php the_title() ?>">
			<?php the_post_thumbnail() ?>
			<p><?php the_field('archive_copy') ?></p>
			<h2 class="h4"><?php the_field('tagline') ?></h2>
			
		</a>
	<?php endwhile; wp_reset_query(); ?>

</div>
<?php get_footer() ?>