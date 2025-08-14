<?php
namespace Binawebku\LMS\Setup;

/**
 * Internationalization handler.
 */
class I18n {
    /**
     * Register hooks.
     *
     * @return void
     */
    public function register() {
        add_action('plugins_loaded', array($this, 'load_textdomain'));
    }

    /**
     * Load plugin textdomain.
     *
     * @return void
     */
    public function load_textdomain() {
        load_plugin_textdomain('binawebku-lms', false, dirname(plugin_basename(__FILE__), 2) . '/languages');
    }
}
