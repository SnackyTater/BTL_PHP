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
        print '<p>Name: '.$data->bookName.'</p>';
        print '<p>Gerne: '.$data->gerne.'</p>';
        print '<p>Author: '.$data->author.'</p>';
        print '<p>Price: '.$data->price.'đ</p>';
        print '<p>Decription: '.$data->bookDescription.'</p>';
        
        print '<a>Đặt mua</a>';
	print '</div>';
?>

