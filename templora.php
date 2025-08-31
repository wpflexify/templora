<?php
/**
 * Plugin Name: Templora
 * Description: Adds a template library with predefined pages and patterns to Gutenberg editor.
 * Plugin URI:  
 * Author:      WpFlexify
 * Author URI:  
 * Version:     1.0.0
 * Text Domain: templora
 * License:     GPLv3
 * License URI: https://opensource.org/licenses/GPL-3.0
 */

defined( 'ABSPATH' ) || exit;

define('TEMPLORA_FILE', __FILE__);
define('TEMPLORA_DIR_PATH', plugin_dir_path(TEMPLORA_FILE));
define('TEMPLORA_DIR_URL', plugin_dir_url(TEMPLORA_FILE));
define('TEMPLORA_VERSION', '1.0.0' );
define('TEMPLORA_MIN_PHP_VERSION', '7.4');

// Load main plugin class
require_once plugin_dir_path( __FILE__ ) . 'inc/class-init.php';

// Initialize plugin
function templora_init() {
    return Templora::get_instance();
}
templora_init();