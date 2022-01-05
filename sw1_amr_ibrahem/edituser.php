<?php

session_start();
require_once 'db_functions.php';
$db = new DB_FUNCTIONS();

/*
 * Method : Post
 * Params : Name,Email,Password,Phone
 * Result : Json
 */

$response = array();
if ($_SESSION["Type"]==0){
	if(isset($_POST['Email'])){
		if ($db->checkUser($_POST['Email'])){
			if (isset($_POST['Email'])){
				$user = $db->getUser($_POST['Email']);
				if($user){
					$name = $user["name"];
					$email = $user["email"];
					$password = $user["password"];
					$phone = $user["phone"];

					$newName = "";
					$newPass = "";
					$newPhone = "";

					if(isset($_POST['Name'])){
						$newName = $_POST['Name'];
					}
					if(isset($_POST['Password'])){
						$newPass = $_POST['Password'];
					}
					if(isset($_POST['Password'])){
						$newPhone = $_POST['Phone'];
					}

					if($newName!=""&&$newPass!=""&&$newPhone!=""){
						$db->editUser($newName,$_POST['Email'],$newPass,$newPhone);
					}

					else if($newName==""&&$newPass!=""&&$newPhone!=""){
						$db->editUser($name,$_POST['Email'],$newPass,$newPhone);
					}

					else if($newName!=""&&$newPass==""&&$newPhone!=""){
						$db->editUser($newName,$_POST['Email'],$password,$newPhone);
					}

					else if($newName!=""&&$newPass!=""&&$newPhone==""){
						$db->editUser($newName,$_POST['Email'],$newPass,$phone);
					}

					else if($newName==""&&$newPass==""&&$newPhone!=""){
						$db->editUser($name,$_POST['Email'],$password,$newPhone);
					}

					else if($newName!=""&&$newPass==""&&$newPhone==""){
						$db->editUser($newName,$_POST['Email'],$password,$phone);
					}

					else if($newName==""&&$newPass!=""&&$newPhone==""){
						$db->editUser($name,$_POST['Email'],$newPass,$phone);
					}

				}
			}
		}else{
			$response["error_msg"] = "this user dont exist";
			echo json_encode($response);
		}
	}else{
		$response["error_msg"] = "check email ";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>