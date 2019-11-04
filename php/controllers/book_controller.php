<?php
include_once('models/books/book_model.php');
// require_once('/views/left.php');
class book_controller{
	var $model;
	public function __construct() {
		$this->model = new book_model();
	}

	public function run() {
		// print 'Product Controller';
		$action = filter_input(INPUT_GET,'action');
		$action = $action==NULL?'list':$action;
		
		$bookID = filter_input(INPUT_GET,'book');
		if ($bookID == Null){
			switch($action) {			
				case 'add':
					require_once('views/book_add.php');
					break;
				case 'list':	
					$books = $this->model->select();					
					require_once('views/book_list.php');
					break;
				case 'update':
					require_once('views/book_update.php');
					break;
			}
		}else{
			require_once('views/view_book.php');
		}

		
	}
}
?>