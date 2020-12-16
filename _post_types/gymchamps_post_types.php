<?php  

// Leaving comments before this php block = image bug

// This file contains the backend code for the creation of the "Classes" plugin in the WP admin dashboard
// The Front End code to display the classes is located at Queries.php


/*
  Plugin Name: Gym Champs - Post Types
  Plugin URI: 
  Description: Adds a new Post Type (Classes) into WordPress
  Version: 1.0
  Author:  Tou Toua Yang
  Author URI:
  Text Domain: Gym
*/

// Prevent the execution of the following code if accessed directly
if(!defined('ABSPATH')) die();


// Register new Custom Post Type (Classes)
function gymchamps_class_post_type() {

	// WordPress admin dashboard user interface
	$labels = array(
		'name'                  => _x( 'Classes', 'Post Type General Name', 'gymchamps' ),
		'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'gymchamps' ),
		'menu_name'             => __( 'Classes', 'gymchamps' ),
		'name_admin_bar'        => __( 'Classes', 'gymchamps' ),
		'archives'              => __( 'Archive', 'gymchamps' ),
		'attributes'            => __( 'Attributes', 'gymchamps' ),
		'parent_item_colon'     => __( 'Parent Class', 'gymchamps' ),
		'all_items'             => __( 'All Classes', 'gymchamps' ),
		'add_new_item'          => __( 'Add Class', 'gymchamps' ),
		'add_new'               => __( 'Add Class', 'gymchamps' ),
		'new_item'              => __( 'New Class', 'gymchamps' ),
		'edit_item'             => __( 'Edit Class', 'gymchamps' ),
		'update_item'           => __( 'Update Class', 'gymchamps' ),
		'view_item'             => __( 'View Class', 'gymchamps' ),
		'view_items'            => __( 'View Class', 'gymchamps' ),
		'search_items'          => __( 'Search Class', 'gymchamps' ),
		'not_found'             => __( 'Not found', 'gymchamps' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'gymchamps' ),
		'featured_image'        => __( 'Featured Image', 'gymchamps' ),
		'set_featured_image'    => __( 'Save Featured Image', 'gymchamps' ),
		'remove_featured_image' => __( 'Remove Featured Image', 'gymchamps' ),
		'use_featured_image'    => __( 'Use as Featured Image', 'gymchamps' ),
		'insert_into_item'      => __( 'Insert in Class', 'gymchamps' ),
		'uploaded_to_this_item' => __( 'Add in Class', 'gymchamps' ),
		'items_list'            => __( 'Classes List', 'gymchamps' ),
		'items_list_navigation' => __( 'Navigate to Classes', 'gymchamps' ),
		'filter_items_list'     => __( 'Filter Classes', 'gymchamps' ),
	);
	$args = array(
		'label'                 => __( 'Class', 'gymchamps' ),
		'description'           => __( 'Classes for gymchamps Website', 'gymchamps' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ), // gutenberg title + editor + featured img
		'hierarchical'          => false, // False = posts - no child posts
		'public'                => true, // Display contents in the user interface
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6, // Dashboard=0, post=5, media=10
        'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true, // Display custom post types in admin bar
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
    'capability_type'       => 'page',
    // 'show_in_rest'          => true  //(display with gutenberg styles)
	);
	// Give a name for the post type + pass arguments
	register_post_type( 'gymchamps_classes', $args );

}
// Hook for Function gymchamps_class_post_type()
add_action( 'init', 'gymchamps_class_post_type', 0 );

//  ---