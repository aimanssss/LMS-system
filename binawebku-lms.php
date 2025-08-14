<?php
/**
 * Plugin Name: BinawebKu LMS
 * Plugin URI: https://binawebpro.com
 * Description: Learning management system with admin dashboard.
 * Version: 0.1.0
 * Author: WMA BinawebKu
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

// Load the Composer autoloader if it exists. Some distributions of the plugin
// may not ship with the `vendor` directory (e.g. when installed directly from
// source). In that case we fall back to a simple PSR-4 autoloader so the plugin
// can still bootstrap without Composer.
$autoload = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
} else {
    spl_autoload_register(function ($class) {
        $prefix = 'Binawebku\\LMS\\';
        $len    = strlen($prefix);
        if (0 !== strncmp($prefix, $class, $len)) {
            return;
        }

        $relative = substr($class, $len);
        $file     = __DIR__ . '/src/' . str_replace('\\', '/', $relative) . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    });
}

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
