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
	if(isset($_POST['EMID'])){
			echo "1";

		if ($db->checkVisa($_POST['EMID'])){
				echo "1";

				$visa = $db->getVisa($_POST['EMID']);
				if($visa){
					echo json_encode($visa);
					$interview_date = $visa["interview_date"];
					$interview_statu = $visa["interview_statu"];
					$hr_id = $visa["hr_id"];;
					$em_id = $visa["em_id"];;

					if ($em_id==$_SESSION["ID"]){
						if(isset($_POST['InterviewDate'])){
						$interview_date = $_POST['InterviewDate'];
						}
						if(isset($_POST['InterviewStatu'])){
							$interview_statu = $_POST['InterviewStatu'];
						}
						
							if($db->editVisa($hr_id,$em_id,$interview_date,$interview_statu)){
								$response["error_msg"] = "edit success";
								echo json_encode($response);
							}else{
								$response["error_msg"] = "edit faliled";
								echo json_encode($response);
							}
					}else {
						$response["error_msg"] = "you dont have permission to do that";
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