<?php

/**
 * CS Widget core class.
 *
 * @package The Customiser
 */

class CS_Widget extends WP_Widget
{

  /**
   * Option array passed to wp_register_sidebar_widget().
   *
   * @since 2.8.0
   * @var array
   */
  public $cs_widget_name;

  /**
   * Option array passed to wp_register_sidebar_widget().
   *
   * @since 2.8.0
   * @var array
   */
  private $cs_widget_options;

  /**
   * Sets up the widgets name etc
   */
  public function __construct()
  {
    $widget_ops = array(
      'classname' => 'cs_widget',
      'description' => 'CSWidget is awesome',
    );
    parent::__construct('cs_widget', 'CS Widget', $widget_ops);
  }

  /**
   * Render Cs_Widget
   */
  public function widget($args, $instance)
  {
    require_once('cs_widget.php');
  }

  /**
   * Outputs the options form on admin
   *
   * @param array $instance The widget options
   */
  public function form($instance)
  {
    if (isset($instance['title'])) {
      $title = $instance['title'];
    } else {
      $title = __('New title', 'wpb_widget_domain');
    }
    // Widget admin form
?>
    <p>
      <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:'); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
    </p>
<?php
  }

  /**
   * Register CS Widget
   */
  public function cs_init_widget()
  {
    add_action('widgets_init', function () {
      register_widget('CS_Widget');
    });
  }

  /**
   * Gets Cs Widget Settings.
   * @param $widget_id
   * @param null $default
   *
   * @return string
   */
  public static function get_cs_widget_options($widget_id, $default = NULL)
  {
    parent::get_settings();
  }
}
