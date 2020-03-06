<?php

    require_once('class-wp-bootstrap-navwalker.php');

    function load_stylesheets(){

        wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrap');

        wp_register_style('mdbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/css/mdb.min.css', array(), false, 'all');
        wp_enqueue_style('mdbootstrap');

        wp_register_style('mdbootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css', array(), false, 'all');
        wp_enqueue_style('mdbootstrap');
        
        wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
        wp_enqueue_style('stylesheet');

        wp_enqueue_style( 'custom-fa', 'https://use.fontawesome.com/releases/v5.0.6/css/all.css' );

    }
    add_action( 'wp_enqueue_scripts', 'load_stylesheets' );

    function load_js(){
        wp_enqueue_script( 'jquery');

        wp_register_script('popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js', array('jquery'));
        wp_enqueue_script( 'popperjs');

        wp_register_script('bootstrapjsbundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array('jquery'));
        wp_enqueue_script( 'bootstrapjsbundle');

        wp_register_script('mdbootstrapjsbundle', 'https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.14.0/js/mdb.min.js', array('jquery'));
        wp_enqueue_script( 'mdbootstrapjsbundle');

        wp_register_script('fullpagejs', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.8/fullpage.min.js');
        wp_enqueue_script( 'fullpagejs');

        wp_register_script('scripts', get_template_directory_uri() . '/js/app.js', ' ', null, true);
        wp_enqueue_script( 'scripts' );
    }
    add_action('wp_enqueue_scripts', 'load_js');

    add_theme_support( 'menus' );
    add_theme_support( 'widgets' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'sidebar' );


    add_image_size( 'front-thumb', 368, 255);

    register_nav_menus( array(
        'top-menu' => __('top-menu', 'theme'),
        'footer-menu' => __('footer-menu', 'theme')
    ));

?>