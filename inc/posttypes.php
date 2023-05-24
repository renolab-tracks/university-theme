<?php

/* Custom Post Type Start */

function create_posttype()
{
    register_post_type(
        'news',
        array(
            'labels' => array(
                'name' => __('NEWS'),
                'singular_name' => __('News Item')
            ),
            'supports' => [
                'thumbnail',
                'title',
                'editor',
                'author',
                'excerpt',
                'custom-fields',
                'revisions'
            ],
            'public' => true,
            'has_archive' => true,
            'show_in_rest' => true,

              'rewrite' => array('slug' => 'news'),
        )
    );


}
// Hooking up our function to theme setup
add_action('init', 'create_posttype');
    
    /* Custom Post Type End */