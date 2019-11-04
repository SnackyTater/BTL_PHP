<?php
class book {
    var $bookID;
	var $bookName;
	var $gerne;
	var $author;
	var $bookDescription;
	var $price;
	
	function __construct($bookID, $bookName, $gerne, $author, $bookDescription, $price) {
		$this->bookID = $bookID;
		$this->bookName = $bookName;
		$this->gerne = $gerne;
		$this->author = $author;
		$this->bookDescription = $bookDescription;
		$this->price = $price;
	}
	
	public function __set($fieldname, $value) {
		$this->data[$fieldname] = $value;
	}

	public function __get($fieldname) {
		return $this->data[$fieldname];
	}
}
?>