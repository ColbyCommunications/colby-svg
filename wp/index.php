<?php

// Ensure the autoloader exists.
if ( ! class_exists( 'ColbyComms\\Svg\\Shortcode' ) ) {
	require __DIR__ . '/../vendor/autoload.php';
}

// Make sure we're in a WP environment.
if ( defined( 'ABSPATH' ) ) {
	new ColbyComms\SVG\Shortcode();
}
