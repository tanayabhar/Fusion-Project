<?php
function team_posttype() {
    register_post_type( 'team',
    // CPT Options
    array(
    'labels' => array(
    'name' => __( 'Team' ),
    'singular_name' => __( 'Team' )
    ),
    'public' => true,
    'has_archive' => false,
    'rewrite' => array('slug' => 'team'),
    'taxonomies' => array('category', 'post_tag'),
    'supports' => array('title', 'editor', 'thumbnail', 'custom-fields')
    )
    );
    }
    // Hooking up our function to theme setup
    add_action( 'init', 'team_posttype' );
    /* Custom Post Type End */