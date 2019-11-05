<style>
<?php
include 'css/book_list.css';
?>
</style>
<?php
	print '<div class="view-book">';
	foreach($books as $book) {
		print '<div class="book-info">';
			print '<p> <a href="?book='.$book->bookID.'"> Name: ';
			print $book->bookName;
			print '</a>';
			print '</p>';
			print '<p>';
			print 'Gerne: ';
			print $book->gerne;
			print '</p>';
			print '<p>';
			print 'Price: ';
			print $book->price;
			print 'đ</p>';
			print '<img src="asset/image/'.$book->bookID.'.jpg">';
		print '</div>';

	}
	print '</div>';
	print '</div>';
	
?>
<!-- <img src="asset/image/1.jpg"/> -->
