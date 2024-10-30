<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://bilalafridi.com
 * @since             1.0.0
 * @package           Adminbar_hide_show
 *
 * @wordpress-plugin
 * Plugin Name:       Hide Show Admin Bar
 * Plugin URI:        https://bilalafridi.com/wp-tools/show-and-hide-admin-bar/
 * Description:       A very simple and minimal plugin to hide the admin bar and only show it on pages with keyboard shortcut ctrl+alt+s
 * Version:           1.0.0
 * Author:            Bilal Ahmad Afridi
 * Author URI:        https://bilalafridi.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       adminbar_hide_show
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'ADMINBAR_HIDE_SHOW_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-adminbar_hide_show-activator.php
 */
function activate_adminbar_hide_show() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-adminbar_hide_show-activator.php';
	Adminbar_hide_show_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-adminbar_hide_show-deactivator.php
 */
function deactivate_adminbar_hide_show() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-adminbar_hide_show-deactivator.php';
	Adminbar_hide_show_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_adminbar_hide_show' );
register_deactivation_hook( __FILE__, 'deactivate_adminbar_hide_show' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-adminbar_hide_show.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_adminbar_hide_show() {

	$plugin = new Adminbar_hide_show();
	$plugin->run();

}
run_adminbar_hide_show();



 
