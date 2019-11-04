<style>
<?php
        include 'css/view_book.css';
?>
</style>
<?php
require_once('views/header.php');
require_once('models/books/book_model.php');
$getBookID = filter_input(INPUT_GET,'book');
$book = new book_model();
$data = $book->getBook($getBookID);
	print '<div class="view-book">';
        print '<div class="book-img"><img  src="asset/image/'.$data->bookID.'.jpg"></div>';
        print '<p>'.$data->bookName.'</p>';
        print '<p>'.$data->gerne.'</p>';
        print '<p>'.$data->author.'</p>';
        print '<p>'.$data->price.'</p>';
        print '<p>'.$data->bookDescription.'</p>';
        
        print '<a>Đặt mua</a>';
	print '</div>';
?>
<!-- <img src="asset/image/1.jpg"/> -->

