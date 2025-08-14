<?php
namespace Binawebku\LMS\Setup\Migrations;

/**
 * Handle database schema migrations.
 */
class Schema {
    /**
     * Run all migrations.
     *
     * @return void
     */
    public function run() {
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $migrations = array(
            new v1_0_0(),
        );

        foreach ($migrations as $migration) {
            $migration->up();
        }
    }
}
