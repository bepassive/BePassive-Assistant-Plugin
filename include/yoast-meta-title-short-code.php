<?php


// register full year function
function yoast_SCode_year() {
   return date("Y");
}
function yoast_SCode_register_year_shortcodes(){
   wpseo_register_var_replacement( '%%year%%', 'yoast_SCode_year', 'advanced', 'Add Year Only' );
}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_year_shortcodes');



// register full month function
function yoast_SCode_month() {
   return date("F");
}
function yoast_SCode_register_month_shortcodes(){
   wpseo_register_var_replacement( '%%month%%', 'yoast_SCode_month', 'advanced', 'Add Month only' );
}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_month_shortcodes');



// register short_year function
function yoast_SCode_short_year() {
   return date("y");
}
function yoast_SCode_register_short_year_shortcodes(){
   wpseo_register_var_replacement( '%%short_year%%', 'yoast_SCode_short_year', 'advanced', 'Add Short Year' );
}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_short_year_shortcodes');



// register short_month function
function yoast_SCode_short_month() {
   return date("M");
}
function yoast_SCode_register_short_month_shortcodes(){
   wpseo_register_var_replacement( '%%short_month%%', 'yoast_SCode_short_month', 'advanced', 'Add Short Month' );
}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_short_month_shortcodes');


// register month year function (Month 0000)
function yoast_SCode_month_year() {
   return date("F")." ".date("Y");
}
function yoast_SCode_register_month_year_shortcodes(){
   wpseo_register_var_replacement( '%%my%%', 'yoast_SCode_month_year', 'advanced', 'Add Month and Year' );
}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_month_year_shortcodes');


// register month year function with hyphen (Month-0000)
function yoast_SCode_month_year_hyphen() {
   return date("F")."-".date("Y");
}
function yoast_SCode_register_month_year_shortcodes_hyphen(){
   wpseo_register_var_replacement( '%%m-y%%', 'yoast_SCode_month_year_hyphen', 'advanced', 'Add Month Year with Hyphen' );

}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_month_year_shortcodes_hyphen');

// register short month year function (Mon 00)
function yoast_SCode_short_month_year() {
   return date("M")." ".date("y");
}
function yoast_SCode_register_short_month_year_shortcodes(){
   wpseo_register_var_replacement( '%%short_my%%', 'yoast_SCode_short_month_year', 'advanced', 'Add Short Month and Year' );
}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_short_month_year_shortcodes');



// register short month year function with hyphen (Mon-00)
function yoast_SCode_short_month_year_hyphen() {
   return date("M")."-".date("y");
}
function yoast_SCode_register_short_month_year_shortcodes_hyphen(){
   wpseo_register_var_replacement( '%%short_m-y%%', 'yoast_SCode_short_month_year_hyphen', 'advanced', 'Add short Month and Year with Hyphen');
}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_short_month_year_shortcodes_hyphen');



// register date format (dd/mm/yyyy)
function yoast_SCode_date_format() {
   return date("d")."/".date("m")."/".date("Y");
}
function yoast_SCode_register_date_format_shortcodes(){
   wpseo_register_var_replacement( '%%dmy%%', 'yoast_SCode_date_format', 'advanced', 'Add day month & year with format' );
}
add_action( 'wpseo_register_extra_replacements', 'yoast_SCode_register_date_format_shortcodes');






