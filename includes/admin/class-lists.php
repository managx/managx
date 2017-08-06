<?php

/**
 * Handle all function of list related.
 */
class Managx_Admin_Lists {

    protected $table;

    function __construct() {
        global $wpdb;
        $this->table = $wpdb->prefix . 'managx_lists';
    }

    /**
     * Get list of task list
     *
     * @since v0.0.1
     *
     * @param int $project_id
     *
     * @return void
     */
    function get_lists( $project_id ,$offset = 0, $limit = 20 ) {
        global $wpdb;

        if ( !$project_id ) return;

        $sql   = "SELECT * FROM {$this->table} WHERE project_id = {$project_id} ";
        $sql .= " LIMIT {$offset} , {$limit}  ";
        $lists = $wpdb->get_results( $sql );

        return $lists;
    }

    /**
     * Get single list of task
     *
     * @since v0.0.1
     *
     * @param int $list_id
     *
     * @return void
     */
    function get_list( $list_id ) {
        global $wpdb;
        $sql     = "SELECT * FROM `{$this->table}`  WHERE `id` = {$list_id} ";
        $list = $wpdb->get_row( $sql );

        return $list;
    }

    /**
     * Create list of task
     *
     * @since v1.0
     *
     * @return int list id on success, false on failure
     */
    function create_list( $data ) {
        print_r($data);
        global $wpdb;
        $table   = $wpdb->prefix . 'managx_lists';
        $wpdb->insert( $table, $data );
        $lid     = $wpdb->insert_id;
        // return project_object
        $list = $this->get_list( $lid );

        return $list;
    }

    /**
     * Update list of task
     *
     * @since v0.0.1
     *
     * @param int $list_id id of list
     * @param int $data date updated
     *
     * @return true on success, false on failure
     */
    function update_list( $list_id, $data ) {

    }

    /**
     * Delete list of task
     *
     * @since v0.0.1
     *
     * @param int $list_id id of list
     *
     * @return true on success false on failure
     */
    function delete_list( $list_id ) {

    }

}
