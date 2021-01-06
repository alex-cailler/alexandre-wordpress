<?php

function alexandre_create_menu()
{
    register_nav_menus([
        'primary' => __('top menu', 'alexandre'),
        'footer-legal' => __('bottom menu', 'alexandre'),
    ]);
}

add_action('init', 'alexandre_create_menu');


function alexandre_navigation_walker()
{
    if ( ! file_exists( get_template_directory() . '/walkers/class-wp-bootstrap-navwalker.php' ) ) {
        return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
    } else {
        require_once get_template_directory() . '/walkers/class-wp-bootstrap-navwalker.php';
    }
}

add_action('init', 'alexandre_navigation_walker');