<?php
namespace Binawebku\LMS\Domain;

/**
 * Message model.
 */
class Message {
    protected $id;
    protected $sender_id;
    protected $receiver_id;
    protected $message;

    public function get_id() { return $this->id; }
    public function set_id($id) { $this->id = $id; }

    public function get_sender_id() { return $this->sender_id; }
    public function set_sender_id($sender_id) { $this->sender_id = $sender_id; }

    public function get_receiver_id() { return $this->receiver_id; }
    public function set_receiver_id($receiver_id) { $this->receiver_id = $receiver_id; }

    public function get_message() { return $this->message; }
    public function set_message($message) { $this->message = $message; }
}
