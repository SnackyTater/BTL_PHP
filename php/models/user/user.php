<?php
class bill {
    var $userID;
    var $userName;
    var $password;
    var $email;
	var $role;
	
	function __construct($userID, $userName, $password, $email, $role) {
        $this->userID = $userID;
		$this->userName = $userName;
		$this->password = $password;
		$this->email = $email;
		$this->role = $role;
	}
}
?>