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

		/* ENQUEUE STYLESHEETS FOR SPECIFIC BLOCKS */

		wp_enqueue_block_style(
			'core/social-links',
			array(
				'handle'	=> 'van-gogh-social-links',
				'src'		=> get_theme_file_uri( 'assets/css/blocks/social-links.css' ),
				'ver'		=> wp_get_theme( 'van-gogh' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/blocks/social-links.css' ),
			)
		);

		/* ENQUEUE STYLESHEETS FOR SPECIFIC BLOCK STYLES */

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
			'core/navigation',
			array(
				'handle'	=> 'van-gogh-navigation-separated-with-arrows',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/van-gogh-navigation-separated-with-arrows.css' ),
				'ver'		=> wp_get_theme( 'van-gogh' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/van-gogh-navigation-separated-with-arrows.css' ),
			)
		);

		/* REGISTER BLOCK STYLES */

		register_block_style(
			'core/navigation',
			array(
				'name'			=> 'van-gogh-separated-with-arrows',
				'label'			=> __( 'Styled vertical navigation', 'van-gogh' ),
				'style_handle'	=> 'van-gogh-separated-with-arrows'
			)
		);

		register_block_style(
			'core/site-title',
			array(
				'name'			=> 'van-gogh-marquee',
				'label'			=> __( 'Marquee (→)', 'van-gogh' ),
				'style_handle'	=> 'van-gogh-marquee'
			)
		);
		
	}
endif;
add_action( 'init', 'van_gogh_block_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER SCRIPTS
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'van_gogh_register_scripts' ) ) :
	function van_gogh_register_scripts() {
		
		wp_enqueue_script( 'van-gogh-marquee', get_theme_file_uri( 'assets/js/van-gogh-marquee.js' ), array(), wp_get_theme( 'van-gogh' )->get( 'Version' ), array( 'in_footer' => true ) );

	}
endif;
add_action( 'wp_enqueue_scripts', 'van_gogh_register_scripts' );