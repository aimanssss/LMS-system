<?php
namespace Binawebku\LMS\Shortcodes;

/**
 * Shortcode for displaying courses.
 */
class CoursesShortcode {
    public function register() {
        add_shortcode('bwl_courses', array($this, 'render'));
    }

    public function render($atts = array()) {
        return '<div class="bwl-courses">' . esc_html__('Courses list', 'binawebku-lms') . '</div>';
    }
}
