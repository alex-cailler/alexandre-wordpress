<section class="py-9">
    <div class="container">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <a class="btn btn-primary text-white rounded-pill" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span><i class="fas fa-chevron-left"></i></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="btn btn-primary text-white rounded-pill" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span><i class="fas fa-chevron-right"></i></span>
                <span class="visually-hidden">Next</span>
            </a>
            <div class="carousel-inner">
                <?php if ( have_rows('testimonials_array') ): ?>
                    <?php while ( have_rows('testimonials_array') ): the_row()  ?>

                        <div class="carousel-item <?= get_row_index() == 1 ? 'active' : ''  ?>">
                            <div class="w-100 row" style="max-height: 600px">
                                <div class="col-lg-6 d-flex align-items-center">
                                    <div>
                                        <span><i class="fas fa-quote-left text-secondary"></i></span>
                                        <div class="position-relative" style="width: 400px">
                                            <p class="text-muted text-size-15" style="height: 12em; line-height: 1.5em; overflow: hidden;
                                                white-space: pre-wrap;
                                                text-overflow: ellipsis;
                                                width: 100%;
                                            "><?= get_sub_field('author_testimony'); ?></p>
                                            <?php if( $url = get_sub_field('author_url') ): ?>
                                                <a href="<?= $url ?>"><?php _e('de', 'alexandre');?> <?= get_sub_field('author_identity') ?></a>
                                            <?php else: ?>
                                                <span class="d-bloc text-primary text-size-20 font-weight-600"><?php _e('de', 'alexandre');?> <?= get_sub_field('author_identity') ?></span>
                                            <?php endif; ?>
                                        </div>
                                        <span><i class="fas fa-quote-right text-secondary"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-6 d-flex justify-content-center align-items-center">

                                    <div class="rounded-pill overflow-hidden shadow-sm" style="width: 250px; height: 250px;">
                                        <?php if ( $img = get_sub_field('image_author') ): ?>
                                            <?= wp_get_attachment_image($img['id'], 'small', false, [
                                                'alt' => 'image testimonials',
                                                'style' => 'object-fit: cover; object-position: center',
                                                'class' => 'h-100 w-100'
                                            ]) ?>
                                        <?php endif; ?>
                                    </div>

                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>