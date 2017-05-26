<?php

class Managx_Admin_Menu {
    /**
     * Class constructor.
     */
    public function __construct() {
        add_filter( 'set-screen-option', array( $this, 'set_screen' ), 10, 3 );
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
    }

    /**
     * Setting screen option.
     *
     * @param  string $status, $option, $value
     *
     * @return string
     */
    public static function set_screen( $status, $option, $value ) {
        return $value;
    }

    /**
     * Register the admin menu.
     *
     * @return void
     */
    public function admin_menu() {
        $capabilities = 'manage_options';

        $menu_page = add_menu_page( __( 'Projects', 'managx' ), __( 'Projects', 'managx' ), $capabilities, 'managx', array( $this, 'projects_page' ), 'dashicons-id-alt' );

        add_submenu_page( 'managx', __( 'All Projects', 'managx' ), __( 'All Projects', 'managx' ), $capabilities, 'managx', array( $this, 'projects_page' ) );

        add_action( "load-$menu_page", array( $this, 'screen_option' ) );
    }

    /**
     * Display the projects page.
     *
     * @return void
     */
    public function projects_page() {
        managx_load_template('projects.php');
    }

    /**
     * Screen options.
     *
     * @return void
     */
    public function screen_option() {
        if ( isset( $_GET['action'] ) ) {
            return;
        }

        $option = 'per_page';
        $args   = array(
            'label'   => __( 'Number of items per page:', 'managx' ),
            'default' => 20,
            'option'  => 'projects_per_page'
        );

        add_screen_option( $option, $args );
    }

}
