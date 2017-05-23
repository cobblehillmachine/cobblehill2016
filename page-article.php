<?php get_header() ?>

<?php 
	
	/*
		Template Name: Article Page	
	*/
?>

<?php $the_articles = new WP_query(array('post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 12)) ?>

<?php while ( $the_articles->have_posts() ) : $the_articles->the_post(); ?>

	<a href="<?php the_permalink(); ?>">
		<?php the_post_thumbnail(); ?>
		<h3><?php the_title() ?></h3>
		<p><?php the_field('desc') ?></p>
		<p>READ THE POST</p>
	</a>

<?php endwhile; wp_reset_query(); ?>

<?php get_footer() ?>