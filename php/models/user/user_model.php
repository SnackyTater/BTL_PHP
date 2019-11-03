<?php 
require_once('user.php');

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

	public function createUser($user) {
		$getTotal='select count(*) from user';
        $result=mysqli_query($this->conn,$getTotal);
        $rowRes=mysqli_fetch_row($result);
        $newID=$rowRes[0]+1;
		$mySQL = 'insert into user values('.$newID.','.$user->userName.','.$user->password.','.$user->email.','.$user->role.');';
		mysqli_query($this->conn, $mySQL);
	}

	public function deleteUser($billID){
		$mySQL = 'delete from bill where id='.$bookID.';';
		mysqli_query($this->conn, $mySQL);
	}
}
?>
