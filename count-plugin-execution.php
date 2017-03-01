<?php
/**
 * @wordpress-plugin
 * Plugin Name:       Count plugin execution times (minimum 2 times)
 * Description:       Count how many times this plugin is executed
 * Version:           1.0.0
 * Author:            Ionut Morariu
 * Author URI:        https://github.com/moraryou/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 */
if (!defined('ABSPATH')) exit; // Exit if accessed directly
function foo_count() {
  BugFu::log('how many times the plugin in executed');
}
if( !defined('FOO_EXECUTED') ){
  foo_count();
  define('FOO_EXECUTED', TRUE);
}
