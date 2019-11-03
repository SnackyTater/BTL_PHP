<?php 
include_once('models/books/book_model.php');
class product {
	var $model;
	public function __construct() {
		$this->model = new book_model();
	}
	public function run() {
		#print 'Product Controller';
		
		$action = filter_input(INPUT_GET,'action');
		$action = $action==NULL?'list':$action;
		
		switch($action) {			
			case 'add':
				require_once('/views/book_add.php');
				break;
			case 'list':	
				$products = $this->model->getAll();					
				require_once('/views/book_list.php');
				break;
		}
	}
}
?>