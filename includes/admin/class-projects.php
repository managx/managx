<?php

/**
 * Handle all function of project related.
 */
class Managx_Admin_Projects {

    function __construct() {

    }

    /**
     * Get list of projects
     *
     * @since v0.0.1
     *
     * @param int offset
     * @param int limit
     * @param string where
     *
     * @return void
     */
    function get_projects( $offset = 0, $limit = 20, $where = null ) {
        global $wpdb;
        $table = $wpdb->prefix . 'managx_projects';
        $sql   = "SELECT * FROM {$table} ";
        if ( $where ) {
            $sql .= " WHERE 1 = 1 AND {$where} ";
        }

        $sql .= " LIMIT {$offset} , {$limit}  ";

        $projects = $wpdb->get_results( $sql );

        return $projects;
    }

    /**
     * Get single project
     *
     * @since v0.0.1
     *
     * @param int $project_id
     *
     * @return void
     */
    function get_project( $project_id ) {
        global $wpdb;
        $table   = $wpdb->prefix . 'managx_projects';
        $sql     = "SELECT * FROM `{$table}`  WHERE `id` = {$project_id} ";
        $project = $wpdb->get_row( $sql );

        return $project;
    }

    /**
     * Create project
     *
     * @since v0.0.1
     *
     * @param array $projet_data
     *
     * @return int project id on succes, false on failure
     */
    function create_project( $projet_data ) {

        // save to DB
        global $wpdb;
        $table   = $wpdb->prefix . 'managx_projects';
        $wpdb->insert( $table, $projet_data );
        $pid     = $wpdb->insert_id;
        // return project_object
        $project = $this->get_project( $pid );

        return $project;
    }

    /**
     * Update project
     *
     * @since v0.0.1
     *
     * @param int $project_id
     * @param array $data
     *
     * @return void
     */
    function update_projct( $project_id, $data ) {

    }

    /**
     * Update project metadata
     * @since v0.0.1
     *
     * @param int $project_id project id
     * @param array $meta_data project meta data array
     *
     * @return true on success, false on failure
     */
    function update_project_meta( $project_id, $meta_data ) {

    }

    /**
     * Update project privacy
     *
     * @since v0.0.1
     *
     * @param int $project_id
     * @param array/string $data
     *
     * @return true on success, false on failure
     */
    function update_privacy( $project_id, $data ) {

    }

    /**
     * Update project status
     *
     * @since v0.0.1
     *
     * @param int $project_id
     *
     * @return true on success false on failure
     */
    function update_project_status( $project_id ) {

    }

    /**
     * Delete project
     *
     * @since v0.0.1
     *
     * @param int $project_id
     *
     * @return true on success, false on failure
     */
    function delete_project( $project_id ) {

        global $wpdb;
        $table   = $wpdb->prefix . 'managx_projects';
        return $wpdb->delete( $table, array( 'id' => $project_id ) );
    }

}
