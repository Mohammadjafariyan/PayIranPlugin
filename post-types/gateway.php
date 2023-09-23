<?php

/**
 * Registers the `gateway` post type.
 */
function gateway_init() {
	register_post_type(
		'gateway',
		[
			'labels'                => [
				'name'                  => __( 'Gateways', 'mj-iran-payment' ),
				'singular_name'         => __( 'Gateway', 'mj-iran-payment' ),
				'all_items'             => __( 'All Gateways', 'mj-iran-payment' ),
				'archives'              => __( 'Gateway Archives', 'mj-iran-payment' ),
				'attributes'            => __( 'Gateway Attributes', 'mj-iran-payment' ),
				'insert_into_item'      => __( 'Insert into Gateway', 'mj-iran-payment' ),
				'uploaded_to_this_item' => __( 'Uploaded to this Gateway', 'mj-iran-payment' ),
				'featured_image'        => _x( 'Featured Image', 'gateway', 'mj-iran-payment' ),
				'set_featured_image'    => _x( 'Set featured image', 'gateway', 'mj-iran-payment' ),
				'remove_featured_image' => _x( 'Remove featured image', 'gateway', 'mj-iran-payment' ),
				'use_featured_image'    => _x( 'Use as featured image', 'gateway', 'mj-iran-payment' ),
				'filter_items_list'     => __( 'Filter Gateways list', 'mj-iran-payment' ),
				'items_list_navigation' => __( 'Gateways list navigation', 'mj-iran-payment' ),
				'items_list'            => __( 'Gateways list', 'mj-iran-payment' ),
				'new_item'              => __( 'New Gateway', 'mj-iran-payment' ),
				'add_new'               => __( 'Add New', 'mj-iran-payment' ),
				'add_new_item'          => __( 'Add New Gateway', 'mj-iran-payment' ),
				'edit_item'             => __( 'Edit Gateway', 'mj-iran-payment' ),
				'view_item'             => __( 'View Gateway', 'mj-iran-payment' ),
				'view_items'            => __( 'View Gateways', 'mj-iran-payment' ),
				'search_items'          => __( 'Search Gateways', 'mj-iran-payment' ),
				'not_found'             => __( 'No Gateways found', 'mj-iran-payment' ),
				'not_found_in_trash'    => __( 'No Gateways found in trash', 'mj-iran-payment' ),
				'parent_item_colon'     => __( 'Parent Gateway:', 'mj-iran-payment' ),
				'menu_name'             => __( 'Gateways', 'mj-iran-payment' ),
			],
			'public'                => true,
			'hierarchical'          => false,
			'show_ui'               => true,
			'show_in_nav_menus'     => true,
			'supports'              => [ 'Permalink' ,'title', 'editor' ,'thumbnail' ,'account' ],
			'taxonomies '              => array( 'category', 'post_tag' ,'gateway-account'),
			'has_archive'           => true,
			'rewrite' => array(
				'slug' => 'gw', // use this slug instead of post type name
				'with_front' => FALSE ,// if you have a permalink base such as /blog/ then setting this to false ensures your custom post type permalink structure will be /products/ instead of /blog/products/
				'ep_mask'=>true,
				'_edit_link'=>true,
			),
			'query_var'             => true,
			'menu_position'         => null,
			'menu_icon'             => 'dashicons-book-alt',
			'show_in_rest'          => true,
			'rest_base'             => 'gateway',
			'rest_controller_class' => 'WP_REST_Posts_Controller',
		]
	);

}

add_action( 'init', 'gateway_init' );

/**
 * Sets the post updated messages for the `gateway` post type.
 *
 * @param  array $messages Post updated messages.
 * @return array Messages for the `gateway` post type.
 */
