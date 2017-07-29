<?php

class Managx_Admin_Ajax_Handler {

    public function __construct() {
        add_action( 'wp_ajax_create_project', array( $this, 'create_project' ) );
        add_action( 'wp_ajax_get_projects', array( $this, 'get_projects' ) );

        //lists
        add_action( 'wp_ajax_get_lists', array( $this, 'get_lists' ) );

        //tasks
        add_action( 'wp_ajax_get_tasks', array( $this, 'get_tasks' ) );
    }

    public function get_projects() {
        $offset        = $_GET[ 'offset' ];
        $limit         = $_GET[ 'limit' ];
        $project_class = new Managx_Admin_Projects();
        $projects      = $project_class->get_projets( $offset, $limit );

        if ( ! $projects ) {
            wp_send_json_error();
        }

        wp_send_json_success( $projects );
    }

    public function create_project() {
        $cuid         = wp_get_current_user()->ID;
        $project_data = array();
        parse_str( $_POST[ 'formData' ], $project_data );

        $project_data['create_by']    = $cuid;
        $project_data['project_date'] = current_time( 'mysql' );
        $project_data['status']       = 1;

        $project_class = new Managx_Admin_Projects();

        $project = $project_class->create_project( $project_data );

        if ( ! $project ) {
            wp_send_json_error();
        }

        wp_send_json_success( $project );
    }

    //lists
    public function get_lists() {
        $offset                 = $_GET[ 'offset' ];
        $limit                  = $_GET[ 'limit' ];
        $response[ 'lists' ] = array();
        $response[ 'success' ]  = false;
        $list_class          = new Managx_Admin_Lists();

        //custom
        $project_id = 1;

        $lists               = $list_class->get_lists( $project_id, $offset, $limit );
        if ( $lists ) {

            $response[ 'lists' ] = (object) $lists;
            $response[ 'success' ]  = true;
        }
        wp_send_json( $response );
    }
    //tasks
    public function get_tasks() {
        $offset                 = $_GET[ 'offset' ];
        $limit                  = $_GET[ 'limit' ];
        $response[ 'tasks' ] = array();
        $response[ 'success' ]  = false;
        $task_class          = new Managx_Admin_Tasks();

        //custom
        $list_id = 1;

        $tasks               = $task_class->get_tasks( $list_id, $offset, $limit );
        if ( $tasks ) {

            $response[ 'tasks' ] = (object) $tasks;
            $response[ 'success' ]  = true;
        }
        wp_send_json( $response );
    }

}
