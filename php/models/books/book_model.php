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

	public function getAll() {
		$mySQL = "SELECT * FROM book ORDER BY bookID";
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

	public function updateBook(book $Book) {
		$mySQL = 'update book set name='.$Book->name.', gerne='.$Book->gerne.', author='.$Book->author.', description'.$Book->description.', price='.$Book->price.'';
		mysqli_query($this->conn, $mySQL);	
	}

	public function createBook(book newBook) {
		$mySQL = 'insert into book values('.$newBook->name.','.$newBook->gerne.','.$newBook->author.','.$newBook->description.','.$newBook->price')';
		mysqli_query($this->conn, $mySQL);
	}

	public function deleteBook($bookID){
		$mySQL = 'delete from book where bookID='.$bookID.'';
		mysqli_query($this->conn, $mySQL);
	}
}
?>