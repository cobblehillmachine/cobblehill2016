<?php get_header() ?>

<div class="hero team-member-hero flex stretch" style="padding: 5%;">
	<div class="half background-image" style="background-image:url(<?php the_field('hero_image') ?>)"></div>
	<div class="content half left">
	</div>
	<div class="absolute center">
		<h1><?php the_title() ?></h1>
		<h4><?php the_field('title') ?></h4>
		<p><?php the_field('one_liner') ?></p>
	</div>
	
</div>
<?php if( have_rows('image_grid') ): ?>
	<?php $i = 1; ?>
	<?php while ( have_rows('image_grid') ) : the_row(); ?>
	<div class="imgBox box-<?php echo $i ?>">
	<div class="img-wrapper"><img class="img-<?php echo $i ?>"src="<?php the_sub_field('image'); ?>"/></div>
	<p><?php the_sub_field('comment') ?></p>
	</div>
	<?php $i++; endwhile; endif; ?>
<?php if( have_rows('first_chunk_question_answers') ): ?>
<div class="question-holder">
<?php while ( have_rows('first_chunk_question_answers') ) : the_row(); ?>
<h3><?php the_sub_field('question') ?></h3>
<p><?php the_sub_field('answer') ?></p>
<?php endwhile; ?>
</div>
<?php endif; ?>

<?php $currentTeamMem = get_queried_object_id(); ?>
<?php $team_members = new WP_query(array('post_type' => 'Team Members', 'posts_per_page' => -1,'post__not_in' => array($currentTeamMem), 'orderby' => 'menu_order', 'order' => 'ASC')); ?>
<h2 style="margin-left: 5%;">All My Friends</h2>
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

<?php get_footer() ?>