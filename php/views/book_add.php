<?php
require_once('models/books/book_model.php');
require_once('models/books/book.php');

$submitPOST = isset($_POST['newBook'])?$_POST['newBook']:'';
	
	if (!empty($submitPOST)) {
  $bookName = $_POST['bookName'];
  $gerne = $_POST['gerne'];
  $author = $_POST['author'];
  $bookDescription = $_POST['bookDescription'];
  $price = $_POST['price'];
  $book_model = new book_model();
  $result = $book_model->createBook($bookName, $gerne, $author, $bookDescription, $price);
  if ($result === true){
    echo "Success";
  }else{
    echo "Fail";
  }
}
?>

<form method="POST">
  Title:<br>
  <input type="text" name="bookName"><br>
  
  Gerne:<br>
  <input type="text" name="gerne"><br>
  
  Author:<br>
  <input type="text" name="author"><br>
  
  Book Description:<br>
  <input type="text" name="bookDescription"><br>

  Price:<br>
  <input type="number" name="price"><br>

  <input name = "newBook" type="submit" value="Add Book">
</form>