<<<<<<< HEAD
<style>
<?php
include 'css/view_book.css';
?>
</style>
<?php
require_once('views/header.php');
require_once('models/books/book_model.php');
$book = new book_model()->getBook();

	print '<div class="view-book">';
        print '<img src="asset/img/'.$book->bookID.'.jpg"/>';
        print '<p>'.$book->bookName.'</p>';
        print '<p>'.$book->gerne.'</p>';
        print '<p>'.$book->author.'</p>';
        print '<p>'.$book->bookDescription.'</p>';
        print '<p>'.$book->price.'</p>';
        print '<a >Đặt mua</a>'
	print '</div>';
	
?>
<!-- <img src="asset/image/1.jpg"/> -->
=======
<?php
$bookID = filter_input(INPUT_GET,'book');
echo ($bookID);
?>
>>>>>>> fc15d8b6acc5bae92068d869ea9c13b99e73934e
