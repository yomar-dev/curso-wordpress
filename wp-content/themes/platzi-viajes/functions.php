<?php 


function add_role_viajero(){
	add_role(
		'viajero',
		'Viajero',
		[
			'read'			=> 	true,
			'edit_post'		=> true,
			'upload_files'	=> true
		]
	);
}


add_action('init', 'add_role_viajero');

?>