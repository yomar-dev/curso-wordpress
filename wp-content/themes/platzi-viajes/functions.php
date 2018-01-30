<?php 


function add_role_viajero(){
	remove_role('viajero');
	add_role(
		'viajero',
		'Viajero',
		[
			'read'			=> 	true,
			'edit_posts'	=> true,
			'upload_files'	=> true,
			'publish_posts'	=> true
		]
	);
}


add_action('init', 'add_role_viajero');

?>