<?php
namespace Binawebku\LMS\Domain;

/**
 * Announcement model.
 */
class Announcement {
    protected $id;
    protected $course_id;
    protected $message;

    public function get_id() { return $this->id; }
    public function set_id($id) { $this->id = $id; }

    public function get_course_id() { return $this->course_id; }
    public function set_course_id($course_id) { $this->course_id = $course_id; }

    public function get_message() { return $this->message; }
    public function set_message($message) { $this->message = $message; }
}
