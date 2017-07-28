<?php 
/**
 * Handle all function of task related.  
 */
class Managx_Admin_Tasks {

    function __construct() {
        
    }

    /**
     * Get tasks
     *
     * @since v0.0.1
     *
     * @param int $list_id
     *
     * @return void
     */
    function get_tasks( $list_id ,$offset = 0, $limit = 20 ) {
        global $wpdb;

        if ( !$list_id ) return;

        $sql   = "SELECT * FROM {$this->table} WHERE project_id = {$list_id} ";
        $sql .= " LIMIT {$offset} , {$limit}  ";
        $tasks = $wpdb->get_results( $sql );

        return $tasks;
    }

    /**
     * Get single task
     *
     * @since v0.0.1
     *
     * @param int $task_id
     */
    function get_task( $task_id ) {
        
    }

    /**
     * Create task
     *
     * @since v0.0.1
     *
     * @return int task id on success, false on failure
     */
    function create_task( $list_id ) {
        
    }

    /**
     * Update project
     *
     * @since v0.0.1
     *
     * @param int $task_id id of task
     * @param array $data task data
     *
     * @return true on success false on failure
     */
    function update_task( $task_id, $data ) {
        
    }

    /**
     * Update list metadata
     *
     * @since v0.0.1
     *
     * @param int $task_id task id
     * @param array $data task meta data array
     *
     * @return true on success, false on failure
     */
    function update_task_meta( $task_id, $data ) {
        
    }

    /**
     * Delete task 
     *
     * @since v0.0.1
     *
     * @param int $task_id task id
     *
     * @return true on success, false on failure
     */
    function delete_task( $task_id ) {
        
    }

}