<?php
namespace Binawebku\LMS\Setup;

class Routes {
    public function register(): void {
        add_action( 'rest_api_init', [ $this, 'rest_routes' ] );
    }

    public function rest_routes(): void {
        // Register REST routes.
    }
}
