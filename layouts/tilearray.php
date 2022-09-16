<?php if (get_sub_field('tile_back')) : ?>
    <div style="background-image: url('<?php the_sub_field('tile_back'); ?>');">
        <div class="container  py-5">
            <div class="row pb-2">
                <h2><?php the_sub_field('arrayheader'); ?></h2>
            </div>
            <div class="row d-flex justify-content-center row-cols-2 row-cols-lg-6 gx-2 gx-lg-3">
                <?php if (have_rows('content_tiles')) : ?>
                    <?php while (have_rows('content_tiles')) : the_row(); ?>
                        <div class="col">
                            <div class="card shadow-lg my-1 p-4">
                                <?php
                                $image = get_sub_field('icon');
                                if (!empty($image)) : ?>
                                    <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php the_sub_field('label'); ?></h5>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php else : ?> <!-- Print Tile Array Without Image Background-->
        <div class="container  py-5">
            <div class="row pb-2">
                <h2><?php the_sub_field('arrayheader'); ?></h2>
            </div>
            <div class="row d-flex justify-content-center row-cols-2 row-cols-lg-6 gx-2 gx-lg-3">
                <?php if (have_rows('content_tiles')) : ?>
                    <?php while (have_rows('content_tiles')) : the_row(); ?>
                        <div class="col">
                            <div class="card shadow-lg my-1 p-4">
                                <?php
                                $image = get_sub_field('icon');
                                if (!empty($image)) : ?>
                                    <img class="card-img-top" src=" <?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                <?php endif; ?>
                                <div class="card-body text-center">
                                    <h5 class="card-title"><?php the_sub_field('label'); ?></h5>

                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
    </div>