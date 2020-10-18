<?php
/**
 * Plugin Dashboard Menu Fuctions 
 */
function cs_menu_output(){
   ?>
   <div class="cs_wrapper" id="cs_dashboard">
       <h2>Dashboard</h2>
       <!-- Test if it is first use to display onboarding -->
       <?php 
         if(get_option('cs_inst')!='onboarding'){
            require_once( dirname( __FILE__ ) . '/../_inc/views/onboarding/onboarding.php' );
         }
       ?>
       <div>
          <span>In progress (this is supposed to be a tab) </span>
          <button>Add Elements to your website</button>
          <button> Customise your website template</button>
          <button> Add Widgets</button>
       </div>
   </div>
   <?php
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
