<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ADMHouseTheme
 */
?>
</main><!-- #main -->
</div> <!-- Top Margin Div for Sticky Header, See header.php for start -->

<footer id="colophon">

	<div class="container-fluid bg-secondary pt-5 pb-4">
		<div class="container">
			<div class="row pb-5">
				<section class="text-center my-auto col-12 col-sm-4  text-white fw-bold footernav">
					<ul>
							<li><?php the_custom_logo(); ?></li>
							<h2 class="text-cta fw-bold">Footer</h2>
							<li></li>
							<li></li>
					</ul>
				</section>
				<section class="col-12 col-sm-4 text-center my-auto footernav fbs">
					<h2 class="text-cta fw-bold"> </h2>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-menu',
							'menu_id'        => 'Secondary',
						)
					);
					?>
				</section>
				<section class="col-12 text-center footernav my-auto col-sm-4">
					<h2 class="text-cta fw-bold"></h2>
					<ul class="text-white">
						<li>
							<br>
							
						</li>
						<li class="text-cta fw-bold"></li>
						<li> </li>
						<li>
							<br>
							
						</li>

						
					</ul>
				</section>
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>

</body>

</html>