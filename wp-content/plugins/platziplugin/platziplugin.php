<?php
/*
Plugin Name: Platzi Plugin
Plugin URI:  https://raven.es/plugins/platziplugin
Description: Plugin con los elementos extra de Platzi
Version:     1.0
Author:      bi0xid
Author URI:  https://raven.es/
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: platziplugin
Domain Path: /languages
*/


function add_role_viajero(){
	remove_role('viajero');
	add_role(
		'viajero',
		'Viajero',
		[
			'read'			=> true,
			'edit_posts'	=> true,
			'upload_files'	=> true,
			'publish_posts'	=> true,
			'edit_published_posts'	=> true,
			'delete_published_posts'	=> true
		]
	);
}