<?php
/***
 * The Customiser widget Screen
 */

  enqueue_scripts();
  enqueue_styles();
?>
   <div class="cs_wrapper" id="cs_widget_screen">
      <div class="info-cntr">
          <img src="<?php echo plugin_dir_url(__FILE__); ?>../_inc/assets/images/info.png"/>
          <p>widgets are blocks of content that you can add to your site’s sidebars, footers, and other areas. The Customiser helps you to add Widgets to your and easily customize them</p>
      </div>
       <div class="widget-text wp_widget_plugin_box">
           <form  action="" method="post">
               <div>
                   <label>Widget Title</label>
                   <input type="text" placeholder="My Wiget">
               </div>
               <div>
                   <label>Widget Name</label>
                   <input type="text" placeholder="the widget">
               </div>
               <div>
                   <label>Widget Type</label>
                   <select>
                       <option>CTA Button</option>
                       <option>Poll </option>
                       <option>Other </option>
                   </select>
               </div>
               <div>
                   <label>Show Widget in </label>
                   <select>
                       <option>All Pages</option>
                       <option>page1</option>
                   </select>
               </div>
               <div>
                   <label>Widget Position</label>
                   <a href="#">live view</a>
               </div>
               <input type="hidden" name="action" value="my_plugin_register_user">
               <input type="submit" name="createCsWidget" value="create"/>
               <button>schedule</button>
           </form>
       </div>
   </div>
<?php

add_action('admin_post_my_plugin_register_user', 'create_cs_widget');
function create_cs_widget()
{
    include(dirname(__FILE__) . '../core/modules/cs_widget/cs_widget.class.php');
    $cs_init_widget = new CS_Widget();
    $cs_init_widget->cs_init_widget();

}