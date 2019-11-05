<style>
<?php
  include 'css/book_add.css';
?>
</style>
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
        $bookID = $book_model->generateBookID();
        $check=file_exists($_FILES['BookImage']['tmp_name']);
  if ($check!==false) {
      $result = $book_model->createBook($bookName, $gerne, $author, $bookDescription, $price);
  }
  else{
      $result=false;
  }
  if ($result==true){
      $targetDir=$_SERVER["DOCUMENT_ROOT"].'/BTL_PHP/php/asset/image/';
      $imageFileType = strtolower(pathinfo(basename($_FILES['BookImage']['name']),PATHINFO_EXTENSION));
      $targetFile = $targetDir .$bookID.'.'.$imageFileType;
      $uploadState=1;
      $check=getimagesize($_FILES['BookImage']['tmp_name']);
      if ($check!==false)
      {
          $uploadState=1;
      }
      else
      {
          $uploadState=0;
      }
      //Check if file is exist yet
      if (file_exists($targetFile)){
          $uploadState=0;
      }
      //Check file extension correct or not
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
          && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadState = 0;
      }
      $targetFile = $targetDir .$bookID.'.jpg';
      if ($uploadState!==0)
      {
          move_uploaded_file($_FILES['BookImage']['tmp_name'],$targetFile);
          echo '<p class="check-result">Add book sucessful</></p>';
      }
  }
  else
  {
      echo '<p class="check-result">Failed to submit new book</p>';
  }
  // if ($result === true){
  //   echo "Success";
  // }else{
  //   echo "Fail";
  // }
}
?>

<form method="POST" enctype="multipart/form-data">
    <div class="add-book-form">
        <h1 class="add-book-header">Add Book Form</h1>
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

        <input class="add-submit" name = "newBook" type="submit" value="Add Book">
    </div>
</form>