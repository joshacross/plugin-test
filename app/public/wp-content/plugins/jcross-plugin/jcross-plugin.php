<?php
/**
 * @package jcrossPlugin
 */

/*
Plugin Name: Jcross Plugin
Plugin URI: http://jcross.com/plugin
Description: This is my first attempt in writing a custom plugin with this amazing tutorial
Version: 1.0.0
Author: Joshua "Jcross" Cross
Author URI: https://joshacross.github.com/my-profile
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

// class JcrossPlugin {

//     __construct($string) {
//         echo $string;
//     }

//     function method1() {

//     }

//     function method2() {

//     }
// }


// if ( class_exists( 'JcrossPlugin' ) ) {
//     $jcrossPlugin = JcrossPlugin( 'Jcross Plugin Initialized' );
// }


// function customFunction ($args) {
//     echo $arg;
// }

// customFunction('this is my argument to echo...' );

class JcrossPlugin
{
    function activate() {

        echo 'the plugin was activated';
        // generate a custom post-type (CPT)
        // then flush rewrite rules
    }
function dactivate() {
    // flush rewrite rules


}
function uninstall() {
    // delete CPT
    // delete all the plugin data from the DB
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