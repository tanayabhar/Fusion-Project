<?php
function testimonial_posttype() {
    register_post_type( 'testimonial',
    // CPT Options
    array(
    'labels' => array(
    'name' => __( 'Testimonial' ),
    'singular_name' => __( 'Testimonial' )
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'testimonial'),
    'taxonomies' => array('category', 'post_tag'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    )
    );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'testimonial_posttype' );
    /* Custom Post Type End */