<?php
/*
Plugin Name: Buddypress Group Tabs
Plugin URI: https://worklizard.com
Description: This plugin adds a code base for adding specific group tabs with info to specific Buddypress groups
Version: 1.0
Requires at least: WordPress 4.9 / BuddyPress 5.1
Tested up to: WordPress 4.9 / BuddyPress 5.2
License: GNU/GPL 2
Author: Jonas Skjodt
Author URI: https://jonaskjodt.com
*/

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;
 
// Load our custom group tab code only after BP is loaded and initialized
function load_buddypress_specific_group_tabs() {
    require( dirname( __FILE__ ) . '/includes/group-tabs.php' );
}
add_action( 'bp_include', 'load_buddypress_specific_group_tabs' );
