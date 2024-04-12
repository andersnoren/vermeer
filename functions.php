<?php
/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function vincent_setup() {
	add_editor_style( array( 'style.css' ) );
}
add_action( 'after_setup_theme', 'vincent_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function vincent_styles() {
	wp_enqueue_style( 'vincent-styles', get_theme_file_uri( '/style.css' ), array(), wp_get_theme( 'vincent' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'vincent_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER BLOCK STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'vincent_block_styles' ) ) :
	function vincent_block_styles() {

		/* ENQUEUE STYLESHEETS FOR SPECIFIC BLOCKS */

		wp_enqueue_block_style(
			'core/social-links',
			array(
				'handle'	=> 'vincent-social-links',
				'src'		=> get_theme_file_uri( 'assets/css/blocks/social-links.css' ),
				'ver'		=> wp_get_theme( 'vincent' )->get( 'Version' ),
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
					'handle'	=> 'vincent-marquee',
					'src'		=> get_theme_file_uri( 'assets/css/block-styles/vincent-marquee.css' ),
					'ver'		=> wp_get_theme( 'vincent' )->get( 'Version' ),
					'path'		=> get_theme_file_path( 'assets/css/block-styles/vincent-marquee.css' ),
				)
			);
		}

		/* Cover: Mobile sizes */

		wp_enqueue_block_style(
			'core/cover',
			array(
				'handle'	=> 'vincent-cover-cover-mobile-size',
				'src'		=> get_theme_file_uri( 'assets/css/block-styles/vincent-cover-mobile-size.css' ),
				'ver'		=> wp_get_theme( 'vincent' )->get( 'Version' ),
				'path'		=> get_theme_file_path( 'assets/css/block-styles/vincent-cover-mobile-size.css' ),
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
					'handle'	=> 'vincent-link-with-arrow',
					'src'		=> get_theme_file_uri( 'assets/css/block-styles/vincent-link-with-arrow.css' ),
					'ver'		=> wp_get_theme( 'vincent' )->get( 'Version' ),
					'path'		=> get_theme_file_path( 'assets/css/block-styles/vincent-link-with-arrow.css' ),
				)
			);
		}

		/* REGISTER BLOCK STYLES */

		/* Navigation: Styled vertical navigation */

		register_block_style(
			'core/navigation',
			array(
				'name'			=> 'vincent-separated-with-arrows',
				'label'			=> __( 'Styled vertical navigation', 'vincent' )
			)
		);

		/* Button: Arrow to the right */

		register_block_style(
			'core/button',
			array(
				'name'			=> 'vincent-icon-right-arrow',
				'label'			=> __( 'Arrow to the right', 'vincent' )
			)
		);

		/* Cover: Mobile aspect ratios */

		$cover_mobile_size_styles = array(
			'vincent-cover-mobile-3x4'		=> __( '3x4 on mobile', 'vincent' ),
			'vincent-cover-mobile-1x1'		=> __( '1x1 on mobile', 'vincent' )
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
			'vincent-marquee-left'		=> __( 'Marquee (←)', 'vincent' ),
			'vincent-marquee-right'	=> __( 'Marquee (→)', 'vincent' ),
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
add_action( 'init', 'vincent_block_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER SCRIPTS
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'vincent_register_scripts' ) ) :
	function vincent_register_scripts() {
		
		wp_enqueue_script( 'vincent-marquee', get_theme_file_uri( 'assets/js/vincent-marquee.js' ), array(), wp_get_theme( 'vincent' )->get( 'Version' ), array( 'in_footer' => true ) );

	}
endif;
add_action( 'wp_enqueue_scripts', 'vincent_register_scripts' );