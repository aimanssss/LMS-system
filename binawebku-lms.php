<?php
/**
 * Plugin Name: BinawebKu LMS
 * Plugin URI:  https://example.com/
 * Description: Learning management system for WordPress.
 * Version:     0.1.0
 * Author:      Your Name
 * Author URI:  https://example.com/
 * Text Domain: binawebku-lms
 * Domain Path: /languages
 * Requires PHP: 8.2
 * Requires at least: 6.5
 * License: GPL-2.0-or-later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

defined( 'ABSPATH' ) || exit;

require_once __DIR__ . '/vendor/autoload.php';

use Binawebku\LMS\Setup\Service_Provider;

/**
 * Start plugin.
 */
function binawebku_lms_bootstrap() {
    $service = new Service_Provider();
    $service->register();
}
add_action( 'plugins_loaded', 'binawebku_lms_bootstrap' );

