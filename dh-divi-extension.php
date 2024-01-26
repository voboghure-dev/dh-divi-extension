<?php
/*
Plugin Name: DH Divi Extension
Plugin URI:  
Description: Divi Extension for Project counter
Version:     1.0.0
Author:      DevHelpers
Author URI:  
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: dhde-dh-divi-extension
Domain Path: /languages

DH Divi Extension is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

DH Divi Extension is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with DH Divi Extension. If not, see https://www.gnu.org/licenses/gpl-2.0.html.
*/


if ( ! function_exists( 'dhde_initialize_extension' ) ):
/**
 * Creates the extension's main class instance.
 *
 * @since 1.0.0
 */
function dhde_initialize_extension() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/DhDiviExtension.php';
}
add_action( 'divi_extensions_init', 'dhde_initialize_extension' );
endif;
