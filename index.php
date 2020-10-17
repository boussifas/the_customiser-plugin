<?php
/**
 * THE CUSTOMISER  plugin
 *
 * Free plugin to customise Wordpress dashboard in easy stepss
 *
 * @since             1.0.0
 * @package           THE_CUTOMISER
 *
 * @wordpress-plugin
 * Plugin Name:       The Customiser
 * Description:       Help Admin and users to add new components to the dashboard.
 * Version:           1.1.0
 * Author:            Boussif Asma
 * License:           GPLv2
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Domain Path:       /languages/
 * Copyright          2020-2022 
 */

require_once( dirname( __FILE__ ) . '/settings.php' );

 if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! defined( 'THE_CUSTOMISER_VERSION' ) ) {
	define( 'WP_CUSTOMISER_VERSION', '1.1.0' );
}


