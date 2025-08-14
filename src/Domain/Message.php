<?php
namespace Binawebku\LMS\Domain;

class Message {
    public int $id;
    public int $sender_id;
    public int $recipient_id;
    public string $content;
}
