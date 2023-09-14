<?php

function a2n_css_js_file_calling()
{
    wp_enqueue_style('a2n-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_register_style('custom', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0', 'all');
    wp_register_style('responsive', get_template_directory_uri() . '/css/responsive.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');
    wp_enqueue_style('responsive');


    // jQuery 
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '5.3.0', 'true');
    wp_enqueue_script('app', get_template_directory_uri() . '/js/app.js', array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'a2n_css_js_file_calling');


//  Google Fonts Enqueue

function a2n_add_google_fonts()
{
    wp_enqueue_style('a2n_google_fonts', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Urbanist:wght@300;400;500;600;700;800&display=swap', false);

}
add_action('wp_enqueue_scripts', 'a2n_add_google_fonts');