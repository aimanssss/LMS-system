<?php
namespace Binawebku\LMS\Domain;

/**
 * Enrollment model.
 */
class Enrollment {
    protected $id;
    protected $course_id;
    protected $user_id;
    protected $status;

    public function get_id() { return $this->id; }
    public function set_id($id) { $this->id = $id; }

    public function get_course_id() { return $this->course_id; }
    public function set_course_id($course_id) { $this->course_id = $course_id; }

    public function get_user_id() { return $this->user_id; }
    public function set_user_id($user_id) { $this->user_id = $user_id; }

    public function get_status() { return $this->status; }
    public function set_status($status) { $this->status = $status; }
}
