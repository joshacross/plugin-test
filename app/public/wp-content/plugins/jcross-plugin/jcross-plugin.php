<?php
/**
 * @package jcrossPlugin
 */

/*
Plugin Name: Jcross Plugin
Plugin URI: https://github.com/joshacross/plugin-test 
Description: This is my first attempt in writing a custom plugin following a tutorial by Alessandro Castellani on YouTube
Version: 1.0.0
Author: Joshua Cross
Author URI: https://joshacross.github.io/my-portfolio/ 
License: GPLv2 or later
Text Domain: jcross-plugin
 */

/*
This program is free software; you can redistribute it and/or modify it under the terms of the
GNU General Public License as published by the Free Software Foundation; either version 2 of the
License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General
Public License for more <details class="
You should have received a copy of the GNU General publice license along with this program; if not,
write to the Free Software Foundtion, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301
*/

defined ( 'ABSPATH ') or die ( 'Hrmm... It does not seem that you have access to this file. Please contact system administrator');

class JcrossPlugin
{

    function __construct() {
        add_action( 'init', array( $this, 'custom_post_type' ) );
    }

    function activate() {
        // generate a custom post-type (CPT)

        // then flush rewrite rules
        flush_rewrite_rules();
    }
    function dactivate() {
        // flush rewrite rules

    }
    function uninstall() {
        // delete CPT
        // delete all the plugin data from the DB
    }   

    function custom_post_type() {
        register_post_type( 'book', ['public' => true, 'label' => 'Books'] );
    }
}

if ( class_exists( 'JcrossPlugin' ) ) {
    $jcrossPlugin = new JcrossPlugin( 'JcrossPlugin Initialized!');
}

// activation
register_activation_hook( __FILE__, array( $jcrossPlugin, 'activate') );


// deactivation

register_activation_hook( __FILE__, array( $jcrossPlugin, 'deactivate') );


// uninstall

// start https://www.youtube.com/watch?v=XTkbDBhXBQI wordpress plugin - 4