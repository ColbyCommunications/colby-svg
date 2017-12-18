<?php

// Load the shortcode class if we're in a WP environment.
if ( defined( 'ABSPATH' ) ) {
	new ColbyComms\SVG\Shortcode();
}
