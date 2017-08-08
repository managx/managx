<?php

class Managx_Admin_Ajax_Handler {

    public function __construct() {
        add_action( 'wp_ajax_create_project', array( $this, 'create_project' ) );
        add_action( 'wp_ajax_get_project', array( $this, 'get_project' ) );
        add_action( 'wp_ajax_get_projects', array( $this, 'get_projects' ) );
        add_action( 'wp_ajax_change_project_status', array( $this, 'change_project_status' ) );
        //lists
        add_action( 'wp_ajax_get_lists', array( $this, 'get_lists' ) );
        add_action( 'wp_ajax_get_list', array( $this, 'get_list' ) );
        add_action( 'wp_ajax_create_list', array( $this, 'create_list' ) );

        //tasks
        add_action( 'wp_ajax_get_tasks', array( $this, 'get_tasks' ) );
        add_action( 'wp_ajax_create_task', array( $this, 'create_task' ) );
    }

    public function get_project() {
        $project_class = new Managx_Admin_Projects();
        $project       = $project_class->get_project( $_GET['id'] );

        if ( ! $project ) {
            wp_send_json_error();
        }

        wp_send_json_success( $project );
    }

    public function get_projects() {
        $offset        = $_GET['offset'];
        $limit         = $_GET['limit'];
        $project_class = new Managx_Admin_Projects();
        $projects      = $project_class->get_projects( $offset, $limit );

        if ( ! $projects ) {
            wp_send_json_error();
        }

        wp_send_json_success( $projects );
    }

    public function create_project() {
        $cuid         = wp_get_current_user()->ID;
        $project_data = array();
        parse_str( $_POST['formData'], $project_data );

        $project_data['created_by'] = $cuid;
        $project_data['start_date'] = current_time( 'mysql' );
        $project_data['status']     = 1;

        $project_class = new Managx_Admin_Projects();

        $project = $project_class->create_project( $project_data );

        if ( ! $project ) {
            wp_send_json_error();
        }

        wp_send_json_success( $project );
    }

    public function change_project_status() {

        $id = $_POST['id'];
        $status = $_POST['status'];

        $class = new Managx_Admin_Projects();
        $result = $class->update_projct( $id, array( 'status' => $status ), array( '%s' ) );

        if ( ! $result ) {
            wp_send_json_error();
        }

        wp_send_json_success( $result );
    }

    //lists
    public function get_lists() {
        $offset     = $_GET['offset'];
        $limit      = $_GET['limit'];
        $project_id = $_GET['project_id'];
        $list_class = new Managx_Admin_Lists();
        $lists      = $list_class->get_lists( $project_id, $offset, $limit );

        if ( ! $lists ) {
            wp_send_json_error();
        }

        wp_send_json_success( $lists );
    }

    public function get_list() {
        $list_class = new Managx_Admin_Lists();
        $list = $list_class->get_list( $_GET['id'] );

        if ( ! $list ) {
            wp_send_json_error();
        }

        wp_send_json_success( $list );
    }

    //create list
    public function create_list() {
        $cuid      = wp_get_current_user()->ID;
        $list_data = array();
        parse_str( $_POST['formData'], $list_data );

        $list_data['created_by'] = $cuid;
        $list_data['created_at'] = current_time( 'mysql' );
        $list_data['status']     = 1;

        $list_class = new Managx_Admin_Lists();

        $list = $list_class->create_list(  $list_data );

        if ( ! $list ) {
            wp_send_json_error();
        }

        wp_send_json_success( $list );
    }

    //tasks
    public function get_tasks() {

        $offset                 = $_GET['offset'];
        $limit                  = $_GET['limit'];
        $response['tasks'] = array();
        $response['success']  = false;
        $task_class          = new Managx_Admin_Tasks();

        //custom
        $list_id = $_GET['list_id'];

        $tasks               = $task_class->get_tasks( $list_id, $offset, $limit );


        if ( $tasks ) {

            $response['data'] = (object) $tasks;
            $response['success']  = true;
        }
        wp_send_json( $response );
    }

    public function create_task() {
        $cuid         = wp_get_current_user()->ID;
        $task_data = array();
        parse_str( $_POST['formData'], $task_data );

        $task_data['created_at'] = current_time( 'mysql' );
        $task_data['created_by'] = $cuid;
        $task_data['due_date'] = current_time( 'mysql' );
        $task_data['status']     = 1;
        $task_class = new Managx_Admin_Tasks();

        $task = $task_class->create_task( $task_data );

        if ( ! $task ) {
            wp_send_json_error();
        }

        wp_send_json_success( $task );
    }

}
