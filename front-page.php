<?php get_header(); ?>
<div id="fullpage">

<div class="hero fullpage-section">
	<div class="flex stretch hero">
		<div class="half">
			<h1><?php the_field('headline') ?></h1>
		</div>
		<div class="half">
			<canvas id="video"></canvas>
		</div>
	</div>
</div>

<div class="skinny-cont  homepage-copy flex center fullpage-section">
	<div><?php the_field('main_copy') ?></div>
</div>

<!-- <div class="case-studies-homepage"> -->
	<?php $featured_case_studies = new WP_query(array('post_type' => 'Case Studies', 'meta_key' => 'featured_on_homepage', 'meta_value' => 1)); ?>
	<?php while ( $featured_case_studies->have_posts() ) : $featured_case_studies->the_post();?>
		<a class=" fullpage-section " href="<?php the_permalink() ?>">
		<div class="flex case-study-homepage">
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
			</div>
		</a>
		

	<?php endwhile; wp_reset_query(); ?>
<!-- </div> -->

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