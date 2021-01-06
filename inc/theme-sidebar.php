<?php
function alexandre_sidebar()
{
    register_sidebar([
        'name'          => 'Footer Home',
        'id'            => "sidebar-1",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ]);

    register_sidebar([
        'name'          => 'Footer Projects',
        'id'            => "sidebar-2",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ]);

    register_sidebar([
        'name'          => 'Footer Blog',
        'id'            => "sidebar-3",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ]);

    register_sidebar([
        'name'          => 'Footer Legal Mention',
        'id'            => "sidebar-4",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ]);
}

add_action('init', 'alexandre_sidebar');