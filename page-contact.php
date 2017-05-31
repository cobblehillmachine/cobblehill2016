<?php get_header() ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div style="padding: 5%;">
	<div class="contactUpper">
		<div class="img-wrapper">
			<?php the_post_thumbnail(); ?>
		</div>
		<div>
			<div>
				<h1>Let's Chat</h1>
				<a href="mailto:<?php the_field('email','options') ?>"><p><?php the_field('email','options'); ?></p></a>
				<a href="tel:<?php the_field('phone_number','options'); ?>"><p><?php the_field('phone_number','options'); ?></p></a>
			</div>
			<div>
				<h1>Stop By</h1>
				<p>602 Rutledge avenue</p>
				<p>Second Floor</p>
				<p>Charleston, SC 29403</p>
			</div>
			<div>
				<h1>Vibes</h1>
				<a href="<?php the_field('instagram','options') ?>"><i class="fa fa-instagram"></i></a>
				<a href="<?php the_field('twitter','options') ?>"><i class="fa fa-twitter"></i></a>
				<a href="<?php the_field('pinterest','options') ?>"><i class="fa fa-pinterest-p"></i></a>
				<a href="<?php the_field('facebook','options') ?>"><i class="fa fa-facebook-f"></i></a>
			</div>
		</div>
	</div>
	<div class="formHolder">
		<?php the_content(); ?>
	</div>
</div>



<?php endwhile; endif; ?>
<?php get_footer() ?>