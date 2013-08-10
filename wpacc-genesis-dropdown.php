<?php
/**
	Plugin Name: Genesis Accessible Dropdown Menu
	Plugin URI: http://wp-accessible.org/
	Description: Adds keyboard accessibility to the Genesis menu's (version 2.0 and higher)
	Version: 1.0
	Author: Rian Rietveld
	Author URI: http://rrwd.nl
	License: GPLv2 or later
*/

/**
Version 1.0
- first release
This is a modified version of the Keyboard Accessible Dropdown Menus Plugin by  Amy Hendrix and = Graham Armfield
Original code at  http://github.com/sabreuse/accessible-menus and http://wordpress.org/plugins/accessible-dropdown-menus/
Modified: - included seperate stylesheet in stead of inline style
          - changed javascript and CSS to fit Genesis 2.0 class-references
The Javacsript adds the class wpacc-hover to the li.menu-item of a link on hover and focus
The CSS wpacc-hover changes the ul.submenu from 
	left: -9999px;
	opacity: 0; 
into 
	left: auto;
	opacity: 1;
	
tested with the Genesis Framework version 2.0 by StudioPress (http://www.studiopress.com)
		   
*/


add_action( 'wp_enqueue_scripts', 'wpacc_genesis_dropdown_scripts' );
function wpacc_genesis_dropdown_scripts() {
	
	wp_enqueue_script( 'wpacc-genesis-dropdown',   plugins_url( '/wpacc-genesis-dropdown.js' , __FILE__ ), array( 'jquery' ), false, true );
	
	wp_register_style( 'wpacc-genesis-dropdown-css', plugins_url( '/wpacc-genesis-dropdown.css' , __FILE__ ) );
	wp_enqueue_style('wpacc-genesis-dropdown-css');
}


?>