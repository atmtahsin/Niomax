<?php


add_action('wp_enqueue_scripts', 'niomax_assets');

function niomax_assets(){
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('splide-css', get_template_directory_uri() .'/assets/css/splide.min.css');

    wp_enqueue_script('splide-js',get_template_directory_uri() .'/assets/js/splide.min.js',array(), null, true);
    wp_enqueue_script('autoscroll-js', get_template_directory_uri() .'/assets/js/splide-extension-auto-scroll.min.js',array('splide-js'), null, true);
    wp_enqueue_script('main-js', get_template_directory_uri() .'/assets/js/main-js.js',array('splide-js'), null,true);
}


add_action('init', 'niomax_post_types');

function niomax_post_types(){
    register_post_type('Features', array(
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Featured Section',
            'add_new_item' => 'Add New Featured Section',
            'edit_item' => 'Edit Featured Section',
            'all_items' => 'All Features',
            'singular_name' => 'Features'
        ),
        'menu_icon' => 'dashicons-screenoptions'
    ));
}