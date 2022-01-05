<?php

session_start();
require_once 'db_functions.php';
$db = new DB_FUNCTIONS();

/*
 * Method : Post
 * Params : Name,Email,Password,Phone
 * Result : Json
 */

echo "string";
$response = array();
if ($_SESSION["Type"]==1||$_SESSION["Type"]==2){
	if(isset($_POST['Pass'])&&isset($_POST['oldPass'])){
		$userId  = $_SESSION["ID"];
		$type    = $_SESSION["Type"];
		$password =  $_POST['Pass'];
		if ($db->changePass($type,$userId,$password,$_POST['oldPass'],$_SESSION["UID"])){
			if ($_SESSION["Type"]==1){
				header('Location:H-VISA/hr.php');
			}else {
				header('Location:H-VISA/employee.php');
			}
			$response["error_msg"] = "feedback send";
			echo json_encode($response);
		}else{
			$response["error_msg"] = "error in change";
			echo json_encode($response);
		}
	
	}else{
		$response["error_msg"] = "error in topic data";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>