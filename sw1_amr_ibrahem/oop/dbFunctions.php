<?php

class dbFunction {
	private $con;
	function __construct()
	{
		require_once 'dbConnect.php';
		$db = dbConnect::getInstance();
		$this->con = $db->connect();
	}


	

	public function checkUser($email){
		$stmt = $this->con->prepare("SELECT * FROM users WHERE email = ?");
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->store_result();
		echo "string";
		if ($stmt->num_rows > 0){
			$stmt->close();

			return true;
		}else{

			$stmt->close();
			return false;
		}
	}


	public function changePass($type,$id,$password,$old,$uid){
		if ($type==2){
			$stmt = $this->con->prepare("UPDATE employee SET  password = ?  WHERE id = ? ");
			$stmt->bind_param("ss",$password,$id);
			$result = $stmt->execute();
			$stmt->close();
			if ($stmt){

				$stmt = $this->con->prepare("UPDATE users SET  password = ?  WHERE id = ? ");
				$stmt->bind_param("ss",$password,$uid);
				$result = $stmt->execute();
				
				if ($stmt){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else if ($type==1){
			$stmt = $this->con->prepare("UPDATE hr SET  password = ?  WHERE id = ? ");
			$stmt->bind_param("ss",$password,$id);
			$result = $stmt->execute();
			$stmt->close();
			if ($stmt){
				$stmt = $this->con->prepare("UPDATE users SET password = ?  WHERE id = ?");
				$stmt->bind_param("ss",$password,$uid);
				$result = $stmt->execute();
				$stmt->close();
				if ($stmt){
					return true;
				}else{
					return false;
				}
			}else{
				return false;
			}
	
	}}

	//********************admin*****************

	public function addHr($name,$email,$password,$phone){
		$stmt = $this->con->prepare("INSERT INTO users(name,email,password,phone,type) VALUES (?,?,?,?,1)");
		$stmt->bind_param("ssss",$name,$email,$password,$phone);
		$result = $stmt->execute();
		$stmt->close();
		if ($result){
			$stmt = $this->con->prepare("INSERT INTO hr(name,email,password,phone) VALUES (?,?,?,?)");
			$stmt->bind_param("ssss",$name,$email,$password,$phone);
			$result = $stmt->execute();
			$stmt->close();
			if ($result){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}


	public function editHr($name,$email,$password,$phone){
		$stmt = $this->con->prepare("UPDATE hr SET name = ? , password = ? , phone = ? WHERE email = ?");
		$stmt->bind_param("ssss",$name,$password,$phone,$email);
		$result = $stmt->execute();
		$stmt->close();
		if ($stmt){
			$stmt = $this->con->prepare("UPDATE users SET name = ? , password = ? , phone = ? WHERE email = ?");
			$stmt->bind_param("ssss",$name,$password,$phone,$email);
			$result = $stmt->execute();
			$stmt->close();
			if ($stmt){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function deleteHr($email){
		$stmt = $this->con->prepare("DELETE FROM hr WHERE email = ?");
		$stmt->bind_param("s",$email);
		$result = $stmt->execute();
		$stmt->close();
		if ($result){
			$stmt = $this->con->prepare("DELETE FROM users WHERE email = ?");
			$stmt->bind_param("s",$email);
			$result = $stmt->execute();
			$stmt->close();
			if ($result){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function getHr($email){
		$stmt = $this->con->prepare("SELECT * FROM hr WHERE email = ?");
		$stmt->bind_param("s",$email);
	    $stmt->execute();
	    $user = $stmt->get_result()->fetch_assoc();
		$stmt->close();
		return $user;
	}


	public function getHrs(){
		$result = $this->con->query("SELECT * FROM hr ORDER BY id ");
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}


	//********************emp*****************

	public function addEmployee($name,$email,$password,$phone,$passportnum,$city){
		$stmt = $this->con->prepare("INSERT INTO users(name,email,password,phone,type) VALUES (?,?,?,?,2)");
		$stmt->bind_param("ssss",$name,$email,$password,$phone);
		$result = $stmt->execute();
		$stmt->close();
		if ($result){
			$stmt = $this->con->prepare("INSERT INTO employee(name,email,password,phone,city,passportnum) VALUES (?,?,?,?,?,?)");
			$stmt->bind_param("ssssss",$name,$email,$password,$phone,$city,$passportnum);
			$result = $stmt->execute();
			$stmt->close();
			if ($result){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}


	public function editEmployee($name,$email,$password,$phone,$passportnum,$city){
		$stmt = $this->con->prepare("UPDATE employee SET name = ? , password = ? , phone = ? , passportnum = ? , city = ? WHERE email = ?");
		$stmt->bind_param("ssssss",$name,$password,$phone,$passportnum,$city,$email);
		$result = $stmt->execute();
		$stmt->close();
		if ($stmt){
			$stmt = $this->con->prepare("UPDATE users SET name = ? , password = ? , phone = ? WHERE email = ?");
			$stmt->bind_param("ssss",$name,$password,$phone,$email);
			$result = $stmt->execute();
			$stmt->close();
			if ($stmt){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function deleteEmployee($email){
		$stmt = $this->con->prepare("DELETE FROM employee WHERE email = ?");
		$stmt->bind_param("s",$email);
		$result = $stmt->execute();
		$stmt->close();
		if ($result){
			$stmt = $this->con->prepare("DELETE FROM users WHERE email = ?");
			$stmt->bind_param("s",$email);
			$result = $stmt->execute();
			$stmt->close();
			if ($result){
				return true;
			}else{
				return false;
			}
		}else{
			return false;
		}
	}

	public function getEmployee($email){
		$stmt = $this->con->prepare("SELECT * FROM employee WHERE email = ?");
		$stmt->bind_param("s",$email);
	    $stmt->execute();
	    $user = $stmt->get_result()->fetch_assoc();
		$stmt->close();
		return $user;
	}

	public function getEmployees(){
		$result = $this->con->query("SELECT * FROM employee ORDER BY id ");
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}

	//********************hr*****************

	

	//*****************hr************
/*
	public function getEmployeesHr($ID){
		$result = $this->con->query("SELECT * FROM employee WHERE  = ".$ID);
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}
*/

	public function checkVisa($id){
		$stmt = $this->con->prepare("SELECT * FROM visa WHERE id = ?");
		$stmt->bind_param("s",$id);
		$stmt->execute();
		$stmt->store_result();
		if ($stmt->num_rows > 0){
			$stmt->close();
			return true;
		}else{
			$stmt->close();
			return false;
		}
	}

	public function addVisa($em_id,$source,$destination,$start_date,$end_date,$comment){
		$id = -1;
		$stmt = $this->con->prepare("INSERT INTO visa(hr_id,em_id,source,destination,start_date,end_date,comment) VALUES (?,?,?,?,?,?,?)");
		$stmt->bind_param("sssssss",$id,$em_id,$source,$destination,$start_date,$end_date,$comment);
		$result = $stmt->execute();
		$stmt->close();
		if ($result){
			return true;
		}else{
			return false;
		}
	}

	public function editVisa($hr_id,$em_id,$interview_date,$interview_statu){
		$stmt = $this->con->prepare("UPDATE visa SET interview_date = ? , interview_statu = ? hr_id = ? WHERE   em_id = ?");
		$stmt->bind_param("ssss",$interview_date,$interview_statu,$hr_id,$em_id);
		$result = $stmt->execute();
		$stmt->close();
		if ($stmt){
			return true;
		}else{
			return false;
		}
	}

	public function editStatu($id,$interview_statu){
		$stmt = $this->con->prepare("UPDATE visa SET interview_statu = ? WHERE   id = ?");
		$stmt->bind_param("ss",$interview_statu,$id);
		$result = $stmt->execute();
		$stmt->close();
		if ($stmt){
			return true;
		}else{
			return false;
		}
	}

	public function editInerView($id,$interview_date,$hr_id){
		$stmt = $this->con->prepare("UPDATE visa SET hr_id = ? ,interview_date = ? WHERE   id = ?");
		$stmt->bind_param("sss",$hr_id,$interview_date,$id);
		$result = $stmt->execute();
		$stmt->close();
		if ($stmt){
			return true;
		}else{
			return false;
		}
	}

	public function getVisaEmp($em_id){
		$result = $this->con->query("SELECT * FROM visa WHERE em_id = '".$em_id."'");
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}

	public function getVisaHR($hr_id){
		$result = $this->con->query("SELECT * FROM visa WHERE hr_id = '".$hr_id."'");
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}

	public function getVisaAvaliable(){
		$result = $this->con->query("SELECT * FROM visa WHERE hr_id = '-1'");
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}

	public function getAllVisa(){
		$result = $this->con->query("SELECT * FROM visa ");
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}

	


	

	public function getEmpl($name){
		$result = $this->con->query("SELECT * FROM employee WHERE name = '".$name."' ORDER BY id ");
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}


	public function login($email,$password){
		$stmt = $this->con->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
		$stmt->bind_param("ss",$email,$password);
		$stmt->execute();
		$user = $stmt->get_result()->fetch_assoc();
		$stmt->close();
		$id = $user['id'];
		if ($user["type"]==0){
			return $user;
		}elseif ($user["type"]==1){

			$stmt = $this->con->prepare("SELECT * FROM hr WHERE email = ? AND password = ?");
			$stmt->bind_param("ss",$email,$password);
			$stmt->execute();
			$user = $stmt->get_result()->fetch_assoc();
			$user["type"]=1;
			$user["UID"]=$id;
			$stmt->close();
			return $user;
		}elseif ($user["type"]==2) {
			$stmt = $this->con->prepare("SELECT * FROM employee WHERE email = ? AND password = ?");
			$stmt->bind_param("ss",$email,$password);
			$stmt->execute();
			$user = $stmt->get_result()->fetch_assoc();
			$user["type"]=2;
			$user["UID"]=$id;
			$stmt->close();
			return $user;
		}
	}









	public function addFeedback($userId,$type,$topic){
		$stmt = $this->con->prepare("INSERT INTO feedback(user_id,type,topic) VALUES (?,?,?)");
		$stmt->bind_param("sss",$userId,$type,$topic);
		$result = $stmt->execute();
		$stmt->close();
		if ($result){
			return true;
		}else{
			return false;
		}
	}

	public function getAllFeedback(){
		$result = $this->con->query("SELECT * FROM feedback ");
		$users = array();
		while($user = $result->fetch_assoc()){
			$users[] = $user;
		}
		return $users;
	}


}

?>