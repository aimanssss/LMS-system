<?php
namespace Binawebku\LMS\Setup;

/**
 * Manage plugin assets.
 */
class Assets {
    /**
     * Register hooks.
     *
     * @return void
     */
    public function register() {
        add_action('admin_enqueue_scripts', array($this, 'enqueue_admin'));
        add_action('wp_enqueue_scripts', array($this, 'enqueue_public'));
    }

    /**
     * Enqueue admin assets.
     */
    public function enqueue_admin() {
        // Placeholder for admin assets.
    }

    /**
     * Enqueue public assets.
     */
    public function enqueue_public() {
        // Placeholder for public assets.
    }
}
