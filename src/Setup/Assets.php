<?php
namespace Binawebku\LMS\Setup;

class Assets {
    public function register(): void {
        add_action( 'admin_enqueue_scripts', [ $this, 'admin_scripts' ] );
        add_action( 'wp_enqueue_scripts', [ $this, 'public_scripts' ] );
    }

    public function admin_scripts(): void {
        // Enqueue built admin assets.
    }

    public function public_scripts(): void {
        // Enqueue frontend assets.
    }
}
