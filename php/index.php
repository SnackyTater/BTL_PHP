<?php 	
	$controller_name = filter_input(INPUT_GET,'controller');
	if (empty($controller_name)) {
		$controller_name = 'book_controller';
	}
	
	include_once('controllers/'.$controller_name.'.php');
	
	$controller = new $controller_name();
	$controller->run();
?>