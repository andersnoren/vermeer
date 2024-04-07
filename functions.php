<?php
/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function van_gogh_setup() {
	add_editor_style( array( 'style.css' ) );
}
add_action( 'after_setup_theme', 'van_gogh_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function van_gogh_styles() {
	wp_enqueue_style( 'van-gogh-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'van-gogh' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'van_gogh_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER BLOCK STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'van_gogh_block_styles' ) ) :
	function van_gogh_block_styles() {

		/* REGISTER STYLES FOR SPECIFIC BLOCK STYLES */

		wp_enqueue_block_style(
			'core/site-title',
			array(
				'handle'	=> 'van-gogh-marquee',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/van-gogh-marquee.css' ),
				'ver'		=> wp_get_theme( 'van-gogh' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/van-gogh-marquee.css' ),
			)
		);

		wp_enqueue_block_style(
			'core/list',
			array(
				'handle'	=> 'van-gogh-links-list',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/van-gogh-links-list.css' ),
				'ver'		=> wp_get_theme( 'van-gogh' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/van-gogh-links-list.css' ),
			)
		);

		/* REGISTER BLOCK STYLES */

		register_block_style(
			'core/list',
			array(
				'name'			=> 'van-gogh-links-list',
				'label'			=> __( 'List of links with separators and arrows', 'van-gogh' ),
				'style_handle'	=> 'van-gogh-links-list'
			)
		);

		register_block_style(
			'core/site-title',
			array(
				'name'			=> 'van-gogh-marquee',
				'label'			=> __( 'Marquee title, looping from the left to the right', 'van-gogh' ),
				'style_handle'	=> 'van-gogh-marquee'
			)
		);
		
	}
endif;
add_action( 'init', 'van_gogh_block_styles' );
