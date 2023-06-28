<?php get_header(); ?>


<?php
if (have_posts()) :

	if (is_home() && !is_front_page()) :
?>

		<div class="pt-5 " style="background-image: url('/wp-content/uploads/2023/06/elite-background-1.webp');">
			<div class="container">
				<div class="mt-3 row">
					<h1 class="fw-bold display-5 pt-5 pb-5 text-white"><?php single_post_title(); ?></h1>
				</div>
			</div>

		</div>
		<?php
		get_template_part('template-parts/blogsearch');
		?>
		</div>
		<div class="bg-white">
			<div class="container-fluid  pb-5 pt-5 ">
				<div class="container">
			<?php
		endif;

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

		the_posts_pagination();


	endif;
			?>
				</div>
			</div>
		</div>


		<?php get_footer(); ?>