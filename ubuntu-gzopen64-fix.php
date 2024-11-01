<?php
/**
 * Plugin Name: Ubuntu gzopen64 fix
 * Plugin URI: http://wordpress.org/plugins/ubuntu-gzopen64-fix
 * Description: When activated, this plugin will convert any gzopen() call into a gzopen64() function call 
 * Author: Nathan Ho
 * Author URI: https://www.fiveq.com/
 * Version: 1.0.2
 * License: GPLv2
**/

if (!function_exists('gzopen')) {
    function gzopen($filename , $mode, $use_include_path = 0 ) { 
	    return gzopen64($filename, $mode, $use_include_path);
	}
}
?>
