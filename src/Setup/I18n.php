<?php
namespace Binawebku\LMS\Setup;

class I18n {
    public function load(): void {
        load_plugin_textdomain( 'binawebku-lms', false, dirname( plugin_basename( __FILE__ ) ) . '/../../languages' );
    }
}
