<?php

// Register Custom Post Type

if(!function_exists('skill_set_post_type')){
	function skill_set_post_type() {

	$labels = array(
		'name'                  => _x( 'Skill Set', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Skill Set', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Skill Set', 'text_domain' ),
		'name_admin_bar'        => __( 'Skill Set', 'text_domain' ),
		'archives'              => __( 'Skill Set Archives', 'text_domain' ),
		'attributes'            => __( 'Skill Set Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Skill Set:', 'text_domain' ),
		'all_items'             => __( 'All Skill Sets', 'text_domain' ),
		'add_new_item'          => __( 'Add New Skill Set', 'text_domain' ),
		'add_new'               => __( 'Add New Skill Set Item', 'text_domain' ),
		'new_item'              => __( 'New Skill Set Item', 'text_domain' ),
		'edit_item'             => __( 'Edit Skill Set', 'text_domain' ),
		'update_item'           => __( 'Update Skill Set', 'text_domain' ),
		'view_item'             => __( 'View Skill Set', 'text_domain' ),
		'view_items'            => __( 'View Skill Set', 'text_domain' ),
		'search_items'          => __( 'Search Skill Set', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Skill Set', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Skill Set', 'text_domain' ),
		'items_list'            => __( 'Skill Set list', 'text_domain' ),
		'items_list_navigation' => __( 'Skill Setlist navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Skill Set list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Skill Set', 'text_domain' ),
		'description'           => __( 'Content for each Skill Set Item', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'skill_set', $args );

	}
}

?>