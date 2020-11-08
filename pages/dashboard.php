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
         <span>With the Customiser you can customise dashboard and website </span>
       </div>
       <div>
          <button>Manage Metaboxes</button>
          <button>Add and Manage Tags</button>
          <button> Customise your website(template + components)</button>
          <button> Add Widgets</button>
          <button> Add Custom PostType</button>
          <button> Manage Role</button>
       </div>
   </div>
   <?php
}


function cs_premium_version(){
	?>
   <div class="cs_wrapper" id="cs_premium_screen">
      <h2>Go Premium to have more options</h2>
   </div>
   <?php
}

function cs_manage_components(){
   //wp_enqueue_style('style',  plugin_dir_url(__FILE__) . "../_inc/assets/css/style.css");
   require_once( dirname( __FILE__ ) . '/cs-widget.php' );
}
