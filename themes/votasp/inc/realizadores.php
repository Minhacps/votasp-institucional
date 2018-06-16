<?php
/**
 * Cria post type de realizadores
 *
 * @package Odin
 * @since 2.2.0
 */

function votasp_contribuintes_post_type() {
	$realizadores = new Odin_Post_Type(
		'Realizador',
		'realizador'
	);

	$realizadores->set_labels([
		'menu_name' => __( 'Realizadores', 'odin' ),
	]);

	$realizadores->set_arguments([
		'menu_icon' => 'dashicons-groups',
		'menu_position' => 20,
		'has_archive' => false,
		'publicly_queryable' => false,
		'supports' => [ 'title', 'thumbnail' ],
	]);
}
add_action( 'init', 'votasp_contribuintes_post_type', 1 );