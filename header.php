<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ADMHouseTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site ">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'admhousetheme'); ?></a>

		<header id="masthead" class="site-header ">
			<div id="ctabar" class="container-fluid bg-blue d-none d-lg-block ">
				<div class="container">
					<div class="row justify-content-end">

						<div class="col-6 col-md-3 text-center">
							<div class=" pt-2 pb-2 bg-cta text-sm-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fff" class="bi bi-telephone-fill " viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
								</svg>
								<a href="tel:(208)-856-8336" class="text-white">(208)-856-8336</a>
							</div>
						</div>
						<div class="col-6 col-md-3 text-center">
							<div class=" pt-2 pb-2 bg-cta ">
								<a href="/schedule-an-appointment/" class="text-white">SCHEDULE NOW</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="container-fluid bg-white shadow">
				<div id="" class=" container">

					<div class="d-flex flex-row mr-1 ml-1">
						<!-- row -->
						<div class="my-auto">
							<!-- column wrap for logo -->
							<div class="site-branding">
								<?php
								the_custom_logo();
								if (is_front_page() && is_home()) :
								?>
									<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
								<?php
								else :
								?>
									<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
								<?php
								endif;
								$admhousetheme_description = get_bloginfo('description', 'display');
								if ($admhousetheme_description || is_customize_preview()) :
								?>
									<p class="site-description"><?php echo $admhousetheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped 
																?></p>
								<?php endif; ?>
							</div>
						</div>
						<div class="flex-fill my-auto">

							<nav>
								<div class="main-navigation d-flex justify-content-end d-lg-block ">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								</div>
						</div>
						</nav>
						<?php if (is_page($page = '1492')) {
							get_template_part('null');
						} else {
							get_template_part('template-parts/appbanner', 'none');
						}
						?>
						<div class="d-lg-none mt-3 mr-4 ">
							<a href="tel:(208)-856-8336">
								<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="#dc3545" aria-label="phone call" class="bi bi-telephone-fill" viewBox="0 0 16 16">
									<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
								</svg>
							</a>
						</div>
						<button id="trigger" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="mobile"><?php esc_html_e('', 'admhousetheme'); ?><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
							</svg></button>

						<nav id="mobile" class="mobile-menu">
							<div class="container ">
								<div class="row text-center">
									<?php the_custom_logo(); ?>
								</div>
								<div class="mobile-navigation">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								</div>
								<div class="row text-center mt-4">
									<div class="col">
										<a href="/schedule-an-appointment/" class="btn  btn-cta">SCHEDULE NOW</a>
									</div>
								</div>
								<div class="row mt-2 mb-5 text-center">
									<div class="col">
										<a class="btn  btn-cta">Call Us</a>
									</div>
								</div>

							</div>
						</nav>

					</div>
				</div>
			</div>
		</header>
		<div class="hometopmargin">