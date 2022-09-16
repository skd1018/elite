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
<footer id="colophon">
</div> <!-- Top Margin Div for Sticky Header, See header.php for start -->
	<div class="container-fluid bg-blue pb-4">
		<div class="container">
			<div class="row pt-5 pb-5">
				<section class="text-center my-auto col-12 col-sm-4  footernav">
					<ul>
						<li><?php the_custom_logo(); ?></li>

					</ul>
				</section>
				<section class="col-12 col-sm-4 text-center my-auto footernav fbs">
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
					<ul class="text-white">
						<li>Hours</li>
						<li> M-F 8AM-5PM</li>
						<li>888-888-8888</li>
						<li class="mt-4"><img src="/wp-content/uploads/2022/07/f_logo_RGB-White_58-e1657745012646.png"></li>
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