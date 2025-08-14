<?php
namespace Binawebku\LMS\Domain;

/**
 * Question model.
 */
class Question {
    protected $id;
    protected $quiz_id;
    protected $question_text;
    protected $answer;

    public function get_id() { return $this->id; }
    public function set_id($id) { $this->id = $id; }

    public function get_quiz_id() { return $this->quiz_id; }
    public function set_quiz_id($quiz_id) { $this->quiz_id = $quiz_id; }

    public function get_question_text() { return $this->question_text; }
    public function set_question_text($text) { $this->question_text = $text; }

    public function get_answer() { return $this->answer; }
    public function set_answer($answer) { $this->answer = $answer; }
}
