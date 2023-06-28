<?php if (get_sub_field('arrayback')) : ?>
    <div style="background-image: url('<?php the_sub_field('arrayback'); ?>');">
        <div class="container pt-5">

            <div class="row pt-3  d-flex justify-content-center row-cols-1 row-cols-xl-3">
                <?php if (have_rows('content_tiles')) : ?>
                    <?php while (have_rows('content_tiles')) : the_row(); ?>
                        <div class="col d-flex  justify-content-center">
                            <div style="width:40em; ;" class="card mt-4  wrap  mb-4 rounded-3">
                                <div class="card-img-top  my-auto text-center">
                                    <?php
                                    $image = get_sub_field('icon');
                                    if (!empty($image)) : ?>
                                        <img class="p-3" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                </div>
                                <div class="card-body text-center">
                                    <p style="text-decoration:none;" class="sfs-6 fs-5 fw-bold"><?php the_sub_field('label'); ?></p>
                                    <p><?php the_sub_field('array_content'); ?></p>

                                </div>

                                <?php
                                $link = get_sub_field('link');
                                if ($link) : ?>
                                    <a href="<?php echo esc_url($link); ?>" class="stretched-link"><?php the_sub_field('btntext'); ?></a>
                                <?php endif; ?>

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php else : ?>

        <div class="container mt-5">

            <div class="row  d-flex justify-content-center row-cols-1 row-cols-lg-3">
                <?php if (have_rows('content_tiles')) : ?>
                    <?php while (have_rows('content_tiles')) : the_row(); ?>
                        <div class="col d-flex  justify-content-center">
                            <div style="width:40em; ;" class="card mt-4 shadow mb-4 border-0 rounded-3 ">
                                <div class="container-fluid bg-grey">

                                    <div class="row py-2">

                                        <div class="my-auto  col-6">
                                            <div class="text-secondary fw-bold"><?php the_sub_field('card_header');?></div>
                                        </div>

                                        <div class="col-6">
                                            <div class="card-img-top  text-end">
                                                <?php
                                                $image = get_sub_field('icon');
                                                if (!empty($image)) : ?>
                                                    <img src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <p class="sfs-6 fw-bold"><?php the_sub_field('label'); ?></p>
                                    <hr class="bg-cta">
                                    <p><?php the_sub_field('array_content'); ?></p>
                                    <?php
                                $link = get_sub_field('link');
                                if ($link) : ?>
                                    <a href="<?php echo esc_url($link); ?>" class="btn btn-cta"><?php the_sub_field('btntext'); ?></a>
                                <?php endif; ?>
                                </div>

                             

                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif ?>