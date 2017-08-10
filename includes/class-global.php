<?php

class Managx_Global {

    /**
     * List of Status for
     * project, list, task
     * @return mixed
     */
    public static function post_statuses() {

        return $managx_post_status = apply_filters( 'managx_post_status', array(
            'publish' => __( 'Publish', 'managx' ),
            'trash' => __( 'Trash', 'managx' ),
            'draft' => __( 'Draft', 'managx' ),
        ) );
    }

    /**
     * Working status
     * @return mixed
     */
    public static function progress_status() {

        return $managx_working_statuses = apply_filters( 'managx_working_status', array(
            'scheduled' => __( 'Scheduled' , 'managx' ),
            'running' => __( 'In progress', 'managx' ),
            'complete' => __( 'Complete', 'managx' )
        ));
    }

    /**
     * Privacy status
     * @return mixed
     */
    public static function privacy_status () {

        return $managx_privacy_status = apply_filters( 'managx_privacy_status', array(
            'public' => __( 'Public', 'managx' ),
            'private' => __( 'Private', 'managx' )
        ) );
    }

    /**
     * Task types
     * @return mixed
     */
    public static function task_types() {

        return $managx_task_types = apply_filters( 'managx_task_type', array(
            'bug' => __( 'Bug', 'managx' ),
            'enhancement' => __( 'Enhancement', 'managx' ),
            'new' => __( 'New' , 'managx' )
        ));
    }


}