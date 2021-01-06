<footer id="footer">
    <img src="<?= get_template_directory_uri()?>/assets/svg/footer_vector.svg" class="img-fluid position-relative" style="width: 100%; top: 1px" />
    <div class="bg-secondary pt-3 pb-8">
        <div class="footer-widgets">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <h1 class="text-white text-size-55">
                            <?= get_field('footer_title', 'option') ?>
                        </h1>
                    </div>
                    <div class="col-md-6 d-flex justify-content-center align-items-center">
                        <div>
                            <a href="<?= get_field('footer_contact_link', 'option') ?>" class="btn btn-white text-primary"><?php _e('Me contacter', 'alexandre'); ?></a>
                        </div>
                    </div>
                </div>

                <div class="row footer-legal mt-5">
                    <div class="col-md-3 text-white order-0">
                        <?php dynamic_sidebar('sidebar-1') ?>
                    </div>
                    <div class="col-md-3 text-white order-0">
                        <?php dynamic_sidebar('sidebar-2') ?>
                    </div>
                    <div class="col-md-3 text-white order-1">
                        <?php dynamic_sidebar('sidebar-3') ?>
                    </div>
                    <div class="col-md-3 text-white order-1">
                        <?php dynamic_sidebar('sidebar-4') ?>
                    </div>
                </div>
                <div class="row justify-content-between align-items-center mt-md-9 mt-5">
                    <div class="col-md-6 order-2 order-lg-1 footer-copyright text-size-15 mt-5 mt-lg-0">
                        <span class="text-white">&copy;<?= get_field('footer_copyright', 'option') ?></span>
                    </div>
                    <div class="col-md-6 order-1 order-lg-2 footer-social justify-content-lg-end d-flex">
                        <?php if ( have_rows('footer_socials_network', 'option') ): ?>
                            <?php while( have_rows('footer_socials_network', 'option') ): the_row() ?>
                                <a href="<?= get_sub_field('social_link') ?>" class="text-white text-decoration-none text-size-15">
                                    <i class=" <?= get_sub_field('icon') ?> text-size-30"></i>
                                    <span class="ms-1 me-3"><?= get_sub_field('libel') ?></span>
                                </a>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</body>
</html>
