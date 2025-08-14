<?php
/**
 * Plugin Name: BinawebKu LMS
 * Plugin URI: https://example.com
 * Description: Learning management system with admin dashboard.
 * Version: 0.1.0
 * Author: Example Author
 * Text Domain: binawebku-lms
 * Requires at least: 6.5
 * Requires PHP: 7.4
 * License: GPL-2.0-or-later
 * 
 * @package Binawebku\LMS
 */

if (! defined('ABSPATH')) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

use Binawebku\LMS\Setup\Activator;
use Binawebku\LMS\Setup\Deactivator;
use Binawebku\LMS\Setup\ServiceProvider;

register_activation_hook(__FILE__, array(Activator::class, 'activate'));
register_deactivation_hook(__FILE__, array(Deactivator::class, 'deactivate'));

/**
 * Boot the plugin services.
 *
 * @return void
 */
function binawebku_lms_boot() {
    $provider = new ServiceProvider();
    $provider->register();
}

binawebku_lms_boot();
