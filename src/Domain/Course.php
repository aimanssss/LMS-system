<?php
namespace Binawebku\LMS\Domain;

/**
 * Course model.
 */
class Course {
    /**
     * ID.
     *
     * @var int
     */
    protected $id;

    /**
     * Title.
     *
     * @var string
     */
    protected $title;

    /**
     * Description.
     *
     * @var string|null
     */
    protected $description;

    public function get_id() {
        return $this->id;
    }

    public function set_id($id) {
        $this->id = $id;
    }

    public function get_title() {
        return $this->title;
    }

    public function set_title($title) {
        $this->title = $title;
    }

    public function get_description() {
        return $this->description;
    }

    public function set_description($description) {
        $this->description = $description;
    }
}
