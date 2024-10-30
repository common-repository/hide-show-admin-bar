<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://bilalafridi.com
 * @since      1.0.0
 *
 * @package    Adminbar_hide_show
 * @subpackage Adminbar_hide_show/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Adminbar_hide_show
 * @subpackage Adminbar_hide_show/includes
 * @author     Bilal Ahmad Afridi <xyz@gmail.com>
 */
class Adminbar_hide_show_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'adminbar_hide_show',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
