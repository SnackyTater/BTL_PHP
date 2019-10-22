<?php 
class product_entity{
	var $data;
	public function __construct($data) {
		$this->data = $data;
	}
	function __set($property,$value) {
		$this->data[$property] = $value;
	}
	function __get($property) {
		return $this->data[$property];
	}
}

/*class product_entity{
	var $productid;
	var $title;
	var $price;
	var $description;
	
	public function __construct($prodid,$title,$price,$desc) {
		$this->productid = $prodid;
		$this->title = $title;
		$this->price = $price;
		$this->description = $desc;
	}
}
*/
?>