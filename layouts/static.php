<?php if (get_sub_field('banner')) : ?>
    <div class="pt-5 pb-5" style=" background-image: url('<?php the_sub_field('banner'); ?>');">

        <div class="container p-5">
            <div class="row text-white ">
                <div class="col-12 text-start">

                    <h1 class="display-2 fw-bold"><?php the_title(); ?></h1>

                    <h2><?php the_sub_field('subhead_static'); ?></h2>
                    <hr>
                    <a href="/schedule-appointment/" class="btn btn-cta mt-2">Appointments</a>
                </div>

            </div>

        <?php endif; ?>
        </div>