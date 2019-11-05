<?php
require_once('models/books/book_model.php');

if(isset($_POST['NewBook'])){
$bookName = $_POST['bookName'];
$gerne = $_POST['gerne'];
$author = $_POST['author'];
$bookDescription = $_POST['bookDescription'];
$price = $_POST['price'];
$book = new book_model();
$book->createBook($bookName, $gerne, $author, $bookDescription, $price);

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
  <input type="text" name="price"><br>

  <input name = "newBook" type="submit" value="Add Book">
</form>