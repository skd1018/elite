<?php if (get_sub_field('mobile_background')) : ?>
	<div style="background-image: url('<?php the_sub_field('mobile_background'); ?>');">
		<div class="video-overlay vidpadding">
			<div class="container p-5">
				<div class="row text-white ">
					<div class="col-12 text-start">

						<h1 class="display-2 fw-bold"><?php the_title(); ?></h1>

						<h2><?php the_sub_field('subhead'); ?></h2>
						<hr>
					<a href="/schedule-appointment/" class="btn btn-cta mt-2">Appointments</a>
					</div>
					
				</div>
			
			<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="d-none d-lg-block embed-responsive embed-responsive-4by3 videoheight">
		<video muted loop autoplay class="embed-responsive-item" src="/wp-content/uploads/2022/09/homepage-video-trimmed_2.mp4" allowfullscreen>
		</video>
	</div>