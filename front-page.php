<?php get_header(); ?>
<div id="fullpage">

<div class="hero fullpage-section" style="background-image:url(<?php the_post_thumbnail_url() ?>)"">

</div>

<div class="skinny-cont  homepage-copy flex center fullpage-section">
	<div><?php the_field('main_copy') ?></div>
</div>

<div class="services fullpage-section homepage">
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
<div class="fullpage-section">
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


<div class="wide-cont instafeed-wrapper fullpage-section">
	<div id="instafeed"></div>
	<div class="handle detail-font"><a href="http://instagram.com/cobble_hill" target=_blank><i class="fa fa-instagram"></i>cobble_hill</a></div>
</div>

</div>

<script src="<?php echo get_template_directory_uri() ?>/assets/js/whitewater.js"></script>
<script type="text/javascript">
	var canvas = document.getElementById('video');
    var source = '<?php echo get_template_directory_uri() ?>/assets/images/cobble-hill-video-new';
    var options = {
        autoplay: true,
        loop: true,
        controls: true
    }
    var video = new Whitewater(canvas, source, options);
</script>
	
<?php get_footer(); ?>