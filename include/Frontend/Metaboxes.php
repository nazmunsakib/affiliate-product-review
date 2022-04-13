<?php
defined( 'ABSPATH' ) || exit();

/**
 *Post Banner meta boxes
 */

if ( class_exists( 'CSF' ) ) {
	$prefix = 'post_meta_banner';

	CSF::createMetabox( $prefix, array(
			'title'     => esc_html__( 'Post Settings', 'bpen-core' ),
			'post_type' => 'post',
		)
	);

	CSF::createSection( $prefix, array(
		'fields' => array(
			array(
				'id'          => 'banner-type',
				'type'        => 'select',
				'width'       => 100,
				'title'       => esc_html__( 'Banner Style', 'bpen-core' ),
				'placeholder' => esc_html__( 'Select Banner Style', 'bpen-core' ),
				'options'     => array(
					'1'  => esc_html__( 'Full width Banner', 'bpen-core' ),
					'2' => esc_html__( 'Box Banner', 'bpen-core' ),
				),
			),
		)
	) );
}

/**
 * video Post meta boxes
 */

if ( class_exists( 'CSF' ) ) {
	$prefix = 'post_format_video';

	CSF::createMetabox( $prefix, array(
			'title'        => esc_html__( 'Video URL', 'bpen-core' ),
			'post_type'    => 'post',
			'post_formats' => 'video',
		)
	);

	CSF::createSection( $prefix, array(
		'fields' => array(
			array(
				'id'      => 'video-url',
				'type'    => 'text',
				'title'   => esc_html__( 'Input Video link', 'bpen-core' ),
				'default' => 'https://www.youtube.com/watch?v=N21J8FHyQCE&ab_channel=INFODROP',
				'class'   => 'form-control',
			),
		)
	) );
}

/**
 *Gallery Post meta boxes
 */

if ( class_exists( 'CSF' ) ) {
	$prefix = 'post_format_gallery';

	CSF::createMetabox( $prefix, array(
			'title'        => esc_html__( 'Gallery Post option', 'bpen-core' ),
			'post_type'    => 'post',
			'post_formats' => 'gallery',
		)
	);

	CSF::createSection( $prefix, array(
		'fields' => array(
			array(
				'id'      => 'gallery-img',
				'type'    => 'gallery',
				'title'   => esc_html__( 'Add Post Gallery Images', 'bpen-core' ),
				'add_title'   => esc_html__( 'Add Images', 'bpen-core' ),
				'edit_title'   => esc_html__( 'Edit Images', 'bpen-core' ),
				'clear_title'   => esc_html__( 'Remove Images', 'bpen-core' ),

			),
		)
	) );
}

/**
 * Quote Post meta boxes
 */

if ( class_exists( 'CSF' ) ) {
	$prefix = 'post_format_quote';

	CSF::createMetabox( $prefix, array(
			'title'        => esc_html__( 'Gallery Post option', 'bpen-core' ),
			'post_type'    => 'post',
			'post_formats' => 'quote',
		)
	);

	CSF::createSection( $prefix, array(
		'fields' => array(
			array(
				'id'      => 'author-name',
				'type'    => 'text',
				'title'   => esc_html__( 'Quote Author Name', 'bpen-core' ),
			),
			array(
				'id'      => 'author-description',
				'type'    => 'textarea',
				'title'   => esc_html__( 'Quote Author Description', 'bpen-core' ),
			),
		)
	) );
}

/**
 * Link Post meta boxes
 */

if ( class_exists( 'CSF' ) ) {
	$prefix = 'post_format_link';

	CSF::createMetabox( $prefix, array(
			'title'        => esc_html__( 'Link Post option', 'bpen-core' ),
			'post_type'    => 'post',
			'post_formats' => 'link',
		)
	);

	CSF::createSection( $prefix, array(
		'fields' => array(
			array(
				'id'      => 'custom-link',
				'type'    => 'text',
				'title'   => esc_html__( 'Custom Url', 'bpen-core' ),
			),
		)
	) );
}

