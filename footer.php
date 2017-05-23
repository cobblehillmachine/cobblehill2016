<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>

	
	<footer class="">
		<div class="footer-holder">
			<div class="img-wrapper">
				<img src="<?php the_field('footer_pic','options'); ?>"/>
			</div>
			<div class="contact-info">
				<h2>Let's Connect</h2>
				<div class="line"></div>
				<p><?php the_field('address_1','options'); ?></p>
				<p><?php the_field('city','options'); ?>, <?php the_field('state','options'); ?> <?php the_field('zip','options'); ?></p>
				<a href="mailto:<?php the_field('email','options') ?>"><p><?php the_field('email','options'); ?></p></a>
				<a href="tel:<?php the_field('phone_number','options'); ?>"><p><?php the_field('phone_number','options'); ?></p></a>
				<a href="<?php the_field('instagram','options') ?>"><i class="fa fa-instagram"></i></a>
				<a href="<?php the_field('twitter','options') ?>"><i class="fa fa-twitter"></i></a>
				<a href="<?php the_field('pinterest','options') ?>"><i class="fa fa-pinterest-p"></i></a>
				<a href="<?php the_field('facebook','options') ?>"><i class="fa fa-facebook-f"></i></a>
			</div>
		</div>
	</footer>

	</div> <!-- ENDS BODY WRAPPER (STARTED IN HEADER) -->
	<?php wp_footer(); ?>

</body>
</html>