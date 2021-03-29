<?php

/**
 * Primary class file for the Health Check plugin.
 *
 * @package Admin Init
 */

require_once(dirname(__FILE__) . '/../pages/dashboard.php');

// To Make sure the file is not directly accessible.
if (!defined('ABSPATH')) {
  die('We\'re sorry, but you can not directly access this file.');
}

/**
 * Plugin initiation.
 *
 * @uses add_action()
 * @uses add_filter()
 *
 */
function init()
{
  add_action('admin_menu', 'customizer_menu');
  //add_action( 'init', 'customiser_post_type' );
  add_filter('plugin_action_links_' . plugin_basename(__FILE__), 'plugin_action_links');
  //enqueue 
  add_action('admin_print_styles', 'enqueue_styles');

  //just for test
  //test_cs_widget();
}

/**
 * Load translations
 * @uses load_plugin_textdomain()
 * @return void
 */
function enqueue_styles()
{
  $plugin_url = plugin_dir_url(__FILE__);
  wp_enqueue_style( 'bootstrap', $plugin_url . './../_inc/assets/css/bootstrap.css', array(), 20141119 );
  wp_enqueue_style('style',  $plugin_url . "./../_inc/assets/css/style.css");
}

/**
 * Load translations
 * @uses load_plugin_textdomain()
 * @return void
 */
function enqueue_scripts()
{
  $plugin_url = plugin_dir_url(__FILE__);

  wp_enqueue_script( 'bootstrap',  $plugin_url  . './../_inc/js/bootstrap.min.js', array('jquery'), '20120206', true );

}

/**
 * Load translations
 * @uses load_plugin_textdomain()
 * @uses basename()
 * @uses dirname()
 *
 * @return void
 */
function load_i18n()
{
  load_plugin_textdomain('the-customiser', false, basename(dirname(__FILE__)) . '/languages/');
}

/**
 * THE CUSTOMISER MENU
 * @since  1.0
 * @uses add_menu_page()
 * @uses add_submenu_page()
 * @return void
 */
function customizer_menu()
{
  add_menu_page('Plugin Title', 'The Customiser', 'manage_options', 'cs-dashboard', 'cs_dashboard', '', 60);
  add_submenu_page('cs-dashboard', 'Settings', 'Settings', 'manage_options', 'cs-settings', 'cs_settings');
  add_submenu_page('cs-dashboard', 'The customiser Premium', 'Premium', 'manage_options', 'cs-premium', 'cs_premium_version');
}


/**
 * Add settings link to plugin actions
 * @param  array  $plugin_actions
 * @param  string $plugin_file
 * @since  1.0
 * @return array
 */
function add_plugin_link($plugin_actions, $plugin_file)
{
  $new_actions = array();
  if (basename(plugin_dir_path(__FILE__)) . 'admin.php' === $plugin_file) {
    $new_actions['cl_settings'] = sprintf(__('<a href="%s">Settings</a>', 'comment-limiter'), esc_url(admin_url('options-general.php?page=comment-limiter')));
  }
  return array_merge($new_actions, $plugin_actions);
}

/**
 * The Customiser Plugin Links And Meta
 */
function plugin_manage_link($actions, $plugin_file, $plugin_data, $context)
{
  return array_merge(array('configure' => '' . __('Configure') . ''), $actions);
}

