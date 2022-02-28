<?php
/**
 * @package JcrossingPlugin
 */
/**
 * Plugin Name: Jcrossing Plugin
 * Plugin URI: https://github.io/joshacross
 * Description: Debugging Test to start activation
 * Version 1.0.0
 * Author: Joshua Cross
 * Author URI: https://joshacross.github.io/my-portfolio/
 * License: GPLv2 or later
 * Text Domain: jcrossing-plugin
 */

/* 
This file is part of Jcrossing Plugin.

Jcrossing Plugin is free software: you can redistribute it and/or modify it under the terms
of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, 
or (at your option) any later version.

Jcrossing Plugin is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with Jcrossing Plugin.
If not, see <https://www.gnu.org/licenses/>.
*/

if ( ! defined( 'ABSPATH' ) ) {
    die;
}

class JcrossingPlugin 
{
    function __construct() {
        add_action( 'init', array ( $this, 'custom_post_type' ) );
    }

    function activate () {
        // generate a CPT
        $this->custom_post_type();
        // flush rewrite rules
        flush_rewrite_rules();
    }

    function deactivate () {
        // flush rewrite rules
        flush_rewrite_rules();
    }

    function uninstall () {
        // delete CPT
    }

    function custom_post_type () {
        register_post_type ( 'book', ['public' => true, 'label' => 'Books']);
    }
}

if ( class_exists( 'JcrossingPlugin' ) ) {
$jcrossingPlugin = new JcrossingPlugin();
}

// HOOKS
// activation hook
register_activation_hook( __FILE__, array( $jcrossingPlugin, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $jcrossingPlugin, 'deactivate' ) );

// uninstall
register_uninstall_hook( __FILE__, array( $jcrossingPlugin, 'uninstall' ) );