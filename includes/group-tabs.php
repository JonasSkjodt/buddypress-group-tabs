<?php
if ( !defined( 'ABSPATH' ) ) exit;

/**
 * Buddypress groups
 * Extra tabs for buddypress groups 
 */

if (bp_is_active( 'groups' ) ) :

class new_buddypress_group_tab extends BP_Group_Extension {

    // contruct the new group tab
    function __construct() {
    
	// if the group is specific and not all the groups, add the if
	if (bp_is_group('NAMEOFGROUP') && 'NAMEOFGROUP' == bp_current_item()  ) { 
    
        // add the new group tab specifics
        $args = array(
            	    'slug'              => 'slug name', // url extension name of new group tab
            	    'name'              => 'name', // name of new tab
            	    'nav_item_position' => 25, // group submenu navigation position
            	    'nav_item_name'     => 'name', // the navigation link name
        	);
            parent::init( $args );
	}
    }
    
    // show whats in the group tab
    function display( $group_id = NULL ) {
    
      // fill your group tab code here
    
    }   
}
 
bp_register_group_extension( 'new_buddypress_group_tab' );

endif;
