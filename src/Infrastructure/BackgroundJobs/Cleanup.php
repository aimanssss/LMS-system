<?php
namespace Binawebku\LMS\Infrastructure\BackgroundJobs;

/**
 * Background cleanup job.
 */
class Cleanup {
    public function register() {
        if (! wp_next_scheduled('bwl_cleanup')) {
            wp_schedule_event(time(), 'daily', 'bwl_cleanup');
        }
        add_action('bwl_cleanup', array($this, 'handle'));
    }

    public function handle() {
        // Placeholder for cleanup logic.
    }
}
