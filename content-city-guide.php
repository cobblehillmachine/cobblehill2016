<?php $name = get_sub_field('name');
$description = get_sub_field('brief_description');
$link = get_sub_field('link'); ?>

<?php if ($link) { ?>
	<a href="<?php echo $link ?>" target=_blank>
<?php } ?>

	<h3><?php echo $name ?></h3>
	<p><?php echo $description ?></p>

<?php if ($link) { ?>
	</a>
<?php } ?>