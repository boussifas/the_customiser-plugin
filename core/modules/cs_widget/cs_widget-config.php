<?php
/**
 * This file could be used to catch submitted form data. When using a non-configuration
 * view to save form data, remember to use some kind of identifying field in your form.
 */

require_once(dirname(__FILE__) . './cs_widget.class.php');

////to be deleted later
add_action('admin_post_my_plugin_register_user', 'create_cs_widget');
function create_cs_widget()
{
    //if($_REQUEST['createCsWidget'] == 'Check') {
        $cs_init_widget = new CS_Widget();
        $cs_init_widget->cs_init_widget();
   // }
}

?>
