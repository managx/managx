<?php

/**
 * Include a template file
 *
 * Looks up first on the theme directory, if not found
 * lods from plugins folder
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
