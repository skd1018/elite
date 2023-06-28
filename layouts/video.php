<?php if (get_sub_field('mobile_background')) : ?>
	<div style="background-image: url('<?php the_sub_field('mobile_background'); ?>');">
		<div class="video-overlay fade vidpadding">

			<div class="container  p-5">
				<div class="row text-white ">
					<div class="col-12 text-start">
						<h1 class="display-2 text-white"><?php the_title(); ?>
							<div class="fw-bold text-cta">FOR AUTO REPAIR SERVICE </div>
						</h1>
					</div>
					<div >
						<h2><?php the_sub_field('sub_head'); ?> </h2>
						
					</div>
					<hr>
					<div class="text-center text-sm-start">
						<a href="/locations/" class="btn  border-white border-3 text-grey fw-bold btn-secondary mt-2">REQUEST APPOINTMENT</a>
						<a href="/shop-for-tires/" class="btn text-grey border-white border-3 fw-bold btn-secondary mt-2">SHOP TIRES</a>
						<a href="/locations/" class="btn  text-grey border-white border-3 fw-bold btn-secondary mt-2">DIRECTIONS</a>
						
					</div>
				<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="d-none d-lg-block embed-responsive embed-responsive-4by3 videoheight">

			<video id="video1" preload="none" muted loop class="embed-responsive-item" src="/wp-content/uploads/2022/12/BBR4qxZCRWOOu9cgteRd_ToledoAutoCare2_Trim-v.mp4" allowfullscreen>
				<script>
					var videoLocation = document.getElementById("video1");
					window.onload = addAutoplay();

					function addAutoplay() {
						if (window.innerWidth > 992) {
							videoLocation.setAttribute("autoplay", "");
						};
					}
				</script>
			</video>

		</div>
	</div>