<?php 
    // Let's Play With Logic

    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    function scriptstylehead(){
        wp_enqueue_style('main',get_stylesheet_uri(),false);
        //wp_enqueue_style('roboto','https://fonts.googleapis.com/css?family=Roboto:400,700',false);
        wp_enqueue_style('merryweather','https://fonts.googleapis.com/css?family=Merriweather:400,700');
        wp_enqueue_style('lato',"https://fonts.googleapis.com/css?family=Lato:400,700");
        wp_enqueue_script('jquerx','https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js',false);
    }
    add_action('wp_enqueue_scripts','scriptstylehead');

    function nav_menus(){
        register_nav_menus(
            array(
                'topmenu' => __('Top Menu'),
                'footermenu' => __('Footer Menu')
            )
        );
    }
    add_action('init','nav_menus');
?>