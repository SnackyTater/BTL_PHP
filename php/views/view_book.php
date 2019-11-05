<style>
<?php
        include 'css/view_book.css';
?>
</style>
<?php
require_once('views/header.php');
require_once('models/books/book_model.php');
require_once('models/bill/bill_model.php');

$getBookID = filter_input(INPUT_GET,'book');
$book = new book_model();
$data = $book->getBook($getBookID);

$submitPOST = isset($_POST['newBill'])?$_POST['newBill']:'';
if (!empty($submitPOST)) {
        $bookID = $getBookID;
        $quantity = $_POST['quantity'];
        $customerName = $_POST['customer-name'];
        $customerAddress = $_POST['customer-address'];
        $billDate = date('Y-m-d h:i:s');
        $total = $quantity * $data->price;
        /*
        print $quantity.'<br>';
        print $bookID.'<br>';
        print $customerName.'<br>';
        print $customerAddress.'<br>';
        print $billDate.'<br>';
        print $total.'<br>';
        */
        print $customerAddress.'<br>';
        $bill = new bill_model();
        $result = $bill->createBill($bookID, $quantity, $customerName, $customerAddress, $billDate, $total);
        print 'bruh';
}
else{
        print 'no bruh';        
}

	print '<div class="view-book">';
        print '<div class="book-img"><img  src="asset/image/'.$data->bookID.'.jpg"></div>';
        print '<p>Name: '.$data->bookName.'</p>';
        print '<p>Gerne: '.$data->gerne.'</p>';
        print '<p>Author: '.$data->author.'</p>';
        print '<p>Price: '.$data->price.'đ</p>';
        print '<p>Decription: '.$data->bookDescription.'</p>';
        print '<a href="?action=update&id='.$data->bookID.'"><div class="update-book">Sửa sách</div></a>';
        print '<form method="POST">';
        print '<input type="number" name="quantity" placeholder="Quantity" class="bill-info">';
        print '<input type="text" name="customer-name" placeholder="Customer name" class="bill-info">';
        print '<input type="text" name="customer-address" placeholder="Customer address" class="bill-info"><br>';
        print '<input type="submit" name="newBill" value="Đặt mua">';
        print '</form>';
	print '</div>';
?>

