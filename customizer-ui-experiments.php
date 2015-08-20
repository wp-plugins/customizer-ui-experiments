<?php
/**
 * Plugin Name: Customizer UI Experiments
 * Plugin URI: http://wordpress.org/plugins/customizer-ui-experiments
 * Description: Testing ground for UI and UX changes and features proposed for the Customizer.
 * Version: 0.1
 * Author: The Customizer Team
 * Author URI: https://wordpress.slack.com/messages/core-customize/
 * Tags: themes, customizer, theme customizer
 * License: GPL

=====================================================================================
Copyright (C) 2015 Nick Halsey

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with WordPress; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
=====================================================================================
*/

add_action( 'customize_controls_enqueue_scripts', 'customizer_ui_experiments_enqueue' );
function customizer_ui_experiments_enqueue() {
	wp_enqueue_style( 'customize-ui-adaptive-width', plugin_dir_url( __FILE__ ) . '/components/adaptive-width.css' );
	wp_enqueue_style( 'customize-ui-better-contrast-focus', plugin_dir_url( __FILE__ ) . '/components/better-contrast-focus.css' );
	wp_enqueue_style( 'customize-ui-device-preview', plugin_dir_url( __FILE__ ) . '/components/device-preview.css' );
	wp_enqueue_script( 'customize-ui-device-preview', plugin_dir_url( __FILE__ ) . '/components/device-preview.js', array( 'jquery' ) );
}