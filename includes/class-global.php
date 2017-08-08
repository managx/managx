<?php

class Managx_Global {

    /**
     * List of Status for
     * project, list, task
     * @return mixed
     */
    public static function post_statuses() {
        global $managx_post_status;

        return $managx_post_status = apply_filters( 'managx_post_status', array(
            'publish' => 'Publish',
            'trash' => 'Trash',
            'draft' => 'Draft',
        ) );
    }

    /**
     * Task types
     * @return mixed
     */
    public static function task_types() {
        global $task_types;

        return $managx_task_types = apply_filters( 'managx_task_type', array(
            'bug' => 'Bug',
            'enhancement' => 'Enhancement',
            'new' => 'New'
        ));
    }
}