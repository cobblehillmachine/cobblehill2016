<?php
/**
 * Template Name: Template - Generic
 * Description: Generic Sub Page Template
 *
 * @package WordPress
 * @subpackage themename
 */

get_header();the_post(); ?>
<div class="page-generic mid-cont">
	<div class="section center">
		<h2 class="title"><?php the_title() ?></h2>
	</div>
	<div class="content">
		<?php the_content(); ?>
	</div>
</div>
<?php get_footer(); ?>
