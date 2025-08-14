<?php
namespace Binawebku\LMS\Domain;

/**
 * Submission model.
 */
class Submission {
    protected $id;
    protected $quiz_id;
    protected $user_id;
    protected $score;

    public function get_id() { return $this->id; }
    public function set_id($id) { $this->id = $id; }

    public function get_quiz_id() { return $this->quiz_id; }
    public function set_quiz_id($quiz_id) { $this->quiz_id = $quiz_id; }

    public function get_user_id() { return $this->user_id; }
    public function set_user_id($user_id) { $this->user_id = $user_id; }

    public function get_score() { return $this->score; }
    public function set_score($score) { $this->score = $score; }
}
