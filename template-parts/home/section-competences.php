<section class="py-9 section-home__competence">
    <div class="container">

        <div class="row">
            <div class="col-md -5">
                <h1 class="text-secondary"><?= get_field('competences_title') ?></h1>
                <div class="mt-5">
                    <p class="text-secondary"><?= get_field('competences_describe') ?></p>
                </div>
            </div>
            <div class="col-md-7">
                <!-- SPACER -->
            </div>
        </div>

    </div>

    <div class="wrapper-competences">
        <div class="grid-competences">

            <?php if (have_rows('comptetences_array')): ?>
                <?php while (have_rows('comptetences_array')): the_row() ?>

                    <div class="grid-item-competences" style="grid-area: 1 / <?= the_row_index() ?> / auto / auto;">
                        <div class="card shadow d-flex flex-column justify-content-between h-100">
                            <div class="card-body">
                                <?php if( $img = get_sub_field('logo') ): ?>
                                    <?= wp_get_attachment_image($img['id'], 'small', true) ?>
                                <?php endif; ?>
                                <div class="mt-4">
                                    <span class="text-size-25 font-weight-600 text-secondary"><?= get_sub_field('title') ?></span>
                                    <p class="text-size-15 mt-1" style="color: #807BA0"><?= get_sub_field('describe') ?></p>
                                </div>
                                <div class="d-flex justify-content-end mt-5">
                                    <a href="#" class="text-size-15 text-decoration-none text-primary font-weight-600">En savoir plus <span class="ml-5">></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</section>