<?php
    // Load CSS 
    function load_stylesheets(){
        wp_register_style('style', get_template_directory_uri().'/style.css', '', 1.0, 'all');
        wp_enqueue_style('style');
    }
    add_action('wp_enqueue_scripts', 'load_stylesheets');

    // Load JavaScript
    function load_javascript(){
        wp_register_script('app', get_template_directory_uri().'/app.js', 'jquery', 1.0, true);
        wp_enqueue_script('app');
    }
    add_action('wp_enqueue_scripts', 'load_javascript');

    // Add support
    add_theme_support('menus');
    add_theme_support( 'post-thumbnails' );

    // Register menus
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'theme')
        )
    );

    // Add image sizes
    add_image_size( 'post_image', 1100, 500, false );

    // Add a widget
    register_sidebar( 
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'class' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    );

    register_sidebar( 
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'class' => '',
            'before_title' => '<h4>',
            'after_title' => '</h4>'
        )
    );
?>