<?php get_header() ?>

<?php 
	
	/*
		Template Name: Article Page	
	*/
?>

<?php $iTest = 0; $the_articles = new WP_query(array('post_type' => 'post', 'order' => 'DESC', 'posts_per_page' => 12)) ?>
<div style="width: 90%;margin: auto;margin-top: 2%;min-height: 700px" class="articleHolder">
<?php while ( $the_articles->have_posts() ) : $the_articles->the_post();  ?>
	<?php $iTest++; ?>
	<?php if($iTest % 2 == 0) { ?>

	<a href="<?php the_permalink(); ?>" style="display: inline-block;width: 28%;margin: 20px 7.5%;">
		<div style="height: 150px"></div>
		<div style="padding: 5%;"><img src="<?php the_field('archive_thumbnail'); ?>"/></div>
		<h3 style="font-size: 30px;line-height: 70px;"><?php the_title() ?></h3>
		<p style="margin-top: -6px;"><?php the_field('desc') ?></p>
		<p style="font-family:'proxima-nova';font-size: 13.5px;font-weight: 600;letter-spacing: 1.8px;">READ THE POST</p>
	</a>
	<?php } elseif($iTest % 3 == 0) { ?>
	<a href="<?php the_permalink(); ?>" style="display: inline-block;width: 28%;margin: 20px 0;vertical-align: top;margin-right: 0;">
		<div style="padding: 5%; padding-right: 0;"><img src="<?php the_field('archive_thumbnail'); ?>"/></div>
		<h3 style="font-size: 30px;line-height: 70px;"><?php the_title() ?></h3>
		<p style="margin-top: -6px;"><?php the_field('desc') ?></p>
		<p style="font-family:'proxima-nova';font-size: 13.5px;font-weight: 600;letter-spacing: 1.8px;">READ THE POST</p>
	</a>
	</div>
		
	<?php }else { ?>
		<div class="articleRow">
		<a href="<?php the_permalink(); ?>" style="display: inline-block;width: 28%;margin: 20px 0;vertical-align: top;margin-left: 0;">
		<div style="padding: 5%;padding-left:0; "><img src="<?php the_field('archive_thumbnail'); ?>"/></div>
		<h3 style="font-size: 30px;line-height: 70px;"><?php the_title() ?></h3>
		<p style="margin-top: -6px;"><?php the_field('desc') ?></p>
		<p style="font-family:'proxima-nova';font-size: 13.5px;font-weight: 600;letter-spacing: 1.8px;">READ THE POST</p>
		</a>
	<?php } ?>
	<?php if($iTest == 3){$iTest = 0;} ?>
<?php endwhile; wp_reset_query(); ?>
</div>
<?php get_footer() ?>