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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css">

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site ">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'admhousetheme'); ?></a>

		<header id="masthead" class="site-header bg-white">
			<div id="ctabar" class="container-fluid py-2  border-bottom d-none d-lg-block ">
				<div class="container-fluid ">
					<div class="row">
						<div class=" main-navigation">
							<?php
							if (is_user_logged_in()) {
								wp_nav_menu(
									array(
										'menu' => 'logout-menu'
									)
								);
							} else {
								wp_nav_menu(
									array(
										'theme_location' => 'top-menu',

									)

								);
							}
							?>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid bg-white shadow d-none d-lg-block">
				<div id="" class="container-fluid">
					<div class="d-flex flex-row mr-1 ml-1">
						<!-- row -->
						<div class="my-auto">
							<!-- column wrap for logo -->
							<div class="site-branding ">
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
								<div class="main-navigation">
									<?php

									if (current_user_can('read_topshop')) {
										wp_nav_menu(
											array(
												'menu' => 'TS360'

											)
										);
									} else if (current_user_can('read_proservice')) {
										wp_nav_menu(array('menu' => 'PSHome'));
									} else {
										wp_nav_menu(
											array(
												'theme_location' => 'menu-1',
												'menu_id'        => 'primary-menu',
											)
										);
									}
									?>

								</div>

						</div>
						</nav>
					</div>
				</div>
			</div>
			<!-- Begin Mobile Header -->
			<div class="container-fluid   mobilelogo shadow">
				<div id="" class="row">
					<div class="col-3 m-auto text-center">
						<a href="">
							<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#000000" class="bi bi-telephone-fill" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
							</svg>
						</a>
					</div>
					<div class="col-6 text-center">
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
					<div class="col-3 d-flex justify-content-center m-auto">
						<button id="trigger" class="menu-toggle" aria-controls="primary-menu" aria-expanded="false" aria-label="mobile"><?php esc_html_e('', 'admhousetheme'); ?><svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
								<path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
							</svg></button>

						<nav id="mobile" class="mobile-menu">
							<div class="container ">

								<div id="mobileNav" class="mobile-navigation">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'mobile-menu',
											'menu_id'        => 'mobile',
										)
									);
									?>
								</div>


							</div>
						</nav>
					</div>
					<!--
					CTA Bar/
					<div class="container-fluid d-block d-lg-none bg-cta float">
						<?php if (is_page($page = '1092')) {
							get_template_part('null');
						} else {
							get_template_part('template-parts/appbanner', 'none');
						}
						?> 
					</div> -->
				</div>
			</div>


		</header>
		<main id="primary" class="hometopmargin site-main">
			<div>