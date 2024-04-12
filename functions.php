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

		/* Headings: Marquee */

		$marquee_blocks = array(
			'core/post-title',
			'core/site-title',
			'core/heading',
		);

		foreach( $marquee_blocks as $marquee_block ) {
			wp_enqueue_block_style(
				$marquee_block,
				array(
					'handle'	=> 'van-gogh-marquee',
					'src'		=> get_theme_file_uri( 'assets/css/block-styles/van-gogh-marquee.css' ),
					'ver'		=> wp_get_theme( 'van-gogh' )->get( 'Version' ),
					'path'		=> get_theme_file_path( 'assets/css/block-styles/van-gogh-marquee.css' ),
				)
			);
		}

		/* Cover: Mobile sizes */

		wp_enqueue_block_style(
			'core/cover',
			array(
				'handle'	=> 'van-gogh-cover-cover-mobile-size',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/van-gogh-cover-mobile-size.css' ),
				'ver'		=> wp_get_theme( 'van-gogh' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/van-gogh-cover-mobile-size.css' ),
			)
		);

		/* Button/Navigation: Link with arrow */

		$link_with_arrow_blocks = array(
			'core/navigation',
			'core/button',
		);

		foreach( $link_with_arrow_blocks as $link_with_arrow_block ) {
			wp_enqueue_block_style(
				$link_with_arrow_block,
				array(
					'handle'	=> 'van-gogh-link-with-arrow',
					'src'		=> get_theme_file_uri( 'assets/css/block-styles/van-gogh-link-with-arrow.css' ),
					'ver'		=> wp_get_theme( 'van-gogh' )->get( 'Version' ),
					'path'		=> get_theme_file_path( 'assets/css/block-styles/van-gogh-link-with-arrow.css' ),
				)
			);
		}

		/* REGISTER BLOCK STYLES */

		/* Navigation: Styled vertical navigation */

		register_block_style(
			'core/navigation',
			array(
				'name'			=> 'van-gogh-separated-with-arrows',
				'label'			=> __( 'Styled vertical navigation', 'van-gogh' )
			)
		);

		/* Button: Arrow to the right */

		register_block_style(
			'core/button',
			array(
				'name'			=> 'van-gogh-icon-right-arrow',
				'label'			=> __( 'Arrow to the right', 'van-gogh' )
			)
		);

		/* Cover: Mobile aspect ratios */

		$cover_mobile_size_styles = array(
			'van-gogh-cover-mobile-3x4'		=> __( '3x4 on mobile', 'van-gogh' ),
			'van-gogh-cover-mobile-1x1'		=> __( '1x1 on mobile', 'van-gogh' )
		);

		foreach( $cover_mobile_size_styles as $cover_mobile_size_style_name => $cover_mobile_size_style_label ) {
			register_block_style(
				'core/cover',
				array(
					'name'	=> $cover_mobile_size_style_name,
					'label'	=> $cover_mobile_size_style_label
				)
			);
		}

		/* Headings: Marquee */

		$marquee_block_styles = array(
			'van-gogh-marquee-left'		=> __( 'Marquee (←)', 'van-gogh' ),
			'van-gogh-marquee-right'	=> __( 'Marquee (→)', 'van-gogh' ),
		);

		$marquee_blocks = array(
			'core/heading',
			'core/post-title',
			'core/site-title'
		);

		foreach( $marquee_blocks as $marquee_block ) {
			foreach( $marquee_block_styles as $marquee_block_style_name => $marquee_block_style_label ) {
				register_block_style(
					$marquee_block,
					array(
						'name'	=> $marquee_block_style_name,
						'label'	=> $marquee_block_style_label
					)
				);
			}
		}
		
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