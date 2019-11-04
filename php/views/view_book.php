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
$book->getBook($getBookID);

	print '<div class="view-book">';
        print '<img src="asset/img/'.$book->bookID.'.jpg"/>';
        print '<p>'.$book->bookName.'</p>';
        print '<p>'.$book->gerne.'</p>';
        print '<p>'.$book->author.'</p>';
        print '<p>'.$book->bookDescription.'</p>';
        print '<p>'.$book->price.'</p>';
        print '<a >Đặt mua</a>';
	print '</div>';
	
?>
<!-- <img src="asset/image/1.jpg"/> -->

