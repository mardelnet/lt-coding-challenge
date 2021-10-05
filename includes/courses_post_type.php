<?php
// This function creates the course post type
add_action( 'init', 'courses_post_type', 0 );

function courses_post_type() {
 
    $labels = array(
        'name'                => _x( 'Courses', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'Course', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'Courses', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent Course', 'twentytwenty' ),
        'all_items'           => __( 'All Courses', 'twentytwenty' ),
        'view_item'           => __( 'View Course', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New Course', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit Course', 'twentytwenty' ),
        'update_item'         => __( 'Update Course', 'twentytwenty' ),
        'search_items'        => __( 'Search Course', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
    $args = array(
        'label'               => __( 'courses', 'twentytwenty' ),
        'description'         => __( 'Courses', 'twentytwenty' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor' ),
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
    register_post_type( 'course', $args );
}