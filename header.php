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
<script src="https://use.typekit.net/efw0clm.js"></script>
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
			<div class="logo black"><a href="/">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 478 49" style="enable-background:new 0 0 478 49;" xml:space="preserve">
					<g>
						<g>
							<path d="M22.6,6.9c4.9,0,8.5,1.7,11.8,4.6c0.4,0.4,0.4,1,0,1.4L32.3,15c-0.3,0.4-0.8,0.4-1.2,0c-2.3-2-5.4-3.3-8.5-3.3
								c-7,0-12.3,5.9-12.3,12.7c0,6.9,5.3,12.7,12.3,12.7c3.6,0,6.1-1.4,8.4-3.2c0.4-0.3,0.9-0.3,1.2-0.1l2.3,2.2c0.4,0.3,0.3,1-0.1,1.3
								c-3.3,3.2-7.5,4.7-11.9,4.7c-9.8,0-17.7-7.8-17.7-17.6C4.9,14.8,12.8,6.9,22.6,6.9z"/>
							<path d="M73.5,6.9c9.8,0,17.6,7.9,17.6,17.7c0,9.8-7.8,17.6-17.6,17.6c-9.8,0-17.6-7.8-17.6-17.6C55.9,14.8,63.7,6.9,73.5,6.9z
								 M73.5,37.2c7,0,12.7-5.7,12.7-12.7c0-7-5.7-12.8-12.7-12.8c-7,0-12.7,5.8-12.7,12.8C60.8,31.6,66.6,37.2,73.5,37.2z"/>
							<path d="M115.3,8.3c0-0.5,0.4-0.9,0.9-0.9h11c5.9,0,10.2,3.9,10.2,9.1c0,3.8-2.8,6.5-5.1,7.8c2.6,1.1,6.1,3.5,6.1,8
								c0,5.5-4.5,9.4-10.7,9.4h-11.5c-0.5,0-0.9-0.4-0.9-0.9V8.3z M127.6,37.1c3,0,5.3-2.3,5.3-5.3c0-3-2.8-5.1-6-5.1h-6.7v10.5H127.6z
								 M126.9,22.2c3.1,0,5-2.3,5-5.2c0-3-1.9-5-5-5h-6.6v10.3H126.9z"/>
							<path d="M162.8,8.3c0-0.5,0.4-0.9,0.9-0.9h11c5.9,0,10.2,3.9,10.2,9.1c0,3.8-2.8,6.5-5.1,7.8c2.6,1.1,6.1,3.5,6.1,8
								c0,5.5-4.5,9.4-10.7,9.4h-11.5c-0.5,0-0.9-0.4-0.9-0.9V8.3z M175.2,37.1c3,0,5.3-2.3,5.3-5.3c0-3-2.8-5.1-6-5.1h-6.7v10.5H175.2z
								 M174.4,22.2c3.1,0,5-2.3,5-5.2c0-3-1.9-5-5-5h-6.6v10.3H174.4z"/>
							<path d="M210.4,8.3c0-0.5,0.4-0.9,0.9-0.9h3.2c0.5,0,0.9,0.4,0.9,0.9v28.8h13.3c0.5,0,0.9,0.4,0.9,0.9v2.7c0,0.5-0.4,0.9-0.9,0.9
								h-17.4c-0.5,0-0.9-0.4-0.9-0.9V8.3z"/>
							<path d="M252,8.3c0-0.5,0.4-0.9,0.9-0.9h19.6c0.5,0,0.9,0.4,0.9,0.9V11c0,0.5-0.4,0.9-0.9,0.9H257v10h13.1c0.5,0,0.9,0.4,0.9,0.9
								v2.7c0,0.5-0.4,0.9-0.9,0.9H257v10.5h15.5c0.5,0,0.9,0.4,0.9,0.9v2.7c0,0.5-0.4,0.9-0.9,0.9h-19.6c-0.5,0-0.9-0.4-0.9-0.9V8.3z"/>
							<path d="M325.8,8.3c0-0.5,0.4-0.9,0.9-0.9h3.2c0.5,0,0.9,0.4,0.9,0.9V22h17.9V8.3c0-0.5,0.4-0.9,0.9-0.9h3.2
								c0.5,0,0.9,0.4,0.9,0.9v32.4c0,0.5-0.4,0.9-0.9,0.9h-3.2c-0.5,0-0.9-0.4-0.9-0.9V26.6h-17.9v14.2c0,0.5-0.4,0.9-0.9,0.9h-3.2
								c-0.5,0-0.9-0.4-0.9-0.9V8.3z"/>
							<path d="M380.5,8.3c0-0.5,0.4-0.9,0.9-0.9h3.2c0.5,0,0.9,0.4,0.9,0.9v32.4c0,0.5-0.4,0.9-0.9,0.9h-3.2c-0.5,0-0.9-0.4-0.9-0.9V8.3
								z"/>
							<path d="M412.3,8.3c0-0.5,0.4-0.9,0.9-0.9h3.2c0.5,0,0.9,0.4,0.9,0.9v28.8h13.3c0.5,0,0.9,0.4,0.9,0.9v2.7c0,0.5-0.4,0.9-0.9,0.9
								h-17.4c-0.5,0-0.9-0.4-0.9-0.9V8.3z"/>
							<path d="M453.8,8.3c0-0.5,0.4-0.9,0.9-0.9h3.2c0.5,0,0.9,0.4,0.9,0.9v28.8h13.3c0.5,0,0.9,0.4,0.9,0.9v2.7c0,0.5-0.4,0.9-0.9,0.9
								h-17.4c-0.5,0-0.9-0.4-0.9-0.9V8.3z"/>
						</g>
					</g>
				</svg>

			</a></div>
			<div class="hamburger" style="display: none;">
				<span></span>
			</div>
			<?php wp_nav_menu(array('theme_location'=>'primary')) ?>
			<a href="/contact"><div class="contactBox">
				GET IN TOUCH
			</div></a> 
		</div>
	</header>
	<div class="body-wrapper">	