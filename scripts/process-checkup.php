<?php

session_start();

include '../model/Nurse.php';

if(isset($_POST['submit'])){
	
	$studentId = trim($_POST['student_id']);
	$symptoms = trim($_POST['symptoms']);
	$illness = trim($_POST['illness']);
	$prescription = trim($_POST['prescription']);
	$nurseId = trim($_SESSION['student_id']);
	
	$nurse = new Nurse;

	$nurse->setCheckUpInfo($studentId, $nurseId, $symptoms, $illness, $prescription);

	echo "success";

	header('location: ../view/checkup-result.php');
}
else {
}





?>
