<?php   

// language support
function gridwp_custom_js_textdomain() {
    load_plugin_textdomain( 'gridwp-custom-js', false, dirname( plugin_basename( __FILE__ ) ) . '/language/' );
}

// user menus
function gridwp_custom_js_fp_panel_menu() {
    add_submenu_page( 'themes.php', 'Custom JS', 'Custom JS', 'manage_options', __FILE__, 'gridwp_custom_js_fp_panel' );    
}

// on-off buttons
function gridwp_custom_js_is_checked($par){
    if (isset($_POST["gridwp_custom_js_panel"])) { if(isset($_POST[$par])) $k='checked';else $k=''; update_option($par,$k);} 
}

// input fields
function gridwp_custom_js_string_setting($par,$def){
    if (isset($_POST[$par])) { if(isset($_POST[$par]) and $_POST[$par]!='' ) $k=$_POST[$par];else $k=$def; update_option($par,$k);} 
}

// panel page js
function gridwp_custom_js_panel_style(){
    wp_register_style( 'gridwp_custom_js_wp_admin_css', plugins_url( 'styles/panel.css' , __FILE__ ), false, '1.0.0' );
    wp_enqueue_style( 'gridwp_custom_js_wp_admin_css' );
}