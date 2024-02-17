<?php
/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function spielberg_setup() {
	add_editor_style( array( 'style.css' ) );
}
add_action( 'after_setup_theme', 'spielberg_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function spielberg_styles() {
	wp_enqueue_style( 'spielberg-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'spielberg' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'spielberg_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER BLOCK STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'spielberg_block_styles' ) ) :
	function spielberg_block_styles() {

		/* REGISTER STYLES FOR SPECIFIC BLOCK STYLES */

		wp_enqueue_block_style(
			'core/site-title',
			array(
				'handle'	=> 'spielberg-marquee',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/spielberg-marquee.css' ),
				'ver'		=> wp_get_theme( 'spielberg' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/spielberg-marquee.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/list',
			array(
				'handle'	=> 'spielberg-links-list',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/spielberg-links-list.css' ),
				'ver'		=> wp_get_theme( 'spielberg' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/spielberg-links-list.css' ),
			)
		);

		/* REGISTER BLOCK STYLES */

		register_block_style(
			'core/list',
			array(
				'name'			=> 'spielberg-links-list',
				'label'			=> __( 'List of links with separators and arrows', 'spielberg' ),
				'style_handle'	=> 'spielberg-links-list'
			)
		);

		register_block_style(
			'core/site-title',
			array(
				'name'			=> 'spielberg-marquee',
				'label'			=> __( 'Marquee title, looping from the left to the right', 'spielberg' ),
				'style_handle'	=> 'spielberg-marquee'
			)
		);
		
	}
endif;
add_action( 'init', 'spielberg_block_styles' );
