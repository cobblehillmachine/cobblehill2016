<?php get_header(); ?>
<div id="fullpage">

<div class="hero fullpage-section" style="background-image:url(<?php the_post_thumbnail_url() ?>)"">
	<div class="videoWrapper">
		<video data-keepplaying  data-autoplay autoplay="true" loop="true" preload="auto" muted="true">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.mp4" type="video/mp4">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.ogv" type="video/ogv">
		  <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/homepage-video-header.webm" type="video/webm">
				<!--[if IE]><div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div><![endif]-->
		</video>
	</div>

</div>


<div class="skinny-cont  homepage-copy flex center fullpage-section fp-normal-scroll">
	<div><?php the_field('main_copy') ?></div>
</div>

</div>

<div class="services normal-section homepage fullpage-section fp-normal-scroll">
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
<div class="normal-section section fullpage-section fp-normal-scroll">
	<h2 class="center">Recent Work</h2>
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

<div class="normal-section section notop fullpage-section">
	<div class="ctas flex stretch wide-cont">
		<a class="half shop" href="shop">
			<p>Dress like its summer friday.</p>
			<span class="link">visit our store</span>
		</a>
		<a class="half city-guide center" href="/city-guides">
			<img src="<?php the_field('city_guide_cta_image') ?>">
			<p><?php the_field('city_guide_cta_text') ?></p>
			<span class="link">Explore our city guides</span>
		</a>
	</div>
</div>


<div class="instafeed-wrapper normal-section section notop fullpage-section">
	<div id="instafeed" class="flex wrap wide-cont stretch"></div>
	<!-- <div class="handle detail-font"><a href="http://instagram.com/cobble_hill" target=_blank><i class="fa fa-instagram"></i>cobble_hill</a></div> -->
</div>



<!-- <script src="<?php echo get_template_directory_uri() ?>/assets/js/whitewater.js"></script>
<script type="text/javascript">
	var canvas = document.getElementById('video');
    var source = '<?php echo get_template_directory_uri() ?>/assets/images/cobble-hill-video-new';
    var options = {
        autoplay: true,
        loop: true,
        controls: true
    }
    var video = new Whitewater(canvas, source, options);
</script> -->
	
<?php get_footer(); ?>