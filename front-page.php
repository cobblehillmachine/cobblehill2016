<?php get_header(); ?>


<div class="hero fullpage-section">
	<div class="videoWrapper">
		<video data-keepplaying  data-autoplay autoplay="true" loop="true" preload="auto" muted="true">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.mp4" type="video/mp4">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.ogv" type="video/ogv">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.webm" type="video/webm">
				<!--[if IE]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->
		</video>
		<div class="skinny-cont  homepage-copy flex center fullpage-section ">
			<div><?php the_field('main_copy') ?></div>
		</div>
	</div>
	
</div>


<div class="fullpage-section">
	
<!--
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
-->

	<div class="about-holder">
		<div class="left">
			<div class="img-wrapper">
				<img src="<?php the_field('pic_1'); ?>"/>
			</div>
			<div class="img-wrapper">
				<img src="<?php the_field('pic_2'); ?>"/>
			</div>
		</div>
		<div class="right">
			<h2>About</h2>
			<div class="line"></div>
			<p><?php the_field('about_text'); ?></p>
			<a href="/team"><span class="link">meet the team</span></a>
			<a href="/shop"><span class="link">visit our shop</span></a>
		</div>
	</div>
	<?php $featured_case_studies = new WP_query(array('post_type' => 'Case Studies', 'meta_key' => 'featured_on_homepage', 'meta_value' => 1)); ?>
	<div class="section small-padding" style="padding-bottom: 10%;">
		<h2 class="center relative wide-cont">Recent Work<a id="view-all" href="/work">View All</a></h2>
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
	<?php $featured_article = new WP_query(array('post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 1)) ?>
	<div class="section notop small-padding">
		<div class="ctas flex stretch wide-cont between">
			<?php while ( $featured_article->have_posts() ) : $featured_article->the_post(); ?>
			<a class="half center" href="<?php the_permalink(); ?>">
				<div class="img-wrapper"><img src="<?php the_field('archive_thumbnail'); ?>" /></div>
				<p><?php the_field('desc') ?></p>
				<span class="link">Read The Post</span>
			</a>
			<?php endwhile; wp_reset_query(); ?>
			<a class="half center" href="/city-guides/charleston">
				<img src="<?php the_field('city_guide_cta_image') ?>" >
				<p><?php the_field('city_guide_cta_text') ?></p>
				<span class="link">Explore our city guide</span>
			</a>
		</div>
	</div>
</div>
<div class=" section notop wide-cont small-padding">
	<h2 class="center">Current Mood</h2>
	<div class="flex instafeed-wrapper wrap stretch">
		<div id="instafeed" class=""></div>			
<!--
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
-->

	</div>
</div>



	
<?php get_footer(); ?>