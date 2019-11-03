<?php 
require_once('book.php');

class book_model {
	var $conn;
	public function __construct() {
		#Connect DB
		$this->conn = mysqli_connect("localhost","root","");
		if (!$this->conn) {
			die('Connect DB Failed');
		}
		else {
			mysqli_select_db($this->conn,'bookstore');
			#print 'Connect DB OK';
		}
	}

	public function getAllBill() {
		$mySQL = "SELECT * FROM bill ORDER BY billID";
		$result = mysqli_query($this->conn, $mySQL);
		return $result;
	}

	public function createBill($newBill) {
		$getTotal='select count(*) from bill';
        $result=mysqli_query($this->conn,$getTotal);
        $rowRes=mysqli_fetch_row($result);
        $newID=$rowRes[0]+1;
		$mySQL = 'insert into bill values('.$newID.','.$newBill->quantity.','.$newBill->customerName.','.$newBill->customerAddress.','.$newBill->billDate.','.$newBill->total')';
		mysqli_query($this->conn, $mySQL);
	}

	public function deleteBill($billID){
		$mySQL = 'delete from bill where id='.$bookID.'';
		mysqli_query($this->conn, $mySQL);
	}
}
?>