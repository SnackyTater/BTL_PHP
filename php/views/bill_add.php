<?php
require_once('models/bill/bill_model.php');
require_once('models/bill/bill.php');

  $submitPOST = isset($_POST['newBook'])?$_POST['newBook']:'';
  // $targetDir=$_SERVER["DOCUMENT_ROOT"].'/BTL_PHP/php/asset/image/';
  // $imageFileType = strtolower(pathinfo(basename($_FILES['BookImage']['name']),PATHINFO_EXTENSION));
  // $book_model = new book_model();
  // $bookID = $book_model->generateBookID();
  // $targetFile = $targetDir .$bookID.'.'.$imageFileType;
  // echo('/'.$_FILES['BookImage']['tmp_name']);

	if (!empty($submitPOST)) {
  $bookName = $_POST['bookName'];
  $gerne = $_POST['gerne'];
  $author = $_POST['author'];
  $bookDescription = $_POST['bookDescription'];
  $price = $_POST['price'];
  $book_model = new book_model();
  $bookID = $book_model->generateBookID();
  $check=file_exists($_FILES['BookImage']['tmp_name']);
  if ($check!==false) {
      $result = $book_model->createBook($bookName, $gerne, $author, $bookDescription, $price);
  }
  else{
      $result=false;
  }
}
?>

<form method="POST" enctype="multipart/form-data">
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