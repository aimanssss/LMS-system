<?php
namespace Binawebku\LMS\Setup;

use Binawebku\LMS\Admin\Admin;
use Binawebku\LMS\Infrastructure\CLI\SeedCommand;
use Binawebku\LMS\Shortcodes\CoursesShortcode;

/**
 * Service provider for registering plugin services.
 */
class ServiceProvider {
    /**
     * Register plugin hooks.
     *
     * @return void
     */
    public function register() {
        $assets = new Assets();
        $assets->register();

        $routes = new Routes();
        $routes->register();

        $i18n = new I18n();
        $i18n->register();

        $admin = new Admin();
        $admin->register();

        $shortcode = new CoursesShortcode();
        $shortcode->register();

        SeedCommand::register();
    }
}
