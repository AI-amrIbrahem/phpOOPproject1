<?php
require_once 'User.php';
require_once 'dbFunctions.php';


Class Client extends User{
	public $db;
	function __construct($name,$email,$password,$phone)
	{
		$this->db= new  dbFunction();
		parent::__construct($name,$email,$password,$phone);

	}

	public function addFeedback($userId,$type,$topic){
		if ($this->db->addFeedback($userId,$type,$topic)){
			return true;
		}else{
			return false;
		}	
	}


	public function changePass($type,$id,$password,$old,$uid){
			if ($this->db->changePass($type,$id,$password,$old,$uid)){
				return true;
			}else{
				return false;
			}	
	}
}


?>