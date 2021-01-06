<section class="pb-9 gallery">
    <?php $images = get_field('gallery'); ?>
    <div class="container">
        <h1 class="text-secondary">Explore my <span class="text-primary">gallery</span>!</h1>
        <p class="text-secondary mt-3 mb-5">
            Retrouver mes images photoshop ainsi que certain de mes projets.
        </p>
        <div class="d-flex align-items-center">
            <div class="control">
                <button type="button" class="gallery-control prev btn-link mx-5">
                    <img src="<?= get_template_directory_uri() . '/assets/svg/caret_left.svg'?>" alt="précédent">
                </button>
            </div>
            <div class="preview-images">

                <img alt="gallery image preview" src="<?= esc_url($images[0]['url']) ?>" />
            </div>
            <div class="control">
                <button type="button" class="gallery-control next btn-link mx-5">
                    <img src="<?= get_template_directory_uri() . '/assets/svg/caret_right.svg'?>" alt="suivant">
                </button>
            </div>
        </div>
        <?php if( $images ): ?>
            <ul class="p-0 overflow-auto mt-5">
                <?php foreach( $images as $key=>$image ): ?>
                    <li class="d-inline-block gallery-images overflow-hidden mx-3 <?= $key == 0 ? 'active' : '' ?>">
                        <?= wp_get_attachment_image( $image['id'], 'small', false, [
                            'alt' => 'image gallery alexandre'
                        ]); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</section>
