<?php
namespace Binawebku\LMS\Infrastructure\Security;

/**
 * Nonce helper.
 */
class Nonce {
    public static function verify($nonce, $action) {
        return wp_verify_nonce($nonce, $action);
    }
}
