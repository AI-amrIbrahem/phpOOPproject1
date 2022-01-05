<?php 

require_once 'Admin.php';
require_once 'Employee.php';
require_once 'dbFunctions.php';
require_once 'dbConnect.php';
require_once 'Feedback.php';


$na = new Client(1,2,3,4);
$feedback = new Feedback("axa","aca",1);
$na->addFeedback($feedback);

/*
	$na = new dbFunctions();
	$na->checkUser("a");
	*/