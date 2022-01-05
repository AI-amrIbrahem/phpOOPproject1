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
if ($_SESSION["Type"]==1){
	if(isset($_POST['Statu'])){

		if ($db->checkVisa($_POST['Visaid'])){

				if($db->editStatu($_POST['Visaid'],$_POST['Statu'])){
					header('Location:H-VISA/hr.php');
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