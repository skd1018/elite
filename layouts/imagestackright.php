<?php if (get_sub_field('stackback')) : ?>
    <div class="py-4 " style=" background-image: url('<?php the_sub_field('stackback'); ?>');">

        <div class="container-fluid  py-5">
            <div class="row d-flex justify-content-center">
                <div class=" col-12  my-auto col-lg-3">
                    <div class="text-center text-sm-start">
                        <h2 class="display-3 text-cta fw-bold"><?php the_sub_field('stackhead'); ?></h2>
                    </div>
                    <?php the_sub_field('stackcontent'); ?>
                    
                </div>
                <div class="col-auto mb-2 ">

                    <div style="width:17rem;" class="card  shadow-lg h-90 my-1 fade rounded-3">
                        <?php
                        $image = get_sub_field('square_2');
                        if (!empty($image)) : ?>
                            <img class="card-img-top rounded-3" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="card-body text-center">
                        <h3><?php the_sub_field('label_2'); ?></h3>
                        <div class="text-secondary"><?php the_sub_field('contact_info_1')?></div>
                            <?php
                            $link = get_sub_field('card_link_2');
                            if ($link) : ?>
                                <a style="text-decoration:none;" href="<?php echo esc_url($link); ?>" class="btn btn-primary shadow card-title fw-bold">View Location</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-auto ">
                    <div style="width:17rem;" class="card  shadow h-90 my-1 fade rounded-3">
                        <?php
                        $image = get_sub_field('square_3');
                        if (!empty($image)) : ?>
                            <img class="card-img-top rounded-3" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="card-body text-center">
                        <h3><?php the_sub_field('label_3'); ?></h3>
                        <div class="text-secondary"><?php the_sub_field('contact_info_2')?></div>
                            <?php
                            $link = get_sub_field('card_link_3');
                            if ($link) : ?>
                                <a style="text-decoration:none;" href="<?php echo esc_url($link); ?>" class="btn btn-primary shadow card-title fw-bold">View Location</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <div style="width:17rem;" class="card shadow-lg h-90 my-1 fade  rounded-3">
                        <?php
                        $image = get_sub_field('square_1');
                        if (!empty($image)) : ?>
                            <img class="card-img-top rounded-3" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        <div class="card-body text-center">
                        <h3><?php the_sub_field('label_1'); ?></h3>
                        <div class="text-secondary"><?php the_sub_field('contact_info_3')?></div>
                            <?php
                            $link = get_sub_field('card_link_1');
                            if ($link) : ?>
                                <a href="<?php echo esc_url($link); ?>" class=" btn btn-primary shadow card-title fw-bold">View Location</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endif ?>