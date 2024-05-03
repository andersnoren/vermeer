<?php
/*	-----------------------------------------------------------------------------------------------
	THEME SUPPORTS
--------------------------------------------------------------------------------------------------- */

function vermeer_setup() {
	add_editor_style( array( 'style.css' ) );
}
add_action( 'after_setup_theme', 'vermeer_setup' );


/*	-----------------------------------------------------------------------------------------------
	ENQUEUE STYLESHEETS
--------------------------------------------------------------------------------------------------- */

function vermeer_styles() {
	wp_enqueue_style( 'vermeer-styles', get_template_directory_uri() . '/style.css', array(), wp_get_theme( 'vermeer' )->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'vermeer_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER BLOCK STYLES
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'vermeer_block_styles' ) ) :
	function vermeer_block_styles() {

		/* ENQUEUE STYLESHEETS FOR SPECIFIC BLOCKS */

		wp_enqueue_block_style(
			'core/social-links',
			array(
				'handle'	=> 'vermeer-social-links',
				'src'		=> get_template_directory_uri() . '/assets/css/blocks/social-links.css',
				'ver'		=> wp_get_theme( 'vermeer' )->get( 'Version' ),
				'path'		=> get_template_directory() . '/assets/css/blocks/social-links.css',
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
					'handle'	=> 'vermeer-marquee',
					'src'		=> get_template_directory_uri() . '/assets/css/block-styles/vermeer-marquee.css',
					'ver'		=> wp_get_theme( 'vermeer' )->get( 'Version' ),
					'path'		=> get_template_directory() . '/assets/css/block-styles/vermeer-marquee.css',
				)
			);
		}

		/* Cover: Mobile sizes */

		wp_enqueue_block_style(
			'core/cover',
			array(
				'handle'	=> 'vermeer-cover-cover-mobile-size',
				'src'		=> get_template_directory_uri() . '/assets/css/block-styles/vermeer-cover-mobile-size.css',
				'ver'		=> wp_get_theme( 'vermeer' )->get( 'Version' ),
				'path'		=> get_template_directory() . '/assets/css/block-styles/vermeer-cover-mobile-size.css',
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
					'handle'	=> 'vermeer-link-with-arrow',
					'src'		=> get_template_directory_uri() . '/assets/css/block-styles/vermeer-link-with-arrow.css',
					'ver'		=> wp_get_theme( 'vermeer' )->get( 'Version' ),
					'path'		=> get_template_directory() . '/assets/css/block-styles/vermeer-link-with-arrow.css',
				)
			);
		}

		/* REGISTER BLOCK STYLES */

		/* Navigation: Styled vertical navigation */

		register_block_style(
			'core/navigation',
			array(
				'name'			=> 'vermeer-separated-with-arrows',
				'label'			=> __( 'Styled vertical navigation', 'vermeer' )
			)
		);

		/* Button: Arrow to the right */

		register_block_style(
			'core/button',
			array(
				'name'			=> 'vermeer-icon-right-arrow',
				'label'			=> __( 'Arrow to the right', 'vermeer' )
			)
		);

		/* Cover: Mobile aspect ratios */

		$cover_mobile_size_styles = array(
			'vermeer-cover-mobile-3x4'		=> __( '3x4 on mobile', 'vermeer' ),
			'vermeer-cover-mobile-1x1'		=> __( '1x1 on mobile', 'vermeer' )
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
			'vermeer-marquee-left'		=> __( 'Marquee (←)', 'vermeer' ),
			'vermeer-marquee-right'	=> __( 'Marquee (→)', 'vermeer' ),
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
add_action( 'init', 'vermeer_block_styles' );


/*	-----------------------------------------------------------------------------------------------
	REGISTER SCRIPTS
--------------------------------------------------------------------------------------------------- */

if ( ! function_exists( 'vermeer_register_scripts' ) ) :
	function vermeer_register_scripts() {
		
		wp_enqueue_script( 'vermeer-marquee', get_theme_file_uri( 'assets/js/vermeer-marquee.js' ), array(), wp_get_theme( 'vermeer' )->get( 'Version' ), array( 'in_footer' => true ) );

	}
endif;
add_action( 'wp_enqueue_scripts', 'vermeer_register_scripts' );