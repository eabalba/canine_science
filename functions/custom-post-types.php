<?php 

// custom post type
function create_post_type_custom()
{
    register_post_type('custom', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Custom Posts', 'Custom'), // Rename these to suit
            'singular_name' => __('Custom Post', 'Custom'),
            'add_new' => __('Add New Post', 'Custom'),
            'add_new_item' => __('Add New Custom Posts', 'Custom'),
            'edit' => __('Edit', 'Custom'),
            'edit_item' => __('Edit Custom Post', 'Custom'),
            'new_item' => __('New Custom Post', 'Custom'),
            'view' => __('View Custom Posts', 'Custom'),
            'view_item' => __('View Custom Post', 'Custom'),
            'search_items' => __('Search Custom Posts', 'Custom'),
            'not_found' => __('No Custom Posts found', 'Custom'),
            'not_found_in_trash' => __('No Custom Posts found in Trash', 'Custom')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'supports' => array(
            'title',
            'editor',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
		'show_in_rest' => true, // Add gutenberg
        'menu_icon'           => 'dashicons-welcome-widgets-menus',
    ));
    
}
//add_action('init', 'create_post_type_custom');

// universal post type
function create_post_type_universal()
{
    register_post_type('universal', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Universal Blocks', 'universal'), // Rename these to suit
            'singular_name' => __('Universal Block', 'universal'),
            'add_new' => __('Add New Block', 'universal'),
            'add_new_item' => __('Add New Universal Blocks', 'universal'),
            'edit' => __('Edit', 'universal'),
            'edit_item' => __('Edit Universal Block', 'universal'),
            'new_item' => __('New Universal Block', 'universal'),
            'view' => __('View Universal Blocks', 'universal'),
            'view_item' => __('View Universal Block', 'universal'),
            'search_items' => __('Search Universal Blocks', 'universal'),
            'not_found' => __('No Universal Blocks found', 'universal'),
            'not_found_in_trash' => __('No Universal Blocks found in Trash', 'universal')
        ),
        'public' => true,
        'hierarchical' => false, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => false,
        'supports' => array(
            'title',
            'editor',
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
		'show_in_rest' => true, // Add gutenberg
        'menu_icon'           => 'dashicons-welcome-widgets-menus',
    ));
}
add_action('init', 'create_post_type_universal');