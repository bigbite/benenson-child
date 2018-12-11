<?php

/**
 * Add post type for case studies.
 *
 * @since 1.0.0
 * @return void
 */
if ( ! function_exists( 'benenson_child_create_post_type' ) ) {
	function benenson_child_create_post_type() {
		register_post_type( 'case_study',
			array(
				'labels'      => array(
					'name'          => __( 'Case Studies' ),
					'singular_name' => __( 'Case Study' ),
				),
				'public'      => true,
				'has_archive' => true,
				'taxonomies'  => array( 'category' ),
				'supports'    => [
					'title',
					'editor',
					'author',
					'thumbnail',
					'excerpt',
				],
			)
		);
	}
}

add_action( 'init', 'benenson_child_create_post_type' );
