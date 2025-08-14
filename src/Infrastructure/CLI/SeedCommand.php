<?php
namespace Binawebku\LMS\Infrastructure\CLI;

use WP_CLI;

/**
 * WP-CLI command for seeding demo data.
 */
class SeedCommand {
    /**
     * Register command.
     *
     * @return void
     */
    public static function register() {
        if (defined('WP_CLI') && WP_CLI) {
            WP_CLI::add_command('bwl seed', array(__CLASS__, 'seed'));
        }
    }

    /**
     * Run the seed command.
     */
    public static function seed() {
        WP_CLI::success('Seeding demo data...');
    }
}
