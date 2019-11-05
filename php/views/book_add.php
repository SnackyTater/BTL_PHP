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
  <p class="add-book"><label>Book Image: </label><br>
  <input class="right" type="file" name="BookImage" value="BookImage">
  <p class="add-book"><label>Title: </label><br>
  <input type="text" name="bookName" placeholder="Book Name"><br>
  
  <p class="add-book"><label>Gerne: </label><br>
  <input type="text" name="gerne" placeholder="Gerne"><br>
  
  <p class="add-book"><label>Author: </label><br>
  <input type="text" name="author" placeholder="Author"><br>
  
  <p class="add-book"><label>Book Description: </label><br>
  <input type="text" name="bookDescription" placeholder="Decription"><br>

  <p class="add-book"><label>Price: </label><br>
  <input type="number" name="price" placeholder="Price"><br>

  <input name = "newBook" type="submit" value="Add Book">
</form>