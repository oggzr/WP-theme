<?php 

function create_post_type(){

	register_post_type('band',array(
		'labels' => array(
			'name' => 'Bandmedlemmarna',
			'singular_name' => 'Bandmedlemm'
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-playlist-audio',
		'supports' => array( 'title' , 'editor' , 'thumbnail' )
	));

	register_post_type('event',array(
		'labels' => array(
			'name' => 'Evenemang',
			'singular_name' => 'Evenemang'
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-calendar-alt',
		'supports' => array( 'title' , 'editor' , 'thumbnail' )
	));

}

add_action( 'init' , 'create_post_type' );