<?php get_header() ?>

<main id="<?php the_ID(); ?> main" <?php post_class(); ?>>

    <?php get_template_part('template-parts/home/section', 'intro'); ?>

    <?php get_template_part('template-parts/home/section', 'competences'); ?>

    <?php get_template_part('template-parts/home/section', 'gallery'); ?>

    <?php get_template_part('template-parts/home/section', 'why'); ?>

    <?php get_template_part('template-parts/home/section', 'testimonial'); ?>

    <?php get_template_part('template-parts/home/section', 'portfolio'); ?>

</main>

<?php get_footer() ?>
