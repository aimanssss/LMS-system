<?php
namespace Binawebku\LMS\Domain;

/**
 * Quiz model.
 */
class Quiz {
    protected $id;
    protected $course_id;
    protected $title;

    public function get_id() { return $this->id; }
    public function set_id($id) { $this->id = $id; }

    public function get_course_id() { return $this->course_id; }
    public function set_course_id($course_id) { $this->course_id = $course_id; }

    public function get_title() { return $this->title; }
    public function set_title($title) { $this->title = $title; }
}
