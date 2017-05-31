<?php get_header(); ?>
<div class="blog">  
	<?php while ( have_posts() ) : the_post(); ?>
		<?php $crntID = get_the_ID(); ?> 
<!-- 		the ob_start and ob_get_clean functions is what is grabbing the id that is printed onto the page and then erasing it and storing it to the $ID variable -->
		<?php  ob_start();the_field('author'); $ID = ob_get_clean(); $src = wp_get_attachment_image_src( get_post_thumbnail_id($ID), 'thumbnail_size' ); ?>		
		<h2 class="title"><?php the_title(); ?></h2>
		<div class="post-content">
			<?php the_content(); ?>
		</div>
		<a href="<?php echo get_post_permalink($ID); ?>"><div class="authorBox">
		<div class="img-wrapper"><img src="<?php echo $src[0] ?>" /></div>
		<div style="display: inline-block; width: 48%;vertical-align: top;">
			<p>Written by</p>
			<h3 style="text-decoration: underline;white-space: nowrap;"><?php echo get_the_title($ID); ?></h3>
		</div>
		</div></a>
	<?php endwhile; wp_reset_query(); ?>
	<?php $related = new WP_query(array('post_type' => 'post', 'posts_per_page' => 3, 'orderby' => 'rand', 'post__not_in' => array($crntID), 'order' => 'ASC')); ?>
		<div class="relatedHolder">
			<div style="background: url(<?php the_field('related_posts_pic','options'); ?>);background-size: contain;background-repeat: no-repeat;" class="relatedImg" ></div>
	<?php while ( $related->have_posts() ) : $related->the_post();?>
			<a href="<?php the_permalink(); ?>"><h1 style="font-family: 'arno-pro';"><?php the_title(); ?></h1></a>
	<?php endwhile; wp_reset_query(); ?>
		</div>
</div>
<?php get_footer(); ?>
