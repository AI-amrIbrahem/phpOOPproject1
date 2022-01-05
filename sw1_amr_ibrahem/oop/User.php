<?php
Class User {
	public $name;
	public $email;
	public $password;
	public $phone;

	function __construct($name,$email,$password,$phone)
	{
		$this->name = $name;
		$this->email = $email;
		$this->password = $password;
		$this->phone = $phone;
	}

}


?>