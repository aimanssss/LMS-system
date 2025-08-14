<?php
namespace Binawebku\LMS\Setup;

use Binawebku\LMS\Setup\Migrations\Schema;

/**
 * Runs on plugin activation.
 */
class Activator {
    /**
     * Activate the plugin.
     *
     * @return void
     */
    public static function activate() {
        self::create_roles();
        $schema = new Schema();
        $schema->run();
    }

    /**
     * Register custom roles.
     *
     * @return void
     */
    protected static function create_roles() {
        add_role('bwl_student', 'BWL Student', array('read' => true));
        add_role('bwl_teacher', 'BWL Teacher', array(
            'read' => true,
            'edit_bwl_courses' => true,
        ));
        add_role('bwl_admin', 'BWL Admin', array(
            'read' => true,
            'manage_bwl' => true,
        ));
    }
}
