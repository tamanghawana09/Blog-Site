<?php
/**
 * Plugin Name: My Plugin
 * Description: This is my custom plugin for practicing it in the wordpress
 * Version: 1.0
 * Author: Hawana Tamang
 */


if(!defined('ABSPATH')){
    exit();
}
function my_plugin_activation(){
  
}
register_activation_hook(__FILE__,'my_plugin_activation');

function my_plugin_deactivation(){
    //
}
register_deactivation_hook(__FILE__,'my_plugin_deactivation');


//Shortcode function
function my_sc_fun(){
    return 'Welcome to home';
}
add_shortcode('my-sc','my_sc_fun');