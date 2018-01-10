<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://www.robertdevore.com/
 * @since             1.0.0
 * @package           Jsms
 *
 * @wordpress-plugin
 * Plugin Name:       Jetpack Stats Mobile Styles
 * Plugin URI:        http://www.robertdevore.com/jetpack-stats-mobile-styles
 * Description:       Simple plugin to update the CSS of the Jetpack Stats page on mobile screens.
 * Version:           1.0.0
 * Author:            Robert DeVore
 * Author URI:        http://www.robertdevore.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       jsms
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
define( 'JSMS_NAME_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-jsms-activator.php
 */
function activate_jsms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jsms-activator.php';
	Jsms_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-jsms-deactivator.php
 */
function deactivate_jsms() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-jsms-deactivator.php';
	Jsms_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_jsms' );
register_deactivation_hook( __FILE__, 'deactivate_jsms' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-jsms.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_jsms() {

	$plugin = new Jsms();
	$plugin->run();

}
run_jsms();
