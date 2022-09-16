<?php if (get_sub_field('stackback')) : ?>
    <div style="background-image: url('<?php the_sub_field('stackback'); ?>');">
        <div class="container py-3">
            <div class="row">
                <div class=" col-12 my-auto col-lg-7">
                    <h2 class="display-3 fw-bold"><?php the_sub_field('stackhead'); ?></h2>
                    <p><?php the_sub_field('stackcontent'); ?></p>
                    <a href="" class=" mb-4 btn btn-cta">Call To Action</a>
                </div>
                <div class="col-12 col-lg-5 mx-auto my-auto">
                    <div class="row justify-content-center row-cols-2 gx-2 gx-lg-3">
                        <div class="col">

                            <div class="card shadow-lg my-1 p-4" >
                                <?php
                                $image = get_sub_field('square_1');
                                if (!empty($image)) : ?>
                                    <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php the_sub_field('label_1'); ?></h5>
                                </div>
                            </div>

                        </div>
                        <div class="col">

                            <div class="card shadow-lg my-1 p-4" >
                                <?php
                                $image = get_sub_field('square_2');
                                if (!empty($image)) : ?>
                                    <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php the_sub_field('label_2'); ?></h5>
                                </div>
                            </div>

                        </div>


                        <div class="col">
                            <div class="card shadow-lg my-1 p-4" >
                                <?php
                                $image = get_sub_field('square_3');
                                if (!empty($image)) : ?>
                                    <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php the_sub_field('label_3'); ?></h5>
                                </div>
                            </div>

                        </div>
                        <div class="col">

                            <div class="card shadow-lg my-1 p-4" >
                                <?php
                                $image = get_sub_field('square_4');
                                if (!empty($image)) : ?>
                                    <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php the_sub_field('label_4'); ?></h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container py-3">
            <div class="row">
                <div class=" col-12 my-auto col-lg-6">
                    <h2 class="display-3 fw-bold"><?php the_sub_field('stackhead'); ?></h2>
                    <p><?php the_sub_field('stackcontent'); ?></p>
                    <a href="" class="btn btn-cta">Call To Action</a>
                </div>
                <div class="col-12 col-lg-6">
                    <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">

                        </div>
                        <div class="col-sm-2">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif ?>

    </div>
    </div>