<?php 
require_once('bill.php');
class bill_model {
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
		$bills = array();
		if ($result) {
			while ($row = mysqli_fetch_array($result)) {
				
				$bills[] = new bill(
										$row['billID'],
										$row['bookID'],
										$row['quantity'],
										$row['customerName'],
										$row['customerAddress'],
										$row['billDate'],
										$row['total']
								);
			}
		}
		else {
			print mysqli_error($this->conn);
		}
		return $bills;
	}

	public function createBill($bookID, $quantity, $customerName, $customerAddress, $billDate, $total) {
		$getTotal='select count(*) from bill';
        $result=mysqli_query($this->conn,$getTotal);
        $rowRes=mysqli_fetch_row($result);
		$billID=$rowRes[0]+1;
		$bill = new bill($billID, $bookID, $quantity, $customerName, $customerAddress, $billDate, $total);
		$mySQL = "insert into bill values('{$bill->billID}','{$bill->bookID}','{$bill->quantity}','{$bill->customerName}','.$customerAddress.','{$bill->billDate}','{$bill->total}');";
		$result = mysqli_query($this->conn, $mySQL);
		if($result===true){
			print '<p style="font-size: 25px;color: #007bff;text-align: center;">Created Bill Success</p>';
		};
	}

	public function deleteBill($billID){
		$mySQL = "delete from bill where id='{$billID}'";
		mysqli_query($this->conn, $mySQL);
	}
}
?>
