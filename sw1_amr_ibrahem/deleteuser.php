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
		$email = $_POST['Email'];
		if ($db->deleteUser($email)){
			$response["error_msg"] = "delete success";
			echo json_encode($response);
		}else{
			$response["error_msg"] = "delete failed";
			echo json_encode($response);
		}
	}else{
		$response["error_msg"] = "error in type ";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>