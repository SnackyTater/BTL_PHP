<?php
class book {
    var $*id;
	var $name;
	var $gerne;
	var $author;
	var $description;
	var $price;
	
	function __construct($id, $name, $gerne, $author, $description, $price) {
		$this->id = $id;
		$this->name = $name;
		$this->gerne = $gerne;
		$this->author = $author;
		$this->description = $description;
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