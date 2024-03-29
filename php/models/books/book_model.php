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
		$mySQL = 'select * from book where bookID = '.$bookID.'';
		$result = mysqli_query($this->conn, $mySQL);
		$row = mysqli_fetch_assoc($result);
		$data = new book(
			$row['bookID'],
			$row['bookName'],
			$row['gerne'],
			$row['author'],
			$row['bookDescription'],
			$row['price']
		);
		return $data;
	}

	public function updateBook($bookID,$bookName,$gerne,$author,$bookDescription,$price) {
		$mySQL = "UPDATE book SET bookName='{$bookName}', gerne='{$gerne}',author='{$author}',bookDescription='{$bookDescription}',price='{$price}' WHERE bookID = '{$bookID}'";
		//   bookDescription="'{$bookDescription}'", price="'{$price}'" 
		$result = mysqli_query($this->conn, $mySQL);	
		if ($result)
        {
            return true;
        }
        else
        {
            return false;
        }
	}

	public function createBook($bookName, $gerne, $author, $bookDescription, $price) {
		$getTotal='select count(*) from book';
        $result=mysqli_query($this->conn,$getTotal);
        $rowRes=mysqli_fetch_row($result);
		$bookID=$rowRes[0]+1;
		$book = new book($bookID,$bookName, $gerne, $author, $bookDescription, $price);
		$mySQL = "INSERT INTO book(bookID,bookName,gerne,author,bookDescription,price) values('{$book->bookID}','{$book->bookName}','{$book->gerne}','{$book->author}','{$book->bookDescription}','{$book->price}');";
		$result1=mysqli_query($this->conn, $mySQL);
		return $result1;
	}

	public function generateBookID(){
		$getTotal='select count(*) from book';
        $result=mysqli_query($this->conn,$getTotal);
        $rowRes=mysqli_fetch_row($result);
		$bookID=$rowRes[0]+1;
		return $bookID;
	}

	public function deleteBook($bookID){
		$mySQL = 'delete from book where bookID='.$bookID.'';
		mysqli_query($this->conn, $mySQL);
	}

	public function select(){
		$mySQL = "SELECT * FROM book ORDER BY bookID";
		$result = mysqli_query($this->conn, $mySQL);
		$books = array();
		if ($result) {
			while ($row = mysqli_fetch_array($result)) {
				
				$books[] = new book(
										$row['bookID'],
										$row['bookName'],
										$row['gerne'],
										$row['author'],
										$row['bookDescription'],
										$row['price']
								);
			}
		}
		else {
			print mysqli_error($this->conn);
		}
		return $books;
	}
}
?>