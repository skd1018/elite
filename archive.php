<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ADMHouseTheme
 */

get_header();
?>

<div class="pt-5 " style="background-image: url('/wp-content/uploads/2023/06/elite-background-1.webp');">
	<div class="container">
		<div class="mt-3 text-white row">
			<?php
			the_archive_title('<h1 class="fw-bold display-5 pt-5 pb-5 text-white">', '</h1>');
			the_archive_description('<div class="archive-description">', '</div>');
			?>
		</div>
	</div>
</div>
<?php 
get_template_part('template-parts/blogsearch');
?>
<main id="primary" class="site-main">
	<div class="container">
		<?php if (have_posts()) : ?>


		<?php
			/* Start the Loop */
			while (have_posts()) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part('template-parts/content', get_post_type());

			endwhile;

			the_posts_navigation();

		else :

			get_template_part('template-parts/content', 'none');

		endif;
		?>
	</div>
</main><!-- #main -->

<?php
get_sidebar();
get_footer();
