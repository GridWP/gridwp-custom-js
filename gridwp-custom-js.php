<?php
/*
Plugin Name: GridWP Custom JS for WordPress
Plugin URI: http://gridwp.com
Description: Allows you to include inline JS in the header or footer of your parent or child themes. On WordPress Multisite, this plugin must be "Network Activated".
Author:	Jason Jersey
Author URI: https://www.twitter.com/degersey
Version: 1.1
Text Domain: gridwp-custom-js
Domain Path: language
*/

/* Exit if accessed directly
 * Since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) exit;

/* Load functions
 * Since 1.0
 */
require_once(dirname(__FILE__)."/functions.php");

/* Load panel
 * Since 1.0
 */
require_once(dirname(__FILE__)."/panel.php");

/* Enable panel menu
 * Since 1.0
 */
add_action('admin_menu', 'gridwp_custom_js_fp_panel_menu');

/* Enqueue panel page css
 * Since 1.0
 */
add_action('admin_enqueue_scripts', 'gridwp_custom_js_panel_style');

/* Language Support
 * Since 1.0
 */
add_action('plugins_loaded', 'gridwp_custom_js_textdomain');

/* Global Frontend Header JS
 * Since 1.0
 */
function global_frontend_header_js() { 
/* If Header CSS On
 * Since 1.1
 */
if ( get_option("gridwp_custom_js_header_on") ) {
?>
<script type="text/javascript"><?php echo get_option("gridwp_custom_js_header"); ?></script>
<?php } }

/* Global Frontend Footer JS
 * Since 1.0
 */
function global_frontend_footer_js() { 
/* If Footer CSS On
 * Since 1.1
 */
if ( get_option("gridwp_custom_js_footer_on") ) {
?>
<script type="text/javascript"><?php echo get_option("gridwp_custom_js_footer"); ?></script>
<?php } }

/* Add Global JS Actions
 * Since 1.0
 */
add_action('wp_head', 'global_frontend_header_js');
add_action('wp_footer', 'global_frontend_footer_js');