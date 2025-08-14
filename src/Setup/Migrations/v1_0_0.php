<?php
namespace Binawebku\LMS\Setup\Migrations;

use wpdb;

/**
 * Initial database schema.
 */
class v1_0_0 {
    /**
     * Run migration.
     *
     * @return void
     */
    public function up() {
        global $wpdb;
        $charset = $wpdb->get_charset_collate();

        $tables = array();

        $tables[] = "CREATE TABLE {$wpdb->prefix}bwl_courses (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            title VARCHAR(255) NOT NULL,
            description LONGTEXT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY  (id),
            KEY title (title(191))
        ) $charset;";

        $tables[] = "CREATE TABLE {$wpdb->prefix}bwl_lessons (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            course_id BIGINT(20) UNSIGNED NOT NULL,
            title VARCHAR(255) NOT NULL,
            content LONGTEXT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY  (id),
            KEY course_id (course_id)
        ) $charset;";

        $tables[] = "CREATE TABLE {$wpdb->prefix}bwl_quizzes (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            course_id BIGINT(20) UNSIGNED NOT NULL,
            title VARCHAR(255) NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY course_id (course_id)
        ) $charset;";

        $tables[] = "CREATE TABLE {$wpdb->prefix}bwl_questions (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            quiz_id BIGINT(20) UNSIGNED NOT NULL,
            question_text LONGTEXT NOT NULL,
            answer LONGTEXT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY quiz_id (quiz_id)
        ) $charset;";

        $tables[] = "CREATE TABLE {$wpdb->prefix}bwl_enrollments (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            course_id BIGINT(20) UNSIGNED NOT NULL,
            user_id BIGINT(20) UNSIGNED NOT NULL,
            status VARCHAR(20) NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY course_user (course_id, user_id)
        ) $charset;";

        $tables[] = "CREATE TABLE {$wpdb->prefix}bwl_submissions (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            quiz_id BIGINT(20) UNSIGNED NOT NULL,
            user_id BIGINT(20) UNSIGNED NOT NULL,
            score FLOAT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY quiz_user (quiz_id, user_id)
        ) $charset;";

        $tables[] = "CREATE TABLE {$wpdb->prefix}bwl_announcements (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            course_id BIGINT(20) UNSIGNED NOT NULL,
            message LONGTEXT NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY course_id (course_id)
        ) $charset;";

        $tables[] = "CREATE TABLE {$wpdb->prefix}bwl_messages (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            sender_id BIGINT(20) UNSIGNED NOT NULL,
            receiver_id BIGINT(20) UNSIGNED NOT NULL,
            message LONGTEXT NOT NULL,
            created_at DATETIME NOT NULL,
            updated_at DATETIME NOT NULL,
            PRIMARY KEY (id),
            KEY receiver_id (receiver_id)
        ) $charset;";

        foreach ($tables as $sql) {
            dbDelta($sql);
        }
    }
}
