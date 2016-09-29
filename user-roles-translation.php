<?php

/**
 * Plugin Name:       User Roles Translation
 * Description:       Testando tradução de roles.
 * Version:           1.0.0
 * Text Domain:       user-roles-translation
 * Domain Path:       /languages
 */

/**
 * Runs during plugin activation.
 */
function urt_activate() {
    add_role( 'urt_secretary', __( 'Secretary', 'user-roles-translation' ) );
}

register_activation_hook( __FILE__, 'urt_activate' );

/**
 * Runs during plugin deactivation.
 */
function urt_deactivate() {
    remove_role( 'urt_secretary' );
}

register_deactivation_hook( __FILE__, 'urt_deactivate' );

/**
 * Load plugin textdomain.
 */
function urt_load_textdomain() {
  load_plugin_textdomain( 'user-roles-translation', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}

add_action( 'plugins_loaded', 'urt_load_textdomain' );
