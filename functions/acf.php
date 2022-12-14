<?php

// Custom gutenberg block category
 function add_custom_gutenberg_category($categories){
    return array_merge($categories, array(
        array(
            'slug' => 'bamboo_nine',
            'title' => __('Bamboo Nine', 'bamboo_nine'),
            'icon' => 'null'
        )
    ));
}
add_filter('block_categories', 'add_custom_gutenberg_category', 10, 2);

// Register ACF fields  
function my_acf_init() {
    // check function exists
    if( function_exists('acf_register_block') ) {

        acf_register_block(array(
            'name'              => 'landing-hero',
            'title'             => __('Landing Pages Hero'),
            'description'       => __('A cover image with H1'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'cover-image',
            'keywords'          => array( 'landing', 'hero', 'cover'),
            'mode'              => 'edit',
        ));
        acf_register_block(array(
            'name'              => 'gallery-and-text',
            'title'             => __('Gallery and Text'),
            'description'       => __('Block with a text and gallery column'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'images-alt',
            'keywords'          => array( 'gallery', 'text'),
            'mode'              => 'edit',
        )); 
        acf_register_block(array(
            'name'              => 'teachers-profile',
            'title'             => __('Teachers Profile'),
            'description'       => __('A block with teachers video, image, and profile'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'businessperson',
            'keywords'          => array( 'teacher', 'profile'),
            'mode'              => 'edit',
        )); 
        acf_register_block(array(
            'name'              => 'cover-image',
            'title'             => __('Cover Image'),
            'description'       => __('A block with an image background'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'format-image',
            'keywords'          => array( 'cover', 'image'),
            'mode'              => 'edit',
            'supports'		=> [
                'color'	=> [
                    'gradients' => false
                ]
            ]
        )); 
        acf_register_block(array(
            'name'              => 'home-hero',
            'title'             => __('Home Page Hero'),
            'description'       => __('Hero block for the home page'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'cover-image',
            'keywords'          => array( 'home', 'hero', 'cover', 'image'),
            'mode'              => 'edit',
        )); 
        acf_register_block(array(
            'name'              => 'teachers-cards',
            'title'             => __('Teachers Cards'),
            'description'       => __('Outputs cards with teachers image and info.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'index-card',
            'keywords'          => array( 'teacher', 'card'),
            'mode'              => 'edit',
        ));
        acf_register_block(array(
            'name'              => 'membership-cards',
            'title'             => __('Membership Cards'),
            'description'       => __('Outputs cards with coloured titles and borders.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'columns',
            'keywords'          => array( 'column', 'card' , 'membership'),
            'mode'              => 'edit',
        )); 
        acf_register_block(array(
            'name'              => 'contact-columns',
            'title'             => __('Contact Columns'),
            'description'       => __('Output 2 columns with text and contact form'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'columns',
            'keywords'          => array( 'column', 'contact'),
            'mode'              => 'edit',
        )); 
        acf_register_block(array(
            'name'              => 'post-aside-cta',
            'title'             => __('Post Aside CTA'),
            'description'       => __('A CTA block that appears on the side section of a post.'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'button',
            'keywords'          => array( 'post', 'aside', 'cta'),
            'mode'              => 'edit',
        )); 
        acf_register_block(array(
            'name'              => 'webinar-host',
            'title'             => __('Webinar Host Details'),
            'description'       => __('Areas for an image and some text about the host of the webinar advertised'),
            'render_callback'   => 'my_acf_block_render_callback',
            'category'          => 'bamboo_nine',
            'icon'              => 'nametag',
            'keywords'          => array( 'webinar', 'host', 'presenter', 'avatar', 'author'),
            'mode'              => 'edit',
        )); 
    }
}
add_action('acf/init', 'my_acf_init');  

//render ACF fields
function my_acf_block_render_callback( $block ) {
    // convert name ("acf/testimonials") into path friendly slug ("testimonials")
    $slug = str_replace('acf/', '', $block['name']);
    // include a template part from within the "template-parts/block" folder
    if( file_exists( get_theme_file_path("/blocks/block-{$slug}.php") ) ) {
        include( get_theme_file_path("/blocks/block-{$slug}.php") );
    }
}