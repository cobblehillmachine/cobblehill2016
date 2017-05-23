<?php get_header() ?>

<div class="hero team-hero flex stretch" style="padding: 5%;">
	<div class=" background-image" style="width:100%;background-image:url(<?php the_post_thumbnail_url() ?>)"></div>
<!--
	<div class="content half left">
		<div class="absolute">
			<h1><?php the_field('intro_headline') ?></h1>
			<?php the_field('intro_text') ?>
		</div>
	</div>
-->
</div>
<div style="margin-left: 5%;" class="team-subHeader">
	<?php the_field('sub_header_text'); ?>
</div>

<?php $team_members = new WP_query(array('post_type' => 'Team Members', 'posts_per_page' => -1, 'orderby' => 'menu_order', 'order' => 'ASC')); ?>

<div class="flex between wrap stretch wide-cont team-members">
	<?php while ( $team_members->have_posts() ) : $team_members->the_post();?>
		
		<a class="team-member-archive center third" href="<?php the_permalink() ?>">
			<div class="picture">
				<?php the_post_thumbnail() ?>
			</div>
			<h3 class=""><?php the_title() ?></h3>
			<h4><?php the_field('title') ?></h4>
		</a>

	<?php endwhile; wp_reset_query(); ?>
</div>
<div>
	<div class="img-wrapper" style="width: 50%;display: inline-block;">
		<img src="<?php the_field('bottom_pic'); ?>" />
	</div>
	<div class="team-subSub"style="width: 49%;display: inline-block;vertical-align: top;">
		<h2><?php the_field('bottom_title') ?></h2>
		<p style=""><?php the_field('bottom_text') ?></p>
		<a href="/city-guides/charleston"><span>CHECK OUT OUR CHARLESTON CITY GUIDE</span></a>
	</div>
</div>
<?php get_footer() ?>