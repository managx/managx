<?php

class Managx_Admin_Menu {
    protected $plugin_page_hooks = array();

    /**
     * Class constructor.
     */
    public function __construct() {
        add_filter( 'set-screen-option', array( $this, 'set_screen' ), 10, 3 );
        add_action( 'admin_menu', array( $this, 'admin_menu' ) );
        add_action( 'admin_init', array( $this, 'display_options') );
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

        $this->plugin_page_hooks[] = add_menu_page( __( 'Projects', 'managx' ), __( 'Projects', 'managx' ), $capabilities, 'managx', array( $this, 'projects_page' ), 'dashicons-id-alt' );

        add_submenu_page( 'managx', __( 'All Projects', 'managx' ), __( 'All Projects', 'managx' ), $capabilities, 'managx', array( $this, 'projects_page' ) );

        //lists
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'All Lists', 'managx' ), __( 'All Lists', 'managx' ), $capabilities, 'lists', array( $this, 'lists_page' ) );
        //tasks
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'All Tasks', 'managx' ), __( 'All Tasks', 'managx' ), $capabilities, 'tasks', array( $this, 'tasks_page' ) );

        /* temporary : for html */

        /* conversation */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Conversation', 'managx' ), __( 'Conversation', 'managx' ), $capabilities, 'conversation', array( $this, 'conversation_page' ) );
        /* expense */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Expense', 'managx' ), __( 'Expense', 'managx' ), $capabilities, 'expense', array( $this, 'expense_page' ) );
        /* individual tasks */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Individual Task', 'managx' ), __( 'Individual Task', 'managx' ), $capabilities, 'individual-task', array( $this, 'individual_task_page' ) );
        /* project details */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Project Details', 'managx' ), __( 'Project Details', 'managx' ), $capabilities, 'project-details', array( $this, 'project_details_page' ) );
        /* activity */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Activity', 'managx' ), __( 'Activity', 'managx' ), $capabilities, 'activity', array( $this, 'activity_page' ) );
        /* settings */
        $this->plugin_page_hooks[] = add_submenu_page( 'managx', __( 'Settings', 'managx' ), __( 'Settings', 'managx' ), $capabilities, 'settings', array( $this, 'settings_page' ) );
    }

    public function lists_page() {
        managx_load_template( 'admin/lists.php' );
    }

    public function tasks_page() {
        managx_load_template( 'admin/tasks.php' );
    }

    /**
     * Display the projects page.
     *
     * @return void
     */
    public function projects_page() {
        managx_load_template( 'admin/projects.php' );
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
        managx_load_template( 'admin/individual-task.php' );
    }

    /* temporary : project_details_page */

    public function project_details_page() {
        managx_load_template( 'admin/project-details.php' );
    }

    /* temporary : activity_page */

    public function activity_page() {
        managx_load_template( 'admin/activity.php' );
    }

    public function settings_page()
    {
        managx_load_template( 'admin/settings.php' );
    }

    public function display_options()
    {
        // Time Frame section name, form element name, callback for sanitization
        register_setting( 'managx-settings', 'time_frame' );

        //section name, display name, callback to print description of section, page to which section is attached.
        add_settings_section( 'managx-settings-portion1', __( '', 'managx' ), array( $this, 'managx_settings_options' ), 'settings' );

        //setting name, display name, callback to print form element, page in which field is displayed, section to which it belongs.
        //last field section is optional.
        add_settings_field( 'time-frame-field', __( 'Time Frame', 'managx' ), array( $this, 'display_time_frame_field' ), 'settings', 'managx-settings-portion1' );

        // Desktop Notification section
        register_setting( 'managx-settings', 'notifications_settings');

        add_settings_field( 'notifications-settings-fields', __( 'Notifications', 'managx' ), array( $this, 'display_notifications_settings' ), 'settings', 'managx-settings-portion1' );

        // Email Notification section
        register_setting( 'managx-settings', 'email_notifications_settings');

        add_settings_field( 'email-notifications-settings-fields', __( 'Email Notifications', 'managx' ), array( $this, 'display_email_notifications_settings' ), 'settings', 'managx-settings-portion1' );
    }

    public function managx_settings_options(){}

    public function display_time_frame_field()
    {
        //id and name of form element should be same as the setting name.
        $time_frame = get_option( 'time_frame' );
        ?>
            <select name="time_frame" id="time_frame">
                <option value="1" <?php echo ( $time_frame == '1' ) ? 'selected' : ''; ?>>1 Month</option>
                <option value="2" <?php echo ( $time_frame == '2' ) ? 'selected' : ''; ?>>2 Months</option>
                <option value="3" <?php echo ( $time_frame == '3' ) ? 'selected' : ''; ?>>3 Months</option>
            </select>
        <?php
    }

    public function display_notifications_settings()
    {
        $options = array(
            '1' => __( 'Get notified with every activities', 'managx' ),
            '2' => __( 'Get notified only with your activities', 'managx' )
        );

        $options = apply_filters( 'desktop_notification_options', $options );

        ?>
        <h3><?php _e( 'DESKTOP NOTIFICATION', 'managx' ); ?></h3>
        <p><?php _e( 'Get notified everytime when there is a new activity', 'managx' ); ?></p>
        <?php if ( isset( $options ) && count( $options ) > 0 ) : ?>
            <?php foreach ( $options as $key => $value ) : ?>
                <div class="mb5"><label><input type="radio" name="notifications_settings" value="<?php echo $key; ?>" <?php checked( $key, get_option('notifications_settings'), true); ?>><?php echo $value; ?></label></div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php
    }

    public function display_email_notifications_settings()
    {
        ?>
        <h3><?php _e( 'EMAIL NOTIFICATION', 'managx' ); ?></h3>
        <p><?php _e( 'Select when do you want to get notified via email', 'managx' ); ?></p>
        <?php 
            $notification_value = get_option( 'email_notifications_settings' );
            $options            = managx_get_email_notification_options(); 
        ?>
        <?php if ( isset( $options ) && count( $options ) > 0 ) : ?>
            <?php foreach ( $options as $key => $value ) : ?>
                <div class="mb5"><label><input type="checkbox" name="email_notifications_settings[<?php echo $key; ?>]" value="<?php echo $key; ?>" <?php if ( isset( $notification_value[ $key ] ) && $notification_value[ $key ] == $key ) echo 'checked'; ?>><?php echo ' '.$value; ?></label></div>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php
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

        wp_enqueue_style( 'managx-admin-style', MANAGX_ASSETS . '/css/style.css' );
        wp_enqueue_style( 'managx-multiselect', MANAGX_ASSETS . '/css/vue-multiselect.min.css' );
        wp_enqueue_style( 'managx-lato-font', 'https://fonts.googleapis.com/css?family=Lato' );

        $i18n = managx_get_localize_strings();

        $localize_vars = array(
            'i18n' => $i18n,
            'project_home' => home_url().'/wp-admin/admin.php?page=managx',
        );

        wp_enqueue_script( 'underscore' );

        wp_enqueue_script( 'managx-vue', MANAGX_ASSETS . '/js/vendor/vue' . $suffix . '.js', array(), MANAGX_VERSION, true );
        wp_enqueue_script( 'managx-scripts', MANAGX_ASSETS . '/js/managx' . $suffix . '.js', array( 'managx-vue' ), MANAGX_VERSION, true );

        wp_localize_script( 'managx-scripts', 'managx_localize_vars', $localize_vars );
    }

}
