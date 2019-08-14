<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type

function inhabitent_cpt_product() {
	$post_name = ucwords('product');
	$labels = array(
		'name'                  => $post_name.'s',
		'singular_name'         => $post_name,
		'menu_name'             => $post_name.'s',
		'name_admin_bar'        => $post_name,
		'archives'              => $post_name.' Archives',
		'attributes'            => $post_name.' Attributes',
		'parent_item_colon'     => 'Parent '.$post_name.' :',
		'all_items'             => 'All '.$post_name.'s',
		'add_new_item'          => 'Add New '.$post_name,
		'add_new'               => 'Add New '.$post_name,
		'new_item'              => 'New '.$post_name,
		'edit_item'             => 'Edit '.$post_name,
		'update_item'           => 'Update '.$post_name,
		'view_item'             => 'View '.$post_name,
		'view_items'            => 'View '.$post_name.'s',
		'search_items'          => 'Search '.$post_name,
		'not_found'             => 'Not found '.$post_name,
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => $post_name.' Image',
		'set_featured_image'    => 'Set '.$post_name.' image',
		'remove_featured_image' => 'Remove '.$post_name.' image',
		'use_featured_image'    => 'Use as '.$post_name.' image',
		'insert_into_item'      => 'Insert into '.$post_name,
		'uploaded_to_this_item' => 'Uploaded to this '.$post_name,
		'items_list'            => $post_name.'s list',
		'items_list_navigation' => $post_name.'s list navigation',
		'filter_items_list'     => 'Filter '.$post_name.'s list',
	);
	$args = array(
		'label'                 => $post_name,
		'description'           => 'A product post type for hipster camping',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'shop',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'			=> true,
		'template_lock' 		=> 'all',
		'template'				=> array(
			array('core/paragraph', array(
				'placeholder' => 'Add the product description here.'
			)),
		),
	);
	register_post_type( 'product', $args );

}
add_action( 'init', 'inhabitent_cpt_product', 0 );

function inhabitent_cpt_adventure() {
	$post_name = ucwords('adventure');
	$labels = array(
		'name'                  => $post_name.'s',
		'singular_name'         => $post_name,
		'menu_name'             => $post_name.'s',
		'name_admin_bar'        => $post_name,
		'archives'              => $post_name.' Archives',
		'attributes'            => $post_name.' Attributes',
		'parent_item_colon'     => 'Parent '.$post_name.' :',
		'all_items'             => 'All '.$post_name.'s',
		'add_new_item'          => 'Add New '.$post_name,
		'add_new'               => 'Add New '.$post_name,
		'new_item'              => 'New '.$post_name,
		'edit_item'             => 'Edit '.$post_name,
		'update_item'           => 'Update '.$post_name,
		'view_item'             => 'View '.$post_name,
		'view_items'            => 'View '.$post_name.'s',
		'search_items'          => 'Search '.$post_name,
		'not_found'             => 'Not found '.$post_name,
		'not_found_in_trash'    => 'Not found in Trash',
		'featured_image'        => $post_name.' Image',
		'set_featured_image'    => 'Set '.$post_name.' image',
		'remove_featured_image' => 'Remove '.$post_name.' image',
		'use_featured_image'    => 'Use as '.$post_name.' image',
		'insert_into_item'      => 'Insert into '.$post_name,
		'uploaded_to_this_item' => 'Uploaded to this '.$post_name,
		'items_list'            => $post_name.'s list',
		'items_list_navigation' => $post_name.'s list navigation',
		'filter_items_list'     => 'Filter '.$post_name.'s list',
	);
	$args = array(
		'label'                 => $post_name,
		'description'           => 'A adventure post type for hipster camping',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-universal-access-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'adventures',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'show_in_rest'			=> true,
	);
	register_post_type( 'adventure', $args );

}
add_action( 'init', 'inhabitent_cpt_adventure', 0 );