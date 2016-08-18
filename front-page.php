<?php get_header(); ?>

<div class="hero flex stretch">
	<div class="half">
		<h1><?php the_field('headline') ?></h1>
	</div>
	<div class="half">
		<!-- <div class="iframe-container"> -->
			<video autoplay="true" loop="true" preload="auto" muted="true">
			  <source src="<?php echo get_template_directory_uri(); ?>/assets/images/cobble-hill-video.mp4" type="video/mp4">
			  <source src="<?php echo get_template_directory_uri(); ?>/assets/images/cobble-hill-video.ogv" type="video/ogv">
			  <source src="<?php echo get_template_directory_uri(); ?>/assets/images/cobble-hill-video.webm" type="video/webm">
					<!--[if IE]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->
			</video>
		<!-- </div> -->
	</div>
</div>

<div class="skinny-cont section homepage-copy flex center">
	<div><?php the_field('main_copy') ?></div>
</div>

<div class="case-studies-homepage">
	<?php $featured_case_studies = new WP_query(array('post_type' => 'Case Studies', 'meta_key' => 'featured_on_homepage', 'meta_value' => 1)); ?>
	<?php while ( $featured_case_studies->have_posts() ) : $featured_case_studies->the_post();?>
		<a class="flex" href="<?php the_permalink() ?>">
			<div class="big-picture">
				<img src="<?php the_field('big_picture') ?>">
			</div>
			<div class="small-picture">
				<img src="<?php the_field('small_picture') ?>">
			</div>
			<div class="content">
				<h2><?php the_title() ?></h2>
				<hr>
				<p><?php the_field('preview_text') ?></p>
			</div>
		</a>
		

	<?php endwhile; wp_reset_query(); ?>
</div>

<div class="wide-cont instafeed-wrapper">
	<div id="instafeed"></div>
	<div class="handle detail-font"><a href="http://instagram.com/cobble_hill" target=_blank><i class="fa fa-instagram"></i>cobble_hill</a></div>
</div>
	
<?php get_footer(); ?>