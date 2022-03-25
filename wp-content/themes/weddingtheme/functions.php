<?php

    function load_css(){
        wp_register_style('bootstrapcss', get_template_directory_uri() .  '/css/bootstrap.min.css', array(), false, 'all');
        wp_enqueue_style('bootstrapcss');

        wp_register_style('main', get_template_directory_uri() .  '/css/main.css', array(), false, 'all');
        wp_enqueue_style('main');

    }
    add_action('wp_enqueue_scripts', 'load_css');
    function load_js(){
        wp_enqueue_script('jquery');
        wp_register_script('booststrapjs', get_template_directory_uri(). '/js/bootstrap.min.js', 'jquery', false, true);
        wp_enqueue_script('bootstrapjs');
    }
    add_action('wp_enqueue_scripts', 'load_js');

    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');

    register_nav_menus(
        array(
            'top-menu' => 'Top Menu Location',
            'mobile-menu' => 'Mobile Menu Location',
        )
    );
    
    if (function_exists('add_image_size')){
        add_image_size('blog-large', 800, 300, false);
        add_image_size('blog-small', 300, 200, true);
    }

    function my_sidebars(){
        register_sidebar(
            array(
                'name'=> 'Page Sidebar',
                'id'=> 'page-sidebar',
                'before_title'=>'<h3 class="widget-title">',
                'after_title'=>'</h3>'
            )
        );
        register_sidebar(
            array(
                'name'=> 'Blog Sidebar',
                'id'=> 'blog-sidebar',
                'before_title'=>'<h3 class="widget-title">',
                'after_title'=>'</h3>'
            )
        );
    }
    add_action('widgets_init', 'my_sidebars');

    function invitation_post_type(){
        $args = array (
            'labels'=> array(
                'name'=>'Invitations',
                'singular_name'=>'Invitation'
            ),
            'hierarchical'=>false,
            'public'=>true,
            'has_archive'=>true,
            'menu_icon'=>'dashicons-email-alt2
            ',
            'supports'=>array('title', 'editor', 'thumbnail', 'custom-fields'),
        );
        register_post_type('invitation', $args);
    }
    add_action('init','invitation_post_type');

    function invitation_taxonomy(){
        $args = array (
            'labels'=> array(
                'name'=> 'Brands',
                'singular_name'=>'Brand'
            ),
            'public'=>true,
            'hierarchical'=>false
        );
        register_taxonomy('invitations', array('invitation'), $args);

    }
    add_action('init','invitation_taxonomy')

?>