<?php

/**
 Template Name: Home Page
 */
get_header(); ?>

	<?php
	while (the_flexible_field('home_builders')) {
		get_template_part('layouts/' . get_row_layout());
	}
	?>

<?php get_footer(); ?>