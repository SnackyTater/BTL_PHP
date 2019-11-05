<?php
include_once('models/bills/bill_model.php');

class bill_controller{
	var $model;
	public function __construct() {
		$this->model = new bill_model();
	}

	public function run() {
		print 'Product Controller';
		$action = filter_input(INPUT_GET,'action');
		$action = $action==NULL?'list':$action;
		
		switch($action) {			
			// case 'addBill':
			// 	require_once('/views/bill_add.php');
			// 	break;
			case 'listBill':	
				$products = $this->model->getAllbill();					
				require_once('views/bill_list.php');
				break;
		}
	}
}
?>