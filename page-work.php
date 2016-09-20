<?php get_header() ?>

<h2 class="center">Case Studies</h2>
<?php $case_studies = new WP_query(array('post_type' => 'Case Studies')); ?>


	<div class="flex between wrap stretch wide-cont">
	<?php while ( $case_studies->have_posts() ) : $case_studies->the_post();?>
		
		<a class="case-study-archive center" href="<?php the_permalink() ?>">
			<div class="picture">
				<?php the_post_thumbnail() ?>
			</div>
			<h3 class="h4 center"><?php the_title() ?></h3>

		</a>
		
		

	<?php endwhile; wp_reset_query(); ?>

<?php get_footer() ?>