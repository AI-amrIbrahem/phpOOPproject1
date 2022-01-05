<?php
require_once 'User.php';
require_once 'dbFunctions.php';

Class Admin extends User{
	public $db;
	function __construct($name,$email,$password,$phone)
	{
		$this->db= new  dbFunction();
		parent::__construct($name,$email,$password,$phone);

	}

	public function addHr($name,$email,$password,$phone){

		if ($this->db->addHr($name,$email,$password,$phone)){
			return true;
		}else{
			return false;
		}	
	}

	public function editHr($name,$email,$password,$phone){

		if ($this->db->editHr($name,$email,$password,$phone)){
			return true;
		}else{
			return false;
		}	
	}

	public function deleteHr($email){
		if ($this->db->deleteHr($email)){
			return true;
		}else{
			return false;
		}	
	}	

	public function getHr($email){
		return $this->db->getHr($email);
		
	}	

	public function getHrs(){
		return $this->db->getHrs();
		
	}	


	//***************************************************

		public function addEmployee($name,$email,$password,$phone,$passportnum,$city){
	
		if ($this->db->addEmployee($name,$email,$password,$phone,$passportnum,$city)){
			return true;
		}else{
			return false;
		}	
	}

	public function editEmployee($name,$email,$password,$phone,$passportnum,$city){

		if ($this->db->editEmployee($name,$email,$password,$phone,$passportnum,$city)){
			return true;
		}else{
			return false;
		}	
	}

	public function deleteEmployee($email){
		if ($this->db->deleteEmployee($email)){
			return true;
		}else{
			return false;
		}	
	}	

	public function getEmployee($email){
		return $this->db->getEmployee($email);
	
	}	

	public function getEmployees(){
		return $this->db->getEmployees();
	
	}	

	//***************************

	public function getAllFeedback(){
		return $this->db->getAllFeedback();
	}

	public function getAllVisa(){
		return $this->db->getAllVisa();
	}

	//****************************
	public function searchEmp($name){
		return $this->db->getEmpl($name);
	}

}


?>