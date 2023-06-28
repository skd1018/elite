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

<div>
	<div class="container text-center">
		<div class="mt-3 row">
			<h1 class="fw-bold display-5 pt-5 pb-5  text-primary"><?php the_title(); ?></h1>
		</div>
	</div>

</div>
<div >
	<div class="container pt-4 pb-5 container-small">
		<div class="row">
			<div class="col-12 ">
				<?php the_content(); ?>
			</div>
		</div>
	</div>
</div>

<?php

get_footer();
