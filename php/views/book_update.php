<style>
    <?php
        include 'css/book_update.css';
    ?>
</style>                                                                                                                                                                                                                                        
<?php
    require_once('models/books/book_model.php');
    require_once('models/books/book.php');

    $book_model = new book_model();
    $bookID = filter_input(INPUT_GET,'id');
    $data = $book_model->getBook($bookID);
    $updateBook = isset($_POST['updateBook'])?$_POST['updateBook']:'';
    if (!empty($updateBook)) {
        $bookName = $_POST['bookName'];
        $gerne = $_POST['gerne'];
        $author = $_POST['author'];
        $bookDescription = $_POST['bookDescription'];
        $price = $_POST['price'];
        $result = $book_model->updateBook($bookID,$bookName,$gerne,$author,$bookDescription,$price);
        $data = new book($bookID,$bookName,$gerne,$author,$bookDescription,$price);
        if($result === true){
            print '<p class="check-update">Update Success</p>';
        }
    }
?>

<form method="POST" enctype="multipart/form-data">
    <div class="update-book-form">
        <h1 class="update-book-header">Update Book Form</h1>

        <p class="update-book"><label>Title: </label><br>
        <input type="text" name="bookName" placeholder="Book Name" value="<?php print $data->bookName?>"><br>
        
        <p class="update-book"><label>Gerne: </label><br>
        <input type="text" name="gerne" placeholder="Gerne" value="<?php print $data->gerne?>"><br>
        
        <p class="update-book"><label>Author: </label><br>
        <input type="text" name="author" placeholder="Author" value="<?php print $data->author?>"><br>
        
        <p class="update-book"><label>Book Description: </label><br>
        <input type="text" name="bookDescription" placeholder="Decription" value="<?php print $data->bookDescription?>"><br>

        <p class="update-book"><label>Price: </label><br>
        <input type="number" name="price" placeholder="Price" value="<?php print $data->price?>"><br>

        <input class="update-submit" name = "updateBook" type="submit" value="Update Book">
    </div>
</form>