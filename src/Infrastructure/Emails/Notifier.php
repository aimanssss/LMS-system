<?php
namespace Binawebku\LMS\Infrastructure\Emails;

/**
 * Send email notifications.
 */
class Notifier {
    /**
     * Send enrollment email.
     *
     * @param string $to Recipient.
     * @param string $subject Subject.
     * @param string $message Message.
     *
     * @return void
     */
    public function send($to, $subject, $message) {
        wp_mail($to, $subject, $message);
    }
}
