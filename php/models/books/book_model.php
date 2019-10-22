<?php 
require_once('book.php');
class book_model {
	var $conn;
	public function __construct() {
		#Connect DB
		$this->conn = mysqli_connect("localhost","root","");
		if (!$this->conn) {
			die('Connect DB Failed');
		}
		else {
			mysqli_select_db($this->conn,'bookstore');
			#print 'Connect DB OK';
		}
	}
	public function select() {
		$mySQL = "SELECT * FROM product ORDER BY productid";
		$result = mysqli_query($this->conn, $mySQL);
		$products = array();
		if ($result) {
			while ($row = mysqli_fetch_array($result)) {
				/*
				$products[] = new product_entity(
										$row['productid'],
										$row['title'],
										$row['price'],
										$row['description']
								);
				*/
				$product = new product_entity($row);
				$product->thuoctinh1 = 'abc';
				$product->thuoctinh2 = '133';
				$product->thuoctinh3 = 'ffff';
				$products[] = $product;
			}
		}
		else {
			print mysqli_error($this->conn);
		}
		return $products;
	}
	public function update(product_entity $product) {
		$id = $product->productid;
		$updates = array();
		if ($product->title!=null)
			$updates[] = " title='{$product->title}'";
		if ($product->price!=null)
			$updates[] = " price={$product->title}";
		if ($product->desciption!=null)
			$updates[] = " desciption='{$product->desciption}'";
						
		if (count($updates)>0) {
			$update_sql = implode(',',$updates);
			$mySQL = "UPDATE product SET {$update_sql} WHERE productid={$id}";
			$rs_update = mysqli_query($this->conn,$mySQL);
		}			
	}
}
?>