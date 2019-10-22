<?php 	
	$controller_name = filter_input(INPUT_GET,'controller');
	if (empty($controller_name)) {
		$controller_name = 'book';
	}
	
	include_once('controllers/'.$controller_name.'_controller.php');
	
	$controller = new $controller_name();
	$controller->run();
?>