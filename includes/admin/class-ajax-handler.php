<?php

class Managx_Admin_Ajax_Handler {

    public function __construct() {
        add_action( 'wp_ajax_create_project', array( $this, 'create_project' ) );
        add_action( 'wp_ajax_get_projects', array( $this, 'get_projects' ) );
    }

    public function get_projects() {
        $offset              = $_GET[ 'offset' ];
        $limit               = $_GET[ 'limit' ];
        $response[ 'projects' ] = array();
        $response[ 'success' ] = false;
        $project_class       = new Managx_Admin_Projects();
        $projects            = $project_class->get_projets( $offset, $limit );
        if ( $projects ) {
           
            $response[ 'projects' ] = (object) $projects;
            $response[ 'success' ] = true;
        }
        echo json_encode( $response );
        die();
    }

    public function create_project() {

        $response     = array();
        $cuid         = wp_get_current_user()->ID;
        $project_data = array();
        parse_str( $_POST[ 'formData' ], $project_data );

        $project_data[ 'create_by' ]    = $cuid;
        $project_data[ 'project_date' ] = current_time( 'mysql' );
        $project_data[ 'status' ]       = '1';

        $project_class = new Managx_Admin_Projects();

        $project = $project_class->create_project( $project_data );

        if ( $project ) {
            $respons[ 'project' ] = $project;
        }

        wp_send_json( $response );
    }

}