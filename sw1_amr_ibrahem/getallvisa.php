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
		$users = $db->getAllVisa();
		echo json_encode($users);
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}


?>