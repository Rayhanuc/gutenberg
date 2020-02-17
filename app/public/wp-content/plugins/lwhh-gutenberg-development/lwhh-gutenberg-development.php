<?php

/**
 * 
 * Plugin Name: LWHH Gutenberg Development
 * Plugin URI:  https:
 * Description: Demonstration plugin to learn WordPress gutenberg development with LWHH
 * Version: 0.0.1     
 * Author:  LWHH
 * Author URI: https:
 * License:     GPLv2 or later
 * Text Domain: lwhhgd
 * Domain Path: /languages/
 */

// if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
defined('ABSPATH' ) || exit;

require plugin_dir_path(__FILE__)  . 'blocks/block-1/index.php';

// require_once(plugin_dir_path( __FILE__ )."blocks/block-1/index.php");