<?php
require_once 'Client.php';
require_once 'dbFunctions.php';

Class Employee extends Client{
	public $city;
	public $passNum;
	public $db;

	function __construct($city,$passNum,$name,$email,$password,$phone)
	{
		$this->db= new  dbFunction();
		$this->city = $city;
		$this->passNum = $passNum;

		parent::__construct($name,$email,$password,$phone);

	}



	public function addVisa($em_id,$source,$destination,$start_date,$end_date,$comment){
		if ($this->db->addVisa($em_id,$source,$destination,$start_date,$end_date,$comment)){
			return true;
		}else{
			return false;
		}	
	}

	public function getVisaEmp($em_id){
		return $this->db->getVisaEmp($em_id);
	}
	
}


?>