<?php if (get_sub_field('background_block')) : ?>
    <div class="pt-5 pb-5 " style="background-image: url('<?php the_sub_field('background_block'); ?>');">
        <div class="container">
            <div class="row my-auto mb-3">
                <div class="col-12 col-sm-6 my-auto">
                    <?php the_sub_field('contentwysiwyg'); ?>
                </div>
                <div class="col-12 col-sm-6 fade text-white my-auto">
                <?php the_sub_field('contentblock'); ?>
                <a href="/directions/" class="btn btn-lg mb-4 btn-secondary  fw-bold  shadow">DIRECTIONS</a>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>
    </div>
<?php endif; ?>