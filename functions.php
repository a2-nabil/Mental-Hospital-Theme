<?php
/*
 * My theme Function
 */

//  All Default functions here
include_once('inc/default.php');

// Theme CSS and jQuery File Calling 
include_once('inc/enqueue.php');

// Theme function
include_once('inc/theme_function.php');

// Menu Register function
include_once('inc/menu_register.php');

// Widgets Register
include_once('inc/widgets_register.php');


// Create a Custom Post Type
function custom_projects()
{
    register_post_type(
        'project',
        array(
            'labels' => array(
                'name' => ('Projects'),
                'singular_name' => ('project'),
                'add_new' => ('Add New Project'),
                'add_new_item' => ('Add New Project'),
                'edit_item' => ('Edit project'),
                'new_item' => ('New project'),
                'view_item' => ('View project'),
                'not_found' => ('Sorry, we cound\'n find the project you are looking for.'),
            ),
            'menu_icon' => 'dashicons-networking',
            'public' => true,
            'publicly_queryable' => true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'has_archive' => true,
            'hierarchial' => true,
            'show_ui' => true,
            'capability_type' => 'post',
            'rewrite' => array('slag' => 'project'),
            'supports' => array('title', 'thumbnail', 'editor'),
        )
    );
    add_theme_support('post-thumbnails');
}

add_action('init', 'custom_projects');



// Thumbnil Image Area
add_theme_support('post-thumbnails', array('page', 'post', 'project', ));
add_image_size('project', 380, 300, true);
add_image_size('post-thumbnails', 970, 350, true);