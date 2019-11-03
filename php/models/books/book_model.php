<?php 
require_once('models/books/book.php');

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

	public function getAllBook() {
		$mySQL = "SELECT * FROM book ORDER BY bookID";
		$result = mysqli_query($this->conn, $mySQL);
		return $result;
	}

	public function getBook($bookID) {
		$mySQL = 'select from book where bookID = '.$bookID.'';
		$result = mysqli_query($this->conn, $mySQL);
		return $result;
	}

	public function updateBook($Book) {
		$mySQL = 'update book set name='.$Book->name.', gerne='.$Book->gerne.', author='.$Book->author.', description'.$Book->description.', price='.$Book->price.';';
		mysqli_query($this->conn, $mySQL);	
	}

	public function createBook($newBook) {
		$getTotal='select count(*) from book';
        $result=mysqli_query($this->conn,$getTotal);
        $rowRes=mysqli_fetch_row($result);
        $newID=$rowRes[0]+1;
		$mySQL = 'insert into book values('.$newID.','.$newBook->name.','.$newBook->gerne.','.$newBook->author.','.$newBook->description.','.$newBook->price.');';
		mysqli_query($this->conn, $mySQL);
	}

	public function deleteBook($bookID){
		$mySQL = 'delete from book where bookID='.$bookID.'';
		mysqli_query($this->conn, $mySQL);
	}
}
?>