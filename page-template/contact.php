<?php
/**
 * Template Name: contact
 */

get_header(); ?>

<main id="main" class="<?= get_class() ?>">

    <?php get_template_part('template-parts/contact/section', 'form'); ?>

    <?php get_template_part('template-parts/home/section', 'portfolio'); ?>

</main>

<?php get_footer(); ?>
