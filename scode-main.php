<?php
/**
* Plugin Name: SCode
* Plugin URI: https://www.Jessoreit.com/
* Description: This plugin help you to insert month,year format use shortcode.
* Version: 1.0
* Author: Tarik Billa
* Author URI: http://Jessoreit.com/
**/


// register full year function
function SCode_year() {
   return date("Y");
}
function SCode_register_year_shortcodes(){
   add_shortcode('year', 'SCode_year');
}
add_action( 'init', 'SCode_register_year_shortcodes');



// register full month function
function SCode_month() {
   return date("F");
}
function SCode_register_month_shortcodes(){
   add_shortcode('month', 'SCode_month');
}
add_action( 'init', 'SCode_register_month_shortcodes');



// register short_year function
function SCode_short_year() {
   return date("y");
}
function SCode_register_short_year_shortcodes(){
   add_shortcode('short_year', 'SCode_short_year');
}
add_action( 'init', 'SCode_register_short_year_shortcodes');



// register short_month function
function SCode_short_month() {
   return date("M");
}
function SCode_register_short_month_shortcodes(){
   add_shortcode('short_month', 'SCode_short_month');
}
add_action( 'init', 'SCode_register_short_month_shortcodes');


// register month year function (Month 0000)
function SCode_month_year() {
   return date("F")." ".date("Y");
}
function SCode_register_month_year_shortcodes(){
   add_shortcode('my', 'SCode_month_year');
}
add_action( 'init', 'SCode_register_month_year_shortcodes');


// register month year function with hyphen (Month-0000)
function SCode_month_year_hyphen() {
   return date("F")."-".date("Y");
}
function SCode_register_month_year_shortcodes_hyphen(){
   add_shortcode('m-y', 'SCode_month_year_hyphen');
}
add_action( 'init', 'SCode_register_month_year_shortcodes_hyphen');

// register short month year function (Mon 00)
function SCode_short_month_year() {
   return date("M")." ".date("y");
}
function SCode_register_short_month_year_shortcodes(){
   add_shortcode('short_my', 'SCode_short_month_year');
}
add_action( 'init', 'SCode_register_short_month_year_shortcodes');



// register short month year function with hyphen (Mon-00)
function SCode_short_month_year_hyphen() {
   return date("M")."-".date("y");
}
function SCode_register_short_month_year_shortcodes_hyphen(){
   add_shortcode('short_m-y', 'SCode_short_month_year_hyphen');
}
add_action( 'init', 'SCode_register_short_month_year_shortcodes_hyphen');



// register date format (dd/mm/yyyy)
function SCode_date_format() {
   return date("d")."/".date("m")."/".date("Y");
}
function SCode_register_date_format_shortcodes(){
   add_shortcode('dmy', 'SCode_date_format');
}
add_action( 'init', 'SCode_register_date_format_shortcodes');




