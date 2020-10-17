<?php
/**
 * Plugin Dashboard Menu Fuctions 
 */


function cs_menu_output(){
   
    require_once( dirname( __FILE__ ) . '/../_inc/views/onboarding/onboarding.php' );

    if (get_option( 'just-activated' )){
        echo "<p> Getting Started </p>";
    }
}


function cs_manage_roles(){
	echo "<p> Manage roles</p>";
}


function cs_premium_version(){
	echo "<p> Upgrade</p>";
}

function cs_manage_components(){
	echo "<p> Add Components in Dashboard to Easily  Customise your site </p>";
}
