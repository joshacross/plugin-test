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

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/composer/autoload_psr4.php';
}

class JcrossingPlugin 
{
    public $plugin;
    
    function __construct() {
        $this->plugin = plugin_basename( __FILE__ );
    }

    function register() {
        add_action( 'admin_enqueue_scripts', array ( $this, 'enqueue' ) );

        add_action( 'admin_menu', array( $this, 'add_admin_pages' ) );

        add_filter( "plugin_action_links_$this->plugin", array( $this, 'settings_link' ) );
    }

    function settings_link( $links ) {
        // add custom settings link
        $settings_link = '<a href="admin.php?page=jcrossing_plugin">Settings</a>';
        array_push( $links, $settings_link );
        return $links;
    }

    function add_admin_pages() {
        add_menu_page ( 'Jcrossing Plugin', 'Jcross', 'manage_options', 'jcrossing_plugin', array( $this, 'admin_index' ), 'dashicons-store', 110 );
    }

    function admin_index() {
        require_once plugin_dir_path( __FILE__ ) . '../jcrossing-plugin/templates/admin.php';
    }

    protected function create_post_type() {
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

    function custom_post_type () {
        register_post_type ( 'book', ['public' => true, 'label' => 'Books']);
    }

    function enqueue() {
        // enqueue all our scripts
        wp_enqueue_style( 'mypluginstyle', plugins_url( '/assets/myrentstyle.css' , __FILE__ ) );
        wp_enqueue_script( 'mypluginscript', plugins_url( '/assets/rentformula.js' , __FILE__ ) );
    }
}

if ( class_exists( 'JcrossingPlugin' ) ) {
    $jcrossingPlugin = new JcrossingPlugin();
    $jcrossingPlugin->register();
}

// HOOKS
// activation hook
register_activation_hook( __FILE__, array( $jcrossingPlugin, 'activate' ) );

// deactivation
register_deactivation_hook( __FILE__, array( $jcrossingPlugin, 'deactivate' ) );