<?php

/**
 Template Name: Home Page
 */
get_header(); ?>
<main id="primary" class="site-main">
	<?php
	while (the_flexible_field('home_builders')) {
		get_template_part('layouts/' . get_row_layout());
	}
	?>
</main><!-- #main -->
<?php get_footer(); ?>