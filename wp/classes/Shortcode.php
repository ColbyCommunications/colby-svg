<?php

namespace ColbyComms\SVG;

use ColbyComms\SVG\SVG;

class Shortcode {
	/**
	 * Hooks the add_shortcode function to init.
	 */
	function __construct() {
		add_action( 'init', [ $this, 'add_shortcode' ] );
	}

	/**
	 * Adds the shortcode.
	 */
	function add_shortcode() {
		if ( ! shortcode_exists( 'colby-svg' ) ) {
			add_shortcode( 'colby-svg', [ $this, 'render_shortcode' ] );
		}
	}

	/**
	 * Renders the shortcode output.
	 *
	 * @param array $atts The shortcode attributes.
	 * @return string The shortcode output.
	 */
	function render_shortcode( array $atts = [] ) {
		if ( ! isset( $atts['name'] ) ) {
			return '';
		}

		return SVG::get( 'name' );
	}
}