function gateway_updated_messages( $messages ) {
	global $post;

	$permalink = get_permalink( $post );

	$messages['gateway'] = [
		0  => '', // Unused. Messages start at index 1.
		/* translators: %s: post permalink */
		1  => sprintf( __( 'Gateway updated. <a target="_blank" href="%s">View Gateway</a>', 'mj-iran-payment' ), esc_url( $permalink ) ),
		2  => __( 'Custom field updated.', 'mj-iran-payment' ),
		3  => __( 'Custom field deleted.', 'mj-iran-payment' ),
		4  => __( 'Gateway updated.', 'mj-iran-payment' ),
		/* translators: %s: date and time of the revision */
		5  => isset( $_GET['revision'] ) ? sprintf( __( 'Gateway restored to revision from %s', 'mj-iran-payment' ), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false, // phpcs:ignore WordPress.Security.NonceVerification.Recommended
		/* translators: %s: post permalink */
		6  => sprintf( __( 'Gateway published. <a href="%s">View Gateway</a>', 'mj-iran-payment' ), esc_url( $permalink ) ),
		7  => __( 'Gateway saved.', 'mj-iran-payment' ),
		/* translators: %s: post permalink */
		8  => sprintf( __( 'Gateway submitted. <a target="_blank" href="%s">Preview Gateway</a>', 'mj-iran-payment' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
		/* translators: 1: Publish box date format, see https://secure.php.net/date 2: Post permalink */
		9  => sprintf( __( 'Gateway scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Gateway</a>', 'mj-iran-payment' ), date_i18n( __( 'M j, Y @ G:i', 'mj-iran-payment' ), strtotime( $post->post_date ) ), esc_url( $permalink ) ),
		/* translators: %s: post permalink */
		10 => sprintf( __( 'Gateway draft updated. <a target="_blank" href="%s">Preview Gateway</a>', 'mj-iran-payment' ), esc_url( add_query_arg( 'preview', 'true', $permalink ) ) ),
	];

	return $messages;
}

add_filter( 'post_updated_messages', 'gateway_updated_messages' );

/**
 * Sets the bulk post updated messages for the `gateway` post type.
 *
 * @param  array $bulk_messages Arrays of messages, each keyed by the corresponding post type. Messages are
 *                              keyed with 'updated', 'locked', 'deleted', 'trashed', and 'untrashed'.
 * @param  int[] $bulk_counts   Array of item counts for each message, used to build internationalized strings.
 * @return array Bulk messages for the `gateway` post type.
 */
function gateway_bulk_updated_messages( $bulk_messages, $bulk_counts ) {
	global $post;

	$bulk_messages['gateway'] = [
		/* translators: %s: Number of Gateways. */
		'updated'   => _n( '%s Gateway updated.', '%s Gateways updated.', $bulk_counts['updated'], 'mj-iran-payment' ),
		'locked'    => ( 1 === $bulk_counts['locked'] ) ? __( '1 Gateway not updated, somebody is editing it.', 'mj-iran-payment' ) :
						/* translators: %s: Number of Gateways. */
						_n( '%s Gateway not updated, somebody is editing it.', '%s Gateways not updated, somebody is editing them.', $bulk_counts['locked'], 'mj-iran-payment' ),
		/* translators: %s: Number of Gateways. */
		'deleted'   => _n( '%s Gateway permanently deleted.', '%s Gateways permanently deleted.', $bulk_counts['deleted'], 'mj-iran-payment' ),
		/* translators: %s: Number of Gateways. */
		'trashed'   => _n( '%s Gateway moved to the Trash.', '%s Gateways moved to the Trash.', $bulk_counts['trashed'], 'mj-iran-payment' ),
		/* translators: %s: Number of Gateways. */
		'untrashed' => _n( '%s Gateway restored from the Trash.', '%s Gateways restored from the Trash.', $bulk_counts['untrashed'], 'mj-iran-payment' ),
	];

	return $bulk_messages;
}

add_filter( 'bulk_post_updated_messages', 'gateway_bulk_updated_messages', 10, 2 );



add_filter('use_block_editor_for_post_type', 'prefix_disable_gutenberg', 10, 2);
function prefix_disable_gutenberg($current_status, $post_type)
{
	// Use your post type key instead of 'product'
	if ($post_type === 'gateway') return false;
	return $current_status;
}

