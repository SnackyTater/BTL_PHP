<?php
class bill {
    var $billID;
    var $bookID;
    var $quantity;
	var $customerName;
	var $customerAddress;
	var $billDate;
    var $total;
	
	function __construct($billID, $bookID, $quantity, $customerName, $customerAddress, $billDate, $total) {
		$this->billID = $billID;
		$this->bookID = $bookID;
		$this->quantity = $quantity;
		$this->customerName = $customerName;
		$this->billDate = $billDate;
		$this->total = $total;
	}
}
?>