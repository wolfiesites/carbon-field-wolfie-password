<?php

namespace Carbon_Field_Wolfie_Password;

use Carbon_Fields\Field\Field;

class Wolfie_Password_Field extends Field {
	/**
	 * Prepare the field type for use.
	 * Called once per field type when activated.
	 *
	 * @static
	 * @access public
	 *
	 * @return void
	 */
	public static function field_type_activated() {
		$dir = \Carbon_Field_Wolfie_Password\DIR . '/languages/';
		$locale = get_locale();
		$path = $dir . $locale . '.mo';
		load_textdomain( 'carbon-field-wolfie-password', $path );
	}

	/**
	 * Enqueue scripts and styles in admin.
	 * Called once per field type.
	 *
	 * @static
	 * @access public
	 *
	 * @return void
	 */
	public static function admin_enqueue_scripts() {
		$root_uri = \Carbon_Fields\Carbon_Fields::directory_to_url( \Carbon_Field_Wolfie_Password\DIR );

		// Enqueue field styles.
		wp_enqueue_style( 'carbon-field-wolfie-password', $root_uri . '/build/bundle.css' );

		// Enqueue field scripts.
		wp_enqueue_script( 'carbon-field-wolfie-password', $root_uri . '/build/bundle.js', array( 'carbon-fields-core' ) );
	}
}
