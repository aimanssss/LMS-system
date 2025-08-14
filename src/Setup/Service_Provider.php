<?php
namespace Binawebku\LMS\Setup;

class Service_Provider {
    public function register(): void {
        ( new I18n() )->load();
        ( new Assets() )->register();
        ( new Routes() )->register();
    }
}
