<?php
session_start();

include '../model/Nurse.php';

if(isset($_POST['submit'])){
	
	$studentId = trim($_POST['student_id']);
	$parentsConsent = trim($_POST['parents_consent']);
	$remarks = trim($_POST['remarks']);
	$nurseId = trim($_SESSION['student_id']);
	
	$nurse = new Nurse;

	$nurse->setDewormInfo($studentId, $nurseId, $parentsConsent, $remarks);

	echo "success";

	header('location: ../view/deworm.php');









}







?>
