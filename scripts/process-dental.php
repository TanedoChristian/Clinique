<?php


session_start();

include '../model/Nurse.php';

if(isset($_POST['submit'])){
	
	$studentId = trim($_POST['student_id']);
	$dentistId = trim($_POST['dentist_id']);
	$toothLocation = trim($_POST['tooth_location']);
	$comments = trim($_POST['comments']);
	$nurseId = trim($_SESSION['student_id']);
	
	$nurse = new Nurse;

	$nurse->setDentalInfo($studentId, $dentistId, $toothLocation, $comments);

	echo "success";

	header('location: ../view/dental-info.php');
}





?>
