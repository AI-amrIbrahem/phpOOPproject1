<?php
require_once 'Client.php';
require_once 'dbFunctions.php';

Class Hr extends Client{
		public $db;

	function __construct($name,$email,$password,$phone)
	{

		parent::__construct($name,$email,$password,$phone);

	}
	

	public function addVisa($em_id,$source,$destination,$start_date,$end_date,$comment){
		if ($this->db->addVisa($em_id,$source,$destination,$start_date,$end_date,$comment)){
			return true;
		}else{
			return false;
		}	
	}

	public function editVisa($hr_id,$em_id,$interview_date,$interview_statu){
		if ($this->db->editVisa($hr_id,$em_id,$interview_date,$interview_statu)){
			return true;
		}else{
			return false;
		}	
	}

	public function getVisaHR($hr_id){
		return $this->db->getVisaHR($hr_id);
	}

	public function getVisaAvaliable(){
		return $this->db->getVisaAvaliable();
	}

	public function editStatu($id,$interview_statu){
		if ($this->db->editStatu($id,$interview_statu)){
			return true;
		}else{
			return false;
		}	
	}

	public function editInerView($id,$interview_date,$hr_id){
		if ($this->db->editInerView($id,$interview_date,$hr_id)){
			return true;
		}else{
			return false;
		}	
	}


	
}


?>