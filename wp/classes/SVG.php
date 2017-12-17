<?php

namespace ColbyComms\SVG;

class SVG {
	/**
	 * Sanitize the filename.
	 *
	 * @param string $name A filename.
	 * @return string The sanitized filename.
	 */
	static function sanitize( $name = '' ) {
		return trim( str_replace( '.svg', '', $name ) );
	}

	/**
	 * Gets the full file path of the filenamename passed in.
	 *
	 * @param string $name The filename.
	 * @return string The full path of the file or an empty string if the file doesn't exist.
	 */
	static function get_filename( $name = '' ) {
		$name = str_replace( '.svg', '', $name );
		$filename = __DIR__ . "/../../svg/$name.svg";

		if ( file_exists( $filename ) ) {
			return $filename;
		}

		return '';
	}

	/**
	 * Retreives an SVG from a filename.
	 *
	 * @param string $name The name of a file in the /svg directory.
	 * @return string The file contents if it exists.
	 */
	static function get( $name = '' ) {
		$name = self::sanitize( $name );
		$filename = self::get_filename( $name );

		return $filename ? file_get_contents( $filename ) : '';
	}

	/**
	 * Echoes an SVG if the file exists.
	 *
	 * @param string $name The name of a file in the /svg directory.
	 */
	static function echo( $name = '' ) {
		echo self::get( $name );
	}
}
