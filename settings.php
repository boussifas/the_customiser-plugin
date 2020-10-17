<?php


require_once( dirname( __FILE__ ) . '/core/admin.php' );

//INIT PLUGIN
init();

//ACTIVATE PLUGIN
register_activation_hook( __FILE__, 'plugin_activation' );
function plugin_activation() {
  add_option( 'plugin_activation','just-activated' );

  //check version
  global $wp_version;
	$php = '5.3';
  $wp  = '3.8';

  if ( version_compare( PHP_VERSION, $php, '<' ) ) {
		deactivate_plugins( basename( __FILE__ ) );
		wp_die(
			'<p>' .
			sprintf(
				__( 'This plugin can not be activated because it requires a PHP version greater than %1$s. Your PHP version can be updated by your hosting company.', 'my_plugin' ),
				$php
			)
			. '</p> <a href="' . admin_url( 'plugins.php' ) . '">' . __( 'go back', 'my_plugin' ) . '</a>'
		);
  }

  if ( version_compare( $wp_version, $wp, '<' ) ) {
		deactivate_plugins( basename( __FILE__ ) );
		wp_die(
			'<p>' .
			sprintf(
				__( 'This plugin can not be activated because it requires a WordPress version greater than %1$s. Please go to Dashboard &#9656; Updates to gran the latest version of WordPress .', 'my_plugin' ),
				$php
			)
			. '</p> <a href="' . admin_url( 'plugins.php' ) . '">' . __( 'go back', 'my_plugin' ) . '</a>'
		);
	}
}

add_action( 'admin_init','plugin_initialize' );
function plugin_initialize() {
    if( is_admin() && get_option( 'plugin_activation' ) == 'just-activated' ) {
    delete_option( 'plugin_activation' );
        flush_rewrite_rules();
    }
}

//UNINSTALL PLUGIN
register_uninstall_hook(__FILE__, 'plugin_uninstall');
function plugin_uninstall() {
  if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
  }  
  flush_rewrite_rules();
}

//DESACTIVATE  PLUGIN
register_deactivation_hook( __FILE__, 'plugin_deactivation' );
function plugin_deactivation() {
  delete_option('rewrite_rules');
}

/****
 * test plugin
 */

//add_action( 'admin_head', 'customizer_script' );
function customizer_script() {
	echo "
	   <script>alert('hello')</script>
    ";
}