<?php
namespace Binawebku\LMS\Admin;

/**
 * Main admin handler.
 */
class Admin {
    public function register() {
        add_action('admin_menu', array($this, 'menu'));
    }

    public function menu() {
        add_menu_page(
            __('BinawebKu LMS', 'binawebku-lms'),
            __('BinawebKu LMS', 'binawebku-lms'),
            'manage_bwl',
            'bwl-dashboard',
            array($this, 'render'),
            'dashicons-welcome-learn-more'
        );
    }

    public function render() {
        echo '<div class="wrap"><h1>' . esc_html__('BinawebKu LMS', 'binawebku-lms') . '</h1></div>';
    }
}
