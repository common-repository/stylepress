<?php
/*
Plugin Name: StylePress
Plugin URI: http://ejner69.net/proyectos/stylepress/
Description:  Add classic style of WordPress.
Author: ejner69
Version: 1.1
Author URI: http://ejner69.net/
*/
add_action('admin_init','stylepress');
function stylepress() {
$plugin_url = WP_CONTENT_URL.'/plugins/' . plugin_basename(dirname(__FILE__)) ;
wp_admin_css_color('fresco', __('Fresco'), $plugin_url . '/fresco.css', array( '#464646', '#e4f2fd', '#d54e21', '#2683ae'));
wp_admin_css_color('fresco-classic', __('Fresco Clásico'), $plugin_url . '/fresco_classic.css', array( '#464646', '#e4f2fd', '#d54e21', '#2683ae'));
wp_admin_css_color('gris-classic', __('Gris Clásico'), $plugin_url . '/gris_classic.css', array( '#464646', '#6D6D6D', '#F1F1F1', '#DFDFDF'));
wp_admin_css_color('classic-style', __('Clásico'), $plugin_url . '/classic_style.css', array( '#464646', '#e4f2fd', '#d54e21', '#2683ae'));
}
?>