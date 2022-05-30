<?php




session_start();

include '../model/Nurse.php';

if(isset($_POST['submit'])){
	
	$studentId = trim($_POST['student_id']);
	$height = trim($_POST['height']);
	$Weight = trim($_POST['weight']);
	$bp = trim($_POST['blood_pressure']);
	$temp = trim($_POST['temp']);
	$hr = trim($_POST['heart_rate']);

	$nurseId = trim($_SESSION['student_id']);
	
	$nurse = new Nurse;

	$nurse->setMedical($studentId, $nurseId, $Weight, $height, $bp, $temp, $hr);

	echo "success";

	header('location: ../view/medical-info.php');

}














?>
