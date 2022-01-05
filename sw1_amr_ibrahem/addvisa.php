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
if ($_SESSION["Type"]==2){
	if(isset($_POST['Source'])&&isset($_POST['Destination'])&&isset($_POST['StartDate'])&&isset($_POST['Comment'])&&isset($_POST['ENDDate'])){
		
		$em_id    = $_SESSION["ID"];
		$source =  $_POST['Source'];
		$destination =  $_POST['Destination'];
		$startDate =  $_POST['StartDate'];
		$endDate =  $_POST['ENDDate'];
		$comment =  $_POST['Comment'];

			$visa = $db->addVisa($em_id,$source,$destination,$startDate,$endDate,$comment);
			if($visa){
				header('Location:H-VISA/employee.php');
			}else{
				$response["error_msg"] = "error in add";
				echo json_encode($response);
			}
		
		

	}else{
		$response["error_msg"] = "error in add data";
		echo json_encode($response);
	}
}else {
	$response["error_msg"] = "you dont have permission to do that";
	echo json_encode($response);
}



?>