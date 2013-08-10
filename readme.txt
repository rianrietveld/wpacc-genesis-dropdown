=== Genesis Accessible Dropdown Menu ===
Contributors: rianrietveld
Donate link: http://wp-accessible.org/
Tags: genesis, a11y, accessibility, dropdown menus, keyboard navigation, menus, navigation
Tested up to: 3.6
Stable tag: 1.0

Adds keyboard accessibility to the Genesis menu's (Genesis 2.0 and higher)

== Description ==

Since Genesis version 2.0 SuperFish has been deprecated for HTML5 installs.
This plugin adds the missing keyboard accessibility for the dropdown menu's again.

This is a modified version of the Keyboard Accessible Dropdown Menus Plugin by Amy Hendrix and = Graham Armfield
Original code at http://github.com/sabreuse/accessible-menus and http://wordpress.org/plugins/accessible-dropdown-menus/

Modified: - included seperate stylesheet in stead of inline style
          - changed javascript and CSS to fit Genesis 2.0 class-references
		  
The JavaScript adds the class wpacc-hover to the li.menu-item of a link on hover or focus
The CSS wpacc-hover changes the ul.submenu from 
	left: -9999px;
	opacity: 0; 
into 
	left: auto;
	opacity: 1;
	
Tested with the Genesis Framework version 2.0
	
This plugin only works on the Genesis Framework version 2.0 and higher.

== Installation ==

Upload the zip file to the `/wp-content/plugins/` directory

= 1.0 =

First release