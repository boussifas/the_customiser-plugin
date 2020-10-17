<?php
/**
 * Primary class file for the Health Check plugin.
 *
 * @package Admin Init
 */

require_once( dirname( __FILE__ ) . '/../pages/dashboard.php' );

// To Make sure the file is not directly accessible.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'We\'re sorry, but you can not directly access this file.' );
}

/**
 * Plugin initiation.
 *
 *
 * @uses add_action()
 * @uses add_filter()
 *
 */
function init() {
	add_action( 'admin_menu', 'customizer_menu');
	add_action( 'init', 'customiser_post_type' );
	add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ),'plugin_action_links');
}

/**
 * Load translations.
 *
 * Loads the textdomain needed to get translations for our plugin.
 *
 * @uses load_plugin_textdomain()
 * @uses basename()
 * @uses dirname()
 *
 * @return void
 */
function load_i18n() {
  load_plugin_textdomain( 'the-customiser', false, basename( dirname( __FILE__ ) ) . '/languages/' );
}


/**
 * Add settings link to plugin actions
 * @param  array  $plugin_actions
 * @param  string $plugin_file
 * @since  1.0
 * @return array
 */
function add_plugin_link( $plugin_actions, $plugin_file ) {
    $new_actions = array();
    if ( basename( plugin_dir_path( __FILE__ ) ) . 'admin.php' === $plugin_file ) {
        $new_actions['cl_settings'] = sprintf( __( '<a href="%s">Settings</a>', 'comment-limiter' ), esc_url( admin_url( 'options-general.php?page=comment-limiter' ) ) );
	}
    return array_merge( $new_actions, $plugin_actions );
}

function customizer_menu(){
	add_menu_page('Plugin Title', 'The Customiser', 'manage_options', 'cs-menu', 'cs_menu_output','',60);
	add_submenu_page('cs-menu', 'Manage Roles', 'Roles', 'manage_options', '','cs_manage_roles' );
	add_submenu_page('cs-menu', 'Settings', 'Settings', 'manage_options', '','cs_manage_components' );
	add_submenu_page('cs-menu', 'The customiser Premium', 'Premium','manage_options', '','cs_premium_version' );
}



function customiser_post_type() {
    $args = array(
      'public' => true,
      'label'  => 'Board Games'
    );
    register_post_type( 'boardgames', $args );
}

/**
 * The Customiser Plugin Links And Meta
 */
function plugin_manage_link( $actions, $plugin_file, $plugin_data, $context ) {
    // add a 'Configure' link to the front of the actions list for this plugin
	return array_merge( array( 'configure' => '' . __( 'Configure' ) . '' ), $actions );
}
