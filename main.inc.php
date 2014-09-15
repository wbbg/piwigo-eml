<?php
/*
Version: 0.1
Plugin Name: Extend Mail Link 
Plugin URI: 
Author: wbbg
Description: Extend the link in the Group Notification. Useful to start a Campaign for e.g. Piwik
*/

// Chech whether we are indeed included by Piwigo.
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');
 
// Define the path to our plugin.
define('EML_PATH', PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

// Hook on to an event to show the administration page.
add_event_handler('get_admin_plugin_menu_links', 'eml_admin_menu');

// Add an entry to the 'Plugins' menu.
function eml_admin_menu($menu) {
 array_push(
   $menu,
   array(
     'NAME'  => 'Extend Mail Link',
     'URL'   => get_admin_plugin_menu_link(dirname(__FILE__)).'/admin.php'
   )
 );
 return $menu;
}
?>