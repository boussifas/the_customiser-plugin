<?php
/**
 * Plugin Dashboard Menu Fuctions 
 */
function cs_dashboard(){
   //ENQUEUE BOOTSTRAP JS 
   enqueue_scripts();
   ?>
   <div class="cs_wrapper" id="cs_dashboard">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
       <nav>
         <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
            <a class="nav-item nav-link" id="nav-cs-posts-tab" data-toggle="tab" href="#nav-cs-posts" role="tab" aria-controls="nav-cs-posts" aria-selected="false">Custom Posts</a>
            <a class="nav-item nav-link" id="nav-cs-meta-tab" data-toggle="tab" href="#nav-cs-meta" role="tab" aria-controls="nav-cs-metabox" aria-selected="false">Custom Meta</a>
            <a class="nav-item nav-link" id="nav-widgets-tab" data-toggle="tab" href="#nav-cs-widget" role="tab" aria-controls="nav-cs-widget" aria-selected="false">Custom Widgets</a>
         </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
         <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
           <!-- Test if it is first use to display onboarding -->
            <?php 
               if(get_option('cs_inst')!='onboarding'){
                  require_once( dirname( __FILE__ ) . '/../_inc/views/onboarding/onboarding.php' );
               }
            ?>
         </div>
         <div class="tab-pane fade" id="nav-cs-posts" role="tabpanel" aria-labelledby="nav-cs-posts-tab">
            <?php
              require_once( dirname( __FILE__ ) . '/cs-post.php' );
           ?>
         </div>
         <div class="tab-pane fade" id="nav-cs-meta" role="tabpanel" aria-labelledby="nav-cs-meta-tab">
            <p>Customise meta</p>
         </div>
         <div class="tab-pane fade" id="nav-cs-widget" role="tabpanel" aria-labelledby="nav-cs-widget-tab">
           <?php
            require_once( dirname( __FILE__ ) . '/cs-widget.php' );
           ?>
         </div>
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

function cs_settings(){
   //wp_enqueue_style('style',  plugin_dir_url(__FILE__) . "../_inc/assets/css/style.css");
   ?>
   <div class="cs_wrapper" id="cs_settings_screen">
      <h2>The Customiser Settings</h2>
   </div>
   <?php
}
