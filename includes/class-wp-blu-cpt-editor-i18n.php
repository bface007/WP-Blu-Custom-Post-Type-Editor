<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       facebook.com/Bface.Style
 * @since      1.0.0
 *
 * @package    Wp_Blu_Cpt_Editor
 * @subpackage Wp_Blu_Cpt_Editor/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Wp_Blu_Cpt_Editor
 * @subpackage Wp_Blu_Cpt_Editor/includes
 * @author     Dan T. Ngossinga <bface007@gmail.com>
 */
class Wp_Blu_Cpt_Editor_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'wp-blu-cpt-editor',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
