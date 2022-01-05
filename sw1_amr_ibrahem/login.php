<?php 
session_start();


require_once 'db_functions.php';
$db = new DB_FUNCTIONS();

$response = array();
if(isset($_POST['Email'])&&isset($_POST['Password'])){
	$email    = $_POST['Email'];
	$password =  $_POST['Password'];
	if ($db->checkUser($email)){
		$user = $db->login($email,$password);
		if($user){
			if ($user["type"]==0||$user["type"]==1){
				$_SESSION['Name'] = $user["name"];
				$_SESSION["Email"] = $user["email"];
				$_SESSION["Password"] = $user["password"];
				$_SESSION["Phone"] = $user["phone"];
				$_SESSION["Type"] = $user["type"];
				$_SESSION["ID"] = $user["id"];
				$_SESSION["UID"] = $user["UID"];
			}elseif($user["type"]==2){
				$_SESSION['Name'] = $user["name"];
				$_SESSION["Email"] = $user["email"];
				$_SESSION["Password"] = $user["password"];
				$_SESSION["Phone"] = $user["phone"];
				$_SESSION["Passportnum"] = $user["passportnum"];
				$_SESSION["City"] = $user["city"];
				$_SESSION["Type"] = $user["type"];
				$_SESSION["ID"] = $user["id"];
				$_SESSION["UID"] = $user["UID"];
			}
			$_SESSION["LOGIN"] = "success";
			header('Location:H-VISA/index1.php');
		}else{
			$response["error_msg"] = "error in registeration";
			echo json_encode($response);
		}
	}else{
		$response["error_msg"] = "please register first ";
		echo json_encode($response);
	}
}

?>