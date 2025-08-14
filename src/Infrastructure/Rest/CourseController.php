<?php
namespace Binawebku\LMS\Infrastructure\Rest;

use WP_REST_Request;
use WP_REST_Response;
use Binawebku\LMS\Infrastructure\Repositories\CourseRepository;

/**
 * REST controller for courses.
 */
class CourseController {
    protected $repo;

    public function __construct(CourseRepository $repo) {
        $this->repo = $repo;
    }

    /**
     * Register routes.
     *
     * @return void
     */
    public function register_routes() {
        register_rest_route('bwl/v1', '/courses', array(
            'methods' => 'GET',
            'callback' => array($this, 'index'),
            'permission_callback' => '__return_true',
        ));
    }

    /**
     * Handle GET /courses.
     *
     * @param WP_REST_Request $request Request.
     *
     * @return WP_REST_Response
     */
    public function index(WP_REST_Request $request) {
        $data = $this->repo->all();
        return new WP_REST_Response(array('success' => true, 'data' => $data, 'error' => null));
    }
}
