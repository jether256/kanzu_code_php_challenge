<?php

class User{

	private $con;
	private $user;


	public function __construct($con,$user){
		$this->con=$con;
		$user_details_query =mysqli_query($con,"SELECT * FROM users WHERE username='$user'");
		$this->user=mysqli_fetch_array($user_details_query);
	}


	public function getUid() {
		return $this->user['ID'];
	}

	public function getUsername(){

		return $this->user['username'];
	}




}

?>