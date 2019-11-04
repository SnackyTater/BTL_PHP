<style>
<?php
include 'css/book_list.css';
?>
</style>
<?php
require_once('views/header.php');
	print '<pre>';
		// print_r($books);
	print '</pre>';
	// print '<table border="1">';
	print '<div class="view-book">';
	foreach($books as $book) {
		print '<div class="book-info">';
			// print '<p>';
			// print $book->bookID;
			// print '</p>';
			print '<p>';
			print $book->bookName;
			print '</p>';
			print '<p>';
			print $book->gerne;
			print '</p>';
			print '<p>';
			print $book->author;
			print '</p>';
			print '<p>';
			print $book->price;
			print '</p>';
			print '<img src="asset/image/'.$book->bookID.'.jpg">';
		print '</div>';

	}
	// print '</table>';
	print '</div>';
	
?>
<!-- <img src="asset/image/1.jpg"/> -->
