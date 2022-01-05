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

				$user = $db->getEmployee($_POST['Email']);
				if($user){

					$name = $user["name"];
					$email = $user["email"];
					$password = $user["password"];
					$phone = $user["phone"];
					$passportnum = $user["passportnum"];
					$city = $user["city"];

					if(isset($_POST['Name'])){
						$name = $_POST['Name'];
					}
					if(isset($_POST['Password'])){
						$password = $_POST['Password'];
					}
					if(isset($_POST['Phone'])){
						$phone = $_POST['Phone'];
					}
					if(isset($_POST['Passportnum'])){
						$passportnum = $_POST['Passportnum'];
					}
					if(isset($_POST['City'])){
						$city = $_POST['City'];
					}


					if($db->editEmployee($name,$email,$password,$phone,$passportnum,$city)){
						header('Location:H-VISA/admin.php');
							$response["error_msg"] = "edit success";
							echo json_encode($response);
					}else{
							$response["error_msg"] = "edit faliled";
							echo json_encode($response);
					}
					
				}else{
					$response["error_msg"] = "check email";
					echo json_encode($response);
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