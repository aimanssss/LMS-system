<?php
namespace Binawebku\LMS\Setup;

/**
 * Register REST routes.
 */
class Routes {
    /**
     * Hook into rest_api_init.
     *
     * @return void
     */
    public function register() {
        add_action('rest_api_init', array($this, 'register_routes'));
    }

    /**
     * Register routes callback.
     *
     * @return void
     */
    public function register_routes() {
        // Placeholder for REST routes.
    }
}
