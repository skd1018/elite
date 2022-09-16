<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ADMHouseTheme
 */

get_header();
?>

	<main id="primary" class="site-main">
<div class="container">
<h1 class="display-2"><?php the_title();?></h1>
<div class="row">
	<div class="col-12 ">
			<?php the_content();?>
	</div>
</div>
</div>
	</main><!-- #main -->

<?php

get_footer();
