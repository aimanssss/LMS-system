<?php
/**
 * Uninstall BinawebKu LMS.
 */

if (! defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

global $wpdb;

$tables = array(
    'bwl_courses',
    'bwl_lessons',
    'bwl_quizzes',
    'bwl_questions',
    'bwl_enrollments',
    'bwl_submissions',
    'bwl_announcements',
    'bwl_messages',
);

foreach ($tables as $table) {
    $wpdb->query("DROP TABLE IF EXISTS {$wpdb->prefix}{$table}");
}

// Remove roles.
remove_role('bwl_student');
remove_role('bwl_teacher');
remove_role('bwl_admin');

// Delete options.
delete_option('bwl_lms_db_version');
