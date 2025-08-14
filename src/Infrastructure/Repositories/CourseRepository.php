<?php
namespace Binawebku\LMS\Infrastructure\Repositories;

use wpdb;

/**
 * Repository for course data.
 */
class CourseRepository {
    /**
     * Database accessor.
     *
     * @var wpdb
     */
    protected $db;

    public function __construct(wpdb $db) {
        $this->db = $db;
    }

    /**
     * Fetch all courses.
     *
     * @return array
     */
    public function all() {
        $table = $this->db->prefix . 'bwl_courses';
        return $this->db->get_results("SELECT * FROM {$table}");
    }
}
