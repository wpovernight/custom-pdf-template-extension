<?php
/**
 * Plugin Name: Custom PDF Template extension
 * Plugin URI: http://www.wpovernight.com
 * Description: Custom PDF Template extension
 * Version: 1.0.0
 * Author: Alexandre Faustino
 * Author URI: http://www.wpovernight.com
 * License: GPLv2 or later
 * License URI: http://www.opensource.org/licenses/gpl-license.php
 */

function wpo_custom_pdf_template_extension_path( $template_paths ) {
	$template_paths[] = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/templates/';
	return $template_paths;
}
add_filter( 'wpo_wcpdf_template_paths', 'wpo_custom_pdf_template_extension_path', 10, 1 );
