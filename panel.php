<?php

function gridwp_custom_js_fp_panel() {

    gridwp_custom_js_string_setting("gridwp_custom_js_header",'');
    gridwp_custom_js_is_checked("gridwp_custom_js_header_on");
    gridwp_custom_js_string_setting("gridwp_custom_js_footer",'');    
    gridwp_custom_js_is_checked("gridwp_custom_js_footer_on"); 
 
?>
<div class="wrap">
<div id="icon-options-general" class="icon32"><br></div><h2><?php _e( 'Custom JS Settings', 'gridwp-custom-js' ); ?></h2>

This will allow you to add custom Javascript to the frontend of your website.

<form action="" method="post">

<div id="poststuff">
<div class="postbox">
<table class="form-table">
<tbody>

<h3><?php _e( 'Header JS', 'gridwp-custom-js' ); ?></h3>

<tr valign="top">
<th scope="row"><label for="home"><?php _e( 'On / Off', 'gridwp-custom-js' ); ?></label></th>
<td>
<label for="gridwp_custom_js_header_on">
<div style="margin-left:5px" class="switch toggle3">
<input name="gridwp_custom_js_header_on" type="checkbox" id="gridwp_custom_js_header_on" value="1" <?php echo get_option("gridwp_custom_js_header_on");?>>
<label><i></i></label>
</div>
<i><?php _e( "Turn 'On' to enable header Javascript.", 'gridwp-custom-js' ); ?></i>
</tr>

<tr valign="top">
<th scope="row"><label for="home"><?php _e( 'Inline JS', 'gridwp-custom-js' ); ?></label><br/></th>
<td>
<label for="gridwp_custom_js_header">
<textarea style="background:#f7f7f7;color:#373737" name="gridwp_custom_js_header" id="gridwp_custom_js_header" rows="15" cols="125"><?php echo get_option("gridwp_custom_js_header");?></textarea>
</label>
<div style="font-size:small;border:1px dotted #e1e1e1;margin-left:5px;margin-right:5px;margin-top:15px;padding:5px;">
<?php _e( 'Add your custom Javascript that you would like to include in the header of your theme.', 'gridwp-custom-js' ); ?><br />
<br />
EXAMPLE: <code>document.write('Hello World!');</code>
</div>
</td
</tr>

</tbody></table>
</div></div>

<div id="poststuff">
<div class="postbox">
<table class="form-table">
<tbody>

<h3><?php _e( 'Footer JS', 'gridwp-custom-js' ); ?></h3>

<tr valign="top">
<th scope="row"><label for="home"><?php _e( 'On / Off', 'gridwp-custom-js' ); ?></label></th>
<td>
<label for="gridwp_custom_js_footer_on">
<div style="margin-left:5px" class="switch toggle3">
<input name="gridwp_custom_js_footer_on" type="checkbox" id="gridwp_custom_js_footer_on" value="1" <?php echo get_option("gridwp_custom_js_footer_on");?>>
<label><i></i></label>
</div>
<i><?php _e( "Turn 'On' to enable Footer Javascript.", 'gridwp-custom-js' ); ?></i>
</tr>

<tr valign="top">
<th scope="row"><label for="home"><?php _e( 'Inline JS', 'gridwp-custom-js' ); ?></label></th>
<td>
<label for="gridwp_custom_js_footer">
<textarea style="background:#f7f7f7;color:#373737" name="gridwp_custom_js_footer" id="gridwp_custom_js_footer" rows="15" cols="125"><?php echo get_option("gridwp_custom_js_footer");?></textarea>
</label>
<div style="font-size:small;border:1px dotted #e1e1e1;margin-left:5px;margin-right:5px;margin-top:15px;padding:5px;">
<?php _e( 'Add your custom Javascript that you would like to include in the footer of your theme.', 'gridwp-custom-js' ); ?><br />
<br />
EXAMPLE: <code>document.write('Hello World!');</code>
</div>
</td
</tr>

</tbody></table>
</div></div>

<p style="border-bottom: 1px dashed #CCCCCC;padding-bottom: 20px">
<input type="hidden" name="gridwp_custom_js_panel" value="1">
<input type="submit" class="button button-primary" value="<?php _e( 'Save Changes', 'gridwp-custom-js' ); ?>">
</p>

</form>
<style>
th label{padding-left:10px}
th,td{border-left: 1px solid #e1e1e1;border-right: 1px solid #e1e1e1;border-top: 1px solid #e1e1e1}
h3{color:#464646}
input{font-size: 14px}
.form-table{margin-top: 0px}
.thickbox {opacity:1.0}
.thickbox:hover {opacity:0.7}
</style>
</div>
<?php

}//end: gridwp-custom-js_fp_panel