<?php get_header() ?>
<div class="flex stretch between city-guide-archive">
	<?php $cityguides = new WP_query(array('post_type' => 'City Guides')); ?>
	<?php while ( $cityguides->have_posts() ) : $cityguides->the_post();?>
			
		<a href="<?php the_permalink() ?>" class="half center">
			<div style="background-image:url(<?php the_post_thumbnail_url() ?>)"></div>
				<h1><?php the_title() ?></h1>
			
		</a>
	<?php endwhile; wp_reset_query(); ?>

</div>
<?php get_footer() ?>