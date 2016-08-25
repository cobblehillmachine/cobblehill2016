<?php
/**
 * @package WordPress
 * @subpackage Eclectic
 */
?>
<!DOCTYPE html>
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="IE ie8"> <![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="IE ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<!--[if IE 8 ]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
<title><?php echo site_global_description(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<?php wp_head(); ?>

<!-- GOOGLE ANALYTICS -->

<!-- END GOOGLE ANALYTICS -->

<!-- TYPEKIT -->
<script src="https://use.typekit.net/zfu5dxy.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- END TYPEKIT -->


</head>
<body <?php body_class(); ?>>
	<div class="desktop-nav">
		<div class="table">
			<div class="table-cell contact">
				<div>
					<?php $encoded_address = urlencode(get_field('address_1', 'options').'+'.get_field('address_2', 'options').'+'.get_field('city', 'options').'+'.get_field('state', 'options').'+'.get_field('zip', 'options')); ?>
					<h4>Main Office</h4>
					<p>
						<a href="https://www.google.com/maps/place/<?php echo $encoded_address ?>" target=_blank>
							<?php the_field('address_1', 'options') ?>, <?php the_field('address_2', 'options') ?><br><?php the_field('city', 'options') ?>, <?php the_field('state', 'options') ?> <?php the_field('zip', 'options') ?>
						</a>
					</p>
				</div>
				<div>
					<h4>Phone</h4>
					<p><?php the_field('phone_number', 'options') ?></p>
				</div>
				<div>
					<h4>Email</h4>
					<p><a href="mailto:<?php the_field('email', 'options') ?>"><?php the_field('email', 'options') ?></a></p>
				</div>
				<div>
					<h4>Social Media</h4>
					<ul class="inline">
						<li><a href="<?php the_field('instagram_link', 'options') ?>"><i class="fa fa-instagram"></i></a></li>
						<li><a href="<?php the_field('pinterest_link', 'options') ?>"><i class="fa fa-pinterest"></i></a></li>
						<li><a href="<?php the_field('twitter_link', 'options') ?>"><i class="fa fa-twitter"></i></a></li>
						<li><a href="<?php the_field('facebook_link', 'options') ?>"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>

			</div>
			<div class="table-cell nav">
				<?php wp_nav_menu(array('menu' => 'Main Nav')); ?>
			</div>
		</div>
	</div>
	
	<header>
		<div class="flex between wide-cont">
			<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"></a></div>
			<div class="hamburger">
				<span></span>
			</div>
		</div>
	</header>
	<div class="body-wrapper">	