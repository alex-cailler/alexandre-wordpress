<section class="section-home__intro pt-8">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center">

                <div>
                    <h1 class="text-secondary slideUp"><?= get_field('intro_title'); ?></h1>
                    <div class="mt-3 mb-5">
                        <p style="color: #807BA0"><?= get_field('intro_describe') ?></p>
                    </div>
                    <a href="<?= get_field('intro_button_link') ?>" class="btn btn-primary text-white"><?= get_field('intro_button_text') ?></a>
                </div>

            </div>
            <div class="col-lg-6">

                <?php if ($img = get_field('intro_image') ): ?>
                    <?= wp_get_attachment_image($img['id'], 'small', false, ['alt' => 'alexandre - profile image', 'style' => 'width: 100%; height: 100%']) ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

</section>