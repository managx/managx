<?php

/**
 * Include a template file
 *
 * Looks up first on the theme directory, if not found
 * loads from plugins folder
 *
 * @param string $file
 */
function managx_load_template( $file, $args = array() ) {
    if ( $args && is_array( $args ) ) {
        extract( $args );
    }

    $child_theme_dir = get_stylesheet_directory() . '/managx/';
    $parent_theme_dir = get_template_directory() . '/managx/';
    $managx_dir = MANAGX_PATH . '/templates/';

    if ( file_exists( $child_theme_dir . $file ) ) {
        include $child_theme_dir . $file;
    } else if ( file_exists( $parent_theme_dir . $file ) ) {
        include $parent_theme_dir . $file;
    } else {
        include $managx_dir . $file;
    }
}

/**
 * Get all localize strings.
 *
 * @return array
 */
function managx_get_localize_strings() {
    return include_once MANAGX_PATH . '/i18n/localize-strings.php';
}

/**
 * Get email notification options
 * @return array
 */
function managx_get_email_notification_options()
{
    $options = array(
        'option_1' => __( 'If someone mentions me anywhere', 'managx' ),
        'option_2' => __( 'New comments on my discussion or task', 'managx' ),
        'option_3' => __( 'Due of tasks assign to me', 'managx' ),
        'option_4' => __( 'Someone completes task assigned by me', 'managx' ),
        'option_5' => __( 'Someone starts new discussion', 'managx' ),
        'option_6' => __( 'New comment on my project', 'managx' ),
        'option_7' => __( 'New task on my project', 'managx' )
    );

    return apply_filters( 'email_notification_options', $options );
}