<?php

class Managx_Admin_Menu {
    protected $plugin_page_hooks = array();

    /**
     * Class constructor.
     */
    public function __construct() {
        add_filter( 'set-screen-option', array( $this, 'set_screen' ), 10, 3 );
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
        add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts_styles' ) );
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

        $this->plugin_page_hooks[] = $menupage                  = add_menu_page( __( 'Projects', 'managx' ), __( 'Projects', 'managx' ), $capabilities, 'managx', array( $this, 'projects_page' ), 'dashicons-id-alt' );

        add_submenu_page( 'managx', __( 'All Projects', 'managx' ), __( 'All Projects', 'managx' ), $capabilities, 'managx', array( $this, 'projects_page' ) );

        // add_action( "load-$menupage", array( $this, 'screen_option' ) );

        /* temporary : for html */

        /* conversation */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Conversation', 'managx' ), __( 'Conversation', 'managx' ), $capabilities, 'conversation', array( $this, 'conversation_page' ) );
        /* expense */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Expense', 'managx' ), __( 'Expense', 'managx' ), $capabilities, 'expense', array( $this, 'expense_page' ) );
        /* individual tasks */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Individual Task', 'managx' ), __( 'Individual Task', 'managx' ), $capabilities, 'individual_task', array( $this, 'individual_task_page' ) );
        /* project details */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Project Details', 'managx' ), __( 'Project Details', 'managx' ), $capabilities, 'project_details', array( $this, 'project_details_page' ) );
        /* activity */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Activity', 'managx' ), __( 'Activity', 'managx' ), $capabilities, 'activity', array( $this, 'activity_page' ) );
    }

    /**
     * Display the projects page.
     *
     * @return void
     */
    public function projects_page() {
        managx_load_template( 'admin/projects/projects.php' );
    }

    /* temporary : conversation_page */

    public function conversation_page() {
        managx_load_template( 'admin/conversation.php' );
    }

    /* temporary : expense_page */

    public function expense_page() {
        managx_load_template( 'admin/expense.php' );
    }

    /* temporary : individual_task_page */

    public function individual_task_page() {
        managx_load_template( 'admin/individual_task.php' );
    }

    /* temporary : project_details_page */

    public function project_details_page() {
        managx_load_template( 'admin/projects/project_details.php' );
    }

    /* temporary : activity_page */

    public function activity_page() {
        managx_load_template( 'admin/activity.php' );
    }

    /**
     * Screen options.
     *
     * @return void
     */
    public function screen_option() {
        if ( isset( $_GET[ 'action' ] ) ) {
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

    /**
     * Enqueue scripts and css
     *
     * @param $hook page hook
     */
    public function admin_enqueue_scripts_styles( $hook ) {

        $suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

        if ( ! isset( $this->plugin_page_hooks ) && ! in_array( $hook, $this->plugin_page_hooks ) ) {
            return;
        }

        wp_enqueue_style( 'managx-bs-css', MANAGX_ASSETS . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'managx-admin-style', MANAGX_ASSETS . '/css/style.css' );
        wp_enqueue_style( 'managx-admin-style', MANAGX_ASSETS . '/css/vue-multiselect.min.css' );
        wp_enqueue_style( 'managx-lato-font', 'https://fonts.googleapis.com/css?family=Lato' );


        $i18n = managx_get_localize_strings();

        $localize_vars = array(
            'i18n' => $i18n,
        );


        wp_enqueue_script( 'managx-vue', MANAGX_ASSETS . '/js/vendor/vue' . $suffix . '.js', array(), MANAGX_VERSION, true );
        wp_enqueue_script( 'managx-scripts', MANAGX_ASSETS . '/js/managx' . $suffix . '.js', array( 'managx-vue' ), MANAGX_VERSION, true );
        wp_enqueue_script( 'managx-bs-js', MANAGX_ASSETS . '/js/bootstrap' . $suffix . '.js', array( 'jquery' ), MANAGX_VERSION, true );
        wp_enqueue_script( 'managx-scripts',MANAGX_ASSETS . '/js/vue-multiselect-2.0.js', array( 'jquery' ), MANAGX_VERSION, true );
        
    

        
        wp_localize_script( 'managx-scripts', 'managx_localize_vars', $localize_vars );
    }

}