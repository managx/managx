<?php
/*
Plugin Name: ManagX - Project Management Solution That is Not Boring
Plugin URI:  https://wordpress.org/plugins/managx/
Description: A fast and easy project and task management system designed for all kind of users.
Version:     0.0.1
Author:      managx
Author URI:  https://managx.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: managx
Domain Path: /languages
*/

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
    die;
}

class ManagX {
    /**
     * Plugin version
     *
     * @var string
     */
    public $version = '0.0.1';

    /**
     * Class constructor
     */
    private function __construct() {
        $this->define_constants();
        $this->includes();
        spl_autoload_register( array( $this, 'class_autoload' ) );
        $this->instantiate();
        $this->init_hooks();
    }

    /**
     * Return singletone instance of this class
     *
     * @return object
     */
    public static function init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Activate the plugin.
     */
    public static function activate() {
        global $wpdb;

        $collate = '';

        if ( $wpdb->has_cap( 'collation' ) ) {
            if ( ! empty($wpdb->charset ) ) {
                $collate .= "DEFAULT CHARACTER SET $wpdb->charset";
            }

            if ( ! empty($wpdb->collate ) ) {
                $collate .= " COLLATE $wpdb->collate";
            }
        }

        $table_schema = array(
            "CREATE TABLE `{$wpdb->prefix}managx_projects` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `name` tinytext NOT NULL,
                `description` longtext NOT NULL,
                `create_by` int NOT NULL,
                `create_date` DATETIME NOT NULL,
                `project_date` DATE NOT NULL,
                `status` int NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",

            "CREATE TABLE `{$wpdb->prefix}managx_project_meta` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `project_id` bigint NOT NULL,
                `meta_key` varchar(255) NOT NULL,
                `meta_value` TEXT NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",

            "CREATE TABLE `{$wpdb->prefix}managx_lists` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `project_id` bigint NOT NULL,
                `milestone_id` bigint NOT NULL,
                `name` tinytext NOT NULL,
                `description` TEXT NOT NULL,
                `create_date` TIMESTAMP NOT NULL,
                `create_by` int NOT NULL,
                `status` int NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",

            "CREATE TABLE `{$wpdb->prefix}managx_tasks` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `project_id` bigint NOT NULL,
                `list_id` bigint NOT NULL,
                `name` tinytext NOT NULL,
                `description` longtext NOT NULL,
                `create_date` TIMESTAMP NOT NULL,
                `create_by` int NOT NULL,
                `due_date` DATE NOT NULL,
                `status` int NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",

            "CREATE TABLE `{$wpdb->prefix}managx_milestones` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `project_id` bigint NOT NULL,
                `name` tinytext NOT NULL,
                `description` TEXT NOT NULL,
                `create_by` int NOT NULL,
                `create_date` TIMESTAMP NOT NULL,
                `due_date` DATE NOT NULL,
                `status` int NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",

            "CREATE TABLE `{$wpdb->prefix}managx_task_meta` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `task_id` bigint NOT NULL,
                `meta_key` varchar(255) NOT NULL,
                `meta_value` TEXT NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",

            "CREATE TABLE `{$wpdb->prefix}managx_discussions` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `project_id` bigint NOT NULL,
                `title` tinytext NOT NULL,
                `description` longtext NOT NULL,
                `create_by` int NOT NULL,
                `create_date` TIMESTAMP NOT NULL,
                `status` int NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",

            "CREATE TABLE `{$wpdb->prefix}managx_attachment_relation` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `project_id` bigint NOT NULL,
                `parent_id` int,
                `discussion_id` bigint NOT NULL,
                `task_id` bigint NOT NULL,
                `folder_name` varchar(255) NOT NULL,
                `wp_attach_id` int NOT NULL,
                `type` varchar(255) NOT NULL,
                `create_by` int NOT NULL,
                `create_date` TIMESTAMP NOT NULL,
                `status` int NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",

            "CREATE TABLE `{$wpdb->prefix}managx_comments` (
                `id` bigint NOT NULL AUTO_INCREMENT,
                `project_id` bigint NOT NULL,
                `type` varchar(255) NOT NULL,
                `title` tinytext NOT NULL,
                `discription` longtext NOT NULL,
                `create_by` int NOT NULL,
                `create_date` TIMESTAMP NOT NULL,
                `status` int NOT NULL,
                `object_id` bigint NOT NULL,
                PRIMARY KEY (`id`)
            )$collate;",
        );

        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        foreach ( $table_schema as $table ) {
            dbDelta( $table );
        }
    }

    /**
     * Define the constants
     *
     * @return void
     */
    private function define_constants() {
        define( 'MANAGX_FILE', __FILE__ );
        define( 'MANAGX_PATH', dirname( MANAGX_FILE ) );
        define( 'MANAGX_INCLUDES', MANAGX_PATH . '/includes' );
        define( 'MANAGX_URL', plugins_url( '', MANAGX_FILE ) );
        define( 'MANAGX_ASSETS', MANAGX_URL . '/assets' );
    }

    /**
     * Autoload classes on demand
     *
     * @param string $class
     *
     * @return void
     */
    private function class_autoload( $class ) {
        if ( stripos( $class, 'Managx_' ) !== false ) {

            $admin = ( stripos( $class, '_Admin_' ) !== false ) ? true : false;

            if ( $admin ) {
                $class_name = str_replace( array('Managx_Admin_', '_'), array('', '-'), $class );
                $filename = MANAGX_INCLUDES . '/admin/class-' . strtolower( $class_name ) . '.php';
            } else {
                $class_name = str_replace( array('Managx_', '_'), array('', '-'), $class );
                $filename = MANAGX_INCLUDES . '/class-' . strtolower( $class_name ) . '.php';
            }

            if ( file_exists( $filename ) ) {
                require_once $filename;
            }
        }
    }

    /**
     * Include the files
     *
     * @return void
     */
    private function includes() {
        require_once MANAGX_INCLUDES . '/functions.php';
    }

    /**
     * Instantiate the classes
     *
     * @return void
     */
    private function instantiate() {
        new Managx_Admin_Menu();
        new Managx_Admin_Form_Handler();
    }

    /**
     * Define the constants
     *
     * @return void
     */
    private function init_hooks() {

    }
}

function managx() {
    return ManagX::init();
}

add_action( 'plugins_loaded', 'managx' );
register_activation_hook( __FILE__, array( 'ManagX', 'activate' ) );
