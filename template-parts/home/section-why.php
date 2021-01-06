<section class="pb-9">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <?php if($img = get_field('why_image')): ?>
                    <?= wp_get_attachment_image($img['id'], 'small') ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-5">
                <?php if (have_rows('why_reasons')): ?>
                    <?php while( have_rows('why_reasons') ): the_row() ?>

                        <div class="d-flex mt-5">
                            <div>
                                <?php if($img = get_sub_field('logo')): ?>
                                    <div class="rounded-pill d-flex justify-content-center align-items-center" style="height: 60px; width: 60px; box-shadow: 0px 20px 30px 4px rgb(236 236 236);">
                                        <?= wp_get_attachment_image($img['id'], 'small') ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="ms-3">
                                <h3 class="text-size-25 text-secondary"><?= get_sub_field('title') ?></h3>
                                <p class="text-size-15 mt-2 text-dark"><?= get_sub_field('describe') ?></p>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
