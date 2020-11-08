<?php
// Check the widget options
$title    = isset( $instance['title'] ) ? apply_filters( 'widget_title', $instance['title'] ) : '';
$text     = isset( $instance['text'] ) ? $instance['text'] : '';
$textarea = isset( $instance['textarea'] ) ?$instance['textarea'] : '';
$select   = isset( $instance['select'] ) ? $instance['select'] : '';
$checkbox = ! empty( $instance['checkbox'] ) ? $instance['checkbox'] : false;

// WordPress core before_widget hook (always include )
echo $before_widget;

// Display the widget
echo '<div class="widget-text wp_widget_plugin_box">';

    // Display widget title if defined
    if ( $title ) {
        echo $before_title . $title . $after_title;
    }

    // Display text field
    if ( $text ) {
        echo '<p>' . $text . '</p>';
    }

    // Display textarea field
    if ( $textarea ) {
        echo '<p>' . $textarea . '</p>';
    }

    // Display select field
    if ( $select ) {
        echo '<p>' . $select . '</p>';
    }

    // Display something if checkbox is true
    if ( $checkbox ) {
        echo '<p>Something awesome</p>';
    }

echo '</div>';

// WordPress core after_widget hook (always include )
echo $after_widget;