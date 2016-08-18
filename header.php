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
	
	<header>
		<div class="flex between wide-cont">
			<div class="logo"><a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/images/logo.png"></a></div>
			<div class="hamburger">
				<span></span>
			</div>
		</div>
	</header>
	<div class="body-wrapper">	