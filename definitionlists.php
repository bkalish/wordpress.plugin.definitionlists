<?php
/**
 * Plugin Name: DefinitionLists
 * Description: Adds tools for working with Definition Lists (DL, DT, and DD) in the TinyMCE editor.
 * Version: 0.1
 * Author: Benjamin Kalish
 * GitHub Plugin URI: bkalish/wordpress.plugin.definitionlist
 */

add_filter('mce_external_plugins', 'definitionlists_register_tinymce_javascript');
function definitionlists_register_tinymce_javascript($plugin_array) {
   $plugin_array['definitionlists'] = plugins_url('/js/plugin.min.js',__file__);
   return $plugin_array;
}

add_filter('mce_buttons', 'definitionlists_register_buttons');
function definitionlists_register_buttons($buttons) {
   array_push($buttons, 'ToggleDefinitionList ToggleDefinitionItem');
   return $buttons;
}
