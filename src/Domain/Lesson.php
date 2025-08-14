<?php
namespace Binawebku\LMS\Domain;

/**
 * Lesson model.
 */
class Lesson {
    protected $id;
    protected $course_id;
    protected $title;
    protected $content;

    public function get_id() { return $this->id; }
    public function set_id($id) { $this->id = $id; }

    public function get_course_id() { return $this->course_id; }
    public function set_course_id($course_id) { $this->course_id = $course_id; }

    public function get_title() { return $this->title; }
    public function set_title($title) { $this->title = $title; }

    public function get_content() { return $this->content; }
    public function set_content($content) { $this->content = $content; }
}
