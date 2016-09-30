<?php get_header(); ?>
<div id="fullpage">

<div class="hero fullpage-section">
	<div class="videoWrapper">
		<video data-keepplaying  data-autoplay autoplay="true" loop="true" preload="auto" muted="true">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.mp4" type="video/mp4">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.ogv" type="video/ogv">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.webm" type="video/webm">
				<!--[if IE]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->
		</video>
	</div>
</div>


<div class="fullpage-section">
	<div class="skinny-cont  homepage-copy flex center fullpage-section ">
		<div><?php the_field('main_copy') ?></div>
	</div>

 	

	<div class="services homepage">
		<div class="section">
			<h2 class="center">Services</h2>

			<?php if (have_rows('service', 9)) : ?>
				<div class="flex wrap stretch wide-cont">
				<?php while( have_rows('service', 9) ): the_row(); ?>
					<div class="service">
						<h3><?php the_sub_field('name') ?></h3>
						<?php the_sub_field('list_of_services') ?>
					</div>
				<?php endwhile; ?>
				</div>
		<?php endif; ?>
		</div>
	</div>


	<?php $featured_case_studies = new WP_query(array('post_type' => 'Case Studies', 'meta_key' => 'featured_on_homepage', 'meta_value' => 1)); ?>
	<div class="section small-padding">
		<h2 class="center relative wide-cont">Recent Work<a class="absolute view-all" href="/work"><img src="<?php echo get_template_directory_uri() ?>/assets/images/view-all.jpg"></a></h2>
		<div class="flex between wide-cont">
		<?php while ( $featured_case_studies->have_posts() ) : $featured_case_studies->the_post();?>
			
			<a class="case-study-homepage center" href="<?php the_permalink() ?>">
				<div class="picture">
					<img src="<?php the_field('picture') ?>">
				</div>
				<h3 class="h4 center"><?php the_title() ?></h3>

			</a>
			
			

		<?php endwhile; wp_reset_query(); ?>
		</div>
	</div>

	<div class="section notop small-padding">
		<div class="ctas flex stretch wide-cont between">
			<a class="half center shop-cta" href="/shop">
				<img src="<?php the_field('shop_cta_image') ?>">
				<p><?php the_field('shop_cta_text') ?></p>
				<span class="link">visit our store</span>
			</a>
			<a class="half center" href="/city-guides">
				<img src="<?php the_field('city_guide_cta_image') ?>">
				<p><?php the_field('city_guide_cta_text') ?></p>
				<span class="link">Explore our city guides</span>
			</a>
		</div>
	</div>


<div class=" section notop wide-cont small-padding">
	<h2 class="center">Vibes</h2>
	<div class="flex instafeed-wrapper wrap stretch">
		<div id="instafeed-first" class=""></div>			
		<?php $first_post = new WP_query(array('post_type' => 'post', 'posts_per_page' => 1, 'orderby' => 'date', 'order' => 'ASC')); ?>
		<?php while ( $first_post->have_posts() ) : $first_post->the_post();?>
			<a href="<?php the_permalink() ?>" class="center free-wisdom">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/free-wisdom-green.jpg">
				<h3><?php the_title() ?></h3>
				<span class="h4">Read the post</span>
			</a>
		<?php endwhile; wp_reset_query() ?>
		<div id="instafeed-second" class=""></div>
		
		<a class="summer-fridays" href="http://summerfridays.com" target=_blank>
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/summer-fridays.jpg">
		</a>
		<div id="instafeed-third" class=""></div>
		<?php $second_post = new WP_query(array('post_type' => 'post', 'posts_per_page' => 1,'offset' => 1, 'orderby' => 'date', 'order' => 'ASC')); ?>
		<?php while ( $second_post->have_posts() ) : $second_post->the_post();?>
			<a href="<?php the_permalink() ?>" class="center free-wisdom">
				<img src="<?php echo get_template_directory_uri() ?>/assets/images/free-wisdom-blue.jpg">
				<h3><?php the_title() ?></h3>
				<span class="h4">Read the post</span>
			</a>
		<?php endwhile; wp_reset_query() ?>
		<div id="instafeed-fourth" class=""></div>

	</div>
</div>

</div>

	
<?php get_footer(); ?>