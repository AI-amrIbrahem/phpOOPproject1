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
	if(isset($_POST['Name'])&&isset($_POST['Email'])&&isset($_POST['Password'])&&isset($_POST['Phone'])){
		$name  	  = $_POST['Name'];
		$email    = $_POST['Email'];
		$password =  $_POST['Password'];
		$phone =  $_POST['Phone'];
		if ($db->checkUser($email)){
			$response["error_msg"] = "User already exist with ".$email;
			echo json_encode($response);
		}else{
			$user = $db->registerNewUser($name,$email,$password,$phone);
			if($user){
				$response["error_msg"] = "register success";
				echo json_encode($response);
			}else{
				$response["error_msg"] = "error in registeration";
				echo json_encode($response);
			}
		}
	}else{
		$response["error_msg"] = "error in registeration data";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>