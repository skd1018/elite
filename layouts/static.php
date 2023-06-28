<?php if (get_sub_field('banner')) : ?>
    <div class="pt-5 pb-5 plax d-flex align-items-center " style=" height: 800px; background-image: url('<?php the_sub_field('banner'); ?>');">

        <div class="container fade">

            <div class="row d-flex align-items-center text-white ">

                <div class="col-12 col-sm-6  text-start">
                    <h1 class="display-2 text-cta fw-bold"><?php the_title(); ?></h1>
                    <h2><?php the_sub_field('subhead_static'); ?></h2>


                    <a href="" class="btn btn-outline-cta mt-2 border-3  fw-bold ">Lorem Ipsum</a>
                    <a href="/directions/" class="btn btn-outline-cta mt-2 border-3  fw-bold ">Lorem Ipsum</a>

                </div>
                <div class="col-12 col-sm-6 text-start">
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        <?php endif; ?>
        </div>
    </div>