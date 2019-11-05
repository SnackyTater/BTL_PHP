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
        print '<a href="?action=update&?book='.$data->bookID.'"><div class="update-book">Sửa sách</div></a>';
        print '<form method="POST">';
        print '<input type="number" name="quantity" placeholder="Quantity" class="bill-info">';
        print '<input type="text" name="customer-name" placeholder="Customer name" class="bill-info">';
        print '<input type="text" name="customer-address" placeholder="Customer address" class="bill-info"><br>';
        print '<input type="submit" name="newBill" value="Đặt mua">';
        print '</form>';
	print '</div>';
?>

