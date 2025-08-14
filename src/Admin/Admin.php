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

        add_submenu_page(
            'bwl-dashboard',
            __('Students', 'binawebku-lms'),
            __('Students', 'binawebku-lms'),
            'manage_bwl',
            'bwl-students',
            array($this, 'render_students')
        );

        add_submenu_page(
            'bwl-dashboard',
            __('Teachers', 'binawebku-lms'),
            __('Teachers', 'binawebku-lms'),
            'manage_bwl',
            'bwl-teachers',
            array($this, 'render_teachers')
        );

        add_submenu_page(
            'bwl-dashboard',
            __('Settings', 'binawebku-lms'),
            __('Settings', 'binawebku-lms'),
            'manage_bwl',
            'bwl-settings',
            array($this, 'render_settings')
        );
    }

    public function render() {
        echo '<div class="wrap"><h1>' . esc_html__('BinawebKu LMS', 'binawebku-lms') . '</h1></div>';
    }

    public function render_students() {
        echo '<div class="wrap"><h1>' . esc_html__('Students', 'binawebku-lms') . '</h1></div>';
    }

    public function render_teachers() {
        echo '<div class="wrap"><h1>' . esc_html__('Teachers', 'binawebku-lms') . '</h1></div>';
    }

    public function render_settings() {
        echo '<div class="wrap"><h1>' . esc_html__('Settings', 'binawebku-lms') . '</h1></div>';
    }
}
